<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title><?php echo $page_title; ?></title>
<!-- 	<link href="blog.css" rel="stylesheet"> -->
	<style>
	/*#header{
		background-image:url("http://www5f.biglobe.ne.jp/~takaki1/guruman.jpg");

	}
	#header p{
		color:orange;
	}
.kyabetu2 {
	position:absolute;
	top:70px;
	right:100px;
	text-align:center;
}*/
/*img:hover{
	position:relative;
	top:100px;
	right:100px;
	height:400px;
	width:400px;

}*/
/*
	body{
	background-image:url("http://livedoor.blogimg.jp/supperwallpaper/imgs/c/0/c07bb31c.jpg");
	}



*/	h1 {
		font-family: "ＭＳ Ｐ明朝","ＭＳ 明朝",serif;
		letter-spacing:5px;
/*	background-image:url("http://i.gzn.jp/img/2012/10/02/40-awesome-twitter-covers/08.jpg");*/
	color:darkgreen;
}

#baba{
	position:absolute;
	top:5px;
	right:70px;
	border-radius:80px;
	opacity:0.5;
}

#baba:hover{
	opacity:1;
}


#menubar{
	margin-left:30px;
}

#menu {

  width:530px;

  padding:0;

  margin:0;

  list-style-type: none;
  opacity:0.8;


}

#menu li {

  width:20%;

  float:left;

  padding:0;

  margin:0;

  text-align:center;

}

#menu li a {

  width:auto;

  color:#fff;

  font-size:12px;

  font-weight:bold;

  padding:10px 0;

  text-decoration:none;

  display:block;

  background:#666;
}

#menu li a:hover {

  background:#555;
}


#header{
position:relative;
margin:20px;
padding:50px;
background-image:url("./view-from-tops.jpeg");
background-size:cover;
max-height:400px;
	max-width:auto;

}
img {
	max-height:400px;
	max-width:auto;
}
.tenga{
	position:absolute;
	top:20px;
	left:20px;
	cursor:pointer;
	opacity: 1;
	-webkit-animation: flash 1s;
	animation: flash 1s;
	border-radius:25px;
	
    

}
.tenga:hover{
/*	position:absolute;
	top:20px;
	left:20px;*/
	background-image:url("./tengakun.jpeg");
}

#header p{
	font-size:150%;
	text-align:center;
	bottom:4px;
	margin:0;
	padding:0;
	color:#fff;
	background-color:rgba(0,0,0,0.4);
	position:absolute;
}

h2{
	border:3px solid black;
}
.month a{
	display:block;

}


#container{
	background-image:url();
	z-index:1;
	width:800px;
	background-color:#f0f8ff;

	text-align:center;
	/*clear:left;*/
}
.wrapper{
	width:600px;

}

.bradcrumbs {
	list-style-type:none;
}

.breadcrumbs li {
	display:inline-block;
}

.sidebar {
  width: 250px;  
  float: left;  
  margin: 20px;  
  padding: 10px;  

}
.button{
	margin-left:20px;

}

dl.sidemenu{
  /*margin:20px;
  padding:0px 0px 5px;*/
  background: #f0f8ff;
  width:200px;
}
dl.sidemenu dt{
   background:url(./sidemenu.jpeg) repeat-x;
   height:32px;
   width:200px;
   font-size:15px;
   line-height:32px;
   font-weight:bold;
   /*color:#FFF;*/
   text-indent:0.7em;
   padding-bottom:5px;
}
dl.sidemenu dd{
  font-size:12px;
  line-height:18px;
  height:18px;
  text-indent:0.7em;
  margin:0px;
  padding-left:5px;

}

#article {
/*	margin:20px;
	padding:20px;*/
	float:left;
	/*width:500px;

*/

}
/*.profile-image{
width:50px;
height:50px;
}
*/

.comments span {
	display:inline-block;
}
article p {
	padding:1em;
	border:1px solid gray;
}
article img {
	max-width:200px;
	max-height:100px;
}

body{
	background-color:#f5fffa;
	opacity:0.8;
}


#pageTop {
  position: fixed;
  bottom: 20px;
  right: 20px;
}
 
#pageTop a {
  display: block;
  z-index: 999;
  padding: 8px 0 0 8px;
 /* border-radius: 30px;
  width: 35px;
  height: 35px;
  background-color: #9FD6D2;
  color: #fff;*/
  font-weight: bold;
  text-decoration: none;
  text-align: center;
}
 
#pageTop a:hover {
  text-decoration: none;
  opacity: 0.7;
}

.fixed{
    position:fixed;

    top:0px;/*固定させたい位置*/


}


	</style>
</head>
<body>