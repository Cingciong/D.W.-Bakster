<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Walidacja danych formularza
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ], [
            'name.required' => 'Pole imię i nazwisko jest wymagane.',
            'email.required' => 'Pole email jest wymagane.',
            'email.email' => 'Podaj prawidłowy adres email.',
            'subject.required' => 'Pole temat jest wymagane.',
            'message.required' => 'Pole wiadomość jest wymagane.',
            'message.max' => 'Wiadomość nie może być dłuższa niż 2000 znaków.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Przygotowanie danych do wysłania
            $contactData = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'subject' => $request->input('subject'),
                'message' => $request->input('message'),
            ];

            // Wysłanie emaila
            Mail::to(env('CONTACT_MAIL_TO', 'kulakesikula@gmail.com'))
                ->send(new ContactFormMail($contactData));

            return response()->json([
                'success' => true,
                'message' => 'Wiadomość została wysłana pomyślnie!'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Wystąpił błąd podczas wysyłania wiadomości. Spróbuj ponownie później.'
            ], 500);
        }
    }
}
