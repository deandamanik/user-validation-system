<section class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm">
    <header class="mb-6">
        <h2 class="text-xl font-extrabold text-slate-900 tracking-tight">
            {{ __('Update Password') }}
        </h2>
        <p class="mt-1 text-sm text-slate-500">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="space-y-6">
        @csrf
        @method('put')

        <div class="space-y-1">
            <label for="update_password_current_password" class="block text-xs font-bold text-slate-700 uppercase tracking-wider ml-1">Current Password</label>
            <x-text-input-auth id="update_password_current_password" name="current_password" type="password" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-xs" />
        </div>

        <div class="space-y-1">
            <label for="update_password_password" class="block text-xs font-bold text-slate-700 uppercase tracking-wider ml-1">New Password</label>
            <x-text-input-auth id="update_password_password" name="password" type="password" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 text-xs" />
        </div>

        <div class="space-y-1">
            <label for="update_password_password_confirmation" class="block text-xs font-bold text-slate-700 uppercase tracking-wider ml-1">Confirm Password</label>
            <x-text-input-auth id="update_password_password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2 text-xs" />
        </div>

        <div class="flex items-center gap-4 pt-2">
            <button type="submit" class="px-6 py-3 rounded-xl shadow-lg shadow-indigo-100 text-sm font-bold text-white bg-slate-900 hover:bg-slate-800  transition-all active:scale-[0.98]">
                {{ __('Update Password') }}
            </button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-xs font-bold text-emerald-600 uppercase tracking-widest">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>