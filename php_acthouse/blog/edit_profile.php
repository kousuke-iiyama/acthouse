<?php require 'utils.php'; 
$page_title ="プロフィール検索";
 include 'header.php'; 
  $profile = get_profile();

  if(isset($_POST['name'])){
	  if($profile){
	  	$id=$profile['id'];
	  	$sql = "update profiles set name = ?, bio = ? where id =?";
	  	$params = array($_POST['name'],$_POST['bio'],$id);
	  } else {
	  	$sql = "insert into profiles (name,bio) values(?,?)";
	  	$params = array($_POST["name"],$_POST['bio']);
	  }
	    $success = get_db()->prepare($sql)->execute($params);
	}

	$profile = get_profile();
  if (isset($_FILES['image'])){
  $path = "uploads/profile";
  @mkdir($path,0777,true);
  //ディレクトリ作成
  $image = $_FILES['image'];
  $image_name = $image['name'];
  $image_path = "${path}/${image_name}";
  //オリジナルファイル名
  move_uploaded_file($image['tmp_name'],$image_path);

  $sql = "update profiles set image_path = ?,updated_At = current_timestamp where id = ? ";
  $params = array($image_path,$profile['id']);
  $success = get_db()->prepare($sql)->execute($params);
  //最新の状態の要素を取得

 }

 ?>
<div class="container">
<form action="" method="post" enctype="multipart/form-data">
<label for="name">名前
<input type="text" name="name" value="<?php echo $profile['name']; ?>">
</label>
<label for="bio">自己紹介
<textarea name="bio"><?php echo $profile['bio']; ?></textarea>
</label>
<img src="image.php?p" alt="画像">
<label for="image">写真
<input type="file" name="image">
</label>
<button>作成</button>
</form>

</div>
<?php include 'footer.php'; ?>