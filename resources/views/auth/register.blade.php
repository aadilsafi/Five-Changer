<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        {{-- <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div> --}}
            <!-- User Type Selection -->
            <div class="mt-4">
                {{-- <x-input-label :value="__('User Type')" /> --}}
                <div class="flex items-center mt-2 space-x-4">
                    <div class="flex items-center">
                        <input id="user_type_user" type="radio" name="user_type" value="user"
                            class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                            {{ old('user_type') == 'user' ? 'checked' : '' }} checked>
                        <label for="user_type_user" class="ml-2 text-sm font-medium text-gray-700">
                            {{ __('Ich möchte als Spieler teilnehmen') }}
                        </label>
                    </div>
                    <div class="flex items-center">
                        {{-- <input type="hidden" name="referral_code" value="{{ request('referral_code') }}"> --}}
                        <input id="user_type_partner" type="radio" name="user_type" value="partner"
                            class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                            {{ old('user_type') == 'partner' ? 'checked' : '' }}>
                        <label for="user_type_partner" class="ml-2 text-sm font-medium text-gray-700">
                            {{ __('Ich bin Creator, Affiliate oder Werbepartner') }}
                        </label>
                    </div>
                </div>
                <x-input-error :messages="$errors->get('user_type')" class="mt-2" />
            </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Referral Code -->
        <div id="referral_code_container" class="mt-4" style="display: none;">

            <x-input-label for="referral_code" :value="__('Referral Code')" />

            <x-text-input id="referral_code" class="block mt-1 w-full" type="text"
                name="referral_code" autocomplete="new-password" />

            <x-input-error :messages="$errors->get('referral_code')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
    <script>
        // Show or hide referral code field based on user type selection
        document.addEventListener('DOMContentLoaded', function() {
            // Get radio buttons and referral code container
            const userRadio = document.getElementById('user_type_user');
            const partnerRadio = document.getElementById('user_type_partner');
            const referralCodeContainer = document.getElementById('referral_code_container');

            // Function to toggle referral code visibility
            function toggleReferralCodeVisibility() {
                referralCodeContainer.style.display = partnerRadio.checked ? 'block' : 'none';
            }

            // Initial check
            toggleReferralCodeVisibility();

            // Add event listeners to radio buttons
            userRadio.addEventListener('change', toggleReferralCodeVisibility);
            partnerRadio.addEventListener('change', toggleReferralCodeVisibility);
        });
    </script>
</x-guest-layout>
