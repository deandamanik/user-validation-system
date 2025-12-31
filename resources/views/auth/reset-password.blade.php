<x-guest-layout>
    <div class="h-full flex flex-col justify-center">
        <div class="mb-8">
            <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight leading-none">
                Set new password
            </h2>
            <p class="text-slate-500 mt-3 text-sm leading-relaxed">
                Almost there! Create a strong password to secure your account and regain access.
            </p>
        </div>

        <form method="POST" action="{{ route('password.store') }}" class="space-y-4">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="space-y-1">
                <label for="email" class="block text-xs font-bold text-slate-700 uppercase tracking-wider ml-1">
                    Email Address
                </label>
                <x-text-input id="email" 
                    class="block w-full px-4 py-3 rounded-xl border-slate-200 bg-slate-50/50 focus:bg-white focus:ring-4 focus:ring-indigo-600/5 transition-all duration-200 text-sm text-slate-500" 
                    type="email" name="email" :value="old('email', $request->email)" readonly
                    required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs" />
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="space-y-1">
                    <label for="password" class="block text-xs font-bold text-slate-700 uppercase tracking-wider ml-1">
                        New Password
                    </label>
                    <x-text-input-auth id="password" 
                        class="block w-full px-4 py-3 rounded-xl border-slate-200 bg-slate-50/50 focus:bg-white focus:ring-4 focus:ring-indigo-600/5 transition-all text-sm" 
                        type="password" name="password" placeholder="••••••••" required autocomplete="new-password" />
                </div>
                <div class="space-y-1">
                    <label for="password_confirmation" class="block text-xs font-bold text-slate-700 uppercase tracking-wider ml-1">
                        Confirm
                    </label>
                    <x-text-input-auth id="password_confirmation" 
                        class="block w-full px-4 py-3 rounded-xl border-slate-200 bg-slate-50/50 focus:bg-white focus:ring-4 focus:ring-indigo-600/5 transition-all text-sm" 
                        type="password" name="password_confirmation" placeholder="••••••••" required autocomplete="new-password" />
                </div>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-xs" />

            <div class="pt-4">
                <button type="submit" class="w-full flex justify-center items-center py-4 px-4 rounded-xl shadow-lg shadow-slate-200 text-sm font-bold text-white bg-slate-900 hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slate-900 transition-all duration-200 active:scale-[0.98]">
                    Update Password
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>