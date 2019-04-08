<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
//        dd($request->all());
        $this->validate($request, [
            'iv_name' => 'required',
            'iv_email' => 'required|email',
            'iv_phone' => 'nullable|digits:11',
            'iv_subject' => 'required',
            'iv_message' => 'required'
        ],[
            'iv_name.required' => 'Name field required',
            'iv_email.required' => 'Email field required',
            'iv_phone.digits' => 'Phone number should be 11 digits',
            'iv_subject.required' => 'Enter a subject',
            'iv_message.required' => 'Enter a message',
        ]);

        Mail::to(config('site.site.message-mail'))->send(new ContactMail($request->all()));

        return redirect()->back()->with([
            'message' => 'Message sent successfully'
        ]);
    }
}
