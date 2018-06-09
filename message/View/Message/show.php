<?php
header("content-type:text/html;charset=utf-8");
$pdo = new PDO("mysql:host=127.0.0.1;dbname=test","root","root");
$sql = "select * from liuyan";
$res = $pdo->query($sql)->fetchAll();
foreach ($res as $key => $value) {
  $data[$key]['id']=$res[$key]['id'];
  $data[$key]['name']=$res[$key]['name'];
  $data[$key]['text']=$res[$key]['text'];
  $data[$key]['time']=$res[$key]['time'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>留言板</title>
</head>
<body>
  <h4>留言板</h4><hr>
  <a href='add.php'><input type='submit' value='写留言'></a><hr>
  <table width='100%' style='text-align: center;' border='1'>
  <tr>
  <th>编号</th>
  <th>标题</th>
  <th>时间</th>
  <th>内容</th>
  <th>操作</th>
  </tr>
  <?php foreach($data as $row) { ?>
  <tr>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['name']; ?></td>
  <td><?php echo $row['time']; ?></td>
  <td><?php echo $row['text']; ?></td>
  <td>
    <a href='http://demo.message.com/Message.php?act=delete&&id=<?php echo $row['id'];?>'>删除</a>||
    <a href='http://demo.message.com/Message.php?act=update&&?id=<?php echo $row['id'];?>'>修改</a>
  </td>
  </tr>
  <?php } ?>
</body>
</html>