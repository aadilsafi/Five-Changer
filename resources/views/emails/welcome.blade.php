<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to AdLotto</title>
    <style>
        /* Base styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
        }

        /* Main container */
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            border-radius: 15px;
            padding: 40px;
            color: white;
            text-align: center;
        }

        /* Trophy icon */
        .trophy-icon {
            font-size: 64px;
            margin: 20px 0;
        }

        /* Headings */
        h1 {
            font-size: 32px;
            font-weight: bold;
            margin: 20px 0;
            color: white;
        }

        /* Content */
        .content {
            font-size: 18px;
            line-height: 1.6;
            margin: 20px 0;
        }

        /* Feature list */
        .features {
            text-align: left;
            margin: 30px 0;
            padding-left: 20px;
        }

        .features li {
            margin: 15px 0;
            font-size: 16px;
        }

        /* Button */
        .action-button {
            display: inline-block;
            background: #ffd700;
            color: #1e3c72;
            font-weight: bold;
            padding: 15px 30px;
            border-radius: 25px;
            text-decoration: none;
            margin: 25px 0;
            font-size: 18px;
        }

        /* Footer */
        .footer {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            font-size: 14px;
            color: rgba(255, 255, 255, 0.8);
        }

        /* Sparkle effect elements */
        .sparkle {
            display: inline-block;
            color: #ffd700;
            font-size: 24px;
            margin: 0 5px;
        }

        /* Responsive design */
        @media only screen and (max-width: 600px) {
            .email-container {
                padding: 20px;
                margin: 10px;
            }

            h1 {
                font-size: 28px;
            }

            .content {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Trophy and sparkles -->
        <div>
            <span class="sparkle">✨</span>
            <span class="trophy-icon">🏆</span>
            <span class="sparkle">✨</span>
        </div>

        <!-- Welcome message -->
        <h1>Herzlich willkommen bei AdLotto!, {{ $user->name }}!</h1>

        <div class="content">
            <p>Schön, dass Du dabei bist – die Chance auf Deinen kostenlosen Millionengewinn wartet schon auf Dich!
            </p>
        </div>

        <!-- Features list -->
        <div class="features">
            <p>Mit Deinem Konto kannst Du jetzt::</p>
            <ul>
                <li>Werbevideos ansehen und Zahlen für Deinen Lottoschein auswählen.</li>
                <li>Jede Woche an spannenden Ziehungen teilnehmen</li>
                <li>Deine Tippscheine verwalten und so oft mitspielen, wie Du möchtest.</li>
                <li>Und vieles mehr!</li>
            </ul>
        </div>

        <!-- Call to action -->
        <div class="content">
            <p>Starte jetzt und sichere Dir Deine Chance auf rund 1 Million Euro!</p>
            <a href="{{ url('/login') }}" class="action-button">
                [Jetzt Loslegen]
            </a>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>Hast Du Fragen? Unser Support-Team ist jederzeit für Dich da.</p>
            <p>Viel Erfolg und jede Menge Spaß wünscht Dir</p>
            <p>Dein<br>AdLotto Team</p>

            <p>Angaben gemäß § 5 TMG</p>

            <p>AdLotto by equidine</p>
            <p>Röthmoorweg 36</p>
            <p>22459 Hamburg</p>

            <br>
            <br>
            <a href="mailto:info@adlotto.de">info@adlotto.de</a>

            <a href="https://www.adlotto.de">www.adlotto.de</a>

            <p>Handelsregistereintrag:</p>
            <p>Registergericht: Hamburg</p>
            <p>Handelsregisternummer: HRB 137363</p>

        </div>
    </div>
</body>
</html>
