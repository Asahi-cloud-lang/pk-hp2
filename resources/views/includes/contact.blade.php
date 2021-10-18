<!-- .contact -->
<section class="contact">
    <div class="contact__bg">
        <div class="content__title">
            <img src="{{ asset('images/contact/knife-yellow.png') }}" alt="#" class="knife">
            <h1>
                お問い合わせ
            </h1>
            <img src="{{ asset('images/contact/fork-yellow.png') }}" alt="#" class="fork">
        </div>
        <div class="contact__form-frame">
            <table class="contact__form-table">
                <tbody>
                    <tr>
                        <th class="contact__form-item-first"><span>任意</span>企業名</th>
                        <td>
                            <input type="text" name="company-name" class="contact__form-area-first" placeholder="株式会社sample" required>
                        </td>
                    </tr>
                    <tr>
                        <th class="contact__form-item"><span>必須</span>お名前</th>
                        <td>
                            <input type="text" name="name" class="contact__form-area" placeholder="田中太郎" required>
                        </td>
                    </tr>
                    <tr>
                        <th class="contact__form-item"><span>必須</span>メールアドレス</th>
                        <td>
                            <input type="text" name="email" class="contact__form-area" placeholder="sample@sample.com" required>
                        </td>
                    </tr>
                    <tr>
                        <th class="contact__form-item"><span>必須</span>フリーランス/企業</th>
                        <td>
                            <select name="type" class="contact__form-select">
                                <option value="fleelance">フリーランス</option>
                                <option value="company">企業</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th class="contact__form-item"><span>必須</span>お問い合わせ内容</th>
                        <td>
                            <textarea name="content" rows="10" class="contact__form-area" valign="top" placeholder="入力してください"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="contact__form-btn">
                            <button>
                                <a href="#" >問い合わせ内容送信</a>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="contact__img">
                <img src="{{ asset('images/contact/pasta.png') }}" alt="#">
            </div>
        </div>
        <div class="contact__btn">
            <a href="#"><img src="{{ asset('images/contact/contact-btn.png') }}" onmouseover="this.src="{{ asset('../../../public/images/contact/contact-btn-hover.png')}}"" onmouseout="this.src="{{ asset('../../../public/images/contact/contact-btn-hover.png')}}""　alt="#"></a>
        </div>
    </div>
</section>
<!-- /.contact -->
