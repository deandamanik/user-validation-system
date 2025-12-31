<x-app-layout>
    <div class="flex flex-col min-h-[60vh]">
        
        <div class="flex-grow space-y-6">
            <div>
                <h2 class="text-2xl font-black text-slate-900 tracking-tighter uppercase">
                    Dashboard
                </h2>
                <p class="text-sm font-bold text-slate-500 uppercase tracking-widest mt-1">
                    Project: <span class="text-slate-900">User Validation System</span>
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm">
                <h3 class="text-sm font-black text-slate-400 uppercase tracking-widest mb-6">Current User Status</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div class="space-y-4">
                        <div>
                            <p class="text-[10px] font-bold text-slate-400 uppercase">Logged in as:</p>
                            <p class="text-lg font-bold text-slate-900">{{ Auth::user()->email }}</p>
                        </div>

                        <div>
                            <p class="text-[10px] font-bold text-slate-400 uppercase">Email Verified:</p>
                            @if(Auth::user()->hasVerifiedEmail())
                                <span class="inline-flex items-center mt-1 px-3 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-700">
                                    Verified
                                </span>
                            @else
                                <span class="inline-flex items-center mt-1 px-3 py-1 rounded-full text-xs font-bold bg-rose-100 text-rose-700">
                                    Not Verified
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="p-6 bg-slate-50 rounded-xl border border-slate-100">
                        <p class="text-xs font-medium text-slate-600 leading-relaxed">
                            "This page is designed to test the email verification workflow, password recovery features, and profile management. Ensure your Mailtrap or SMTP settings are correctly configured in your <code class="bg-slate-200 px-1 rounded not-italic font-bold">.env</code> file."
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap gap-4">
                <a href="{{ route('profile.edit') }}" class="px-6 py-3 bg-slate-900 text-white text-xs font-bold uppercase tracking-widest rounded-xl hover:bg-slate-800 transition-all active:scale-95 shadow-lg shadow-slate-200">
                    Edit Profile Settings
                </a>
                
                @if(!Auth::user()->hasVerifiedEmail())
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="px-6 py-3 bg-white text-slate-900 text-xs font-bold uppercase tracking-widest rounded-xl border border-slate-200 hover:bg-slate-50 transition-all active:scale-95">
                            Resend Verification Email
                        </button>
                    </form>
                @endif
            </div>
        </div>

        <div class="mt-12 border-t border-slate-200 pt-12">
            <div class="flex flex-col items-center justify-center space-y-1">
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">
                    Developed By
                </p>    
                <p class="text-sm font-bold text-slate-900 tracking-tight">
                    Dean Ivan Ryando Damanik
                </p>
                <p class="text-[11px] font-medium text-slate-500 uppercase tracking-widest">
                    Informatics, Udayana University
                </p>
            </div>
        </div>
    </div>
</x-app-layout>