<html>
<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<h1>こんにちは！</h1>
@if (Auth::check())
    <h2>{{ \Auth::user()->name }}さん</h2><br />
    <div>
        <a href="/bbs">掲示板</a><br />
        <a href="/auth/logout">ログアウト</a>
    </div>
@else
    <h2>ゲストさん</h2><br />
    <div>
        <a href="/auth/login">ログイン</a><br />
        <a href="/auth/register">会員登録</a>
    </div>
@endif
</body>
</html>
