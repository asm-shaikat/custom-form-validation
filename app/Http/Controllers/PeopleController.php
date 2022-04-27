<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|max:100',
            'email' => 'required|unique:people',
            'password' => 'required|min:6',
            'mobile' => 'required|max:11'
        ]);
        $x= new People();
        $x->fname = $request->has('fname') ? $request->get('fname'):" ";
        $x->email = $request->has('email') ? $request->get('email'):" ";
        $x->mobile = $request->has('mobile') ? $request->get('mobile'):" ";
        $x->password = $request->has('password') ? $request->get('password'):" ";
        $x->cpassword = $request->has('cpassword') ? $request->get('cpassword'):" ";
        if($x->password==$x->cpassword){
        $x->save();
        return redirect()->back()->with('success',"Form submission successful");
        }
        else
        return redirect()->back()->with('error','Form submission failed');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function show(People $people)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function edit(People $people)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, People $people)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy(People $people)
    {
        //
    }
}
