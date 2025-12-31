<x-guest-layout>
    <div class="h-full flex flex-col justify-center">
        <div class="mb-8">
            <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight leading-none">
                Welcome back
            </h2>
            <p class="text-slate-500 mt-2 text-sm">
                Enter your details to manage your account.
            </p>
        </div>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <div class="space-y-1">
                <label for="email" class="block text-xs font-bold text-slate-700 uppercase tracking-wider ml-1">
                    Email Address
                </label>
                <x-text-input-auth id="email" 
                    type="email" 
                    name="email" 
                    :value="old('email')" 
                    placeholder="user1@example.com"
                    required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs" />
            </div>

            <div class="space-y-1">
                <label for="password" class="block text-xs font-bold text-slate-700 uppercase tracking-wider ml-1">
                    Password
                </label>
                <x-text-input-auth id="password" 
                    type="password"
                    name="password"
                    placeholder="••••••••"
                    required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs" />
            </div>

            <div class="flex items-center justify-between pt-1">
                <label for="remember_me" class="inline-flex items-center cursor-pointer group">
                    <input id="remember_me" type="checkbox" class="w-4 h-4 rounded border-slate-300 text-indigo-600 shadow-sm focus:ring-indigo-500/20 transition-all cursor-pointer" name="remember">
                    <span class="ms-2 text-xs font-medium text-slate-500 group-hover:text-slate-800 transition-colors">
                        Stay signed in
                    </span>
                </label>

                @if (Route::has('password.request'))
                    <a class="text-xs font-bold text-indigo-600 hover:text-indigo-700 transition-colors tracking-tight" href="{{ route('password.request') }}">
                        Forgot password?
                    </a>
                @endif
            </div>

            <div class="pt-2">
                <button type="submit" class="w-full flex justify-center items-center py-3.5 px-4 rounded-xl shadow-lg shadow-slate-200 text-sm font-bold text-white bg-slate-900 hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slate-900 transition-all duration-200 active:scale-[0.98]">
                    Sign in to System
                </button>
            </div>

            <div class="mt-6 text-center">
                <p class="text-xs text-slate-400 font-medium">
                    New to our platform? 
                    <a href="{{ route('register') }}" class="font-bold text-indigo-600 hover:underline">
                        Create account
                    </a>
                </p>
            </div>
        </form>
    </div>
</x-guest-layout>