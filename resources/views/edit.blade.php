<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCloth</title>
</head>
<body>

<h1>編集</h1>
<p><a href="{{ url('/mypage')}}">Cloth List</a></p>
 
<form action="/mypage/{{$cloth->id}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <input type="file" name="filename" />
    <p>カテゴリー：<input type="text" name="category" value="{{$cloth->category_name }}"></p>
    <p>ブランド：<input type="text" name="brand" value="{{ $cloth->brand_name }}"></p>
    <p>メモ：<input type="text" name="memo" value="{{ $cloth->memo }}"></p>
    <input type="submit" value="更新">
</form>
</body>
</html>