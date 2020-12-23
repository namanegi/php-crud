<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Simple CMS by PHP</title>
  <link rel="stylesheet"href="css/style.css">
</head>
<body>
<header><h1>Simple CMS by PHP+PostgreSQL</h1></header>
<div id="sidebar">
  <a class="sidebut" href="index.php">記事一覧</a>
  <div class="side-focus">記事を追加</div>
  <a class="sidebut" href="del.php">記事を削除</a>
</div>
<div id="main">
  <form action="addapp.php" method="POST">
    Title: <input type="text" name="title" /><br />
    Author: <input type="text" name="author" /><br />
    url: <input type="text" name="url" /><br />
    img: <input type="text" name="imgurl" /><br />
    Published time: <input type="text" name="time" /><br />
    Content: <textarea name="content"></textarea>
    <button type="submit">Submit</button>
  </form>
</div>
</body>
</html>