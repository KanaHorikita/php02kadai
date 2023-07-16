<?php
//1. POSTデータ取得
$name = $_POST["name"];
$categories = $_POST["categories"];
$url = $_POST["url"];
$comments = $_POST["comments"];

//2. DB接続します（初期設定）
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=limeboar43_books_db;charset=utf8;host=mysql57.limeboar43.sakura.ne.jp','limeboar43','******'); 
  // $pdo = new PDO('mysql:dbname=books_db;charset=utf8;host=localhost','root',''); //PDOは３つ引数をとる。2つ目、3つ目は自動でroot、""とする。
} catch (PDOException $e) {
  exit('DB Connection Error:'.$e->getMessage());
}


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(name,categories,url,comments,indate)VALUES(:name, :categories, :url, :comments, sysdate());");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //上の文で変数っぽく指定したnameに何を指定するかを指定。PARAM STRは文字列であることをお知らせしてる。Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':categories', $categories, PDO::PARAM_STR);  
$stmt->bindValue(':url', $url, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comments', $comments, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("SQL_ERROR:".$error[2]);
}else{
  
  //５．index.phpへリダイレクト
  header("Location: index.php");
  exit();
}
?>
