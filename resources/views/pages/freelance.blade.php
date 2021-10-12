@extends('layouts.base')

@section('title','フリーランス')

@section('content')

<section class="freelance">
    @include('includes.gnav')
    <div class="freelance__bg--color">
        <div class="freelance__top">
            <div class="freelance__top-message">
                フリーランスとして仕事をしていくうえで<br>
                このような不安はございませんか？
            </div>
            <div class="freelance__top-lead">
                <div class="freelance__top-box">
                    <h2><span>case 01</span>経験がないので不安</h2>
                    <div class="freelance__top-img">
                        <img src="{{ asset('images/freelance/man.png') }}" alt="#" class="man">
                    </div>
                    <p>
                        プログラミングの基礎知識はあるが、フリーランスとしての実務経験がないので、仕事を進められるかが不安。
                    </p>
                </div>
                <div class="freelance__top-box">
                    <h2><span>case 02</span>スキル不足が心配</h2>
                    <div class="freelance__top-img">
                        <img src="{{ asset('images/freelance/woman.png') }}" alt="#" class="woman">
                    </div>
                    <p>
                        副業として、仕事を開始したが、まだ本業では研修段階のため、1人で仕事をすることは、難しそうだ。
                    </p>
                </div>
            </div>
        </div>
        <div class="freelance__catch">
            <div class="freelance__catch-lead">
                <img src="{{ asset('images/freelance/catch-lead.png') }}" alt="#">
            </div>
            <div class="freelance__catch-content">
                <div class="freelance__catch-box">
                    <div class="freelance__catch-number"><span>01</span></div>
                    <p>チャットツールで気軽に質問</p>
                </div>
                <div class="freelance__catch-box">
                    <div class="freelance__catch-number"><span>02</span></div>
                    <p>月に1度の面談</p>
                </div>
                <div class="freelance__catch-box">
                    <div class="freelance__catch-number"><span>03</span></div>
                    <p>こまめな進捗確認</p>
                </div>
            </div>
            <div class="freelance__catch-detail">
                <h2 class="freelance__catch-title__responsive">01　slackで気軽に質問</h2>
                <div class="freelance__catch-detail--flex">
                    <img src="{{ asset('images/freelance/catch-box-img01.png') }}" alt="#">
                    <div class="freelance__catch-detail-item">
                        <h2>01　slackで気軽に質問</h2>
                        <p>
                            疑問点が出た場合も、slackを使って、相談専用チャンネルで<br>
                            他のメンバーに質問をすることができます。
                        </p>
                    </div>
                </div>
                <h2 class="freelance__catch-title__responsive">02　月に1度のオンライン面談</h2>
                <div class="freelance__catch-detail--flex">
                    <div class="freelance__catch-detail-item">
                        <h2>02　月に1度のオンライン面談</h2>
                        <p>
                            月に1度、オンラインの面談を行っています。<br>
                            不安点や案件の希望をヒアリングしています。
                        </p>
                    </div>
                    <img src="{{ asset('images/freelance/catch-box-img02.png') }}" alt="#">
                </div>
                <h2 class="freelance__catch-title__responsive">03　日報提出による進捗確認</h2>
                <div class="freelance__catch-detail--flex">
                    <img src="{{ asset('images/freelance/catch-box-img03.png') }}" alt="#">
                    <div class="freelance__catch-detail-item">
                        <h2>03　日報提出による進捗確認</h2>
                        <p>
                            メンバーには日報を提出頂いています。<br>
                            その日に生じた問題点をすぐに共有頂いたり、<br>
                            万が一進捗に遅れがあっても、すぐにカバーすることができます。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
