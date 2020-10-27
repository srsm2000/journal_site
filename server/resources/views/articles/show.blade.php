<p>
    <b>タイトル：{{ $article->title }}</b>
</p>
<p>
    <b>{{ $article->body }}</b>
</p>

<!-- 商品のidを元に編集ページへ遷移する -->
<a href="/articles"><button>一覧へ戻る</button></a>
<a href="/articles/{{ $article->id }}/edit"><button>編集する</button></a>
<form action="/articles/{{ $article->id }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
    {{-- return falseはリンクに飛ばないようにしている --}}
</form>
