<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{

    #indexアクションを定義
    public function index() {
        $all_info = [
            ['title' => 'ホームページ作成', 'content' => 'この文章はダミーです。', 'date' => "2021.01.01"],
            ['title' => 'アプリ開発', 'content' => 'この文章はダミーです。', 'date' => "2021.01.02"],
            ['title' => 'スマホアプリ開発', 'content' => 'この文章はダミーです。', 'date' => "2021.01.03"],
            ['title' => 'ホームページ作成', 'content' => 'この文章はダミーです。', 'date' => "2021.01.04"],
            ['title' => 'アプリ作成', 'content' => 'この文章はダミーです。', 'date' => "2021.01.05"],
            ['title' => 'アプリ開発', 'content' => 'この文章はダミーです。', 'date' => "2021.01.06"],
            ['title' => 'スマホアプリ開発', 'content' => 'この文章はダミーです。', 'date' => "2021.01.07"],
            ['title' => 'ホームページ作成', 'content' => 'この文章はダミーです。', 'date' => "2021.01.08"],
            ['title' => 'ホームページ作成', 'content' => 'この文章はダミーです。', 'date' => "2021.01.09"],
            ['title' => 'アプリ開発', 'content' => 'この文章はダミーです。', 'date' => "2021.01.10"],
            ['title' => 'スマホアプリ開発', 'content' => 'この文章はダミーです。', 'date' => "2021.01.11"],
            ['title' => 'ホームページ作成', 'content' => 'この文章はダミーです。', 'date' => "2021.01.12"],
        ];
        return view('./pages/top');
    }
}
