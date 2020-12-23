<?php
try {
  $db = new PDO('pgsql:dbname=vagrant;host=localhost','vagrant','password');
  $rowid = $db->query('SELECT max(id) FROM news');
  while($row = $rowid->fetch()) {
    $n_id = $row['max'] + 1;
  };
  $sql = "INSERT INTO news (id, title, author, url, img, time, m) VALUES  (
    :n_id, :n_title, :n_author, :n_url, :n_img, :n_time, :n_m
  )";
  $statement = $db->prepare($sql);
  $result = $statement->execute(array(
    ':n_id'=>$n_id,
    'n_title'=>$_POST['title'],
    ':n_author'=>$_POST['author'],
    ':n_url'=>$_POST['url'],
    ':n_img'=>$_POST['imgurl'],
    ':n_time'=>$_POST['time'],
    ':n_m'=>$_POST['content']
  ));
  unset($db);
  header("Location: /php-crud");
} catch (Exception $e) {
  echo $e->getMessage();
}
?>