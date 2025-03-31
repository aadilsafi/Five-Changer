<x-guest-layout>
    <div id="intro-splash-screen" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="fixed inset-0 bg-black bg-opacity-50" id="modal-backdrop"></div>
        <div class="bg-white rounded-lg shadow-xl max-w-md w-full mx-4 relative z-10">
            <div class="bg-indigo-600 text-white px-6 py-4 rounded-t-lg">
                <h3 class="text-lg font-semibold">AdLotto ist aktuell im Demo-Modus</h3>
            </div>
            <div class="p-6">
                {{-- <div class="text-center mb-4">
                    <h4 class="text-xl font-bold">Willkommen bei AdLotto!</h4>
                </div> --}}

                <div class="bg-blue-100 text-blue-800 p-4 rounded mb-4">
                    <p>Noch sind wir nicht live – aber Du kannst das System bereits ausprobieren.</p>
                </div>

                <p class="font-medium">Bitte erstelle ein kostenloses Nutzerkonto, um Zugang zur Plattform zu erhalten.</p>
                <ul class="list-disc pl-5 mb-4 space-y-1">

                    <li>Warum ist das notwendig?</li>
                    <li>Weil Deine erspielten Lottozahlen gespeichert und Deinem Konto zugeordnet werden müssen –</li>
                    <li>nur so kannst Du an der Ziehung teilnehmen, sobald es losgeht.</li>
                </ul>

                <p>Registrieren Sie sich jetzt, um zu beginnen!</p>
            </div>
            <div class="bg-gray-100 px-6 py-4 rounded-b-lg flex justify-end space-x-2">
                <a href="{{ route('register') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded">
                    Registrieren
                </a>
                <button type="button" id="close-modal" class="bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded">
                    Anmelden
                </button>
            </div>
        </div>
    </div>    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('register'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('register') }}">
                    {{ __('Register') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the modal elements
            const modal = document.getElementById('intro-splash-screen');
            const closeBtn = document.getElementById('close-modal');
            const backdrop = document.getElementById('modal-backdrop');

            // Function to show the modal
            function showModal() {
                modal.classList.remove('hidden');
            }

            // Function to hide the modal
            function hideModal() {
                modal.classList.add('hidden');
            }

            // Show modal after a small delay
            setTimeout(showModal, 500);

            // Close the modal when close button is clicked
            closeBtn.addEventListener('click', hideModal);

            // Close the modal when backdrop is clicked
            backdrop.addEventListener('click', hideModal);
        });
    </script>
</x-guest-layout>
