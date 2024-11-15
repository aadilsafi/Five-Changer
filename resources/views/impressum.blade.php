@extends('layout.app')

@section('styles')
    <style>
        p {
            margin: revert;
        }

        ul {
            margin-bottom: 1rem !important;
        }
    </style>
@endsection

@section('content')
    <section class="jackpot-section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-header">
                        <p class="h2">Impressum</p>
                        <div class="mt-4">
                            <p class="h4">Angaben gemäß § 5 TMG</p>
                            <div class="mt-3">
                                <ul>
                                    <li>Nadine Pfüller</li>
                                    <li>equidine Pferdeosteopathie</li>
                                    <li>Röthmoorweg 36</li>
                                    <li>22459 Hamburg</li>
                                    <li><a href="mailto:info@adlotto.de">info@adlotto.de</a></li>
                                    <li><a href="{{ route('home.index') }}">www.adlotto.de</a></li>
                                </ul>
                            </div>
                            <div class="mt-3">
                                <ul>
                                    <li class="fw-bold">Handelsregistereintrag:</li>
                                    <li>Registergericht: Hamburg</li>
                                    <li>Handelsregisternummer: HRB 137363</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
