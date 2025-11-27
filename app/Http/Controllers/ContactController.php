<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
   public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        Mail::to('hathalaldawsary7@gmail.com')->send(new ContactMail($data));

        return back()->with('success', 'تم إرسال الرسالة بنجاح, شكرا لثقتكم بهذال الدوسري.');
    }
}
