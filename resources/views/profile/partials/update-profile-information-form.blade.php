<section class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm">
    <header class="mb-6">
        <h2 class="text-xl font-extrabold text-slate-900 tracking-tight">
            {{ __('Profile Information') }}
        </h2>
        <p class="mt-1 text-sm text-slate-500">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="space-y-6">
        @csrf
        @method('patch')

        <div class="space-y-1">
            <label for="name" class="block text-xs font-bold text-slate-700 uppercase tracking-wider ml-1">Name</label>
            <x-text-input-auth id="name" name="name" type="text" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2 text-xs" :messages="$errors->get('name')" />
        </div>

        <div class="space-y-1">
            <label for="email" class="block text-xs font-bold text-slate-700 uppercase tracking-wider ml-1">Email Address</label>
            <x-text-input-auth id="email" name="email" type="email" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2 text-xs" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-3 p-3 bg-amber-50 rounded-xl border border-amber-100">
                    <p class="text-xs font-medium text-amber-700">
                        {{ __('Your email address is unverified.') }}
                        <button form="send-verification" class="underline font-bold hover:text-amber-900 focus:outline-none">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-bold text-xs text-emerald-600 uppercase tracking-widest">
                            {{ __('Link sent!') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4 pt-2">
            <button type="submit" class="px-6 py-3 rounded-xl shadow-lg shadow-indigo-100 text-sm font-bold text-white bg-slate-900 hover:bg-slate-800  transition-all active:scale-[0.98]">
                {{ __('Save Changes') }}
            </button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-xs font-bold text-emerald-600 uppercase tracking-widest">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>