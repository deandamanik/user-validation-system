<x-guest-layout>
    <div class="h-full flex flex-col justify-center">
        <div class="mb-8">
            <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight leading-none">
                Create account
            </h2>
            <p class="text-slate-500 mt-2 text-sm">
                Fill in your details to get started.
            </p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <div class="space-y-1">
                <label for="name" class="block text-xs font-bold text-slate-700 uppercase tracking-wider ml-1">
                    Full Name
                </label>
                <x-text-input id="name" 
                    class="block w-full px-4 py-3 rounded-xl border-slate-200 bg-slate-50/50 focus:bg-white focus:ring-4 focus:ring-indigo-600/5 transition-all placeholder:text-slate-300 text-sm" 
                    type="text" name="name" :value="old('name')" placeholder="e.g. John Doe" required/>
                <x-input-error :messages="$errors->get('name')" class="mt-1 text-xs" />
            </div>

            <div class="space-y-1">
                <label for="email" class="block text-xs font-bold text-slate-700 uppercase tracking-wider ml-1">
                    Email Address
                </label>
                <x-text-input id="email" 
                    class="block w-full px-4 py-3 rounded-xl border-slate-200 bg-slate-50/50 focus:bg-white focus:ring-4 focus:ring-indigo-600/5 transition-all placeholder:text-slate-300 text-sm" 
                    type="email" name="email" :value="old('email')" placeholder="user1@example.com" required />
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs" />
            </div>

            <div class="grid grid-cols-2 gap-3">
                <div class="space-y-1">
                    <label for="password" class="block text-xs font-bold text-slate-700 uppercase tracking-wider ml-1">
                        Password
                    </label>
                    <x-text-input-auth id="password" 
                        class="block w-full px-4 py-3 rounded-xl border-slate-200 bg-slate-50/50 focus:bg-white focus:ring-4 focus:ring-indigo-600/5 transition-all text-sm" 
                        type="password" name="password" placeholder="••••••••" required />
                </div>
                <div class="space-y-1">
                    <label for="password_confirmation" class="block text-xs font-bold text-slate-700 uppercase tracking-wider ml-1">
                        Confirm
                    </label>
                    <x-text-input-auth id="password_confirmation" 
                        class="block w-full px-4 py-3 rounded-xl border-slate-200 bg-slate-50/50 focus:bg-white focus:ring-4 focus:ring-indigo-600/5 transition-all text-sm" 
                        type="password" name="password_confirmation" placeholder="••••••••" required />
                </div>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-xs" />

            <div class="pt-2">
                <button type="submit" class="w-full flex justify-center items-center py-4 px-4 border border-transparent rounded-xl shadow-lg shadow-slate-200 text-sm font-bold text-white bg-slate-900 hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slate-900 transition-all duration-200 active:scale-[0.98]">
                    Create Account
                </button>
            </div>

            <p class="text-center text-xs text-slate-400 mt-6 font-medium">
                Already have an account? 
                <a href="{{ route('login') }}" class="text-indigo-600 hover:underline font-bold">Sign in</a>
            </p>
        </form>
    </div>
</x-guest-layout>