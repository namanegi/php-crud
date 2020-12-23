<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Simple CMS by PHP</title>
  <link rel="stylesheet"href="css/style.css">
</head>
<body>
<header>Simple CMS by PHP+PostgreSQL</header>
<div id="sidebar">
  <div class="side-focus">記事一覧</div>
  <a class="sidebut" href="add.php">記事を追加</a>
  <a class="sidebut" href="del.php">記事を削除</a>
</div>
<div id="main">
<?php
try {
  $db = new PDO('pgsql:dbname=vagrant;host=localhost','vagrant','password');
  $data = $db->query('SELECT * FROM news ORDER BY id DESC');
  while($row = $data->fetch()) {
    echo '<div class="newscon">';
    echo '<h2>'.$row['title'].'</h2>';
    echo '<h5>'.$row['author'].'</h5>';
    echo '<h5>'.$row['time'].'</h5>';
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