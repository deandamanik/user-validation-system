<x-guest-layout>
    <div class="h-full flex flex-col justify-center">
        <div class="mb-8">
            <div class="flex items-center gap-3 mb-4">
                <div class="p-2 bg-indigo-50 rounded-lg text-indigo-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight leading-none">
                    Security Check
                </h2>
            </div>
            <p class="text-slate-500 text-sm leading-relaxed max-w-xs">
                This is a secure area. Please confirm your password before we continue.
            </p>
        </div>

        <form method="POST" action="{{ route('password.confirm') }}" class="space-y-6">
            @csrf

            <div class="space-y-1.5">
                <label for="password" class="block text-xs font-bold text-slate-700 uppercase tracking-wider ml-1">
                    Password
                </label>
                <x-text-input-auth id="password" 
                    class="block w-full px-4 py-3.5 rounded-xl border-slate-200 bg-slate-50/50 focus:bg-white focus:border-indigo-600 focus:ring-4 focus:ring-indigo-600/5 transition-all duration-200 placeholder:text-slate-300 text-sm"
                    type="password"
                    name="password"
                    placeholder="••••••••"
                    required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-xs" />
            </div>

            <div class="pt-2">
                <button type="submit" class="w-full flex justify-center items-center py-4 px-4 rounded-xl shadow-lg shadow-slate-200 text-sm font-bold text-white bg-slate-900 hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slate-900 transition-all duration-200 active:scale-[0.98]">
                    Confirm Identity
                </button>
            </div>

            <div class="mt-8 text-center">
                <a href="{{ url()->previous() }}" class="text-xs font-bold text-slate-400 hover:text-slate-600 transition-colors">
                    Nevermind, take me back
                </a>
            </div>
        </form>
    </div>
</x-guest-layout>