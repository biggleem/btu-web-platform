<?php

namespace App\Http\Controllers;

use App\Models\Faqs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FaqsController extends Controller
{
    public function get(){
        $faqs = Faqs::where('status','=',true)->get();
        if($faqs == null or $faqs == [] or $faqs == '[]'){
            return 'No faqs';
        }
        return $faqs;
    }

    public function update(Request $request){
        if(!Auth::check() or Auth::user()->role != 'admin' or Auth::user()->status=='blocked')return['status'=>'error'];
        if(!isset($request->blocks) or !is_array($request->blocks)) return ['status' => 'error'];
        $blocksarray = array();
        foreach($request->blocks as $block){
            array_push($blocksarray, explode(',',$block));
        }
        // 0 -> id, 1 -> question, 2 -> answer
        foreach($blocksarray as $block){
            if($block[0] == 0){
                if(strlen($block[1]) > 0 && strlen($block[2]) > 0) {
                    $faqs = new Faqs;
                    $faqs->question = $block[1];
                    $faqs->answer = $block[2];
                    $faqs->save();
                }
            }
            else{
                if(strlen($block[1]) == 0 or strlen($block[2]) == 0){
                    $faqs = Faqs::where('id','=',$block[0])->first();
                    $faqs->status = false;
                    $faqs->save();
                }
                else{
                    $faqs = Faqs::where('id','=',$block[0])->first();
                    $faqs->question = $block[1];
                    $faqs->answer = $block[2];
                    $faqs->status = true;
                    $faqs->save();
                }
            }
        }
        return 'success';
    }
}
