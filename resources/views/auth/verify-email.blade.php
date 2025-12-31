<x-guest-layout>
    <div class="h-full flex flex-col justify-center">
        <div class="mb-8">
            <div class="flex items-center gap-3 mb-4">
                <div class="p-2 bg-indigo-50 rounded-lg text-indigo-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight leading-none">
                    Check your email
                </h2>
            </div>
            <p class="text-slate-500 text-sm leading-relaxed">
                Thanks for signing up! Please verify your email by clicking the link we just sent to you.
            </p>
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-100 text-sm font-medium text-emerald-600 animate-in fade-in duration-500">
                {{ __('A new verification link has been sent to your email address.') }}
            </div>
        @endif

        <div class="space-y-6">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="w-full flex justify-center items-center py-4 px-4 rounded-xl shadow-lg shadow-slate-200 text-sm font-bold text-white bg-slate-900 hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slate-900 transition-all duration-200 active:scale-[0.98]">
                    Resend Verification Email
                </button>
            </form>

            <form method="POST" action="{{ route('logout') }}" class="text-center">
                @csrf
                <button type="submit" class="text-xs font-bold text-slate-400 hover:text-slate-600 uppercase tracking-widest transition-colors">
                    {{ __('Log Out') }}
                </a>
            </form>
        </div>
    </div>
</x-guest-layout>