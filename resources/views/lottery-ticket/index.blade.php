@extends('layout.app')

@section('styles')
    <style>
        /* table tbody tr {
                                border-bottom: 1px solid #e7e9ed !important;
                            } */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            grid-template-rows: repeat(8, auto);
            gap: 10px;
            padding: 20px;
            background-color: #f8f9fa;
        }

        .grid-item {
            width: 40px;
            height: 40px;
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
    <section class="jackpot-section section-padding @if ($lottertTickets->isEmpty()) vh-100 @endif">>
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
                                <p class="h6">Try # {{ $tryNumber }}</p>
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
