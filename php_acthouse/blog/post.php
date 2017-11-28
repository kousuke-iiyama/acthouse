<?php include 'header.php'; ?>
<?php require 'utils.php'; ?>
<?php
   // print_r($_POST);

   $title = $_POST['title'];
   $content = $_POST['content'];
   $category = $_POST['category'];
   if (empty($category)){
    $category = '未分類';
   }
   $image = $_FILES['image'];
   $is_edit = isset($_POST['mode']) and $_POST["mode"]=="edit";

   if($is_edit){
   	$id = $_POST['id'];
   }

   if (empty($title) or empty($content)){
   	$error = "タイトルと内容を入力してください";
   } else {
    if(isset($_POST['draft'])){
      $status = 'draft';
   } else {
    $status = 'published';
   }

   if ($is_edit){
   	$sql ="update posts set title =?,content=?,category = ?,status = ?,updated_at=current_timestamp where id=?";
   
   	$params = array($title,$content,$category,$status,$id);

  }else{ 
  	$sql ="insert into posts (title,content,category,status,created_at,updated_at)
   values (?,?,?,?,current_timestamp,current_timestamp)";
   // $st = get_db()->prepare($sql);
   // if(isset($_POST['draft'])){
   //  $status = 'draft';
   // } else {
   //  $status = 'published';
   // }
   $params = array($title,$content,$category,$status);
   //パラメーター
   // $success = $st->execute($params);
 }
  $st = get_db()->prepare($sql);
  //sqlを記憶する
  $success = $st->execute($params);
  //準備してたプリペアを取得して、データベースに送り込む
  // $id = get_db() ->lastInsertId();
  if(!$is_edit) {
    $id = get_db()->query("select id from posts order by id desc limit 1")->fetch()['id'];
 }
  //一番最世のイDを取得したいから降順
  $path = "uploads/${id}";
  @mkdir($path,0777,true);
  $image_name = $image["name"];
  $image_path = "${path}/${image_name}";
  $image_type = $image['type'];
  move_uploaded_file($image['tmp_name'],$image_path);

$sql = "update posts set image_path = ?,image_type = ? where id = ?";
$params = array($image_path,$image_type,$id);
$st = get_db()->prepare($sql);
$success = $st ->execute($params);


  if (!$success){
  	$error = "データの更新に失敗しました";
  }
}
?>

<?php if(isset($error)): ?>
<p><?php echo $error; ?></p>
<?php if(is_edit): ?>
  <a href="edit.php?id=<?php echo $id; ?>">記事編集に戻る</a>
 <?php endif ;?>
<?php else : ?>
	<p>投稿さらえました</p>

<?php endif ;?>

<a href="index.php">トップへ戻る</a>
<?php include 'footer.php'; ?>
