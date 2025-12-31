<section class="bg-rose-50/50 p-8 rounded-2xl border border-rose-100 shadow-sm">
    <header class="mb-6">
        <h2 class="text-xl font-extrabold text-rose-900 tracking-tight">
            {{ __('Delete Account') }}
        </h2>
        <p class="mt-1 text-sm text-rose-600/80">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted.') }}
        </p>
    </header>

    <button 
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="px-6 py-3 rounded-xl text-sm font-bold text-white bg-rose-600 hover:bg-rose-700 transition-all active:scale-[0.98] shadow-lg shadow-rose-100"
    >
        {{ __('Delete Account') }}
    </button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-8">
            @csrf
            @method('delete')

            <h2 class="text-2xl font-black text-slate-900 tracking-tight">
                {{ __('Are you sure?') }}
            </h2>

            <p class="mt-3 text-sm text-slate-500 leading-relaxed">
                {{ __('Please enter your password to confirm you would like to permanently delete your account. This action cannot be undone.') }}
            </p>

            <div class="mt-6 space-y-1">
                <x-text-input-auth
                    id="password"
                    name="password"
                    type="password"
                    class="w-full"
                    placeholder="{{ __('Your Password') }}"
                />
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2 text-xs" />
            </div>

            <div class="mt-8 flex justify-end gap-3">
                <button type="button" x-on:click="$dispatch('close')" class="px-6 py-3 rounded-xl text-sm font-bold text-slate-500 hover:bg-slate-100 transition-all">
                    {{ __('Cancel') }}
                </button>

                <button type="submit" class="px-6 py-3 rounded-xl text-sm font-bold text-white bg-rose-600 hover:bg-rose-700 transition-all shadow-lg shadow-rose-100">
                    {{ __('Permanently Delete') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>