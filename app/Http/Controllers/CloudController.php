<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cloud;
use App\Cloud2;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class CloudController extends Controller
{
    public function url($id){
        // dd($id);
        if($id==1){
            
            $clouds =DB::table('clouds')->orderBy('id','DESC')->simplePaginate(10);
            return view('/project/wook',compact('clouds'));
        } else if($id==2){
            
            $cloud2s =DB::table('cloud2s')->orderBy('id','DESC')->simplePaginate(10);

            return view('/project/min',compact('cloud2s'));
        }

    }

    public function store1(Request $request){
        // dd($request);
        $this->validate($request,[
            'name'=>'required',
            'content'=>'required',
            'pwd'=>'required'

        ]);
        $cloud = new Cloud();
        $cloud->name = $request->name;
        $cloud->content= $request->content;
        $cloud->pwd=Hash::make($request->pwd);
    
        $cloud->save();
        return back();

    }
    public function store2(Request $request){
        // dd($request);
        $this->validate($request,[
            'name'=>'required',
            'content'=>'required',
            'pwd'=>'required'

        ]);
        $cloud = new Cloud2();
        $cloud->name = $request->name;
        $cloud->content= $request->content;
        $cloud->pwd=Hash::make($request->pwd);
        
        $cloud->save();
        return back();

    }

    public function delete1($id)
    {
        // dd($id);
        $cloud=Cloud::findorFail($id);
        $cloud->delete();
        return back();
    }
    public function delete2($id)
    {
        // dd($id);
        $cloud=Cloud2::findorFail($id);
        $cloud->delete();
        return back();
    }

}
