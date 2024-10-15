@extends('layout.app')

@section('styles')
    <style>
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

        /* .grid-item::before {
            content: '';
            position: absolute;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 50%;
            width: 100px;
            height: 100px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: transform 0.5s, opacity 0.5s;
            opacity: 0;
        }

        .grid-item:active::before {
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
        } */

        .grid-item.selected {
            position: relative;
            /* border-color: #5a987e; */
            /* background-color: #315d3c; */
            /* color: #fff; */
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
    <section class="banner-section">
        <div class="banner-elements-part has_bg_image" data-background="{{ asset('assets/images/elements/vector-bg.jpg') }}">
            <div class="element-one"><img src="{{ asset('assets/images/elements/box.png') }}" alt="vector-image"></div>

            <div class="element-two"><img src="{{ asset('assets/images/elements/car.png') }}" alt="vector-image"></div>

            <div class="element-three"><img src="{{ asset('assets/images/elements/chart.png') }}" alt="vector-image"></div>

            <div class="element-four"><img src="{{ asset('assets/images/elements/dollars.png') }}" alt="vector-image"></div>

            <div class="element-five"><img src="{{ asset('assets/images/elements/laptop.png') }}" alt="vector-image"></div>

            <div class="element-six"><img src="{{ asset('assets/images/elements/money-2.png') }}" alt="vector-image"></div>

            <div class="element-seven"><img src="{{ asset('assets/images/elements/person.png') }}" alt="vector-image"></div>

            <div class="element-eight"><img src="{{ asset('assets/images/elements/person-2.png') }}" alt="vector-image">
            </div>

            <div class="element-nine"><img src="{{ asset('assets/images/elements/power.png') }}" alt="vector-image"></div>
        </div>
        <div class="banner-content-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="banner-content">
                            <h1 class="title">Lotto spielen – ganz ohne Kosten!</h1>
                            <p>Es klingt fast zu gut, um wahr zu sein – aber es ist wirklich so! Statt Geld für Deinen
                                Lottoschein zu zahlen, siehst Du einfach nur 5 kurze Werbevideos. Danach ist Dein
                                Tippschein vollständig „bezahlt“ und Du bist im Rennen um den Jackpot!</p>
                            <p>Das Beste daran: Du kannst so oft teilnehmen, wie Du möchtest, und damit Deine Chancen
                                auf den großen Gewinn erheblich steigern.</p>
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
                        <p>Nach jedem Video kannst Du eine Zahl aus unserem AdLotto 5 aus 55 auswählen. Sobald
                            Du 5 Videos angesehen hast, hast Du alle 5 Zahlen beisammen und Deinen ersten
                            Tippschein erstellt – komplett kostenlos, aber mit voller Chance auf den Jackpot!</p>
                    </div>
                </div>
            </div>
            @if ($videos)
                <div class="row gy-5" style="justify-content: center">
                    @foreach ($videos as $item)
                        <div class="col-lg-4 col-md-6">
                            <video class="w-100 aspect-video video" style="max-height: 190px!important" controls playsinline
                                muted>
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
                <p class="h5">Interessiert an der Werbung?
                    Kein Problem! Du kannst sie einfach anklicken, um mehr Informationen zu erhalten. Sie öffnen
                    sich in einem neuen
                    Fenster, und Du kannst später bequem zu AdLotto zurückkehren, um an Deinem Tippschein
                    weiterzuarbeiten.</p>
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
                                alert(
                                    'Herzlichen Glückwunsch! Nun ist Dein Tippschein komplett. Unter Meine Lottoscheine findest Du all Deine Tippscheine, die bei der nächsten Ziehung teilnehmen. Starte jetzt mit dem nächsten Tippschein und erhöhe Deine Chancen auf den Jackpot'
                                )
                            }
                            window.location.reload();
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
