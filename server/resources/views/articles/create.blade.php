@if (count($errors) > 0)
    <div>
        <P>
            <b>{{ count($errors) }}件のエラーがあります。</b>
        </P>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1>商品登録フォーム</h1>
<form action="/articles" method="post">
    @csrf
    <p>
        本文タイトル<br>
        <input type="text" name="title">
    </p>
    <p>
        本文<br>
        <textarea name="body"></textarea>
    </p>

    <input type="submit" value="登録">
</form>
