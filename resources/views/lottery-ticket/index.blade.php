@extends('layout.app')

@section('styles')
    <style>
        table tbody tr {
            border-bottom: 1px solid #e7e9ed !important;
        }
    </style>
@endsection

@section('content')
    <section class="jackpot-section section-padding">
        <div class="container">
            <table class="table">
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
                                Draw # {{ $tickets->first()->first()->lotteryNumber->draw_number }}
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
            </table>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
