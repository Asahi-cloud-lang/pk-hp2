@extends('layouts.base')

@section('title','トップ')

@section('content')

<!-- home -->
<section class="home">
    <div class="home__top-responsive">
        @include('includes.gnav')
    </div>
	<div class="home__bg">
        <div class="home__responsive-bg">
            <img src="{{ asset('images/top/responsive-home-bg01.png') }}" alt="#" class="home__responsive-bg01">
        </div>
        <div class="home__content-lead">
            <h1>新人フリーランスが活躍できる未来へ</h1>
            <p>新人フリーランスをしっかりサポート</p>
            <p>企業様も安心してお仕事をまかせられます！</p>
        </div>
        <div class="home__responsive-bg">
            <img src="{{ asset('images/top/responsive-home-bg02.png') }}" alt="#" class="home__responsive-bg02">
        </div>
    </div>
    @include('includes.gnav')
</section>
<!-- /.home -->

<!-- freelance -->
<section class="freelance">
    <div class="freelance__bg">
        <div class="content__body">
            <div class="content__title">
                <img src="{{ asset('images/top/knife-red.png') }}" alt="#" class="knife">
                <h1>
                    FREELANCE<br>
                    <span>フリーランス様へ</span>
                </h1>
                <img src="{{ asset('images/top/fork-red.png') }}" alt="#" class="fork">
            </div>
            <ul class="content__list">
                <li>
                    <div class="content__box">
                        <div class="content__box--flex">
                            <div>
                                <h2 class="content__box-title">実績</h2>
                                <p class="content__box-item">○○株式会社</p>
                                <p class="content__box-item">業務内容：コーダー</p>
                                <p class="content__box-item">収入：○円</p>
                            </div>
                            <div>
                                <p class="content__box-detail">
                                    不安もありましたが<br>
                                    プログラム・キッチンの<br>
                                    サポートのおかげで<br>
                                    スキルアップすることができました！
                                </p>
                                <img src="{{ asset('images/top/woman.png') }}" alt="#" class="content__box-img">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="content__box">
                        <div class="content__box--flex">
                            <div>
                                <h2 class="content__box-title">実績</h2>
                                <p class="content__box-item">○○株式会社</p>
                                <p class="content__box-item">業務内容：コーダー</p>
                                <p class="content__box-item">収入：○円</p>
                            </div>
                            <div>
                                <p class="content__box-detail">
                                    不安もありましたが<br>
                                    プログラム・キッチンの<br>
                                    サポートのおかげで<br>
                                    スキルアップすることができました！
                                </p>
                                <img src="{{ asset('images/top/woman.png') }}" alt="#" class="content__box-img">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="content__box">
                        <div class="content__box--flex">
                            <div>
                                <h2 class="content__box-title">実績</h2>
                                <p class="content__box-item">○○株式会社</p>
                                <p class="content__box-item">業務内容：コーダー</p>
                                <p class="content__box-item">収入：○円</p>
                            </div>
                            <div>
                                <p class="content__box-detail">
                                    不安もありましたが<br>
                                    プログラム・キッチンの<br>
                                    サポートのおかげで<br>
                                    スキルアップすることができました！
                                </p>
                                <img src="{{ asset('images/top/woman.png') }}" alt="#" class="content__box-img">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="content__box">
                        <div class="content__box--flex">
                            <div>
                                <h2 class="content__box-title">実績</h2>
                                <p class="content__box-item">○○株式会社</p>
                                <p class="content__box-item">業務内容：コーダー</p>
                                <p class="content__box-item">収入：○円</p>
                            </div>
                            <div>
                                <p class="content__box-detail">
                                    不安もありましたが<br>
                                    プログラム・キッチンの<br>
                                    サポートのおかげで<br>
                                    スキルアップすることができました！
                                </p>
                                <img src="{{ asset('images/top/woman.png') }}" alt="#" class="content__box-img">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="content__box">
                        <div class="content__box--flex">
                            <div>
                                <h2 class="content__box-title">実績</h2>
                                <p class="content__box-item">○○株式会社</p>
                                <p class="content__box-item">業務内容：コーダー</p>
                                <p class="content__box-item">収入：○円</p>
                            </div>
                            <div>
                                <p class="content__box-detail">
                                    不安もありましたが<br>
                                    プログラム・キッチンの<br>
                                    サポートのおかげで<br>
                                    スキルアップすることができました！
                                </p>
                                <img src="{{ asset('images/top/woman.png') }}" alt="#" class="content__box-img">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="content__link">
                <a href="#">フリーランス様ページへ</a>
            </div>
        </div>
    </div>
</section>
<!-- /.freelance -->

