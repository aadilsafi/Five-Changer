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
                    <h2 class="section-title" style="text-transform: none">So funktioniert’s</h2>
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

            <div class="col-12 mt-2">
                <h2 class="h1 text-dark">
                    <strong> So funktioniert <span class="text-main h1">Ad<span
                                class="h1 text-dark">Lotto</span></span></strong>
                </h2>
                <br>
                <br>
                <p class="fs-lg mb-4">
                <span class="text-main ">Ad<span class="text-dark">Lotto</span></span> ist die erste kostenlose
                Lotterie,
                bei der Du Deine Tippscheine durch das Ansehen von Werbeclips „bezahlst“. Es ist einfach, fair und
                komplett kostenlos – so funktioniert es im Detail:
                </p>
                <br>
                <h3>
                    <strong>Werbevideo ansehen und Zahl auswählen</strong>
                </h3>
                <br>
                <br>
                <p class="">
                Für jeden Tippschein siehst Du Dir 5 kurze Werbevideos an. Nach jedem Video kannst Du eine Zahl aus
                unserem Lottosystem <b>5 aus 55</b> auswählen. Jede Zahl bringt Dich einen Schritt näher zu Deinem
                vollständigen Tippschein.
                </p>
                <br>
                <h3>
                    <strong>Tippschein erstellen</strong>
                </h3>
                <br>
                <br>
                <p class="">

                Sobald Du 5 Werbevideos angeschaut hast, hast Du 5 Zahlen ausgewählt – und damit einen vollständigen
                Tippschein erstellt. Dieser nimmt automatisch an der nächsten Ziehung teil.
                Das Beste daran: Du kannst so viele Tippscheine erstellen, wie Du möchtest! Sobald Du mit einem
                Tippschein fertig bist, kannst Du sofort mit neuen Videos weitermachen, weitere Zahlen wählen und
                Deine Chancen auf den großen Gewinn erheblich erhöhen.
                </p>
                <br>
                <h3>
                    <strong>Ziehung und Gewinne</strong>
                </h3>
                <br>
                <br>
                <p class="">

                Jeden Montag um 12 Uhr findet die Ziehung unter <b>notarieller Aufsicht</b> statt. Gewinne gibt es
                ausschließlich für Spieler mit <b>5 richtigen Zahlen</b>.
                <span class="text-main ">Ad<span class="text-dark">Lotto</span></span> wurde ganz bewusst so konzipiert,
                dass der Gewinn bei 5 richtigen Zahlen immer bei <b>erwartet
                    rund 1 Million Euro liegt</b>. Es gibt keine Zusatzzahlen, Superzahlen oder kleinere Gewinne für 4
                oder
                weniger richtige Zahlen. Das macht <span class="text-main ">Ad<span
                        class="text-dark">Lotto</span></span> besonders attraktiv und fair.
                </p>
                <br>
                <h3>
                    <strong> Warum kostenlos?</strong>
                </h3>
                <br>
                <br>
                <p class="">
                <span class="text-main ">Ad<span class="text-dark">Lotto</span></span> wird vollständig durch
                Werbeeinnahmen finanziert. Die Werbepartner präsentieren Dir kurze, spannende Clips, die Du Dir
                ansiehst, um Deinen Tippschein zu „bezahlen“. Für Dich bleibt <span class="text-main ">Ad<span
                        class="text-dark">Lotto</span></span> komplett kostenlos – kein Einsatz, kein Risiko, nur die
                Chance auf einen echten Millionen-Gewinn!
                </p>
                <br>
                <h2>
                    <strong>Zusammenfassung: Deine Vorteile mit <span class="text-main "
                            style="font-weight: 900;font-size:42px">Ad<span class=" text-dark"
                                style="font-weight: 900;font-size:42px">Lotto</span></span></strong>
                </h2>
                <br>
                <p class="text-start">
                <ul class="text-start bullets" style="list-style-type: disc !important;">
                    <li>Kostenlos: Kein Einsatz, kein Risiko – die Finanzierung erfolgt durch Werbepartner.</li>
                    <li> Flexibel: Spiele so oft Du möchtest und erstelle beliebig viele Tippscheine.</li>
                    <li>Geradlinig und fair: Gewinne gibt es ausschließlich für 5 richtige Zahlen – ohne Zusatzzahlen
                        oder versteckte Bedingungen.</li>
                    <li>Transparent: Jede Ziehung erfolgt unter notarieller Aufsicht, und die Gewinner werden
                        automatisch benachrichtigt.</li>
                </ul>
                </p>
                <br><br>
                <p class="text-start">
                    Mit <span class="text-main ">Ad<span class="text-dark">Lotto</span></span> hast Du jede Woche die
                    Chance, Millionär zu werden – komplett kostenlos und fair. Alle profitieren von <span
                        class="text-main ">Ad<span class="">Lotto</span></span>: Die Werbepartner können ihre Videos
                    präsentieren und sicher sein, dass diese aufmerksam angeschaut werden. Gleichzeitig profitieren die
                    Mitspieler von den so verdienten Einnahmen, indem sie die Chance auf einen Millionengewinn erhalten.
                    Probiere es aus und erlebe die Spannung von <span class="text-main ">Ad<span
                            class="">Lotto</span></span>!
                    <br>
                    <br>
                    <a href="{{route('home.index')}}" class="h5" style="color: #28A745">JETZT MITMACHEN</a>
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
