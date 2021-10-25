<!-- .contact -->
<section class="message">
    @if (Session::has('success'))
        <div class="message__success">
            <p>{{ Session::get('success') }}</p>
        </div>
    @endif
</section>
