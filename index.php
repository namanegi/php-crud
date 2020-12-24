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
  <div class="side-focus">記事一覧</div>
  <a class="sidebut" href="add.php">記事を追加</a>
  <a class="sidebut" href="del.php">記事を削除</a>
</div>
<div id="main">
<?php
try {
  $db = new PDO('pgsql:dbname=ubuntu;host=localhost','ubuntu','password');
  $data = $db->query('SELECT * FROM news ORDER BY id DESC');
  while($row = $data->fetch()) {
    echo '<div class="newscon">';
    echo '<h2><a href="'.$row['url'].'">'.$row['title'].'</a></h2>';
    echo '<h5>'.$row['author'].'</h5>';
    echo '<h5>'.$row['time'].'</h5>';
    echo '<img src="'.$row['img'].'" class="newsimg" />';
    echo '<h4>'.$row['m'].'</h4>';
    echo '</div>';
  };
  unset($db);
} catch (Exception $e) {
  echo $e->getMessage();
}
?>
</div>
</body>
</html>