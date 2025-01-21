@extends('layout.app')

@section('styles')
<style>
    .celebration-modal {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        color: white;
        border-radius: 15px;
        padding: 2rem;
        text-align: center;
    }

    .celebration-modal .modal-content {
        background: none;
        border: none;
    }

    .trophy-icon {
        font-size: 4rem;
        color: #ffd700;
        animation: bounce 2s infinite;
        margin-bottom: 1.5rem;
    }

    @keyframes bounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    .sparkle {
        position: absolute;
        width: 20px;
        height: 20px;
        background: white;
        clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
        animation: twinkle 1.5s infinite;
    }

    @keyframes twinkle {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.3;
        }
    }

    .success-title {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 1.5rem;
        color: white;
    }

    .success-message {
        font-size: 1.2rem;
        line-height: 1.6;
        margin-bottom: 1.5rem;
        color: white;
    }

    .celebration-btn {
        background: #ffd700;
        color: #1e3c72;
        font-weight: bold;
        padding: 0.8rem 2rem;
        border-radius: 25px;
        border: none;
        transition: all 0.3s ease;
        margin-top: 1rem;
    }

    .celebration-btn:hover {
        transform: scale(1.05);
        background: #ffed4a;
    }

    .grid-container {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        grid-template-rows: repeat(8, auto);
        gap: 10px;
        padding: 20px;
        background-color: #ffefef;
        border: 2px solid #fe0101;
    }

    .grid-item {
        color: #fe0101;
        width: 60px;
        height: 60px;
        border: 2px solid #fe0101;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto;
        cursor: pointer;
        position: relative;
    }

    .grid-item.selected {
        position: relative;
        cursor: not-allowed;
    }

    .grid-item.selected::before,
    .grid-item.selected::after {
        content: '';
        position: absolute;
        width: 80%;
        height: 3px;
        background-color: black;
        top: 50%;
        left: 10%;
        transform: translateY(-50%) rotate(45deg);
    }

    .last-draw {
        border-top: 2px solid #ededf5;
        background: lightcyan;
    }

    .number-box {
        width: 5rem;
        height: 5rem;
        background-color: var(--main-color);
        color: lightcyan;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 2rem;
        font-weight: bold;
        border-radius: 10px;
        margin: 10px;
        transition: transform 0.3s ease;
    }

    .number-box:hover {
        transform: scale(1.1);
    }

    .grid-item.selected::after {
        transform: translateY(-50%) rotate(-45deg);
    }

    @media (max-width: 768px) {
        .grid-container {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    @media (max-width: 576px) {
        .grid-container {
            grid-template-columns: repeat(4, 1fr);
        }

        .grid-item {
            width: 50px;
            height: 50px;
        }
    }
</style>
@endsection

@section('content')
<!-- banner-section start -->
<section class="banner-section px-10">
    <div class="banner-elements-part has_bg_image"
        data-background="{{ asset('assets/images/elements/vector-bg.jpg') }}">
        <div class="element-one"><img src="{{ asset('assets/images/elements/box.png') }}" alt="vector-image"></div>

        <div class="element-two"><img src="{{ asset('assets/images/elements/car.png') }}" alt="vector-image"></div>

        <div class="element-three"><img src="{{ asset('assets/images/elements/chart.png') }}" alt="vector-image"></div>

        <div class="element-four"><img src="{{ asset('assets/images/elements/dollars.png') }}" alt="vector-image"></div>

        <div class="element-five"><img src="{{ asset('assets/images/elements/laptope.png') }}" alt="vector-image"></div>

        <div class="element-six"><img src="{{ asset('assets/images/elements/money-2.png') }}" alt="vector-image"></div>

        <div class="element-seven"><img src="{{ asset('assets/images/elements/person.png') }}" alt="vector-image"></div>

        <div class="element-eight"><img src="{{ asset('assets/images/elements/person-2.png') }}" alt="vector-image">
        </div>

        <div class="element-nine"><img src="{{ asset('assets/images/elements/power.png') }}" alt="vector-image"></div>
    </div>
    {{-- <sup>&reg;</sup> --}}
    <div class="banner-content-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-content">
                        <h1 class="title text-dark"><span class="text-main title">Ad<span
                                    class="title text-dark">Lotto</span></span>: Die kostenlose Lotterie mit
                            Millionenchance!</h1>
                        <p>Stell Dir vor, Du kannst Lotto spielen – ganz ohne Risiko und
                            ohne einen einzigen Cent zu zahlen. Genau das macht <span class="text-main ">Ad<span
                                    class="">Lotto</span></span>
                            möglich! Alles, was Du tun musst, ist 5 Werbevideos
                            anzusehen, und schon ist Dein Tippschein vollständig durch
                            unsere Werbepartner bezahlt.</p>
                        <br>
                        <h3>Wie funktioniert <span class="text-main h3">Ad<span
                                    class="h3 text-dark">Lotto</span></span>?</h3>
                        <p>Sieh Dir 5 Werbevideos an und wähle anschließend 5 Zahlen
                            für Deinen Tippschein aus. Sobald Dein Tippschein fertig ist,
                            nimmst Du automatisch an der wöchentlichen Ziehung unter
                            notarieller Aufsicht teil. Jeder Spieler mit 5 richtigen Zahlen
                            gewinnt rund 1 Million Euro – unabhängig davon, wie viele
                            Gewinner es gibt.</p>
                        <p>Das Beste: Du kannst so oft GRATIS mitspielen, wie Du
                            möchtest! Mit jedem zusätzlichen Tippschein steigen Deine
                            Chancen auf den großen Gewinn – und das völlig kostenlos.</p>
                        <br>
                        <h3>Warum kostenlos?</h3>
                        <p>
                            Die Finanzierung erfolgt komplett über unsere Werbepartner,
                            die Dir spannende Clips präsentieren. Indem Du die Videos
                            ansiehst, trägst Du dazu bei, dass jede Woche ein Millionen-
                            Gewinn möglich ist – und zwar ohne, dass Du einen einzigen
                            Cent einsetzen musst.</p>
                        {{-- <a href="#videos" class="cmn-btn">Watch videos now!</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->



<!-- jackpot-section start -->
<section class="jackpot-section section-padding" id="videos">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="section-header text-center">
                    <h2 class="section-title" style="text-transform: none">Starte das Video und wähle Deine Zahl!</h2>
                    <p>Nach jedem Video kannst Du eine Zahl aus unserem <span
                            class="text-main">Ad<span>Lotto</span></span> 5 aus 55 auswählen. Sobald
                        Du 5 Videos angesehen hast, hast Du alle 5 Zahlen beisammen und Deinen ersten
                        Tippschein erstellt – komplett kostenlos, aber mit voller Chance auf den Jackpot!</p>
                </div>
            </div>
        </div>
        @if ($videos)
        <div class="row gy-5" style="justify-content: center">
            @foreach ($videos as $item)
            <div class="col-lg-4 col-md-6">
                <video class="w-100 aspect-video video" style="max-height: 190px!important" controls playsinline muted>
                    <source src="{{ asset('storage/' . $item->url) }}" type="video/{{ $item->file_type }}" />
                    Your browser does not support the video tag.
                </video>
                <div class="jackpot-item text-center">
                    <div>
                        <h4>{{ $item->title }}</h4>
                        <p class="text-gray">{{ $item->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
        <div class="section-header text-center" style="margin-bottom: 0; margin-top: 55px;">
            <p class=" fst-italic"><span class="text-main ">Ad<span class="">Lotto</span></span> ist vollständig
                entwickelt und bereit, durchzustarten. Die
                Plattform zeigt schon jetzt, wie Nutzer kostenlos Lotto spielen
                können, indem sie Werbeclips ansehen und Zahlen für ihren
                Tippschein auswählen. Die derzeitigen Videos auf der Seite
                dienen als Platzhalter, um den Ablauf und das Konzept von
                <span class="text-main ">Ad<span class="">Lotto</span></span> zu demonstrieren. Sobald die Plattform
                live geht,
                werden hier echte, hochwertige Werbeclips gezeigt, die
                individuell auf die Interessen der Nutzer zugeschnitten sind.
            </p>
        </div>
    </div>
</section>
{{-- this text goes here --}}



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
        </div>
    </div>
</section>

@if ($last_draw)
<section class="last-draw jackpot-section py-5">
    <h2 class="h2 text-center fw-bold">Letzte Ziehung</h2>
    <div class="row justify-content-center">
        @foreach ($last_draw->numbers as $item)
        <div class="col-auto">
            <div class="number-box">{{ $item }}</div>
        </div>
        @endforeach
    </div>
</section>
@endif

<div class="modal" tabindex="-1" id="myModal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <h3>Select Number</h3>
                <p id="error" class="text-danger"></p>
                <p id="success" class="text-success"></p>
                <div class="grid-container">
                    @foreach ($grid as $row)
                    @foreach ($row as $number)
                    <div class="grid-item {{ in_array($number, $user_numbers) ? 'selected' : '' }}"
                        data-number="{{ $number }}">
                        {{ $number }}
                    </div>
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Add this new modal after your existing modal -->
<div class="modal" tabindex="-1" id="celebrationModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content celebration-modal">
            <div class="modal-body position-relative">
                <!-- Decorative elements -->
                <div class="sparkle" style="top: 10%; left: 10%"></div>
                <div class="sparkle" style="top: 20%; right: 15%"></div>
                <div class="sparkle" style="bottom: 15%; left: 20%"></div>

                <!-- Trophy icon -->
                <div class="trophy-icon">🏆</div>

                <!-- Success message -->
                <h2 class="success-title">
                    Herzlichen Glückwunsch!
                </h2>
                <p class="success-message">
                    Nun ist Dein Tippschein komplett. Unter Meine Lottoscheine findest Du all Deine Tippscheine, die bei
                    der nächsten Ziehung teilnehmen. Starte jetzt mit dem nächsten Tippschein und erhöhe Deine Chancen
                    auf den Jackpot!
                </p>

                <!-- Action button -->
                <button type="button" class="celebration-btn" data-bs-dismiss="modal">
                    Weiter
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    const modal = $('#myModal');
        const gridItems = $('.grid-item');

        const videos = document.querySelectorAll('.video');

        gridItems.click(function(e) {
            gridItems.off('click');
            let _this = $(this);
            if (_this.hasClass('selected')) {
                return;
            }
            const number = _this.data('number');
            const user_video_id = @json($user_video_id);
            if (number) {
                $.ajax({
                    url: "{{ route('lottery-ticket.store') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        lottery_number: number,
                        video_id: user_video_id,
                    },
                    success: function(response) {
                        if (response.success) {
                            modal.modal('hide');
                            if (response.tries == 5) {
                                modal.modal('hide');
                                // Small delay to ensure smooth transition between modals
                                setTimeout(() => {
                                    const celebrationModal = new bootstrap.Modal(document.getElementById('celebrationModal'));
                                    celebrationModal.show();

                                    // Add event listener for when celebration modal is hidden
                                    document.getElementById('celebrationModal').addEventListener('hidden.bs.modal', function () {
                                        window.location.reload();
                                    });
                                }, 300);
                            }else{
                                window.location.reload();
                            }
                        } else {
                            document.getElementById('error').innerHTML = response.message;
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        document.getElementById('error').innerHTML = jqXHR.responseJSON.message;
                    }
                });
            }
        })


        videos.forEach(video => {
            video.addEventListener('play', () => {
                const this_video = video;
                videos.forEach(otherVideo => {
                    if (otherVideo !== this_video && !otherVideo.paused) {
                        otherVideo.pause();
                    }
                });
            });
        });

        videos.forEach(video => {
            video.addEventListener('ended', showModal);
        });

        function showModal() {
            modal.modal('show');
        }
</script>
@endsection
