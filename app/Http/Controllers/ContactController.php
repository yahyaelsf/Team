<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('Admin.Contacts.index')->with('contacts', Contact::all());
    }
    public function store(Request $request)
    {

        $this->validate($request,[
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'message'=>'required',
        ]);

        $contact= Contact::Create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'message' => $request->message,

        ]);

        $contact->save();




        return redirect()->route('home')->with(['success' => 'تم الحفظ بنجاح']);

    }
    public function destroy($id)
    {

        try {
            $contact = Contact::find($id);
            if (!$contact)
                return redirect()->route('contact.index')->with(['error' => 'هذا القسم غير موجود ']);
            $contact->delete();
            return redirect()->route('contact.index')->with(['success' => 'تم حذف القسم بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('contact.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

}
