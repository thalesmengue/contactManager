<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return view("index", compact("contacts"));
    }

    public function show($id)
    {
        return view('show_contact', [
            'contact' => Contact::query()->findOrFail($id),
        ]);
    }

    public function register()
    {
        return view("register_contact");
    }

    public function store(ContactStoreRequest $request)
    {
        Contact::query()->create($request->all());

        return redirect("/");
    }

    public function edit($id)
    {
        $contact = Contact::query()->find($id);
        return view("edit_contact", compact("contact"));
    }

    public function update(ContactStoreRequest $request, $id)
    {
        $movie = Contact::query()->find($id);
        $movie->update($request->all());

        return redirect("/");
    }

    public function softDelete($id)
    {
        $contact = Contact::query()->find($id);
        $contact->delete();

        return redirect("/");
    }

    public function destroy($id)
    {
        $contact = Contact::query()->find($id);
        $contact->forceDelete();

        return redirect("/");
    }
}
