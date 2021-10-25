<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\HelloEmail;
use Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->all();
        Mail::to('hiroto_asahi@yahoo.co.jp')->send(new HelloEmail($data));
        session()->flash('success', '送信いたしました！');
        return back();
    }
}
