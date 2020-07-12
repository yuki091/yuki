<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mycloth</title>
</head>
<body>
<div>
  <div class="header flex">
    <div class="header-title">
        <p>Mycloth</p>
      </div>
      <div class="header-right flex">
        <a href="/mypage/create">アイテム登録</a>
      </div>
    </div>
  </div>
</div>
<div class="card">
      @foreach ($clothes as $cloth)
    <div class="card_image">
      <img src="{{ asset('storage/'.$cloth->cloth_filename) }}" width="300px">
    </div>
    <div class="card-title">
      <p>カテゴリー：{{ $cloth->category_name }}</p>
      <p>ブランド：{{ $cloth['brand_name'] }}</p>
      <p>メモ：{{ $cloth['memo'] }}</p>
    </div>
    <div class="card-button">
      <a href="/mypage/{{$cloth->category_id}}">詳細</a>
      <a href="/mypage/{{$cloth->category_id}}/edit">編集</a>
      <form action="/mypage/{{$cloth->category_id}}" method="post">
        {{ csrf_field() }}
        @method('DELETE')
        <input type="submit" name="" value="削除する">
      </form>
    @endforeach
    </div>
  </div>

</div>
</body>
</html>
<style>
*{
 margin: 0;
 padding: 0;
 font-family: Hiragino Maru Gothic ProN;
}
.flex {
display: flex;
justify-content: space-between;
}
.header {
  background-color: #333;
  height: 70px;
  font-size: 30px;
  color: #EEEEEE;
}
.header-title p {
  line-height: 70px;
  font-size: 30px;
  margin-left: 30px;
}
.header-right a {
  line-height: 70px;
  float: right;
  margin-right: 30px;
  cursor: pointer;
  font-size: 18px;
  color: white;
}
.card {
  width: 350px;
  background: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 5px #ccc;
}
.card-image {
  border-radius: 5px 5px 0 0;
  max-width: 100%;
  height: auto;
}
.card-title{
  text-algin: center;
}
.card-button{
  display: flex;
  text-align: center;
}

/* .card p{
text-align: center;
}
.card a{
text-align: center;
} */
</style>