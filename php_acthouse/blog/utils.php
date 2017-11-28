<?php
function get_db(){
$db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8mb4','root','');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO:: ERRMODE_EXCEPTION);
return $db;
}
function get_post($id){
	$sql = "select * from posts where id = ${id}";
	$stmt = get_db()->query($sql);
	foreach($stmt as $row){
		$post = $row;
	}
	return $post;
}

function get_posts_by_category($cat){
	  $sql ="select * from posts where category = '${cat}' and status = 'published' order by created_at desc";
	 	$stmt = get_db()->query($sql);
	 	$result = [];
	 	foreach($stmt as $row) {
	 		$result[] = $row;
	 	}
	 	return do_query($sql);
}

function get_posts_by_search($q){
	$sql = "select * from posts where title like '%${q}%' or content like '${q}' and status = 'published' order by created_at desc";
	return do_query($sql);
}

function do_query($sql){
	 	$stmt = get_db()->query($sql);
	 	$result = [];
	 	foreach($stmt as $row) {
	 		$result[] = $row;
	 	}
	 	return $result;
}

function get_posts_by_status(){
	$sql = "select * from posts where status = 'draft' order by created_at desc";
	return do_query($sql);
}

function get_posts(){
	 $sql = "select * from posts where status = 'published' order by created_at desc";
	 return do_query($sql);
}

function get_posts_month(){
	$sql="select count(*) as count,date_format(created_at,'%Y') as year,date_format(created_at,'%m') as month from posts group by date_format(created_at,'%Y'),date_format(created_at,'%m') order by year,month";

	return do_query($sql);
}

function get_posts_by_month($year,$month){
	$sql = "select * from posts where created_at like '${year}-${month}%'";
	return do_query($sql);
}

function is_category(){
	return isset($_GET['cat']);
}

function is_search(){
 return isset($_GET['q']);
}

function is_draft(){
	return isset($_GET['st']);
}

function is_archive_by_month(){
 return isset($_GET['y']) and isset($_GET['m']);
}
// function is_q(){
// 	return isset($_GET['q']);
// }
// function get_posts_count(){

// }
//functionの中でしか雄黄でない

function get_blogname(){
	return "大根好きの35歳主婦";
}

function get_title($title){
	return get_blogname() . ' _ ' .$title;
}

function get_categories(){
 $category_sql = "select category,count(*) as count from posts group by category";
	 return do_query($category_sql);
}

function get_profile(){
	$select_sql = "select * from profiles limit 1";
  $profile = get_db()->query($select_sql)->fetch();
  return $profile;

}

// view utilities
function link_tag($url,$label){
 $tag="<a href='${url}'>$label</a>";
 echo $tag;
}

function to_english_month($mon){
 $months = ['1' => 'Jan','2'=>'Feb','3'=>Mar,'4'=>'Apl','5'=>'May','6'=>'Jun','7'=>'Jun','8'=>'Aug','9'=>'Sep','10'=>'Oct','11'=>'Nov','12'=>'Dec',];
 return $months[$mon];
}

function breadcrumbs($pages,$delimiter){
	//$pages = [['url =>index.php','label'=>home]]
	if(empty($delimiter)){
		$delimiter = " > ";
	}
	//デリミター　区切り文字の変数
 $tag ="<ul class='breadcrumbs'>";
 //tagに文字を入れていく
 //
 foreach($pages as $index=>$page) {
 	//$pages///htmlの物とは別物
 	$url = $page['url']; //index.php
 	$label = $page['label']; //HOme
  $li ="<li>";
  if($index + 1 == count($pages)){
  	$li = "${li}${label}</li>";
  } else{
  	$li = "${li}<a href='${url}'>${label}</a></li><li>${delimiter}</li>";
  }
  $tag = $tag . $li;
  //ドットでくっつける
 }
 $tag = "${tag}</ul>";
 return $tag;
 //よくわからない
}

?>