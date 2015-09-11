<?php

namespace App\Http\Controllers;

use App\favorit;
use App\user;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\dic;
use Auth;





class diccontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('pages.index')->with('words','none');
    }

    public function search(request $request)
    {

       $key = $request->search;
        return redirect("search/$key");
    }


    public function show($id)
    {
       $words = dic::where('word',$id)->get();
        if($words){
            return view('pages.index')->with('words',$words);
        }
        else{
            return view('pages.notfound');
        }
    }

    public function fav($id)
    {
        if(Auth::user()) {
            $user = Auth::user();
            $word = dic::find($id);
            $fav = new favorit;
            $fav->name = $word->word;
            $fav->type = $word->wordtype;
            $fav->definition = $word->definition;
            $user->favorit()->save($fav);

            return redirect()->back();
        }
        else{
            return redirect('/');
        }

    }

    public function favorit()
    {
        if(Auth::user()){
            $user = Auth::user();
            $favs = $user->favorit()->paginate(7);
            return view('pages.favorit')->with('favs',$favs)->with('yes','yes');
        }
    }

    public function delete($id)
    {
        if(Auth::user()) {
            $fav = favorit::find($id);
            $user_id = Auth::user()->id;
            if($fav->user_id==$user_id){
                favorit::destroy($id);
                return redirect()->back();
            }

        }
        else{
            return redirect('/');
        }
    }

    public function addnewfav(request $request)
    {
        if(Auth::user()){
            $user=Auth::user();
            $fav = new favorit;
            $fav->name = $request->name;
            $fav->type = $request->type;
            $fav->definition = $request->definition;
            $user->favorit()->save($fav);
           return redirect()->back();

        }
        else{
            return redirect('/');
        }
    }
}
