<?php

use App\Http\Controllers\UploadController;
use App\Models\Setting;

if(!function_exists('check_gate')){
    function check_gate($ability){
        if (\Illuminate\Support\Facades\Gate::denies($ability)){
            abort(403);
        }
    }
    if(!function_exists('validate_image')){
        function validate_image($ext = null){
            if ($ext === null) return 'file|image|mimes:webp,jpeg,png,jpg,bmp,gif|max:5120';
            else return 'image|mime:'.$ext;
        }
    }
    if(!function_exists('upload_file')){
        function upload_file(){
            return new UploadController();
        }
    }
    if(!function_exists('setting')){
        function setting(){
            return Setting::orderBy('id','desc')->first();
        }
    }
}
