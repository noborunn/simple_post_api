<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB; //←追加。DB接続に必要なクラスをインポートする。

class PostController extends Controller
{
    public function post(Request $request) {
        $param = [
            'name' => $request->input('name'),
            'price' => $request->input('price'),
        ];
        //DBに接続しデータを挿入する。第１パラメータにSQL文、第２に$paramを。
        DB::insert('insert into items (name, price) values (:name, :price)', $param);
    }
}
