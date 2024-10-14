@extends('layout.app')

@section('styles')
@endsection

@section('content')
    <!-- work-steps-section strat -->
    <section class="work-steps-section section-padding border-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-header text-center">
                        <h2 class="section-title">how it works</h2>
                        <p>You can really win here!</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="work-steps-items-part d-flex items-center">
                        <div class="line"><img src="{{ asset('assets/images/elements/line.png') }}" alt="line-image">
                        </div>
                        <div class="work-steps-item">
                            <div class="work-steps-item-inner">
                                <div class="icon"><img src="{{ asset('assets/images/svg-icons/how-work-icons/1.svg') }}"
                                        alt="icon">
                                    <span class="count-num">01</span>
                                </div>
                                <h4 class="title">Watch</h4>
                                <p>Schau Dir 5 Werbevideos an</p>
                            </div>
                        </div><!-- work-steps-item end -->
                        <div class="work-steps-item">
                            <div class="work-steps-item-inner">
                                <div class="icon"><img src="{{ asset('assets/images/svg-icons/how-work-icons/2.svg') }}"
                                        alt="icon">
                                    <span class="count-num">02</span>
                                </div>
                                <h4 class="title">Wish</h4>
                                <p>Wähle Deine 5 Glückszahlen</p>
                            </div>
                        </div><!-- work-steps-item end -->
                        <div class="work-steps-item">
                            <div class="work-steps-item-inner">
                                <div class="icon"><img src="{{ asset('assets/images/svg-icons/how-work-icons/3.svg') }}"
                                        alt="icon">
                                    <span class="count-num">03</span>
                                </div>
                                <h4 class="title">win</h4>
                                <p>Hab die Chance auf den Jackpot</p>
                            </div>
                        </div><!-- work-steps-item end -->
                    </div>
                </div>

                <div class="col-12 text-center mt-2">
                    <p class="fs-lg mb-4 h5">
                        Im Jackpot: Mehr als die Hälfte der Werbeeinnahmen!
                        Über die Hälfte aller gemeinsam erzielten Werbeeinnahmen fließt direkt in den Jackpot. Wer die 5
                        richtigen
                        Zahlen tippt, gewinnt den Jackpot. Bei mehreren Gewinnern wird dieser gleichmäßig aufgeteilt. Bleibt
                        der
                        Jackpot unangetastet, wächst er bis zur nächsten Woche weiter an!
                    </p>
                    <p class="h5">
                        Jeden Montag: Neue Ziehung bei AdLotto
                        Jeden Montag um 12 Uhr gibt es hier auf AdLotto eine neue Ziehung. Die Gewinner werden automatisch
                        per
                        E-Mail benachrichtigt. Nach jeder Ziehung werden alle Tippscheine zurückgesetzt, und Du hast die
                        Chance,
                        erneut Dein Glück zu versuchen. Starte jetzt ein Video und sei dabei!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- work-steps-section strat -->
    <!-- lottery-timer-section start -->
    <section class="lottery-timer-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6">
                    <div class="timer-content">
                        <h3 class="title">Countdown zur nächsten Ziehung</h3>
                        <p>Die Ziehung der 5 Gewinnzahlen findet jeden Montag um 12 Uhr (deutscher Zeit) direkt hier
                            auf der Webseite statt. In Deinem persönlichen Kundenkonto kannst Du jederzeit einsehen,
                            mit welchen Tippscheinen Du an der kommenden Ziehung teilnimmst.</p>
                    </div>
                </div>
                <div class="col-xl-6 text-center">
                    <div class="timer-part">
                        <div class="clock"></div>
                    </div>
                </div>
                {{-- <div class="col-xl-2">
                    <div class="link-area text-center">
                        <a href="#0" class="border-btn">register & play</a>
                        <a href="#0" class="text-btn">view all offer</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- lottery-timer-section end -->
@endsection

@section('scripts')
@endsection
