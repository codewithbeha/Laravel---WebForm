<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Status;
use Exception;

class PersonController extends Controller
{

    public function index()
    {
        $people = Person::with('status')->get();
        return view('welcome',compact('people'));
    }
    public function create() 
    {
        $statuses = Status::all();
        return view('people.create',compact('statuses'));
    }

    public function store(PersonRequest $request)
    {
        try
        {
            $data = $request->validated();
            Person::create($data);

            return redirect('/')->with('message','Application Added Succesfully');
        }
        catch(Exception $ex)
        {
            return redirect('/')->with('message','Application failed...'.$ex);
        }
    }

    // public function store(Request $request)
    // {
    //     $input = $request->all();
        
    //     Person::create($input);
    //     return redirect('/');
    // }

    public function delete($person){

        Person::find($person)->delete();
        return redirect()->back();
    }

} 
