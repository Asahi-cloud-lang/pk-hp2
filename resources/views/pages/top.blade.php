@extends('layouts.base')

@section('title','トップ')

@section('content')

  <!-- home -->
  <section class="home">
    <div class="home__bg">
      @include('includes.hamburgermenu')
      <div class="home__content-lead">
        <h1>新人フリーランスが</h1>
        <h1><span>活きる</span>IT業界を</h1>
        <h1>目指して</h1>
      </div>
      <div class="home__logo">
        <img src="{{ asset('images/logo.png') }}" alt="logo">
      </div>
    </div>
    <nav class="home__gnav" class="fixed">
      <ul class="home__gnav-list">
        <li class="home__gnav-item">
          <a href="#">HOME<br><span>ホーム</span></a>
        </li>
        <li class="home__gnav-item">
          <a href="#">FREELANCE<br><span>フリーランス様へ</span></a>
        </li>
        <li class="home__gnav-item">
          <a href="#">COMPANY<br><span>企業様へ</span></a>
        </li>
        <li class="home__gnav-item">
          <a href="#">NEWS<br><span>新着情報</span></a>
        </li>
        <li class="home__gnav-item">
          <a href="#">PRODUCTION<br><span>制作実績</span></a>
        </li>
      </ul>
    </nav>
  </section>
  <!-- /.home -->

  <!-- recommend-user -->
  <section class="recommend-user">
    <div class="recommend-user__bg">
      <div class="recommend-user__content">
        <h1 class="recommend-user__content-title">
          FREELANCE<br><span>フリーランス様へ</span>
        </h1>
        <ul class="recommend-user__content-item">
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
        </ul>
        <div class="recommend-user__content-link">
          <a href="#">フリーランス様ページへ<span>→</span></a>
        </div>
      </div>
    </div>
  </section>
  <!-- /.recommend-user -->

  <!-- recommend-company -->
  <section class="recommend-company">
    <div class="recommend-company__bg">
      <div class="recommend-company__content">
        <h1 class="recommend-company__content-title">
          COMPANY<br><span>企業様へ</span>
        </h1>
        <ul class="recommend-company__content-item">
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
        </ul>
        <div class="recommend-company__content-link">
          <a href="#">企業様ページへ<span>→</span></a>
        </div>
      </div>
    </div>
  </section>
  <!-- /.recommend-company -->

  <!-- info -->
  <section class="info">
    <div class="info__bg">
      <div class="info__content">
        <div class="news__content info__content--width">
          <h1 class="news__content-title" colspan="2">NEWS<br><span>新着情報</span></h1>
          <ul class="news__content-item-list">
            <li>
              <div class="news__content-date"><span>2021</span><br>06.01</div>
              <div class="news__content-item">合同会社プログラム・キッチン設立</div>
            </li>
            <li>
              <div class="news__content-date"><span>2021</span><br>06.01</div>
              <div class="news__content-item">合同会社プログラム・キッチン設立</div>
            </li>
            <li>
              <div class="news__content-date"><span>2021</span><br>06.01</div>
              <div class="news__content-item">合同会社プログラム・キッチン設立</div>
            </li>
            <li>
              <div class="news__content-date"><span>2021</span><br>06.01</div>
              <div class="news__content-item">合同会社プログラム・キッチン設立</div>
            </li>
          </ul>
        </div>
        <div class="result__content info__content--width">
          <h1 class="result__content-title">
            PRODUCTION<br><span>制作実績</span>
          </h1>
          <ul class="result__content-item">
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