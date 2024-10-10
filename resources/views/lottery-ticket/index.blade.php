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
    <section class="jackpot-section section-padding">
        <div class="container">
            @foreach ($lottertTickets as $tickets)
                <div class="row" style="row-gap: 1.25rem">
                    <div>
                        <h4>Draw # {{ $tickets->first()->first()->drawNumber->draw_number }}</h4>
                    </div>
                    @foreach ($tickets as $tryNumber => $ticket)
                        <div class="col-xl-6">
                            <div>
                                <h5>Try # {{ $tryNumber }}</h5>
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
            {{-- <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Attempt #</th>
                        <th scope="col">Combination # 1</th>
                        <th scope="col">Combination # 2</th>
                        <th scope="col">Combination # 3</th>
                        <th scope="col">Combination # 4</th>
                        <th scope="col">Combination # 5</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lottertTickets as $tickets)
                        <tr>
                            <td colspan="6">
                                Draw # {{ $tickets->first()->first()->drawNumber->draw_number }}
                            </td>
                        </tr>
                        @foreach ($tickets as $tryNumber => $ticket)
                            <tr>
                                <th scope="row">
                                    {{ $tryNumber }}
                                </th>
                                @for ($i = 0; $i < 5; $i++)
                                    @if (isset($ticket[$i]))
                                        <td>
                                            {{ $ticket[$i]->lottery_number }}
                                        </td>
                                    @else
                                        <td>
                                            N/A
                                        </td>
                                    @endif
                                @endfor
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table> --}}
        </div>
    </section>
@endsection

@section('scripts')
@endsection
