<x-guest-layout>
    <div class="h-full flex flex-col justify-center">
        <div class="mb-6">
            <div class="flex items-center gap-3 mb-4">
                <a href="{{ route('login') }}" class="p-2 -ml-2 rounded-full text-slate-400 hover:text-slate-900 hover:bg-slate-100 transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                </a>
                <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight leading-none">
                    Reset Password
                </h2>
            </div>
            <p class="text-slate-500 text-sm leading-relaxed max-w-xs">
                Enter your email address and we'll send you a link to reset your password.
            </p>
        </div>

        <x-auth-session-status class="mb-6" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
            @csrf

            <div class="space-y-1">
                <label for="email" class="block text-xs font-bold text-slate-700 uppercase tracking-wider ml-1">
                    Email Address
                </label>
                <x-text-input id="email" 
                    class="block w-full px-4 py-3 rounded-xl border-slate-200 bg-slate-50/50 focus:bg-white focus:ring-4 focus:ring-indigo-600/5 transition-all duration-200 placeholder:text-slate-300 text-sm" 
                    type="email" 
                    name="email" 
                    :value="old('email')" 
                    placeholder="user1@example.com"
                    required />
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs" />
            </div>

            <div class="pt-2">
                <button type="submit" class="w-full flex justify-center items-center py-3.5 px-4 rounded-xl shadow-lg shadow-slate-200 text-sm font-bold text-white bg-slate-900 hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slate-900 transition-all duration-200 active:scale-[0.98]">
                    Send Reset Link
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>