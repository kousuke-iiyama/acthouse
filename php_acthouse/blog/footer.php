<script src="js/script.js"></script>
</body>
</html>

<?php 
 if(is_category()){
 	$cat = $_GET['cat'];
  $result = get_posts_by_category($cat);
   } else if(isset($_GET['q'])){
   	$q = $_GET['q'];
   $result = get_posts_by_search($q);
   }else if(isset($_GET['st']))   {
  $result = get_posts_by_status();

 }else if (isset($_GET['y'])and isset($_GET['m'])){
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