<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use View;
class mainController extends Controller
{
    public function guest_view()
    {
        return View('guest');
    }

    public function kitchan_view()
    {
        $sql=DB::table('food')->get();
        return view('kitchan', [
            'sql'=>$sql
        ]);
    }
    public function _modify()
    {
        $sql=DB::table('food')->get();
        return view('modify', [
            'sql'=>$sql
        ]);
    }
    public function modify_order(Request $request,$snumber)
    {
        DB::table('food')->where('number','=',$snumber)->update(
            ['number'=>"$snumber",'main'=>"$request->main",'dish'=>"$request->dish",'drink'=>$request->drink]
        );;
        return redirect()->back();
    }
    public function submit(Request $request)
    {

        $number=date("his",strtotime('+8HOUR'));
        DB::table('food')->insert(
            ['number'=>"$number",'main'=>"$request->main",'dish'=>"$request->dish",'drink'=>$request->drink]
            );
        //return redirect()->back()->with('k1','1');
        return View('guest',['k1'=>$number],['k2'=>$request->main])->with('k3',$request->dish)->with('k4',$request->drink);
    }
    public function _out($snumber)
    {
        DB::table('food')->where('number','=',$snumber)->delete();
        return redirect()->back();
    }
}
