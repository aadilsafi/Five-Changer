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
            width: 40px;
            height: 40px;
            border: 2px solid #fe0101;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
        }

        .grid-item.selected {
            position: relative;
        }

        .selected::before,
        .selected::after {
            content: '';
            position: absolute;
            width: 80%;
            height: 3px;
            background-color: black;
            top: 50%;
            left: 10%;
            transform: translateY(-50%) rotate(45deg);
        }

        .selected::after {
            transform: translateY(-50%) rotate(-45deg);
        }

        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media (max-width: 576px) {
            .grid-container {
                grid-template-columns: repeat(5, 1fr);
            }

            .grid-item {
                width: 40px;
                height: 40px;
            }
        }
    </style>
@endsection

@section('content')
    <section class="jackpot-section section-padding @if ($lottertTickets->isEmpty()) vh-100 @endif">
        <div class="container">
            <p class="h5 text-center mb-3">
                Hier siehst Du alle Deine gültigen Lottoscheine für die nächste Ziehung am Montag um 12 Uhr. Solltest Du
                gewinnen, wirst Du automatisch per E-Mail von uns benachrichtigt.
            </p>
            @foreach ($lottertTickets as $tickets)
                <div>
                    <p class="h5 mb-3">Draw # {{ $tickets->first()->first()->drawNumber->draw_number }}</p>
                </div>
                <div class="row" style="row-gap: 1.25rem">
                    @foreach ($tickets as $tryNumber => $ticket)
                        <div class="col-xl-4">
                            <div>
                                <p class="h6">Spiel # {{ $tryNumber }}</p>
                            </div>
                            <div class="grid-container">
                                @foreach ($grid as $row)
                                    @foreach ($row as $number)
                                        <div
                                            class="grid-item {{ in_array($number, $ticket->pluck('lottery_number')->toArray()) ? 'selected' : '' }}">
                                            {{ $number }}
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>
@endsection

@section('scripts')
@endsection
