@extends('layout.app')

@section('styles')
    <style>
        p {
            margin: revert;
        }

        ul {
            margin-bottom: 1rem !important;
        }

        .revert-ul-style {
            list-style: disc;
            padding: revert;
            margin: revert;
        }
    </style>
@endsection

@section('content')
    <section class="jackpot-section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-header">
                        <p class="h2">Datenschutzhinweise</p>
                        <div class="mt-4">
                            <ol class="ps-4 mb-3" style="list-style: decimal">
                                <li class="h4">Allgemeine Informationen</li>
                                <p>Der Schutz Deiner persönlichen Daten ist uns wichtig. In diesen Datenschutzhinweisen
                                    erklären wir, welche Daten wir erheben, wie wir sie verwenden und welche Rechte Dir in
                                    Bezug auf Deine Daten zustehen. Die Erhebung und Verarbeitung Deiner Daten erfolgt
                                    ausschließlich im Rahmen der geltenden Datenschutzgesetze, insbesondere der
                                    Datenschutz-Grundverordnung (DSGVO).</p>
                                <li class="h4">Verantwortlicher</li>
                                <p>Verantwortlicher für die Verarbeitung Deiner personenbezogenen Daten auf
                                    dieser Webseite
                                    ist:
                                </p>
                                <ul>
                                    <li>Nadine Pfüller</li>
                                    <li>equidine Pferdeosteopathie</li>
                                    <li>Röthmoorweg 36</li>
                                    <li>22459 Hamburg</li>
                                    <li><a href="mailto:info@adlotto.de">info@adlotto.de</a></li>
                                </ul>
                                <li class="h4">Welche Daten wir erheben</li>
                                <p>Wir erheben und verarbeiten personenbezogene Daten, wenn Du unsere Webseite besuchst oder
                                    unsere Dienste nutzt. Dies umfasst insbesondere:</p>
                                <ul class="revert-ul-style">
                                    <li>
                                        <b>Registrierungsdaten:</b> Wenn Du ein Kundenkonto erstellst, erheben wir Deinen
                                        Namen,
                                        Deine E-Mail-Adresse und ggf. weitere notwendige Kontaktdaten.
                                    </li>
                                    <li>
                                        <b>Nutzungsdaten:</b> Während Du unsere Webseite nutzt, speichern wir Daten wie
                                        IP-Adresse, Gerätetyp, Browserinformationen und Seitenaufrufe.
                                    </li>
                                    <li>
                                        <b>Daten zur Lottoteilnahme:</b> Informationen zu Deinen erstellten Tippscheinen,
                                        den angesehenen Werbevideos und Deinen Gewinnbenachrichtigungen.
                                    </li>
                                </ul>
                                <li class="h4">Zweck und Rechtsgrundlage der Datenverarbeitung</li>
                                <p>
                                    Wir verarbeiten Deine Daten nur zu bestimmten Zwecken:
                                </p>
                                <ul class="revert-ul-style">
                                    <li>
                                        <b>Bereitstellung unserer Dienste:</b> Um Dir die Teilnahme an unseren
                                        Lottoziehungen zu ermöglichen und Deine Tippscheine zu verwalten.
                                    </li>
                                    <li>
                                        <b>Werbefinanzierung:</b> Zum Anbieten der kostenlosen Lottoteilnahme durch das
                                        Ansehen von Werbevideos, wobei Deine Interaktionen mit der Werbung ggf. erfasst
                                        werden.
                                    </li>
                                    <li>
                                        <b>Kommunikation:</b> Um Dich über Gewinne und relevante Informationen zu Deinem
                                        Konto zu informieren.
                                    </li>
                                    <li>
                                        <b>Rechtliche Verpflichtungen:</b> Wir verarbeiten Deine Daten, soweit dies zur
                                        Erfüllung gesetzlicher Pflichten erforderlich ist.
                                    </li>
                                </ul>
                                <p>Die Rechtsgrundlage für diese Datenverarbeitung ist entweder Deine Einwilligung (Art. 6
                                    Abs. 1 lit. a DSGVO), die Erfüllung eines Vertrages (Art. 6 Abs. 1 lit. b DSGVO) oder
                                    unsere berechtigten Interessen (Art. 6 Abs. 1 lit. f DSGVO).</p>
                                <li class="h4">
                                    Weitergabe von Daten an Dritte
                                </li>
                                <p>
                                    Wir geben Deine personenbezogenen Daten nicht an Dritte weiter, außer es ist für die
                                    Erbringung unserer Dienstleistungen erforderlich oder gesetzlich vorgeschrieben.
                                    Mögliche
                                    Empfänger können z.B. technische Dienstleister sein, die uns bei der Bereitstellung der
                                    Webseite unterstützen.
                                </p>
                                <li class="h4">
                                    Speicherung und Löschung von Daten
                                </li>
                                <p>
                                    Wir speichern Deine personenbezogenen Daten nur so lange, wie dies für den jeweiligen
                                    Zweck
                                    erforderlich ist. Sobald Dein Kundenkonto gelöscht wird oder die Daten für die Zwecke
                                    nicht
                                    mehr benötigt werden, löschen wir sie im Einklang mit den gesetzlichen
                                    Aufbewahrungsfristen.
                                </p>
                                <li class="h4">
                                    Deine Rechte
                                </li>
                                <p>
                                    Du hast das Recht, jederzeit:
                                </p>
                                <ul class="revert-ul-style">
                                    <li>Auskunft über Deine bei uns gespeicherten personenbezogenen Daten zu verlangen (Art.
                                        15
                                        DSGVO),</li>
                                    <li>die Berichtigung unrichtiger Daten zu fordern (Art. 16 DSGVO),</li>
                                    <li>die Löschung Deiner Daten zu verlangen (Art. 17 DSGVO),</li>
                                    <li>die Einschränkung der Verarbeitung Deiner Daten zu verlangen (Art. 18 DSGVO),</li>
                                    <li>der Datenverarbeitung zu widersprechen (Art. 21 DSGVO),</li>
                                    <li>Deine Daten in einem gängigen, maschinenlesbaren Format zu erhalten (Art. 20 DSGVO),
                                    </li>
                                    <li>eine erteilte Einwilligung zur Datenverarbeitung jederzeit zu widerrufen (Art. 7
                                        Abs. 3
                                        DSGVO).</li>
                                </ul>
                                <p>
                                    Um Deine Rechte auszuüben, kannst Du uns unter den oben genannten Kontaktinformationen
                                    erreichen.
                                </p>
                                <li class="h4">
                                    Cookies
                                </li>
                                <p>
                                    Wir verwenden Cookies, um die Nutzung unserer Webseite zu analysieren und Dir eine
                                    optimale
                                    Benutzererfahrung zu bieten. Du kannst das Setzen von Cookies über die Einstellungen
                                    Deines
                                    Browsers einschränken oder verhindern. Weitere Informationen findest Du in unserer
                                    [Cookie-Richtlinie].
                                </p>
                                <li class="h4">
                                    Datensicherheit
                                </li>
                                <p>
                                    Wir treffen geeignete technische und organisatorische Maßnahmen, um Deine Daten vor
                                    Verlust,
                                    Missbrauch oder unbefugtem Zugriff zu schützen. Die Übertragung sensibler Daten erfolgt
                                    verschlüsselt (z.B. durch SSL).
                                </p>
                                <li class="h4">
                                    Änderungen dieser Datenschutzhinweise
                                </li>
                                <p>
                                    Wir behalten uns vor, diese Datenschutzhinweise anzupassen, um sie an geänderte
                                    Rechtsvorschriften oder neue Dienstleistungen anzupassen. Die jeweils aktuelle Version
                                    findest Du jederzeit auf unserer Webseite.
                                </p>
                                <li class="h4">
                                    Kontakt
                                </li>
                                <p>
                                    Wenn Du Fragen zu diesen Datenschutzhinweisen oder zur Verarbeitung Deiner Daten hast,
                                    kannst Du Dich jederzeit an uns wenden:
                                </p>
                                <ul>
                                    <li>Nadine Pfüller</li>
                                    <li>equidine Pferdeosteopathie</li>
                                    <li>Röthmoorweg 36</li>
                                    <li>22459 Hamburg</li>
                                    <li><a href="mailto:info@adlotto.de">info@adlotto.de</a></li>
                                </ul>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
