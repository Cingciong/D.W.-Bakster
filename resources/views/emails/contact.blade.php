<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nowa wiadomość kontaktowa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #0d9488, #14b8a6);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 600;
        }
        .content {
            padding: 30px;
        }
        .field {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        .field:last-child {
            border-bottom: none;
        }
        .field-label {
            font-weight: 600;
            color: #0d9488;
            margin-bottom: 5px;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 1px;
        }
        .field-value {
            font-size: 16px;
            color: #333;
        }
        .message-box {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 6px;
            border-left: 4px solid #0d9488;
        }
        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            color: #666;
            font-size: 14px;
        }
        .logo {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <div class="logo">🏨 {{ config('app.name', 'Hotel Bakster') }}</div>
            <h1>Nowa wiadomość z formularza kontaktowego</h1>
        </div>
        
        <div class="content">
            <p>Otrzymałeś nową wiadomość z formularza kontaktowego strony D.W. Bakster.</p>
            
            <div class="field">
                <div class="field-label">Imię i nazwisko</div>
                <div class="field-value">{{ $contactData['name'] ?? 'Nie podano' }}</div>
            </div>
            
            <div class="field">
                <div class="field-label">Adres email</div>
                <div class="field-value">{{ $contactData['email'] ?? 'Nie podano' }}</div>
            </div>
            
            <div class="field">
                <div class="field-label">Temat</div>
                <div class="field-value">{{ $contactData['subject'] ?? 'Zapytanie ogólne' }}</div>
            </div>
            
            <div class="field">
                <div class="field-label">Treść wiadomości</div>
                <div class="message-box">
                    {{ $contactData['message'] ?? 'Brak treści wiadomości' }}
                </div>
            </div>
            
            <div class="field">
                <div class="field-label">Data wysłania</div>
                <div class="field-value">{{ now()->format('d.m.Y H:i') }}</div>
            </div>
        </div>
        
        <div class="footer">
            <p>Ta wiadomość została wysłana automatycznie z formularza kontaktowego na stronie D.W. Bakster.</p>
            <p>{{ config('app.name') }} - {{ now()->year }}</p>
        </div>
    </div>
</body>
</html>
