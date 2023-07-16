<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ブックマーク</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">ブックマーク一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>Kana's ブックマーク</legend>
     <label>書籍名：<input type="text" name="name"></label><br>
     <label><input type="radio" name="categories" value="読んだ"/><span>読んだ</span></label>
     <label><input type="radio" name="categories" value="読みたい"/><span>読みたい</span></label><br>
     <label>書籍URL：<input type="text" name="url"></label><br>
     <label>メモ：<textArea name="comments" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="登録">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
