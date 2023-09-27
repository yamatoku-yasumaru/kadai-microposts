<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFollowController extends Controller
{
    /**
     * ユーザをフォローするリアクション。
     * 
     * @param $id 相手のユーザのid
     * @return \Illuminate\Http\Response
     */
     public function store($id)
     {
         // 認証済みユーザ（閲覧者）が、idのユーザをフォローする
         \Auth::user()->follow($id);
         // 前のURLへリダイレクトさせる
         return back();
     }
     
     /**
      * ユーザをアンフォローするアクション。
      * 
      * @param $id 相手ユーザのid
      * @return \Illuminate\Http\Reponse
      */
      public function destroy($id)
      {
          //認証済みユーザ（閲覧者）が、idのユーザをアンフォローする
          \Auth::user()->unfollow($id);
          //前のURLへリダイレクトさせる
          return back();
      }
}
