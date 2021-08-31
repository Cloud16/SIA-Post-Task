<?php

namespace App\Http\Controllers;

use App\Models\Bios;
use Illuminate\Http\Request;

class BiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $bio = Bios::latest()->paginate(5);
      return view ('bio.index', compact('bio'))
      ->with('i',(request()->input('page',1)-1)*5);
    }

    
    public function create()
    {
        return view('bio.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
         'Fullname' =>'required',
         'Address' => 'required',
         'Course' => 'requires',
        ]);

        Bios::create($request->all());

        return redirect()->route('bio.index')
         ->with('success','Bios created Succesfully ');
    }

    
    public function show(Bios $bios)
    {
        return view('bio.show',compact('bios'));
    }

    
    public function edit(Bios $bios)
    {
        return view('bio.edit',compact('bios'));
    }

    
    public function update(Request $request, Bios $bios)
    {
        $request->validate([

        ]);

        $bios->update($request->all());
        return redirect()->route('bio.index')
        ->with('success','Bios updated successfully');
    }

    
    public function destroy(Bios $bios)
    {
        $bios->delete();
        return redirect()->route('bio.index')
        ->with('success','Bios deleted successfully');
    }
}
