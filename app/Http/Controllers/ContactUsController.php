<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function submitForm(Request $request)
    {

         $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'country' => 'required',
            'subject' => 'required',
            'message' => 'required|string',
        ]);

        $contactInfo = ContactUs::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'country' => $request->input('country'),
            'message' => $request->input('message'),
        ]);

        $successMessage = "Hemos recibido tu solicitud y nos pondremos en contacto contigo lo antes posible. </br>Apreciamos tu interés y te agradecemos por ponerte en contacto con nosotros.</br>Gracias.";

        return redirect()->route('contactUs')->with([
            'contactInfo' => $contactInfo,
            'successMessage' => $successMessage,
        ]);

    }
}
