<x-app-layout>
    <x-slot name="header">
        {{ __('Account Settings') }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="flex flex-col md:flex-row gap-8">
                
                <div class="w-full md:w-1/3 space-y-4">
                    <div class="bg-white p-6 rounded-2xl border border-slate-200">
                        <h3 class="text-sm font-bold text-slate-900 uppercase tracking-widest">Personal Settings</h3>
                        <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                            Manage your personal information, security preferences, and account status from this panel.
                        </p>
                        <div class="mt-6 pt-6 border-t border-slate-100">
                            <div class="flex items-center gap-3 text-slate-600">
                                <div class="w-2 h-2 rounded-full bg-emerald-500"></div>
                                <span class="text-xs font-bold uppercase tracking-tighter">Account Active</span>
                            </div>
                        </div>
                    </div>

                    @include('profile.partials.delete-user-form')
                </div>

                <div class="w-full md:w-2/3 space-y-8">
                    @include('profile.partials.update-profile-information-form')
                    @include('profile.partials.update-password-form')
                </div>

            </div>
        </div>
    </div>
</x-app-layout>