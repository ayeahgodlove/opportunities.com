<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateContactUsRequest;
use App\Models\Contact;
use Mail;

class ContactUsFormController extends Controller
{
    // Create Contact Form
    public function createForm(Request $request) {
        return view('pages.contact');
      }
  
      // Store Contact Form data
    public function contactUsForm(Request $request) {

        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);
        
        // dd($request->all());

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();
        
        return back()->with('success', 'Thank you for contact us!');
    }
}
