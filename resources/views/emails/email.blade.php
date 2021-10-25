<p>名前：{{ $data['company-name'] }}様</p>
<p>名前：{{ $data['name'] }}様</p>
<p>メールアドレス：{{ $data['email'] }}</p>
<p>タイプ：{{ $data['type'] }}</p>
<p>---以下メッセージが送信されました---</p>
<p>{!! nl2br( $data['content'] ) !!}</p>
