<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }
    
    public function services(){
        return view('pages.services');
    }
    
    
    function feedBack(Request $req){
        $data = $req->input();
      
        DB::table('feedback')
            ->updateOrInsert(['user' => auth()->user()->name],
                            ['impression' => $data['impression'], 'hear' => $data['hear'], 'missing' => $data['missing'], 'recommend' => $data['recommend'], 'useful' => $data['useful'], 'problems' => $data['problems']]
                        );
      
        
        return redirect('/')->with('success', 'Your feedback has been successfully submitted.');
    }




}