<!-- company -->
<section class="company">
    <div class="company__bg">
        <div class="content__body">
            <div class="content__title">
                <img src="{{ asset('images/top/knife-yellow.png') }}" alt="#" class="knife">
                <h1>
                    COMPANY<br>
                    <span>企業様へ</span>
                </h1>
                <img src="{{ asset('images/top/fork-yellow.png') }}" alt="#" class="fork">
            </div>
            <ul class="content__list">
                <li>
                    <div class="content__box">
                        <div class="content__box--flex">
                            <div class="content__box--width01">
                                <h2 class="content__box-title">実績</h2>
                                <p class="content__box-item">
                                    A社は受諾開発にリソースを取られ、自社プロダクトに専念出来ていない状態でした。<br>
                                    かといって、ベテランの人材を雇うほどの余裕はありませんでした。<br>
                                    A社はプログラム・キッチン所属の新人フリーランスすることで、自社プロダクトにリソースを割くことができ、更に費用面でも安くする事が出来ました。
                                </p>
                            </div>
                            <div class="content__box--width02">
                                <p class="content__box-detail">
                                    成果物の質は<br>
                                    ベテランエンジニアが<br>
                                    担保してくれるから<br>
                                    安心して任せられる！
                                </p>
                                <img src="{{ asset('images/top/high-five.png') }}" alt="#" class="content__box-img">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="content__box">
                        <div class="content__box--flex">
                            <div class="content__box--width01">
                                <h2 class="content__box-title">実績</h2>
                                <p class="content__box-item">
                                    A社は受諾開発にリソースを取られ、自社プロダクトに専念出来ていない状態でした。<br>
                                    かといって、ベテランの人材を雇うほどの余裕はありませんでした。<br>
                                    A社はプログラム・キッチン所属の新人フリーランスすることで、自社プロダクトにリソースを割くことができ、更に費用面でも安くする事が出来ました。
                                </p>
                            </div>
                            <div class="content__box--width02">
                                <p class="content__box-detail">
                                    成果物の質は<br>
                                    ベテランエンジニアが<br>
                                    担保してくれるから<br>
                                    安心して任せられる！
                                </p>
                                <img src="{{ asset('images/top/high-five.png') }}" alt="#" class="content__box-img">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="content__box">
                        <div class="content__box--flex">
                            <div class="content__box--width01">
                                <h2 class="content__box-title">実績</h2>
                                <p class="content__box-item">
                                    A社は受諾開発にリソースを取られ、自社プロダクトに専念出来ていない状態でした。<br>
                                    かといって、ベテランの人材を雇うほどの余裕はありませんでした。<br>
                                    A社はプログラム・キッチン所属の新人フリーランスすることで、自社プロダクトにリソースを割くことができ、更に費用面でも安くする事が出来ました。
                                </p>
                            </div>
                            <div class="content__box--width02">
                                <p class="content__box-detail">
                                    成果物の質は<br>
                                    ベテランエンジニアが<br>
                                    担保してくれるから<br>
                                    安心して任せられる！
                                </p>
                                <img src="{{ asset('images/top/high-five.png') }}" alt="#" class="content__box-img">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="content__box">
                        <div class="content__box--flex">
                            <div class="content__box--width01">
                                <h2 class="content__box-title">実績</h2>
                                <p class="content__box-item">
                                    A社は受諾開発にリソースを取られ、自社プロダクトに専念出来ていない状態でした。<br>
                                    かといって、ベテランの人材を雇うほどの余裕はありませんでした。<br>
                                    A社はプログラム・キッチン所属の新人フリーランスすることで、自社プロダクトにリソースを割くことができ、更に費用面でも安くする事が出来ました。
                                </p>
                            </div>
                            <div class="content__box--width02">
                                <p class="content__box-detail">
                                    成果物の質は<br>
                                    ベテランエンジニアが<br>
                                    担保してくれるから<br>
                                    安心して任せられる！
                                </p>
                                <img src="{{ asset('images/top/high-five.png') }}" alt="#" class="content__box-img">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="content__box">
                        <div class="content__box--flex">
                            <div class="content__box--width01">
                                <h2 class="content__box-title">実績</h2>
                                <p class="content__box-item">
                                    A社は受諾開発にリソースを取られ、自社プロダクトに専念出来ていない状態でした。<br>
                                    かといって、ベテランの人材を雇うほどの余裕はありませんでした。<br>
                                    A社はプログラム・キッチン所属の新人フリーランスすることで、自社プロダクトにリソースを割くことができ、更に費用面でも安くする事が出来ました。
                                </p>
                            </div>
                            <div class="content__box--width02">
                                <p class="content__box-detail">
                                    成果物の質は<br>
                                    ベテランエンジニアが<br>
                                    担保してくれるから<br>
                                    安心して任せられる！
                                </p>
                                <img src="{{ asset('images/top/high-five.png') }}" alt="#" class="content__box-img">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="content__link">
                <a href="#">企業様ページへ</a>
            </div>
            <div class="content__bg-imgs">
                <img src="{{ asset('images/top/pc.png') }}" alt="#" class="pc">
                <img src="{{ asset('images/top/pasta.png') }}" alt="#" class="pasta">
            </div>
        </div>
    </div>
