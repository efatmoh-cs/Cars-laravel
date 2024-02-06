<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\MyMail;
use Illuminate\Http\RedirectResponse;
use PhpParser\Node\Expr\AssignOp\Concat;

class ContactController extends Controller
{

    public function send(Request $request): RedirectResponse
    {
        $contact=
        $request->validate(
                        [
                    'firstname' => 'required|string|max:255',
                    'lastname'  =>'required|string|max:255',
                    'email'  => 'required|email',
                     'message' => 'required|string',
                        ]

                    );

    Contact::create($contact);
        Mail::to('recipient@email.com')->send(
            new ContactMail($contact),
        );
        return redirect('Admin.messages');
        // return "mail sent!";
      // dd('sent');
    }
    public function store(Request $request): RedirectResponse
    {
        $contact = Contact::findOrFail($request->order_id);

        // Ship the order...

        Mail::to($request->user())->send(new ContactMail($contact));

        return redirect('Admin.messages');
    }
    public function index()
    {
        $messages =  Contact::get();
        
        return view('Admin.messages', compact('messages'));
    }
    public function show(string $id)
    {
        $message= Contact::findOrFail($id);

        return view('Admin.showmessage', compact('message'));
    }

    public function destroy(string $id):RedirectResponse
    {
        Contact:: where ('id', $id)->forceDelete();
        return redirect('Admin.messages');}

}
