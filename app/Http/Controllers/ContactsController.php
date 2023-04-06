<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

use App\Models\Contact;

class ContactsController extends Controller
{
    public function list()
    {
        return view('contacts.list', [
            'contacts' => Contact::all()
        ]);
    }
        public function addForm()
    {
        return view('contacts.add', [
            'contacts' => Contact::all(),
        ]);
    }

    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'url' => 'nullable|url',
        ]);

        $contact = new Contact();
        $contact->title = $attributes['title'];
        $contact->url = $attributes['url'];
        $contact->save();

        return redirect('/console/contacts/list')
            ->with('message', 'Contact has been added!');
    }

    public function editForm(Contact $contact)
    {
        return view('contacts.edit', [
            'contact' => $contact,
            'contacts' => Contact::all(),
        ]);
    }

    public function edit(Contact $contact)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'url' => 'nullable|url',
        ]);

        $contact->title = $attributes['title'];
        $contact->url = $attributes['url'];
        $contact->save();

        return redirect('/console/contacts/list')
            ->with('message', 'Contact has been edited!');
    }

    public function delete(Contact $contact)
    {

        if($contact->image)
        {
            Storage::delete($contact->image);
        }
        
        $contact->delete();
        
        return redirect('/console/contacts/list')
            ->with('message', 'Contact has been deleted!');        
    }

    public function imageForm(Contact $contact)
    {
        return view('contacts.image', [
            'contact' => $contact,
        ]);
    }

    public function image(Contact $contact)
    {

        $attributes = request()->validate([
            'image' => 'required|image',
        ]);

        if($contact->image)
        {
            Storage::delete($contact->image);
        }
        
        $path = request()->file('image')->store('contacts');

        $contact->image = $path;
        $contact->save();
        
        return redirect('/console/contacts/list')
            ->with('message', 'Contact image has been edited!');
    }
}
