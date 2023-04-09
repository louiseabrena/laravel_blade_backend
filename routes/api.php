<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Skill;
use App\Models\User;
use App\Models\Project;
use App\Models\Contact;
use App\Models\Education;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/skills', function(){

    $skills = Skill::orderBy('language')->get();
    return $skills;

});

Route::get('/projects', function(){

    $projects = Project::orderBy('created_at')->get();

    foreach($projects as $key => $project)
    {
        $projects[$key]['user'] = User::where('id', $project['user_id'])->first();
        $projects[$key]['skill'] = Skill::where('id', $project['skill_id'])->first();

        if($project['image'])
        {
            $projects[$key]['image'] = env('APP_URL').'storage/'.$project['image'];
        }
    }

    return $projects;

});

Route::get('/projects/profile/{project?}', function(Project $project){

    $project['user'] = User::where('id', $project['user_id'])->first();
    $project['skill'] = Skill::where('id', $project['skill_id'])->first();

    if($project['image'])
    {
        $project['image'] = env('APP_URL').'storage/'.$project['image'];
    }

    return $project;

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/contacts', function(){

    $contacts = Contact::orderBy('title')->get();

    return $contacts;

});

Route::get('/education', function(){

    $education = Education::orderBy('institution')->get();

    return $education;

});

Route::get('/users', function(){

    $users = User::orderBy('first')->get();

    return $users;

});

