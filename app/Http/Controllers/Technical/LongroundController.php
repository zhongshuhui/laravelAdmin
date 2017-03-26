<?php
namespace App\Http\Controllers\Technical;

use App\Events\PostSaved;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Event;

class LongroundController extends Controller
{
    public function demo1(){
        return view('admin.technical.list');
    }


    public function demo2(){
        print_r(json_encode(array('success'=>'存在数据，返回')));
        exit();
    }

}