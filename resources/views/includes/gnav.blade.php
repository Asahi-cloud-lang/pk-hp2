<div class="gnav">
    <div class="gnav__logo">
        <img src="{{ asset('images/logo.png') }}" alt="logo">
    </div>
    <nav class="gnav__menu">
        <ul class="gnav-list">
            <li class="gnav-item">
                <a href="{{ url('/') }}">HOME<br><span>ホーム</span></a>
            </li>
            <li class="gnav-item">
                <a href="{{ url('/freelance') }}">FREELANCE<br><span>フリーランス様へ</span></a>
            </li>
            <li class="gnav-item">
                <a href="{{ url('/company') }}">COMPANY<br><span>企業様へ</span></a>
            </li>
            <li class="gnav-item">
                <a href="{{ url('/#news') }}" class="gnav-item__news-link">NEWS<br><span>新着情報</span></a>
            </li>
            <li class="gnav-item">
                <a href="{{ url('/#production') }}" class="gnav-item__production-link">PRODUCTION<br><span>制作実績</span></a>
            </li>
        </ul>
    </nav>
    @include('includes.hamburgermenu')
</div>
