@extends('layout.app')

@section('styles')
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            grid-template-rows: repeat(8, auto);
            gap: 10px;
            padding: 20px;
            background-color: #f8f9fa;
        }

        .grid-item {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: 2px solid #ccc;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #e9ecef;
            margin: auto;
        }

        .grid-item.selected {
            border-color: #5a987e;
            background-color: #315d3c;
            color: #fff;
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
                            <h1 class="title">Take the chance to change your life</h1>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quod nisi voluptas nulla
                                alias reprehenderit dolores laudantium ducimus deleniti pariatur?</p>
                            <a href="#videos" class="cmn-btn">Watch videos now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- lottery-timer-section start -->
    <section class="lottery-timer-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6">
                    <div class="timer-content">
                        <h3 class="title">Test your luck</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita placeat odit rerum eius illo
                            corrupti quos error ad voluptates tempora?</p>
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

    <!-- jackpot-section start -->
    <section class="jackpot-section section-padding" id="videos">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section-header text-center">
                        <h2 class="section-title">Videos</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio culpa veniam fugit ipsum,
                            non, praesentium nemo, officiis neque enim esse recusandae maxime porro provident quos placeat
                            qui excepturi corrupti quas?</p>
                    </div>
                </div>
            </div>
            @if ($videos)
                <div class="row gy-5">
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
        </div>
    </section>
    <!-- jackpot-section start -->

    <!-- lottery-result-section start -->
    <section class="lottery-result-section section-padding has_bg_image"
        data-background="{{ asset('assets/images/bg-one.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="section-header text-center">
                        <h2 class="section-title">Latest Lottery Results</h2>
                        <p>Check your lotto results online, find all the lotto winning numbers and see if you won
                            the latest lotto jackpots! </p>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-12">
                    <div class="lottery-winning-num-part">
                        <div class="lottery-winning-num-table">
                            <h3 class="block-title">lottery winning numbers</h3>
                            <div class="lottery-winning-table">
                                @if ($last_draw)
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="name">draw #</th>
                                                <th class="numbers">winning numbers</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="winner-details">
                                                        {{ $last_draw->draw_number }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <ul class="number-list">
                                                        <li>{{ $last_draw->number_one }}</li>
                                                        <li>{{ $last_draw->number_two }}</li>
                                                        <li>{{ $last_draw->number_three }}</li>
                                                        <li>{{ $last_draw->number_four }}</li>
                                                        <li>{{ $last_draw->number_five }}</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4">
                    <div class="winner-part">
                        <h3 class="block-title">our winners</h3>
                        <div class="winner-list">
                            <div class="winner-single">
                                <div class="winner-header"><img src="{{ asset('assets/images/flag/1.jpg') }}"
                                        alt="flag"><span class="name">vola pitmar</span></div>
                                <p><span class="lottery-name">Cancer Charity</span><span class="date">30/05/2018</span>
                                </p>
                                <h5 class="prize-amount">€500.00</h5>
                            </div><!-- winner-single end -->
                            <div class="winner-single">
                                <div class="winner-header"><img src="{{ asset('assets/images/flag/4.jpg') }}"
                                        alt="flag"><span class="name">cay colon</span></div>
                                <p><span class="lottery-name">Powerball</span><span class="date">30/05/2018</span></p>
                                <h5 class="prize-amount">€340.00</h5>
                            </div><!-- winner-single end -->
                            <div class="winner-single">
                                <div class="winner-header"><img src="{{ asset('assets/images/flag/5.jpg') }}"
                                        alt="flag"><span class="name">irez newtkon</span></div>
                                <p><span class="lottery-name">Powerball</span><span class="date">30/05/2018</span></p>
                                <h5 class="prize-amount">€130.00</h5>
                            </div><!-- winner-single end -->
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-12 text-center">
                    <a href="#" class="text-btn">see all result</a>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- lottery-result-section end -->

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
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-5 col-lg-6">
                    <div class="work-steps-items-part d-flex">
                        <div class="line"><img src="{{ asset('assets/images/elements/line.png') }}" alt="line-image">
                        </div>
                        <div class="work-steps-item">
                            <div class="work-steps-item-inner">
                                <div class="icon"><img src="{{ asset('assets/images/svg-icons/how-work-icons/1.svg') }}"
                                        alt="icon">
                                    <span class="count-num">01</span>
                                </div>
                                <h4 class="title">Watch</h4>
                                <p>Watch the video completely</p>
                            </div>
                        </div><!-- work-steps-item end -->
                        <div class="work-steps-item">
                            <div class="work-steps-item-inner">
                                <div class="icon"><img
                                        src="{{ asset('assets/images/svg-icons/how-work-icons/2.svg') }}" alt="icon">
                                    <span class="count-num">02</span>
                                </div>
                                <h4 class="title">Enter</h4>
                                <p>Enter your number</p>
                            </div>
                        </div><!-- work-steps-item end -->
                        <div class="work-steps-item">
                            <div class="work-steps-item-inner">
                                <div class="icon"><img
                                        src="{{ asset('assets/images/svg-icons/how-work-icons/3.svg') }}" alt="icon">
                                    <span class="count-num">01</span>
                                </div>
                                <h4 class="title">win</h4>
                                <p>Start dreaming, you're almost there</p>
                            </div>
                        </div><!-- work-steps-item end -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="work-steps-thumb-part">
                        <img src="{{ asset('assets/images/elements/step.png') }}" alt="work-step-image">
                        <a href="https://www.youtube.com/embed/aFYlAzQHnY4" data-rel="lightcase:myCollection"
                            class="play-btn"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- work-steps-section strat -->

    <div class="modal" tabindex="-1" id="myModal">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <h3>Enter Number</h3>
                    <div class="grid-container">
                        @foreach ($grid as $row)
                            @foreach ($row as $number)
                                <div class="grid-item {{ in_array($number, $user_numbers) ? 'selected' : '' }}">
                                    {{ $number }}
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                    <div class="mb-3">
                        <label for="number">Number</label>
                        <input id="number" type="number" placeholder="Enter number" name="lottery_number"
                            min="1" max="55" step="1" class="form-control" required>
                        <p id="error" class="text-danger"></p>
                    </div>
                    <div class="flex justify-content-end">
                        <button type="submit" id="submitNumber" class="btn btn-primary btn-sm">
                            Submit
                        </button>
                        <button data-bs-dismiss="modal" type="button" class="btn btn-secondary btn-sm">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        const modal = $('#myModal');

        const videos = document.querySelectorAll('.video');
        const submitNumber = document.getElementById('submitNumber');

        submitNumber.addEventListener('click', function() {
            const number = document.getElementById('number').value;
            if (number) {
                $.ajax({
                    url: "{{ route('lottery-ticket.store') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        lottery_number: number,
                    },
                    success: function(response) {
                        if (response.success) {
                            modal.modal('hide');
                            window.location.reload();
                        }
                        document.getElementById('error').innerHTML = response.message;
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        document.getElementById('error').innerHTML = jqXHR.responseJSON.message;
                    }
                });
            }
        });


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

        // window.onclick = function(event) {
        //     if (event.target == modal) {
        //         modal.modal('hide');
        //     }
        // }
    </script>
@endsection
