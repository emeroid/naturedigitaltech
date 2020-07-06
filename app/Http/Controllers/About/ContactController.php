<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $rules = [
            'full_name' => 'required|string|regex:/^[0-9A-Za-z ]*$/i',
            'mobile' => 'nullable|string|regex:/^[0-9]*$/i',
            'email' => 'required|email|max:255',
            'body' => 'required|string',
        ];

        //dd($request->all());
        $this->validate($request, $rules);
        Mail::send(new ContactMail($request));
        //$mail->send();

        return redirect()->back()->with('success', 'Message sent, our agent will contact you via mail');

    }
}
