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
  <table>
  <tr>
    <td>Title:</td> <td colspan="3"><input type="text" name="title" /></td>
  </tr>
  <tr>
  <td>Author:</td> <td colspan="3"><input type="text" name="author" /></td>
  </tr>
  <tr>
  <td>url:</td> <td colspan="3"><input type="text" name="url" /></td>
  </tr>
  <tr>
  <td>img:</td> <td colspan="3"><input type="text" name="imgurl" /></td>
  </tr>
  <tr>
  <td>Published time:</td colspan="3"> <td><input type="text" name="time" /></td>
  </tr>
  <tr rowspan="3">
  <td>Content:</td> <td colspan="3"><textarea name="content"></textarea></td>
  </tr>
  <tr>
    <td colspan="4"><button type="submit">Submit</button></td>
  </tr>
  </form>
</div>
</body>
</html>