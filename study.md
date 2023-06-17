## .env
.envは設定ファイル  
gitにアップロードしない！ (シークレットキーなどを置くため)

## DB
tableの集合

## DB table
DBの中にtableをたくさん置ける(ユーザー　ポストetc..)  
tableの中身が複数データの集合(例：日付　投稿内容)  

## datatype
integer(int) = 数値  
varChar = 文字列

## github連携
ssh-add ~/.ssh/key name
git push origin master

## Http request種類
- get : ブラウザでURLを叩いたときに走る処理(取得)

- post : ブラウザで投稿ボタンや送信ボタン押した時に走る処理(存在するものに対して更新)

- put : ブラウザで投稿ボタンや送信ボタン押した時に走る処理(作成)

- delete: ブラウザで削除ボタンを押した時に走る処理(削除)

## HTMLの処理
HTMLのフォームはgetとpostしか指定できない　　
put, delete処理をしたいときは
```html
            <form action="/post" method="post">
                <input type="hidden" name="_method" value="PUT">
```
https://portaltan.hatenablog.com/entry/2015/07/22/122031

## compact
変数をviewに渡すときはcompact
```php
        return view('post/index', compact('posts'));
```