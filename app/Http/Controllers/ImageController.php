<?php

namespace App\Http\Controllers;
use App\Image;
use Illuminate\Http\Request;


class ImageController extends Controller{
    public function upload(Request $request){
        $image=$request->file('image');
        if($image) {
            //アップロードされた画像を保存する
            $path = $image->store('uploads',"public");
            //画像の保存に成功したらDBに記録する
            if($path){
            Image::create([
                "file_name" => $image->getClientOriginalName(),
            ]);
            }
        }
        return view("memory/complete");
    }
/*    2021.04.18確認画面を実装するときに使用
    public function complete(Request $request){
        $this->upload();
        if($image) {
            //画像の保存に成功したらDBに記録する
            if($path){
                Image::create([
                    "file_name" => $image->getClientOriginalName(),
                ]);
            }
        }
        $upload_class =new ImageController();
        return view("memory/complete");
    }
*/
}
