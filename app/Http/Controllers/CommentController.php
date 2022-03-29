<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function addComment(Request $request){
        if(!Auth::check() or Auth::user()->status == 'blocked')return ['status'=>'error'];
        if(isset($request->productId) && isset($request->description) && isset($request->status)){
            if(is_numeric($request->productId) && Product::where('id','=',(int)$request->productId)->where('userId','!=',Auth::user()->id)->where('status','=','approved')->first() != null && Comment::where('productId','=',$request->productId)->where('userId','=',Auth::user()->id)->where('commentStatus','!=',false)->first() == null){
                if($request->status != '0' and $request->status != '1') return ['status'=>'error'];
                if(strlen($request->description) > 500)return ['status'=>'error'];
                $newcomment = new Comment;
                $newcomment->userId = Auth::user()->id;
                $newcomment->productId = (int)$request->productId;
                $newcomment->status = $request->status;
                $newcomment->description = $request->description;
                $newcomment->save();
                return ['status' => 'success'];
            }
            else{
                return ['status'=>'error'];
            }
        }
        return ['status'=>'error'];
    }
    public function editComment(Request $request){
        if(!Auth::check() or Auth::user()->status == 'blocked')return ['status'=>'error'];
        if(isset($request->commentId) && is_numeric($request->commentId) && isset($request->description) && isset($request->status)){
                if($request->status != '0' and $request->status != '1') return ['status'=>'error'];
                if(strlen($request->description) > 500)return ['status'=>'error'];
                $comment = Comment::where('id','=',(int)$request->commentId)->where('userId','=',Auth::user()->id)->where('commentStatus','!=',false)->first();
                if($comment == null) return ['status'=>'error'];
                $comment->status = $request->status;
                $comment->description = $request->description;
                $comment->save();
                return ['status' => 'success'];
        }
        return ['status'=>'error'];
    }

    public function deleteComment($id){
        if(!Auth::check() or Auth::user()->status == 'blocked')return ['status'=>'error'];
        $comment = Comment::where('id','=',(int)$id)->where('userId','=',Auth::user()->id)->where('commentStatus','!=',false)->first();
        if($comment == null) return ['status'=>'error'];
        $comment->commentStatus = false;
        $comment->save();
        return ['status' => 'success'];
    }
    public function getmycomment($id){
        if(!Auth::check() or Auth::user()->status == 'blocked')return 'no auth';
        $comment = Comment::where('userId','=',Auth::user()->id)->where('productId','=',$id)->where('commentStatus','=',true)->first();
        if($comment == null) return 'no comment';
        return $comment;
    }
    public function getproductcomments($id){
        $comments = Comment::where('comments.productId','=',$id)->where('comments.commentStatus','=',true)->join('users', 'users.id','=','comments.userId')->select('comments.*','users.name')->get();
        if($comments == '[]') return 'no comments';
        return $comments;
    }
}
