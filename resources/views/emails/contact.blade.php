<x-mail::message>
# Nowa wiadomość z formularza kontaktowego

Otrzymałeś nową wiadomość z formularza kontaktowego strony D.W. Bakster.

**Dane nadawcy:**
- **Imię i nazwisko:** {{ $contactData['name'] }}
- **Email:** {{ $contactData['email'] }}
- **Temat:** {{ $contactData['subject'] }}

**Treść wiadomości:**

{{ $contactData['message'] }}

---

*Ta wiadomość została wysłana automatycznie z formularza kontaktowego na stronie D.W. Bakster.*

Pozdrowienia,<br>
{{ config('app.name') }}
</x-mail::message>
