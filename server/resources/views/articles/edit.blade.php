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

<h1>商品更新フォーム</h1>
<!--更新先はarticlesのidにしないと増える php artisan rote:listで確認①-->
<form action="/articles/{{ $article->id }}" method="post">
    @csrf
    <!-- resourceの場合PUTを指定してあげないとエラーが起きる php artisan rote:listで確認② -->
    @method('PUT')
    <!-- idはそのまま -->
    <input type="hidden" name="id" value="{{ $article->id }}">
    <p>
        論文タイトル<br>
        <input type=" text" name="title" value="{{ $article->title }}">
    </p>
    <p>
        本文<br>
        <textarea name="body">"{{ $article->body }}"</textarea>
    </p>
    <input type="submit" value="更新">
</form>