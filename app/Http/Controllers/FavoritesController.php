<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * 投稿をお気に入りに登録するリアクション。
     * 
     * @param $id 投稿のid
     * @return \Illuminate\Http\Response
     */
     public function store($id)
     {
         // 認証済みユーザ（閲覧者）が、投稿をお気に入りに登録する
         \Auth::user()->favorite($id);
         // 前のURLへリダイレクトさせる
         return back();
     }
     
     /**
      * 投稿のお気に入りを解除するアクション。
      * 
      * @param $id 投稿のid
      * @return \Illuminate\Http\Reponse
      */
      public function destroy($id)
      {
          //認証済みユーザ（閲覧者）が、投稿のお気に入りを解除する
          \Auth::user()->unfavorite($id);
          //前のURLへリダイレクトさせる
          return back();
      }
}
