<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function store_contact(Request $request)
    {
    //dd($request->all());
       $request->validate([
        'name' => 'required',
        'email' => 'email',
        'message' => 'required',
        'phone' => 'required',
       ]);

       Contact::create($request->all());

       return redirect()->route('HomeIndexClient')->with('success_contact', 'Merci de nous avoir contactés ! Vous recevrez un message dans les 24 heures pour votre requête.👍');
    }

    //side admin
    public function index_admin()
    {
        $contacts = Contact::latest()->paginate(2);


        return view('admin.contacts.index', compact('contacts'));
    }

}
