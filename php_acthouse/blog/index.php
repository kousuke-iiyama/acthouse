<?php require 'utils.php'; ?>

<?php
$page_title = get_title("ホーム");
?>
<?php include 'header.php'; ?>
<!-- // $db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8mb4','root','');
// query 問い合わせデータベースにクエリを発行
// foreach($stmt as $row){
// 	print_r($row);
// } -->

<div id="wrapper">
<div id="header" >

<img src="baba.jpeg" id="baba" width=100 height=100>

<a href="https://www.tenga.co.jp/"><img src="http://images-its.chemistdirect.co.uk/tenga-deep-throat-original-vacuum-cup.jpg?q=75&o=r0GObHb9sxVJpf2P0NIibPRHNUMj&V=Q5A4" width="50" height="50" class="tenga"></a>
 <h1><a href="index.php">現実逃避な日々</a></h1>
  <p>僕は逃げるぞ、どこまでも</p>


</div id="header"> 
<hr>

<div id="menubar">
<ul id="menu">

  <li class="home"><a href="index.php">HOME</a></li>

  <li><a href="new.php">新規記事投稿</a></li>

  <li><a href="index.php?st=draft">下書き</a></li>

  <li><a href="http://www.inv.co.jp/~tagawa/totto/">お知らせ</a></li>

  <li><a href="http://www.6sei.net/pc/index.html">爆発</a></li>

</ul>
<a href="http://www.takemotopiano.com/?gclid=Cj0KEQiAperBBRDfuMf72sr56fIBEiQAPFXszZOdCCDJduJwxc34hwmsaZHu4y7PB4ktRfQQH033vG8aAkam8P8HAQ"><img src="http://images-its.chemistdirect.co.uk/tenga-deep-throat-original-vacuum-cup.jpg?q=75&o=r0GObHb9sxVJpf2P0NIibPRHNUMj&V=Q5A4" width="50" height="50" class="tenga2"></a>

<img src="http://images-its.chemistdirect.co.uk/tenga-deep-throat-original-vacuum-cup.jpg?q=75&o=r0GObHb9sxVJpf2P0NIibPRHNUMj&V=Q5A4" width="50" height="50" class="tenga3">
<img src="http://images-its.chemistdirect.co.uk/tenga-deep-throat-original-vacuum-cup.jpg?q=75&o=r0GObHb9sxVJpf2P0NIibPRHNUMj&V=Q5A4" width="50" height="50" class="tenga4">
<img src="http://images-its.chemistdirect.co.uk/tenga-deep-throat-original-vacuum-cup.jpg?q=75&o=r0GObHb9sxVJpf2P0NIibPRHNUMj&V=Q5A4" width="50" height="50" class="tenga4">
<img src="http://images-its.chemistdirect.co.uk/tenga-deep-throat-original-vacuum-cup.jpg?q=75&o=r0GObHb9sxVJpf2P0NIibPRHNUMj&V=Q5A4" width="50" height="50" class="tenga4">
</div>

<div id="container">
 <ul class="breadcrumbs">

 </ul>

<div class="sidebar">

 <form action="index.php">
 <input type="text" name="q">
 <button class="button">検索</button>

 </form>

  <dl class="sidemenu">
  <dt>カテゴリ</dt>
  <?php
	 // $category_sql = "select category,count(*) as count from posts group by category";
	 // $cat_stmt = get_db() ->query($category_sql);
	 ?>
	  
		<?php foreach(get_categories() as $row) :?>
		　<dd>
			<?php $category = $row['category']; ?>
			<!-- <a href="index.php?cat=<?php echo $category; ?> "><?php echo $category; ?></a> -->
			<?php link_tag("index.php?cat=${category}",$category); ?>
				<?php echo $row['count'] ; ?>
			</dd>
		<?php endforeach; ?>

  <!-- <dt><a href="new.php">新規記事作成</a><br></dt> -->
  <dt>日付</a></dt>
<!--  <form action="index.php">
 <input type="text" name="q">
 <button>検索</button>

 </form> -->
 <div class="month">
 <?php 
 // $months = get_posts_month();

 foreach(get_posts_month() as $row) :
 $year = $row['year'];
 // $show_month =to_english_month($month);
 $month = $row['month'];
 $qs ="y=${year}&m=${month}";
 link_tag("index.php?${qs}","${year}年${month}月");
 ?>
<!--  <a href="index.php?<?php echo $qs; ?>"><?php echo "${year}年${month}月" ;?></a> -->
 <?php endforeach ; ?>

 </div>
 </div class="sidebar">

 <?php 
 if(is_category()){
 	$cat = $_GET['cat'];
  $result = get_posts_by_category($cat);
   } else if(is_search()){
   	$q = $_GET['q'];
   $result = get_posts_by_search($q);
   }else if(is_draft())   {
  $result = get_posts_by_status();

 }else if (is_archive_by_month()){
 $year = $_GET['y'];
 $month = $_GET['m'];
 $result = get_posts_by_month($year,$month);
 }else{
 	$result =get_posts();
}
  // $stmt = get_db() ->query($sql);
  // $count_sql = str_replace('*','count(*)',$sql);
  // $count_stmt = get_db()->query($count_sql);
  // $count = $count_stmt->fetch();
  // 入れ替える対象　置き換えるもの　置き換える場所
  // アスタリスクをカウントに変換
  // なんぞこれ
  //fetch 検索した結果を一つだけ導き出す
  //検索にヒットした数を取得するエスキューエル
  if (is_category()) :?>
  <p>カテゴリ<?php echo $_GET['cat']; ?>の投稿一覧</p>

  <?php endif;
  if (count($result)==0){ ?>
    <p>検索結果がありませんでした</p>

 <?php }else{
 	//記事表示開始
  foreach($result as $row)  {

	?>

<a href="show.php?id=<?php echo $row['id']; ?>">



<div id="article">

<article>

	<h2><?php echo $row['title']; ?></h2>
	<span><?php echo $row['created_at']; ?></span>
	<span><?php echo $row['updated_at']; ?></span>
	<p><?php echo $row['content']; ?></p>
	<span>カテゴリ:<?php echo $row['category'];?></span>

<?php if(empty($row['image_path'])) :?>
<img src="no_image.jpg" alt="">
<?php else :?>
	<img src="image.php?id=<?php echo $row['id'];?>" alt="<?php echo $row['title']; ?>">
<?php endif; ?>

</article>
<?php }} ?>

</div id="article">
</div id="container">
</wrapper id="wrapper">
<div id="profile">
	<aside>
 <a href="edit_profile.php">
	<h3></h3>
	<?php $profile = get_profile(); ?>
	  <img src="image.php?p" alt="<?php echo $profile['name']; ?>" class="profile-image">
		<h3 class="name"><?php echo $profile['name']; ?></h3>
		<p class="bio"><?php echo $profile['bio']; ?></p>
		</a>
	</aside>
</div>

<p id="pageTop"><a href="#"><img src="http://images-its.chemistdirect.co.uk/tenga-deep-throat-original-vacuum-cup.jpg?q=75&o=r0GObHb9sxVJpf2P0NIibPRHNUMj&V=Q5A4" width=50 height=50></a></p>


<script src="jquery-3.1.1.js"></script>
	<script src="blog.js"></script>
<script src="jquery.jrumble.1.3.js"></script>

	<?php include 'footer.php'; ?>