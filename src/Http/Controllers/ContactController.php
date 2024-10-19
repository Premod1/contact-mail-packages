<?php

namespace Lopzy\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Lopzy\Contact\Mail\ContactMailable;
use Lopzy\Contact\Models\Contact;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return response()->json($contacts);
    }

    public function send(Request $request)
    {
        try {
            Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name, $request->email));


            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->message = $request->message;
            $contact->save();

            return response()->json([
                'success' => true,
                'message' => 'Contact message sent and saved successfully'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to send message or save contact',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
