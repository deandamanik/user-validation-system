@props(['disabled' => false, 'type' => 'text'])

<div class="relative w-full" x-data="{ show: false }">
    <input {{ $disabled ? 'disabled' : '' }} 
        {!! $attributes->merge([
            'class' => 'block w-full px-4 py-3 rounded-xl border-slate-200 bg-slate-50/50 focus:bg-white focus:border-indigo-600 focus:ring-4 focus:ring-indigo-600/5 transition-all duration-200 placeholder:text-slate-300 text-sm'
        ]) !!} 
        :type="show ? 'text' : '{{ $type }}'"
    >

    @if($type === 'password')
        <button type="button" @click="show = !show" class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-indigo-600 transition-colors">
            <svg x-show="show" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
            <svg x-show="!show" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" x-cloak>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.025 10.025 0 014.132-5.411m0 0L21 21m-2.102-2.102L15.857 15.857m-2.547-2.547L11 11M9.414 9.414L3 3m16.342 16.342A10.05 10.05 0 0021.542 12c-1.274-4.057-5.064-7-9.542-7-1.274 0-2.483.21-3.606.593m6.149 6.149L12 12m0 0l-1.5-1.5" />
            </svg>
        </button>
    @endif
</div>