@extends('layouts.base')

@section('title','トップ')

@section('content')

  <!-- home -->
  <section class="home">
    <div class="home__bg">
      @include('includes.hamburgermenu')
      <div class="home-content-lead">
        <h1>新人フリーランスが</h1>
        <h1><span>活きる</span>IT業界を</h1>
        <h1>目指して</h1>
      </div>
      <div class="home-logo">
        <img src="{{ asset('images/logo.png') }}" alt="logo">
      </div>
    </div>
    <nav class="home-gnav" class="fixed">
      <ul class="home-gnav-list">
        <li class="home-gnav-item">
          <a href="#">HOME<br><span>ホーム</span></a>
        </li>
        <li class="home-gnav-item">
          <a href="#">FREELANCE<br><span>フリーランス様へ</span></a>
        </li>
        <li class="home-gnav-item">
          <a href="#">COMPANY<br><span>企業様へ</span></a>
        </li>
        <li class="home-gnav-item">
          <a href="#">NEWS<br><span>新着情報</span></a>
        </li>
        <li class="home-gnav-item">
          <a href="#">PRODUCTION<br><span>制作実績</span></a>
        </li>
      </ul>
    </nav>
  </section>
  <!-- /.home -->

  <!-- recommend-user -->
  <section class="recommend-user">
    <div class="recommend-user-bg">
      <div class="recommend-user-content">
        <h1 class="recommend-user-content-title">
          FREELANCE<br><span>フリーランス様へ</span>
        </h1>
        <ul class="recommend-user-content-item">
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
        </ul>
        <div class="recommend-user-content-link">
          <a href="#">フリーランス様ページへ<span>→</span></a>
        </div>
      </div>
    </div>
  </section>
  <!-- /.recommend-user -->

  <!-- recommend-company -->
  <section class="recommend-company">
    <div class="recommend-company-bg">
      <div class="recommend-company-content">
        <h1 class="recommend-company-content-title">
          COMPANY<br><span>企業様へ</span>
        </h1>
        <ul class="recommend-company-content-item">
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
        </ul>
        <div class="recommend-company-content-link">
          <a href="#">企業様ページへ<span>→</span></a>
        </div>
      </div>
    </div>
  </section>
  <!-- /.recommend-company -->

  <!-- info -->
  <section class="info">
    <div class="info-bg">
      <div class="info-content">
        <div class="news-content info-content__width">
          <h1 class="news-content-title" colspan="2">NEWS<br><span>新着情報</span></h1>
          <ul class="news-content-item-list">
            <li>
              <div class="news-content-date"><span>2021</span><br>06.01</div>
              <div class="news-content-item">合同会社プログラム・キッチン設立</div>
            </li>
            <li>
              <div class="news-content-date"><span>2021</span><br>06.01</div>
              <div class="news-content-item">合同会社プログラム・キッチン設立</div>
            </li>
            <li>
              <div class="news-content-date"><span>2021</span><br>06.01</div>
              <div class="news-content-item">合同会社プログラム・キッチン設立</div>
            </li>
            <li>
              <div class="news-content-date"><span>2021</span><br>06.01</div>
              <div class="news-content-item">合同会社プログラム・キッチン設立</div>
            </li>
          </ul>
        </div>
        <div class="result-content info-content__width">
          <h1 class="result-content-title">
            PRODUCTION<br><span>制作実績</span>
          </h1>
          <ul class="result-content-item">
            <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
            <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
            <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
            <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
            <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- /.info -->
@endsection