</section>
<!-- /.company -->

<!-- info -->
<section class="info">
    <div class="info__bg">
        <div class="info__content">
            <!-- news -->
            <div class="news__content--width">
                <div class="info__content-title">
                    <img src="{{ asset('images/top/knife-red.png') }}" alt="#" class="knife">
                    <h1 colspan="2">NEWS<br>
                        <span>新着情報</span>
                    </h1>
                    <img src="{{ asset('images/top/fork-red.png') }}" alt="#" class="fork">
                </div>
                <div class="news__content" >
                    <ul class="news__content-item-list">
                        <li>
                            <div class="news__content-date"><span>NEW</span>2021.01.01</div>
                            <div class="news__content-item">この文章はダミーです。</div>
                        </li>
                        <li>
                            <div class="news__content-date"><span>NEW</span>2021.01.01</div>
                            <div class="news__content-item">この文章はダミーです。</div>
                        </li>
                        <li>
                            <div class="news__content-date"><span>NEW</span>2021.01.01</div>
                            <div class="news__content-item">この文章はダミーです。</div>
                        </li>
                        <li>
                            <div class="news__content-date"><span>NEW</span>2021.01.01</div>
                            <div class="news__content-item">この文章はダミーです。</div>
                        </li>
                        <li>
                            <div class="news__content-date"><span>NEW</span>2021.01.01</div>
                            <div class="news__content-item">この文章はダミーです。</div>
                        </li>
                        <li>
                            <div class="news__content-date"><span>NEW</span>2021.01.01</div>
                            <div class="news__content-item">この文章はダミーです。</div>
                        </li>
                        <li>
                            <div class="news__content-date"><span>NEW</span>2021.01.01</div>
                            <div class="news__content-item">この文章はダミーです。</div>
                        </li>
                        <li>
                            <div class="news__content-date"><span>NEW</span>2021.01.01</div>
                            <div class="news__content-item">この文章はダミーです。</div>
                        </li>
                        <li>
                            <div class="news__content-date"><span>NEW</span>2021.01.01</div>
                            <div class="news__content-item">この文章はダミーです。</div>
                        </li>
                        <li>
                            <div class="news__content-date"><span>NEW</span>2021.01.01</div>
                            <div class="news__content-item">この文章はダミーです。</div>
                        </li>
                        <li>
                            <div class="news__content-date"><span>NEW</span>2021.01.01</div>
                            <div class="news__content-item">この文章はダミーです。</div>
                        </li>
                        <li>
                            <div class="news__content-date"><span>NEW</span>2021.01.01</div>
                            <div class="news__content-item">この文章はダミーです。</div>
                        </li>
                        <li>
                            <div class="news__content-date"><span>NEW</span>2021.01.01</div>
                            <div class="news__content-item">この文章はダミーです。</div>
                        </li>
                        <li>
                            <div class="news__content-date"><span>NEW</span>2021.01.01</div>
                            <div class="news__content-item">この文章はダミーです。</div>
                        </li>
                        <li>
                            <div class="news__content-date"><span>NEW</span>2021.01.01</div>
                            <div class="news__content-item">この文章はダミーです。</div>
                        </li>
                        <li>
                            <div class="news__content-date"><span>NEW</span>2021.01.01</div>
                            <div class="news__content-item">この文章はダミーです。</div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.news -->
            <!-- production -->
            <div class="production__content--width">
                <div class="info__content-title">
                    <img src="{{ asset('images/top/knife-red.png') }}" alt="#" class="knife">
                    <h1 colspan="2">PRODUCTION<br>
                        <span>製作実績</span>
                    </h1>
                    <img src="{{ asset('images/top/fork-red.png') }}" alt="#" class="fork">
                </div>
                <ul class="production__content production__content-list">
                    <li><img src="{{ asset('images/top/company-box-bg.png') }}" alt="#"></li>
                    <li><img src="{{ asset('images/top/company-box-bg.png') }}" alt="#"></li>
                    <li><img src="{{ asset('images/top/company-box-bg.png') }}" alt="#"></li>
                    <li><img src="{{ asset('images/top/company-box-bg.png') }}" alt="#"></li>
                    <li><img src="{{ asset('images/top/company-box-bg.png') }}" alt="#"></li>
                </ul>
            </div>
        </div>
        <div class="info__bg-imgs">
            <img src="{{ asset('images/top/glass.png') }}" alt="#" class="glass">
            <img src="{{ asset('images/top/carrots.png') }}" alt="#" class="carrots">
        </div>
    </div>
</section>
<!-- /.info -->
@endsection
