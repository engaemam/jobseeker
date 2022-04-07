<?php

namespace App\Http\Controllers;
use App\Ministry;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\MinistryRequest;
class MinistryController extends Controller
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
        return view('forms.ministry');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MinistryRequest $request)
    {
        $user=User::find($request->id);
        $user->role=1;
        $user->update();
        $ministry=new Ministry();
        $ministry->name=$request->name;
        $ministry->details=$request->details;
        $ministry->address=$request->address;
        $ministry->user_id=$request->id;
        $file = $request->file('img');
        $filename = time() . '.' . $file->getClientOriginalName();
        $path = 'upload/ministry';
        $file->move($path, $filename);
        $ministry->img=$filename;
        $ministry->save();
        return back()->with('success',' Ministry added successfully');

    }

    public function resume($resume)
    {
        return view('front.resume',compact(['resume']));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ministry22=Ministry::find($id);

        return view('front.ministry',compact(['ministry22']));

    }
    public function jobs($id)
    {
        $ministry22=Ministry::find($id);
        $jobs=$ministry->jobs()->get();
        return view('front.mjobs',compact(['ministry','jobs']));

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ministry=Ministry::find($id);
        return view('front.eministry',compact('ministry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MinistryRequest $request)
    {
        $user=User::find($request->id);
        $user->role=1;
        $user->update();
        $ministry=Ministry::find($request->mid);
        $ministry->name=$request->name;
        $ministry->details=$request->details;
        $ministry->address=$request->address;
        $ministry->user_id=$request->id;
        $file = $request->file('img');
        $filename = time() . '.' . $file->getClientOriginalName();
        $path = 'upload/ministry';
        $file->move($path, $filename);
        $ministry->img=$filename;
        $ministry->update();
        return back()->with('success',' Ministry added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ministry=Ministry::find($id)->delete();
        return redirect('/');
    }
}
