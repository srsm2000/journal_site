<h1>論文一覧</h1>
@foreach ($articles as $article)
    <a href="/articles/{{ $article->id }}">{{ $article->title }}</a><br>
@endforeach

<!-- 新規登録画面へジャンプする -->
<button onclick="location.href='/articles/create'">新規論文投稿</button>
