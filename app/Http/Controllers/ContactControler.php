<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use App\Mail\ContactMessage;

class ContactControler extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'textarea' => ['required', 'string', 'max:5000'],
            'cf-turnstile-response' => ['required', 'string'],
        ]);

        $turnstileSecret = env('TURNSTILE_SECRET_KEY');
        if (empty($turnstileSecret)) {
            throw ValidationException::withMessages([
                'cf-turnstile-response' => 'Brak TURNSTILE_SECRET_KEY w .env',
            ]);
        }

        $response = Http::asForm()->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
            'secret' => $turnstileSecret,
            'response' => $validated['cf-turnstile-response'],
            'remoteip' => $request->ip(),
        ]);

        if (!($response->json('success') ?? false)) {
            throw ValidationException::withMessages([
                'cf-turnstile-response' => 'Potwierdź, że nie jesteś botem.',
            ]);
        }

        $toAddress = env('CONTACT_MAIL_ADDRESS');

        if ($toAddress) {
            Mail::to($toAddress)->send(
                new ContactMessage(
                    $validated['name'],
                    $validated['email'],
                    null,
                    $validated['textarea'],
                )
            );
        } else {
            // Gdy nie ma skonfigurowanego odbiorcy, przynajmniej logujemy zgłoszenie.
            Log::info('Contact form submission (no CONTACT_MAIL_ADDRESS)', [
                'name' => $validated['name'],
                'email' => $validated['email'],
            ]);
        }

        if ($request->expectsJson()) {
            return response()->json([
                'message' => 'Dziękujemy za wiadomość. Wkrótce się odezwiemy.',
            ]);
        }

        return back()->with('status', 'Dziękujemy za wiadomość. Skontaktujemy się z Tobą tak szybko, jak to możliwe.');
    }
}

