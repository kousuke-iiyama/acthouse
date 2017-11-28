$(function(){
var maxLength=8;
var memory = "";
var lastCalc = "";

$(".switch").on("click","#switch",function(){
		var current = $(".result").val();
  $(".result").val("");
  // $(".result").val("");
    $("#last-answer").toggle();

     // $("button").toggle();
});

$("#calc").on("click",".num",function(){
	var current = $(".result").val();
	var pushed = $(this).text();
	var newValue;
	
	if(isOpeLastMemory() || !hasMemory()){
		newValue = pushed;
	} else{ 
  newValue=current+pushed;

  if(newValue.startsWith("0")){
  	newValue = newValue.substring(1);
   }
  }
  //一文字目から最後までを抜き出す
  if(newValue.length<=maxLength){

	$(".result").val(newValue);
  }
  memory= memory+pushed;
  console.log(memory);
  
 $("#calc .clear").text("C");
 }).on("click",".clear",function(){
 	var label =$(this).text();
 	if(label == "AC"){
    $(".result").val(0);
		 memory = "";
		 lastCalc="";
 	} else {
 		memory = memory.replace(/[\d]+$/,"");
 		//????????
 		$(this).text("AC");
 	}
		
		$("#last-answer").fadeOut().text("");

	}).on("click",".ope",function(){
		var lastLetter = getLastMemory();
		if (hasMemory() && isNumber(lastLetter)){
			//isNumber(lastetter)・・・つまり？？
			//NaN 数字ではなかったら　の！否定　数字だったら
			//+だけで計算させたくない　数字が+の前にあるか、
			memory=memory+ $(this).text();
		} else if(!hasMemory()){
			memory = $(".result").val() + $(this).text();
	}else {
			//ズウジ以外の場合
			//*** (0,memory.length -1) この0は？
			memory = memory.substring(0,memory.length - 1);
			//一番最後の文字を割く処する　
			memory = memory+ $(this).text();
			//置き換え

		}
		// memory=memory+ $(this).text();
	}).on("click",".eq",function(){
		console.log(memory);
　　　if(result % 2 != 0 ){
	// 　alert("aaaaa");
	$("#odd").append("<p>奇数ですね</p>");
	// $("#odd").append("<img src="tengaa.jpeg" width=100 height=100>");

}

		if(memory.search(/[\+\-\*\/\%]/)== -1){
			
			if(!lastCalc){
				return;
			}
			//-1 文字が見つからない
			//つまりこの処理はどういうこと？
			//+-が入ってない場合は何も処理されない
			//eqを押し続けても演算子が入力されていない場合は何も処理されない
			return;
		}
		var result;
		if(isNumber(getLastMemory())){
			
			result = checkOverflow(eval(memory));
			//ケタ数オーバーでなければ計算
// var result = eval(memory);
// if(result){
// if (result.toString().length >= maxLength){
// 	alert("桁オーバーフロー");
// 	result=0;
 var operators = ["+","-","*","/","%"];
 var lastIndex;
 $.each(operators,function(index,value){
	var tmp = memory.lastIndexOf(value);
	if(tmp != -1){
		lastIndex = tmp;
		return　false;
//***↑よくわからない
//lastIndex・・・対象の文字列の最後から引数に指定した文字列を検索します。

//パラメータ:
  //str  検索する文字列
  //start  検索を開始する位置
//戻り値:
  //指定した文字列が含まれていた場合は最初に見つかった位置。見つからなかっ
  //た場合は-1を返す

	}
});
lastCalc = memory.substring(lastIndex);
$(".result").val(result);
memory = "";
} else if (!hasMemory()){
	var formula = $(".result").val() + lastCalc;
	result =checkOverflow(eval(formula));
	$(".result").val(result);
}
$("#last-answer").text(result).fadeIn();
	});

	//eq以降よく分からない

 $(document).on("keyup",function(e){
 	//e とは？？
  // console.log(e);
  var key=e.key;
  $("#calc button:contains('"+key+"')")
  .trigger("click");
  //つまり・・・？
 });

 $("#calc").on("click",".news",function(){
 	var url = "https://ajax.googleapis.com/ajax/services/feed/load?v=1.0&q=https://goo.gl/qj6Xe"
 	$.ajax({
 		url: url,
 		detaType:"jsonp",
 		jsonpCallback:"cb"
 	}
 		).done(function(response,textStatus,jpXHR){
    console.log(response);
    $("#news").text(response.responseDeta.feed.entries[0].title)
    .fadeIn(3000).fadeOut();
 });
 		});
 	

//大統領選メモ
 // https://ajax.googleapis.com/ajax/services/feed/load?v=1.0&q=https://goo.gl/qj6Xei


	var checkOverflow = function(result) {
		if(result && result.toString().length >+ maxLength){
			//toString 文字列に変換
			var strResult = result.toString();
			//toStringで結果を文字列に
			if(result < 1){
				//答えが一以下の場合
				result = strResult.
				  substring(0,strResult.length -1);
				  //文字列の最後を-1
				//ん？0は？ strResult? 
				//substring 部分文字列の抜き出し
			} else {
			alert("桁オーバーフロー");
			return 0;
		}
	}
	
		return eval (result);
		///最後数値形に戻す
	};

  var hasMemory = function(){
  	return memory.length > 0;
  };


	var isNumber = function(letter){
    return letter && !isNaN(letter);
	};

	function isOpeLastMemory(){
		var lastLetter = getLastMemory();
		return lastLetter.endsWith("+")
		|| lastLetter.endsWith("-")
		|| lastLetter.endsWith("*")
		|| lastLetter.endsWith("/")
		|| lastLetter.endsWith("%");

	};


	function getLastMemory(){
		return memory.substring(memory.length - 1);
	}
});