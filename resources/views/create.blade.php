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
          <a href="/home">Home</a>
        </div>
    </div>
    
    <form method="post" action="/mypage" enctype="multipart/form-data">
      {{ csrf_field() }}
      
      <input type="file" name="filename" /><br>
      <label>カテゴリー</label>
      <input type="text" name="category_name"/><br>
      <label>ブランド </label>
      <input type="text" name="brand_name"><br>
      <label>メモ </label>
      <input type="text" name="memo"><br>
      <input type="submit" id="button" value="登録" />
    </form>
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
form { 
  /* フォームをページの中央に置く */
  margin: 0 auto;
  margin-top: 100px;
  width: 400px;
  height: 400px;
  /* フォームの範囲がわかるようにする */
  padding: 1em;
  border: 1px solid #CCC;
  border-radius: 1em;
}

label {
  /* すべてのラベルを同じサイズにして、きちんと揃える */
  display: inline-block;
  width: 90px;
  text-align: center;
}
input {
margin-top: 15px;
width: 60%;
padding: 10px;
color: black;
}
</style>