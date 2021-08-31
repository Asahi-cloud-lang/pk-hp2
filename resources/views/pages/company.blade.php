@extends('layouts.base')

@section('title','企業')

@section('content')

  <section class="company">
    <div class="company__bg">
      @include('includes.hamburgermenu')
      <div class="company__top">
        <div class="company__top-img">
          <img src="{{ asset('images/company-top-img.png') }}" srcset="{{ asset('images/company-top-img@2x.png') }}" alt="#">
        </div>
        <div class="company__top-img-responsive">
          <img src="{{ asset('images/company-top-responsive-img.png') }}" srcset="{{ asset('images/company-top-responsive-img@2x.png') }}" alt="#">
        </div>
        <div class="company__top-lead">
          <h1>新人フリーランスエンジニアに<br>お仕事を任せてみませんか？</h1>
          <img src="{{ asset('images/logo.png') }}" srcset="{{ asset('images/logo.png') }}" alt="#">
        </div>
      </div>
      <div class="company__lead">
        <div class="company__lead-title">
          <h2>新人エンジニアに<br>お仕事を任せる<br>2つのメリット</h2>
        </div>
        <div class="company__lead-content">
          <div class="company__lead-item">
            <h3>１　費用が抑えられる</h3>
            <img src="{{ asset('images/company-lead-img01.png') }}" srcset="{{ asset('images/company-lead-img01@2x.png') }}" alt="#">
            <img class="company__lead-responsive-item" src="{{ asset('images/company-lead-responsive-img01.png') }}" srcset="{{ asset('images/company-lead-responsive-img01@2x.png') }}" alt="#">
          </div>
          <div class="company__lead-item">
            <h3>２　向上心の高い人材が多い</h3>
            <img src="{{ asset('images/company-lead-img02.png') }}" srcset="{{ asset('images/company-lead-img02@2x.png') }}" alt="#">
            <img class="company__lead-responsive-item" src="{{ asset('images/company-lead-responsive-img02.png') }}" srcset="{{ asset('images/company-lead-responsive-img02@2x.png') }}" alt="#">
          </div>
        </div>
        <div class="company__lead-question">
          <img src="{{ asset('images/company-lead-question-img01.png') }}" srcset="{{ asset('images/company-lead-question-img01@2x.png') }}" alt="#">
          <img class="" src="{{ asset('images/company-lead-question-img02.png') }}" srcset="{{ asset('images/company-lead-question-img02.png') }}" alt="#">
        </div>
      </div>
      <div class="company__detail">
        <div class="company__detail-title">
          <h2 class="company__detail-responsive-title">いくら費用が<br>抑えられると言われても、<br>本当に良い人材なのか、<br>お仕事を任せられるのか不安…</h2>
          <h2>そんな不安を解消するために、<br>プログラム・キッチンでは、<br class="company__detail-responsive-title">独自の取り組みをしています。</h2>
        </div>
        <div class="company__detail-content">
          <div class="company__detail-item">
            <h3><span>1　ベテランエンジニア<br>によるフォロー</span></h3>
            <div class="company__detail-item--flex">
              <img src="{{ asset('images/company-detail-img01.png') }}" srcset="{{ asset('images/company-detail-img01@2x.png') }}" alt="#">
              <p>
                <span>疑問点が出た場合も、<br>
                slackを使って、相談専用チャンネルで<br>
                他のメンバーに質問をすることができます。<br>
                また</span>新人の成果物は<br>
                ベテランエンジニアがチェックし、<br>
                品質を担保します。
              </p>
            </div>
            <h3><span>２　月に1度のオンライン面談</span></h3>
            <div class="company__detail-item--flex">
              <p>
                月に1度、<br class="company__detail-responsive-item">オンラインの面談を行っています。<br>
                不安点や案件の希望を<br class="company__detail-responsive-item">ヒアリングしています。
              </p>
              <img src="{{ asset('images/company-detail-img02.png') }}" srcset="{{ asset('images/company-detail-img02@2x.png') }}" alt="#">
            </div>
            <h3><span>３　日報提出による進捗確認</span></h3>
            <div class="company__detail-item--flex">
              <img src="{{ asset('images/company-detail-img03.png') }}" srcset="{{ asset('images/company-detail-img03@2x.png') }}" alt="#">
              <p>
                メンバーには<br class="company__detail-responsive-item">日報を提出頂いています。<br>
                その日に生じた問題点を<br class="company__detail-responsive-item">すぐに共有頂いたり、<br>
                万が一進捗に遅れがあっても、<br>
                すぐにカバーすることができます。
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>