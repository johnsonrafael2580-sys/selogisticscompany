<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Customer; 
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB; 

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        try {
            // Tunatumia Transaction kuhakikisha zote mbili (User & Customer) zinafanikiwa
            return DB::transaction(function () use ($request) {
                
                // 1. Tengeneza Login Account (User)
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'role' => 'user', 
                ]);

                // 2. Tengeneza Profile ya Mteja (Customer)
                // Hii itaunganisha 'user_id' ya table ya users na 'user_id' ya table ya customers
                Customer::create([
                    'user_id' => $user->id,
                    'name'    => $user->name,
                    'email'   => $user->email,
                    // phone na address zitakuwa empty mpaka user akamilishe profile yake
                ]);

                event(new Registered($user));

                Auth::login($user);

                // Elekeza mteja kwenye ukurasa wa mizigo yake (Shipments)
                return redirect()->route('shipments.index');
            });

        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Imeshindikana kukamilisha usajili. Tafadhali jaribu tena.')
                ->withInput();
        }
    }
}