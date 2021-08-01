@extends('layouts.base')

@section('title','企業')

@section('content')

  <section class="company">
    <div class="company-bg">
      <div class="company-top">
        <div class="company-top-image">
          <img src="{{ asset('images/company-top-img.png') }}" srcset="{{ asset('images/company-top-img@2x.png') }}" alt="#">
        </div>
        <div class="company-top-lead">
          <h1>新人フリーランスエンジニアに<br>お仕事を任せてみませんか？</h1>
          <img src="{{ asset('images/logo.png') }}" srcset="{{ asset('images/logo.png') }}" alt="#">
        </div>
      </div>
      <div class="company-lead">
        <div class="company-lead-title">
          <h2>新人エンジニアにお仕事を任せる2つのメリット</h2>
        </div>
        <div class="company-lead-content">
          <div class="company-lead-item">
            <h3>１　費用が抑えられる</h3>
            <img src="{{ asset('images/company-lead-img01.png') }}" srcset="{{ asset('images/company-lead-img01@2x.png') }}" alt="#">
          </div>
          <div class="company-lead-item">
            <h3>２　向上心の高い人材が多い</h3>
            <img src="{{ asset('images/company-lead-img02.png') }}" srcset="{{ asset('images/company-lead-img02@2x.png') }}" alt="#">
          </div>
        </div>
        <div class="company-lead-question">
          <img src="{{ asset('images/company-lead-question-img01.png') }}" srcset="{{ asset('images/company-lead-question-img01@2x.png') }}" alt="#">
          <img class="" src="{{ asset('images/company-lead-question-img02.png') }}" srcset="{{ asset('images/company-lead-question-img02.png') }}" alt="#">
        </div>
      </div>
      <div class="company-detail">
        <div class="company-detail-title">
          <h2>そんな不安を解消するために、<br>プログラム・キッチンでは、独自の取り組みをしています。</h2>
        </div>
        <div class="company-detail-content">
          <div class="company-detail-item">
            <h3><span>1　ベテランエンジニアによるフォロー</span></h3>
            <div class="company-detail-item__flex">
              <img src="{{ asset('images/company-detail-img01.png') }}" srcset="{{ asset('images/company-detail-img01@2x.png') }}" alt="#">
              <p>
                疑問点が出た場合も、<br>
                slackを使って、相談専用チャンネルで<br>
                他のメンバーに質問をすることができます。<br>
                また新人の成果物は<br>
                ベテランエンジニアがチェックし、<br>
                品質を担保します。
              </p>
            </div>
            <h3><span>２　月に1度のオンライン面談</span></h3>
            <div class="company-detail-item__flex">
              <p>
                月に1度、オンラインの面談を行っています。<br>
                不安点や案件の希望をヒアリングしています。
              </p>
              <img src="{{ asset('images/company-detail-img02.png') }}" srcset="{{ asset('images/company-detail-img02@2x.png') }}" alt="#">
            </div>
            <h3><span>３　日報提出による進捗確認</span></h3>
            <div class="company-detail-item__flex">
              <img src="{{ asset('images/company-detail-img03.png') }}" srcset="{{ asset('images/company-detail-img03@2x.png') }}" alt="#">
              <p>
                メンバーには日報を提出頂いています。<br>
                その日に生じた問題点をすぐに共有頂いたり、<br>
                万が一進捗に遅れがあっても、<br>
                すぐにカバーすることができます。
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>