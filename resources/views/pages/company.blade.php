@extends('layouts.base')

@section('title','企業')

@section('content')

<section class="company">
    <div class="company__bg">
        @include('includes.gnav')
        <div class="company__top">
            <div class="company__top-img">
                <img src="{{ asset('images/company/high-five.png') }}" alt="#">
            </div>
            <div class="company__top-lead">
                <h1>新人フリーランスエンジニアに<br>お仕事を任せてみませんか？</h1>
            </div>
        </div>
        <div class="company__body">
            <div class="company__body-flame">
                <h2>新人エンジニアにお仕事を任せる<span>2</span>つのメリット</h2>
                <div class="company__body--flex">
                    <div class="company__body-item">
                        <h3>01　費用が抑えられる</h3>
                        <img src="{{ asset('images/company/cheap.png') }}" alt="#">
                        <p>
                            経験の浅い新人のエンジニアのため<br>
                            費用を抑える事ができます
                        </p>
                    </div>
                    <div class="company__body-item">
                        <h3>02　向上心の高い人材が多い</h3>
                        <img src="{{ asset('images/company/motivation.png') }}" alt="#">
                        <p>
                            エンジニアとして仕事を頑張りたい！と、<br>
                            仕事を始めた方がほとんどなので、<br>
                            向上心が高く、勉強熱心な方がほとんどです。
                        </p>
                    </div>
                </div>
            </div>
            <div class="company__detail">
                <div class="company__detail-title">
                    <div class="company__detail-title__img">
                        <img src="{{ asset('images/company/speech-balloon.png') }}" alt="#">
                    </div>
                    <div class="company__detail-responsive">
                        <div class="company__detail-message">
                            いくら費用が抑えられるといっても、<br>
                            本当に良い人材なのか不安・・・
                        </div>
                        <img src="{{ asset('images/company/thinking.png') }}" alt="#">
                    </div>
                    <h2>そんな不安を解消するために、<br>プログラム・キッチンでは、<br class="company__indention-responsive"><span>独自</span>の取り組みをしています。</h2>
                </div>
                <div class="company__detail-content">
                    <h3 class="company__detail-content-responsive"><span>1　slackで気軽に質問</span></h3>
                    <div class="company__detail--flex">
                        <div class="company__detail-content__img">
                            <img src="{{ asset('images/company/inspiration.png') }}" alt="#">
                        </div>
                        <div class="company__detail-item">
                            <h3><span>1　ベテランエンジニアによるフォロー</span></h3>
                            <p>
                                疑問点が出た場合も、slackを使って、相談専用チャンネルで<br>
                                他のメンバーに質問をすることができます。<br>
                                また新人の成果物は<br>
                                ベテランエンジニアがチェックし、<br>
                                品質を担保します。
                            </p>
                        </div>
                    </div>
                    <h3 class="company__detail-content-responsive"><span>2　月に1度のオンライン面談</span></h3>
                    <div class="company__detail--flex">
                        <div class="company__detail-item">
                            <h3><span>2　月に1度のオンライン面談</span></h3>
                            <p>
                                月に1度、オンラインの面談を行っています。<br>
                                不安点や案件の希望をヒアリングしています。
                            </p>
                        </div>
                        <div class="company__detail-content__img">
                            <img src="{{ asset('images/company/online-meeting.png') }}" alt="#">
                        </div>
                    </div>
                    <h3 class="company__detail-content-responsive"><span>3　日報提出による進捗確認</span></h3>
                    <div class="company__detail--flex">
                        <div class="company__detail-content__img">
                            <img src="{{ asset('images/company/woman.png') }}" alt="#">
                        </div>
                        <div class="company__detail-item">
                            <h3><span>3　日報提出による進捗確認</span></h3>
                            <p>
                                メンバーには日報を提出頂いています。<br>
                                その日に生じた問題点を<br class="company__detail-responsive-item">すぐに共有頂いたり、<br>
                                万が一進捗に遅れがあっても、<br>
                                すぐにカバーすることができます。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
