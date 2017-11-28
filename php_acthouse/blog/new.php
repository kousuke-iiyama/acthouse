<?php
  require 'utils.php';
  $page_title = get_title("新規記事作成"); ?>
<?php include 'header.php'; ?>
<div id="container">
<ul class="breadcrumbs">
	<li><a href="index.php">〜〜ホーム〜〜</a></li>
	<li> > </li>
	<li>新規記事作成</li>
</ul>

	<form action="post.php" name="form" method="post" enctype="multipart/form-data">
</div>
<label for="title">タイトル
	<input type="text" name="title">
</label>
<div>
<label for="content">内容
<textarea name="content" id="" cols="30" rows="10"></textarea>
</label>
</div>
<div>
	<label for="category">カテゴリ
	<input type="text" name="category">	
	</label>
</div>
<div>
<label for="image">
画像
<input type="file" name="image">
	
</label>
</div>
<div>
	<label for="drafts">
	下書き
		<input type="checkbox" name="draft" value="true">
	</label>
</div>

<div>
	<button>送信</button>
</div>
	
</body>
</html>