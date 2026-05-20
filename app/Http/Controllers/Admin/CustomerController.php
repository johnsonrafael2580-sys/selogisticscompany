<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\DB;  

class CustomerController extends Controller
{
    /**
     * Inaonyesha orodha ya wateja wote pamoja na idadi ya mizigo yao.
     */
    public function index()
    {
        $customers = Customer::withCount('shipments')->get();
        return view('admin.customers.index', compact('customers'));
    }

    /**
     * Inafungua fomu ya kusajili mteja mpya.
     */
    public function create()
    {
        return view('admin.customers.create');
    }

    /**
     * Inahifadhi User (Account ya Login) na Customer (Wasifu) kwa pamoja.
     * Inatumia namba ya simu kama password ya awali na kumlazimu kuibadili.
     */
    public function store(Request $request)
    {
        // 1. Validating data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|unique:customers,email',
            'phone' => 'required|string|max:20|unique:customers,phone',
            'address' => 'nullable|string',
        ]);

        try {
            DB::beginTransaction();

            // 2. Tengeneza Login Account kwenye table ya 'users'
            // Password inakuwa namba ya simu, na lazima abadili akilogin
            $user = User::create([
                'name'                 => $validated['name'],
                'email'                => $validated['email'],
                'password'             => Hash::make($validated['phone']), 
                'role'                 => 'user',
                'must_change_password' => 1, // Hapa ndipo tunamtega kubadili password
            ]);

            // 3. Tengeneza Profile kwenye table ya 'customers'
            Customer::create([
                'user_id' => $user->id, 
                'name'    => $validated['name'],
                'email'   => $validated['email'],
                'phone'   => $validated['phone'],
                'address' => $validated['address'],
            ]);

            DB::commit();

            return redirect()->route('admin.customers.index')
                             ->with('success', 'Mteja amesajiliwa! Password yake ni: ' . $validated['phone'] . '. Atatakiwa kuibadili akilogin.');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()
                             ->with('error', 'Imeshindikana kusajili: ' . $e->getMessage())
                             ->withInput();
        }
    }

    /**
     * Inaonyesha taarifa za mteja mmoja mmoja na mizigo yake.
     */
    public function show(Customer $customer)
    {
        $customer->load('shipments');
        return view('admin.customers.show', compact('customer'));
    }

    /**
     * Inafungua fomu ya kuhariri taarifa za mteja.
     */
    public function edit(Customer $customer)
    {
        return view('admin.customers.edit', compact('customer'));
    }

    /**
     * Inasasisha taarifa za mteja kwenye profile na login account.
     */
    public function update(Request $request, Customer $customer)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email,' . $customer->id,
            'phone' => 'required|string|max:20|unique:customers,phone,' . $customer->id,
            'address' => 'nullable|string',
        ]);

        try {
            DB::beginTransaction();

            // Sasisha Profile
            $customer->update($validated);

            // Sasisha Login Account kama ipo
            if ($customer->user_id) {
                User::where('id', $customer->user_id)->update([
                    'name' => $validated['name'],
                    'email' => $validated['email']
                ]);
            }

            DB::commit();
            return redirect()->route('admin.customers.index')
                             ->with('success', 'Taarifa za mteja zimesasishwa!');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Imeshindikana kusasisha.');
        }
    }

    /**
     * Inafuta mteja na account yake ya login.
     */
    public function destroy(Customer $customer)
    {
        try {
            DB::beginTransaction();

            if ($customer->user_id) {
                User::where('id', $customer->user_id)->delete();
            }
            
            $customer->delete();

            DB::commit();
            return redirect()->route('admin.customers.index')
                             ->with('success', 'Mteja na account yake wamefutwa!');
                             
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.customers.index')
                             ->with('error', 'Hitilafu imetokea wakati wa kufuta.');
        }
    }
}