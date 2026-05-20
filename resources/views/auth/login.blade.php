<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SE Global</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Montserrat:wght@700;900&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Inter', sans-serif; 
            background: radial-gradient(circle at top right, #004080, #001a33); 
            background-attachment: fixed;
        }
        h2 { font-family: 'Montserrat', sans-serif; }
        .glass-card { 
            background: rgba(255, 255, 255, 0.08); 
            backdrop-filter: blur(12px); 
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1); 
        }
        /* Prevents zoom on focus for iOS devices */
        @media screen and (max-width: 768px) {
            input { font-size: 16px !important; }
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 sm:p-6 relative overflow-x-hidden">
    
    <!-- Floating Decorative Background Elements -->
    <div class="absolute top-10 left-10 w-32 h-32 bg-green-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-10 right-10 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl"></div>

    <!-- Main Container: Fully responsive width -->
    <div class="w-full max-w-md glass-card p-6 sm:p-8 rounded-[2rem] shadow-2xl relative z-10 transition-all">
        
        <!-- Back Navigation -->
        <a href="{{ route('home') }}" class="inline-flex items-center text-gray-400 hover:text-green-400 text-[10px] font-bold mb-6 transition group">
            <svg class="w-4 h-4 mr-2 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            BACK TO HOMEPAGE
        </a>

        <!-- Header Section -->
        <div class="mb-8 text-center">
            <h2 class="text-white text-2xl sm:text-3xl font-black uppercase tracking-tight">Welcome <span class="text-green-500">Back!</span></h2>
            <p class="text-gray-400 text-xs mt-2">Log in to track your shipments and manage your deliveries.</p>
        </div>

        <!-- Helpful Guide for Beginners -->
        <div class="bg-blue-500/10 border border-blue-500/20 rounded-2xl p-4 mb-6">
            <div class="flex items-start space-x-3">
                <svg class="w-5 h-5 text-blue-400 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                </svg>
                <p class="text-[11px] text-blue-200 leading-relaxed">
                    Use the email address you registered with. Kama wewe ni mteja mpya, tafadhali tengeneza akaunti kwanza.
                </p>
            </div>
        </div>

        <!-- Login Form -->
        <form action="{{ route('login') }}" method="POST" class="space-y-5">
            @csrf
            
            <!-- Email Field -->
            <div class="relative group">
                <label class="block text-[10px] font-bold text-green-500 uppercase mb-2 ml-1 tracking-widest">Registered Email</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-500 group-focus-within:text-green-500 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.206"></path></svg>
                    </span>
                    <input type="email" name="email" placeholder="example@email.com" required 
                        class="w-full bg-white/5 border border-white/10 rounded-2xl pl-11 pr-4 py-3.5 text-sm text-white focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 transition-all placeholder:text-gray-600">
                </div>
            </div>

            <!-- Password Field -->
            <div class="relative group">
                <div class="flex justify-between items-center mb-2 ml-1">
                    <label class="block text-[10px] font-bold text-green-500 uppercase tracking-widest">Secure Password</label>
                    <a href="#" class="text-[9px] font-bold text-gray-500 hover:text-white uppercase">Forgot?</a>
                </div>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-500 group-focus-within:text-green-500 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    </span>
                    <input type="password" name="password" id="passwordField" placeholder="••••••••" required 
                        class="w-full bg-white/5 border border-white/10 rounded-2xl pl-11 pr-12 py-3.5 text-sm text-white focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 transition-all placeholder:text-gray-600">
                    
                    <!-- Interactive Toggle Button Inside Input -->
                    <button type="button" onclick="togglePassword()" id="toggleButton" class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-500 hover:text-green-500 transition-colors focus:outline-none">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-green-500 hover:bg-white text-[#001a33] font-black py-4 rounded-2xl transition-all shadow-lg shadow-green-500/20 uppercase text-xs tracking-widest mt-4 group">
                <span class="flex items-center justify-center">
                    Secure Sign In
                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </span>
            </button>
        </form>

        <!-- Footer / Registration Link -->
        <div class="mt-8 text-center border-t border-white/5 pt-6">
            <p class="text-gray-400 text-xs">
                Don't have an account? 
                <a href="{{ route('register') }}" class="text-green-500 font-black hover:text-white transition ml-1 uppercase">Get Started</a>
            </p>
        </div>
    </div>

    <!-- Improved Password Toggle Script -->
    <script>
        function togglePassword() {
            const passwordField = document.getElementById('passwordField');
            const toggleButton = document.getElementById('toggleButton');
            
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                // Weka icon ya jicho lililofungwa
                toggleButton.innerHTML = `
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l18 18"></path>
                    </svg>`;
            } else {
                passwordField.type = 'password';
                // Weka icon ya jicho la kawaida
                toggleButton.innerHTML = `
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>`;
            }
        }
    </script>
</body>
</html>