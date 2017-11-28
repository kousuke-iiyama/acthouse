<?php include 'header.php'; ?>
<?php require 'utils.php'; ?>
<?php 
  if (!isset($_GET['id'])){
  	$error = "idを指定しろ";
  } else {
  	$id = $_GET['id'];
  $sql = "delete from posts where id = ?";
  $success = get_db() ->prepare($sql)->execute(array($id));

  if (!$success){
  	$error = "データ削除に失敗したよ";
  }
}
?>
<?php if (isset($error)) : ?>
 <p><?php echo $error; ?></p>
<?php else : ?>
<p>記事が削除されたよ</p>
<?php endif ; ?>
<a href="index.php">トップに戻る</a>

<?php include 'footer.php'; ?>
