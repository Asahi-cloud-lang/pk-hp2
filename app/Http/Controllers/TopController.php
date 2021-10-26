<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infomation;

class TopController extends Controller
{
    public function index ()
    {
        $news = Infomation::orderBy('maked_at', 'desc')->get();
        return view('/pages/top', [ "news" => $news]);
    }
}
