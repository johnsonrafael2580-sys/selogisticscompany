<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | SE Global</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Montserrat:wght@700;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background: #003366; }
        h2 { font-family: 'Montserrat', sans-serif; }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 relative overflow-hidden">
    <div class="w-full max-w-md bg-white/10 backdrop-blur-md border border-white/20 p-6 rounded-3xl shadow-2xl relative z-10">
        <a href="{{ route('home') }}" class="inline-flex items-center text-gray-400 hover:text-green-500 text-[10px] font-bold mb-4">
            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            BACK
        </a>

        <div class="text-center mb-6">
            <h2 class="text-white text-lg font-black uppercase tracking-tight italic">Join <span class="text-green-500">SE Global</span></h2>
        </div>

        <form action="{{ route('register') }}" method="POST" class="grid grid-cols-1 gap-3">
            @csrf
            <div>
                <label class="block text-[10px] font-bold text-green-500 uppercase mb-1 ml-1">Full Name</label>
                <input type="text" name="name" required class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2 text-sm text-white focus:outline-none focus:border-green-500">
            </div>

            <div>
                <label class="block text-[10px] font-bold text-green-500 uppercase mb-1 ml-1">Email</label>
                <input type="email" name="email" required class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2 text-sm text-white focus:outline-none focus:border-green-500">
            </div>

            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label class="block text-[10px] font-bold text-green-500 uppercase mb-1 ml-1">Password</label>
                    <input type="password" name="password" required class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2 text-sm text-white focus:outline-none focus:border-green-500">
                </div>
                <div>
                    <label class="block text-[10px] font-bold text-green-500 uppercase mb-1 ml-1">Confirm</label>
                    <input type="password" name="password_confirmation" required class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2 text-sm text-white focus:outline-none focus:border-green-500">
                </div>
            </div>

            <button type="submit" class="w-full bg-green-500 hover:bg-white text-navy font-black py-3 rounded-xl transition-all uppercase text-[11px] tracking-widest mt-2">
                Create Account
            </button>
        </form>

        <div class="mt-6 text-center border-t border-white/10 pt-4">
            <p class="text-gray-400 text-[11px]">Already registered? <a href="{{ route('login') }}" class="text-green-500 font-bold hover:underline">SIGN IN</a></p>
        </div>
    </div>
</body>
</html>