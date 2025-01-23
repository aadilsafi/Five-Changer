<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neuer Benutzer Registriert</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #1e3c72;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .user-details {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 6px;
            margin: 20px 0;
        }
        .user-details p {
            margin: 10px 0;
        }
        .label {
            font-weight: bold;
            color: #1e3c72;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h1>Neuer Benutzer Registriert</h1>

        <div class="user-details">
            <p><span class="label">Name:</span> {{ $user->name }}</p>
            <p><span class="label">E-Mail:</span> {{ $user->email }}</p>
            <p><span class="label">Registriert am:</span> {{ $user->created_at->format('d.m.Y H:i') }}</p>
        </div>

        <p>Ein neuer Benutzer hat sich erfolgreich bei AdLotto registriert.</p>

        <div class="footer">
            <p>Diese E-Mail wurde automatisch generiert.</p>
            <p>AdLotto System</p>
        </div>
    </div>
</body>
</html>
