<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    function Index()
    {   $contacts = Contact::all();
        return view("welcome",[
            "contacts"=>$contacts
        ]);
    }
    function NewContact(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->gender = $request->gender;
        $contact->save();

        return redirect()->to('/');
    }
    function Delete()
    {
        DB::table('contacts')->delete();
        return redirect()->to('/');
    }
}
