<div class="container ops-main">
    <div class="row">
        <div class="col-md-6">
            <h2>投稿フォーム</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <form action="/post" method="post">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="content">投稿内容</label>
                    <input type="text" class="form-control" name="content" value="{{ $post->content }}">
                </div>
                <button type="submit" class="btn btn-default">登録</button>
                <a href="/post">戻る</a>
            </form>
        </div>
    </div>
</div>
