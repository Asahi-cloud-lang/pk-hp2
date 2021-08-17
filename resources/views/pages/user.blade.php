@extends('layouts.base')

@section('title','フリーランス')

@section('content')

  <section class="user">
    <div class="user-bg">
      <div class="user-top">
        @include('includes.hamburgermenu')
        <div class="user-top-img">
          <img src="{{ asset('images/top-user-img.png') }}" srcset="{{ asset('images/top-user-img@2x.png') }}" alt="#">
        </div>
        <div class="user-top-img-responsive">
          <img src="{{ asset('images/top-user-responsive-img.png') }}" srcset="{{ asset('images/top-user-responsive-img@2x.png') }}" alt="#">
        </div>
        <div class="user-top-logo">
          <img src="{{ asset('images/logo.png') }}" srcset="{{ asset('images/logo.png') }}" alt="#">
        </div>
      </div>
      <div class="user-lead">
        <div class="user-lead-content">
          <h2>Case1　経験がないので不安</h2>
          <div class="users-lead-img">
            <img src="{{ asset('images/user-lead-img01.png') }}" srcset="{{ asset('images/user-lead-img01@2x.png') }}" alt="#">
          </div>
          <div class="users-lead-responsive-img">
            <img src="{{ asset('images/user-lead-responsive-img01.png') }}" srcset="{{ asset('images/user-lead-responsive-img01@2x.png') }}" alt="#">
          </div>
          <p>
            プログラミングの基礎知識はあるが、<br>
            フリーランスとしての実務経験がないので、<br>
            仕事を進められるかが不安。
          </p>
        </div>
        <div class="user-lead-content">
          <h2>Case2　スキル不足が心配</h2>
          <div class="users-lead-img">
            <img src="{{ asset('images/user-lead-img02.png') }}" srcset="{{ asset('images/user-lead-img02@2x.png') }}" alt="#">  
          </div>
          <div class="users-lead-responsive-img">
            <img src="{{ asset('images/user-lead-responsive-img02.png') }}" srcset="{{ asset('images/user-lead-responsive-img02@2x.png') }}" alt="#">
          </div>
          <p>
            副業として、仕事を開始したが、<br>
            まだ本業では研修段階のため、<br>
            1人で仕事をすることは、難しそうだ。
          </p>
        </div>
      </div>
      <div class="user-catch">
        <div class="user-catch-lead">
          <h2>プログラム・キッチンなら<br>大丈夫！</h2>
          <h2>万全のフォロー体制が<br>整っています。</h2>
        </div>
        <div class="user-catch-content">
          <div class="user-catch-item">
            <img src="{{ asset('images/user-catch-img01.png') }}" srcset="{{ asset('images/user-catch-img01@2x.png') }}" alt="#">
            <p>チャットツールで<br>気軽に質問</p>
          </div>
          <div class="user-catch-item">
            <img src="{{ asset('images/user-catch-img02.png') }}" srcset="{{ asset('images/user-catch-img02@2x.png') }}" alt="#">
            <p>月に1度の面談</p>
          </div>
          <div class="user-catch-item">
            <img src="{{ asset('images/user-catch-img03.png') }}" srcset="{{ asset('images/user-catch-img03@2x.png') }}" alt="#">
            <p>こまめな進捗確認</p>
          </div>
        </div>
        <div class="user-catch-detail">
          <div class="user-catch-detail-item">
            <h2><span>1　slackで気軽に質問</span></h2>
            <div class="user-catch-detail__flex">
              <img src="{{ asset('images/user-catch-img04.png') }}" srcset="{{ asset('images/user-catch-img04@2x.png') }}" alt="#">
              <p class="user-catch-detail-description">
                疑問点が出た場合も、<br>
                slackを使って、<br class="user-catch-detail__br">相談専用チャンネルで<br>
                他のメンバーに<br class="user-catch-detail__br">質問をすることができます。
              </p>
            </div>
          </div>
          <div class="user-catch-detail-item">
            <h2><span>２　月に1度のオンライン面談</span></h2>
            <div class="user-catch-detail__flex">
              <p class="user-catch-detail-description">
                月に1度、<br class="user-catch-detail__br">オンラインの面談を行っています。<br>
                不安点や案件の希望を<br class="user-catch-detail__br">ヒアリングしています。
              </p>
              <img src="{{ asset('images/user-catch-img05.png') }}" srcset="{{ asset('images/user-catch-img05@2x.png') }}" alt="#">
            </div>
          </div>
          <div class="user-catch-detail-item">
            <h2><span>３　日報提出による進捗確認</span></h2>
            <div class="user-catch-detail__flex">
              <img src="{{ asset('images/user-catch-img06.png') }}" srcset="{{ asset('images/user-catch-img06@2x.png') }}" alt="#">
              <p class="user-catch-detail-description">
                メンバーには<br class="user-catch-detail__br">日報を提出頂いています。<br>
                その日に生じた問題点を<br class="user-catch-detail__br">すぐに共有頂いたり、<br>
                万が一進捗に遅れがあっても、<br>
                すぐにカバーすることができます。
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>