<!-- Intro Splash Screen - Place this just after the preloader in your layout -->
<div id="intro-splash-screen" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0 shadow">
            <div class="modal-header" style="background-color: var(--main-color); color: white;">
                <h5 class="modal-title">AdLotto - Demo Modus</h5>
                @auth
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="dismissIntroScreen()">
                    <span aria-hidden="true">&times;</span>
                </button>
                @endauth
            </div>
            <div class="modal-body p-4">
                <div class="text-center mb-4">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="AdLotto Logo" class="img-fluid mb-3" style="max-height: 100px;">
                    <h4>Willkommen bei AdLotto!</h4>
                </div>

                <div class="alert alert-info">
                    <p class="mb-0">AdLotto befindet sich derzeit im Demo-Modus. Eine Registrierung ist erforderlich, um fortzufahren.</p>
                </div>

                <p>Mit AdLotto können Sie:</p>
                <ul>
                    <li>Videos ansehen und Lotterie-Nummern sammeln</li>
                    <li>An wöchentlichen Ziehungen teilnehmen</li>
                    <li>Tolle Preise gewinnen</li>
                </ul>

                <p>Registrieren Sie sich jetzt, um zu beginnen!</p>
            </div>
            <div class="modal-footer bg-light">
                <a href="{{ route('register') }}" class="cmn-btn">Registrieren</a>
                <a href="{{ route('login') }}" class="cmn-btn" style="background-color: #6c757d;">Anmelden</a>
                @auth
                    <button type="button" class="cmn-btn" onclick="dismissIntroScreen()">Zum Dashboard</button>
                @endauth
            </div>
        </div>
    </div>
</div>
