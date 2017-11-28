$(function(){
	$("#getResult").click(function(){
		var name = $("#name").val();
		// console.log(name);


var types=["勇者","魔法使い","戦士","遊び人","スーパースター","AV男優","監督（ポルノの）","金たまのシワ"];
//0-n の乱数　Math.floor(Math.random()*(n+1)

var type=types[Math.floor(Math.random()*types.length)];


var characters=["売り上げトップの","昨日おばあちゃんが誕生日の","テンガ大好きな","陰毛が絡まった","初恋の人に似ている","ケツ毛のはみ出た","ロンリネス","偏食な"];
//0-n の乱数　Math.floor(Math.random()*(n+1)

var character=characters[Math.floor(Math.random()*characters.length)];

//結果の表示
var result = name + "さんは『"+character+type+"』タイプです！" ;
$("#result").text(result);

var tweetLink='<a href="https://twitter.com/intent/tweet?text="+encodeURIComponent(result)+"&hashtags=acthouse">ツイートする</a>';
$("#tweet").html(tweetLink);


	});

	
	});
