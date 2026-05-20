@extends('layouts.app')

@section('content')
<style>
    .bg-se-gradient {
        background: linear-gradient(135deg, #003366 0%, #0056b3 100%);
    }
    .form-input-focus:focus {
        border-color: #22C55E;
        box-shadow: 0 0 0 4px rgba(34, 197, 94, 0.1);
        outline: none;
    }
    .custom-card {
        border-radius: 2rem;
        background: #ffffff;
        box-shadow: 0 20px 50px -12px rgba(0, 0, 0, 0.08);
    }
</style>

<div class="min-h-screen bg-[#f8fafc] pb-12">
    <!-- Header Section -->
    <div class="bg-se-gradient text-white pb-32 pt-12 shadow-lg">
        <div class="container mx-auto px-6">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <div class="bg-white/10 p-3 rounded-2xl backdrop-blur-md">
                        <svg class="w-8 h-8 text-[#22C55E]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-3xl font-black tracking-tight uppercase">Register New Customer</h2>
                        <p class="text-blue-100/70 text-sm font-medium">Add a new client to the SE Global Logistics database</p>
                    </div>
                </div>
                
                <a href="{{ route('admin.customers.index') }}" class="hidden md:flex items-center space-x-2 bg-white/10 hover:bg-white/20 px-5 py-2.5 rounded-xl transition-all border border-white/20 font-bold text-xs uppercase tracking-widest">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    <span>View All Customers</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Form Section -->
    <div class="container mx-auto px-6 -mt-20">
        <div class="max-w-4xl mx-auto">
            
            <!-- Alert Status Messages -->
            @if(session('success'))
                <div class="mb-6 p-4 bg-emerald-50 border-l-4 border-emerald-500 rounded-r-xl flex items-center shadow-sm animate-bounce">
                    <svg class="w-5 h-5 text-emerald-500 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-emerald-800 font-bold text-sm">{{ session('success') }}</span>
                </div>
            @endif

            @if($errors->any())
                <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 rounded-r-xl shadow-sm">
                    <div class="flex items-center mb-2">
                        <svg class="w-5 h-5 text-red-500 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                        <span class="text-red-800 font-black text-xs uppercase tracking-widest">Registration Failed</span>
                    </div>
                    <ul class="list-disc list-inside text-red-700 text-sm ml-8">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="custom-card overflow-hidden">
                <div class="p-8 md:p-12">
                    <!-- Hakikisha route ni admin.customers.store -->
                    <form action="{{ route('admin.customers.store') }}" method="POST">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            
                            <!-- Full Name -->
                            <div class="md:col-span-2">
                                <label class="block text-[11px] font-black text-slate-400 uppercase tracking-[0.2em] mb-2 ml-1">Customer Full Name</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                    </span>
                                    <input type="text" name="name" value="{{ old('name') }}" required
                                        class="w-full pl-12 pr-4 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-sm font-bold text-[#003366] form-input-focus transition-all" 
                                        placeholder="Enter full legal name">
                                </div>
                            </div>

                            <!-- Email Address -->
                            <div>
                                <label class="block text-[11px] font-black text-slate-400 uppercase tracking-[0.2em] mb-2 ml-1">Email Address</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    </span>
                                    <input type="email" name="email" value="{{ old('email') }}" required
                                        class="w-full pl-12 pr-4 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-sm font-bold text-[#003366] form-input-focus transition-all" 
                                        placeholder="email@example.com">
                                </div>
                            </div>

                            <!-- Phone Number -->
                            <div>
                                <label class="block text-[11px] font-black text-slate-400 uppercase tracking-[0.2em] mb-2 ml-1">Phone Number</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    </span>
                                    <input type="text" name="phone" value="{{ old('phone') }}" required
                                        class="w-full pl-12 pr-4 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-sm font-bold text-[#003366] form-input-focus transition-all" 
                                        placeholder="+255 ...">
                                </div>
                            </div>

                            <!-- Physical Address -->
                            <div class="md:col-span-2">
                                <label class="block text-[11px] font-black text-slate-400 uppercase tracking-[0.2em] mb-2 ml-1">Home/Office Address</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    </span>
                                    <input type="text" name="address" value="{{ old('address') }}"
                                        class="w-full pl-12 pr-4 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-sm font-bold text-[#003366] form-input-focus transition-all" 
                                        placeholder="City, Street, Building No.">
                                </div>
                            </div>

                        </div>

                        <!-- Action Buttons -->
                        <div class="mt-12 pt-8 border-t border-slate-50 flex flex-col md:flex-row justify-between items-center gap-4">
                            <a href="{{ route('admin.customers.index') }}" class="text-slate-400 hover:text-slate-600 font-bold text-xs uppercase tracking-widest transition-colors">
                                Cancel & Return
                            </a>
                            
                            <div class="flex space-x-4 w-full md:w-auto">
                                <button type="submit" class="w-full md:w-auto group relative inline-flex items-center justify-center">
                                    <div class="absolute -inset-1 bg-[#22C55E] rounded-xl blur opacity-25 group-hover:opacity-40 transition duration-300"></div>
                                    <div class="relative bg-[#22C55E] text-white px-10 py-4 rounded-xl font-black text-xs uppercase tracking-widest shadow-xl shadow-emerald-500/20 hover:scale-[1.02] transition-all active:scale-95 flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                        Register Customer
                                    </div>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Footer Copy -->
            <div class="mt-8 text-center">
                <p class="text-slate-400 text-[10px] font-black uppercase tracking-[0.3em]">
                    &copy; {{ date('Y') }} SE Logistics Company Ltd • Customer CRM Module
                </p>
            </div>
        </div>
    </div>
</div>
@endsection