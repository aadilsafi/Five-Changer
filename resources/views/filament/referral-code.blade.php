
<div class="flex items-center py-1 px-2">
    <span class="text-sm text-gray-500">Referral Code:</span>
    <span class="ml-2 font-medium text-sm">{{ auth()->user()->referral_code ?? 'N/A' }}</span>

    @if(auth()->user()->referral_code)
        <button
            x-data="{
                copied: false,
                copyToClipboard() {
                    navigator.clipboard.writeText('{{ auth()->user()->referral_code }}');
                    this.copied = true;
                    setTimeout(() => this.copied = false, 2000);
                }
            }"
            x-on:click="copyToClipboard"
            class="ml-2 text-primary-500 hover:text-primary-600 focus:outline-none"
            title="Copy to clipboard"
        >
            <span x-show="!copied">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                </svg>
            </span>
            <span x-show="copied" class="text-green-500">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </span>
        </button>
    @endif
</div>

<div class="border-t border-gray-200 dark:border-gray-700"></div>
