<?php

namespace App\Http\Controllers;
use App\User;
use App\Account;
use App\Job;
use Illuminate\Http\Request;
use App\Http\Requests\AccountRequest;
use Illuminate\Support\Facades\auth;
class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('front.accounts',compact(['users']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.account');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccountRequest $request)
    {
        $account=new Account();
        $user_id=Auth::user()->id;
        $account->likes=$request->likes;
        $account->dislikes=$request->dislikes;
        $account->country=$request->country;
        $account->summary=$request->summary;
        $account->experience=$request->experience;
        $account->gy=$request->gy;
        $account->phone=$request->phone;
        $account->sex=$request->sex;
        $account->user_id=$user_id;
        $file = $request->file('img');
        $file1 = $request->file('resume');
        $filename = time() . '.' . $file->getClientOriginalName();
        $filename1 = time() . '.' . $file1->getClientOriginalName();
        $path = 'upload/account';
        $path1 = 'upload/resumes';
        $file->move($path, $filename);
        $file1->move($path1, $filename1);
        $account->img=$filename;
        $account->resume=$filename1;
        $account->save();
        return redirect('/account/show');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
     $account=Auth::user()->account()->get();  
     if($account->isEmpty()) {
        return redirect('/account/create');
     }else{
        return view('front.account',compact(['account']));
     }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        $account=$user->account()->get()->first();
        return view('front.eaccount',compact(['account']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AccountRequest $request)
    {
        $account=Account::find($request->aid);
        $user_id=Auth::user()->id;
        $account->likes=$request->likes;
        $account->dislikes=$request->dislikes;
        $account->country=$request->country;
        $account->summary=$request->summary;
        $account->experience=$request->experience;
        $account->gy=$request->gy;
        $account->phone=$request->phone;
        $account->sex=$request->sex;
        $account->user_id=$user_id;
        $file = $request->file('img');
        $file1 = $request->file('resume');
        $filename = time() . '.' . $file->getClientOriginalName();
        $filename1 = time() . '.' . $file1->getClientOriginalName();
        $path = 'upload/account';
        $path1 = 'upload/resumes';
        $file->move($path, $filename);
        $file1->move($path1, $filename1);
        $account->img=$filename;
        $account->resume=$filename1;
        $account->update();
        return redirect('/account/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id)->delete();
        return back();
    }
    public function viewAccount($id)
    {
     $account=User::find($id)->account()->get();  
     
        return view('front.account',compact(['account']));
     
   
    }
    
}
