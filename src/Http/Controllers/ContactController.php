<?php

namespace SkrSkr\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use SkrSkr\Contact\Mail\ContactMail;
use SkrSkr\Contact\Models\Contact;

class ContactController extends Controller
{
    
    public function index()
    {
        return view("contact::contact");
    }

    public function store(Request $request)
    {

        Mail::to(config("contact.send_mail_to"))->send(new ContactMail($request->message, $request->name));
        Contact::create($request->all());
        return redirect()->route('contact');
    }
}
