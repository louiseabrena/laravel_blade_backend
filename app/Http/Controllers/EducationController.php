<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

use App\Models\Education;

class EducationController extends Controller
{
    public function list()
    {
        return view('education.list', [
            'education' => Education::all()
        ]);
    }

    public function addForm()
    {
        return view('education.add', [
            'education' => Education::all(),
        ]);
    }

    public function add()
    {

        $attributes = request()->validate([
            'institution' => 'required',
            'certification' => 'required',
            'description' => 'required',
            'year' => 'required',
            
        ]);

        $education = new Education();
        $education->institution = $attributes['institution'];
        $education->certification = $attributes['certification'];
        $education->description = $attributes['description'];
        $education->year = $attributes['year'];
        $education->save();

        return redirect('/console/education/list')
            ->with('message', 'Education has been added!');
    }

    public function editForm(Education $education)
    {
        return view('education.edit', [
            'education' => $education,
            'education' => Education::all(),
        ]);
    }

    public function edit(Education $education)
    {

        $attributes = request()->validate([
            'institution' => 'required',
            'certification' => 'required',
            'description' => 'required',
            'year' => 'required',
        ]);

        $education->institution = $attributes['institution'];
        $education->certification = $attributes['certification'];
        $education->description = $attributes['description'];
        $education->year = $attributes['year'];
        $education->save();

        return redirect('/console/education/list')
            ->with('message', 'Education has been edited!');
    }

    public function delete(Education $education)
    {

        if($education->image)
        {
            Storage::delete($education->image);
        }
        
        $education->delete();
        
        return redirect('/console/education/list')
            ->with('message', 'Education has been deleted!');        
    }

    public function imageForm(Education $education)
    {
        return view('education.image', [
            'education' => $education,
        ]);
    }

    public function image(Education $education)
    {

        $attributes = request()->validate([
            'image' => 'required|image',
        ]);

        if($education->image)
        {
            Storage::delete($education->image);
        }
        
        $path = request()->file('image')->store('education');

        $education->image = $path;
        $education->save();
        
        return redirect('/console/education/list')
            ->with('message', 'Education image has been edited!');
    }

}
