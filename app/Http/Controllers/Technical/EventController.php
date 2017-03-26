<?php
namespace App\Http\Controllers\Technical;

use App\Events\PostSaved;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Event;

class EventController extends Controller
{

    public function demo(){
        //php artisan event:generate
        Event::fire(new PostSaved('事件监听'));
    }

}