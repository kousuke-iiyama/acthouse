document.getElementById("add-child")
.addEventListener("click",function(){
 var e =document.createElement("div");
 document.getElementById("container")
 .appendChild(e);
});

document.getElementById("add-class")
.addEventListener("click",function(){
	var e = document.createElement("div");
	e.setAttribute("class","child");
	document.getElementById("container")
	.appendChild(e);
});
// 色が変わらん


document.getElementById("remove-child")
.addEventListener("click",function(){
  var container=document.getElementById("container");
  var children = container.children;
  // console.log(children);
  // container.removeChild(children[2]);
  var firstChild = container.firstChild;
  var lastChild = container.lastChild;
  if (lastChild){
  container.removeChild(lastChild);
  }
});


var timerId,time = 0;
document.getElementById("start")
.addEventListener("click",function(){
// timerId = setInterval(function(){
//        document.getElementById("timer").innerHTML = time;
//        time++;
//     },1);
// });
if (!timerId){
    	timerId=setInterval(function(){
    		document.getElementById("timer").innerHTML = time
    		time++;
    	},1000);
    }
  })
document.getElementById("stop")
.addEventListener("click",function(){
	clearInterval(timerId);
	timerId = null;

});


document.getElementById("interval")
.addEventListener('click',function(){
	setInterval(function(){
		var div = document.getElementById("div3");
	if (div.style.backgroundColor ==""){ 
		div.style.backgroundColor = "";
	} else {
		div.style.backgroundColor ="";
	}
},50)
});  


document.getElementById("delay")
.addEventListener('click',function(){
	setTimeout(function(){
		alert("待ってばかりでは何も始まらないぞ。");
	},5000);
});


   document.getElementById("images")
   .addEventListener('click',function(){
    if (this.src.endsWith("syogun2.jpg")) {
    	this.src = "syogun.jpg";
    } else {
    	this.src = "syogun2.jpg"
    }
   });

 var imageIndex = 0;
document.getElementById("images2")
.addEventListener('click',function(){
	var images2 = ["tenga.jpg","tenga2.jpg","tenga3.jpg","syogun.jpg"];
	this.src = images2[imageIndex];
	if (imageIndex < 3) {
		imageIndex++;
	} else {
		imageIndex = 0; 
		// この最後の０は
	}
})


   var div2 = document.getElementById("div2");
   div2.addEventListener('click',function(){

   	if(this.style.width == "300px") {
   		this.style.width="100px";
   	} else {
   		this.style.width ="300px";
   	}
   	if (this.style.fontSize == "8px") {
   		this.style.fontSize = "20px";
   } else {
   	this.style.fontSize = "8px";
   }
   if (!this.style.borderRadius){
   	this.style.borderRadius = "100px";
   } else {
   	this.style.borderRadius = null;
   }
   });

   // var div3 = document.getElementById("div3");
   // div3.addEventListener('mouseover'function(
       
   // 	))


   var oldColor;
   var div1 = document.getElementById("div1");
   div1.addEventListener("mouseover",function(){
   	// var div = document.getElementById("div1");
   	oldColor = this.style.backgroundColor;
   	this.style.backgroundColor = "#ffcccc";

   });
   div1.addEventListener("mouseout",function(){
   	this.style.backgroundColor = oldColor;
   });


   document.getElementById("open-self")
   .addEventListener('click',function(){
   	location.href ="http://techacademy.jp/magazine/5483";

   });
  document.getElementById("open-new")
  .addEventListener('click',function(){
    window.open("https://www.google.com.ph/search?q=gina+gerson&espv=2&biw=860&bih=695&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiWz_T14ujPAhUoiVQKHb5_Dq4Q_AUIBigB");
  });
  


   document.getElementById("btn-while")
   .addEventListener('click',function(){
   	var from = document.getElementById("from").value;
   	var to = document.getElementById("to").value;
   	if (from == "" || to ==""){
   		alert("数値を入力してください");
 
     return;
   }
    if (from> to){
    	var oldFrom = from;
    	from = to;
    	to = oldFrom;
    }
   
   var num = +from;
   var total =0;
   while(num <= +to) {
   	 total =total + num;
   	 num++;
   	}
   	alert(from +　"から"　+ to +"までの合計は"　+ total +"です");

   });




	 document.getElementById("btn-array")
	 .addEventListener('click',function(){
	 	var gender = new Array();
	 	gender[0] = "男";
	 	gender[1] ="女";
	 	gender[2] ="不明";
　　　document.getElementById("array").innerHTML =gender[2];
    var month =["Jan","Feb","Mar","Apr","may","June","July","Aug","Sep","Oct","Nov","Dec"];
     document.getElementById("array").innerHTML = month[4];
     for (var i=0; i<month.length; i++) {
     	console.log(month[i]);
     	if (i= 2){
     		break;
     	}
     }
     });


// 　　　　　わからない
　　　document.getElementById("btn-array2")
     .addEventListener('click',function(){

     var porn = ["lexy belle","ricky six","gina garson","abigaile jonson","nesty"];
     for (var j=porn.length -1; j>0; j--){
     	 console.log(porn[j]);
     	if (j==2) {
     		continue;
     	}
     	console.log(porn[j]);
     }
	 });




	 document.getElementById("btn2")
	.addEventListener('click',function(){
		var val = document.getElementById("text1").value;
		switch(val){
			case '0':
			alert("０です！");
			break;
			case '1':
			alert("１です！");
			break;
			case '2':
			alert("２です！");
			break;
			case 'ちんこ':
			alert("変態ですねえ");
			break;
			case 'ちんぽ':
			alert("美味しいでしよね");
			break;
			case 'ちんちん':
			alert("みんなのものです。");
			break;
			case 'penis':
			alert("Why dont you go fuck yourself?");
			break;
			case 'dick':
			alert("This video has been deleated.");
			break;
			default:
			alert("0,1,2以外です！");
		}
	})
  document.getElementById("btn1")
	.addEventListener('click',function(){
    var val = document.getElementById("text1").value;
    if (val == '') {
    	alert("何か入力してください");
    } else if (val == "1") {
    	alert("1が入力されました");
    } 
    else if (val =="hard"){
    	alert("諦めないでください")
    }　else {
    	alert("いい調子です")

    }
    });



	document.getElementById("alert")
	.addEventListener('click',function(){
		alert("Helo Javachinko !");
	});

	document.getElementById("confirm")
	.addEventListener('click',function(){
		var result = confirm("今日ちんこ見にいきますか？")
		if (result == true){
    alert("ゲームクリア！");
		} else {
			alert("目の前が真っ白になった！");
		}
	});

	document.getElementById("prompt")
	.addEventListener('click',function(){
		var response = prompt ("アナルの名前を教えてください","イボ痔");
		alert("ようこそ　"+ response +"さん！");
		
	});





	var p2 = document.getElementById("p2");
	console.log(p1)	;
	var clz =document.getElementsByClassName("p");
	console.log(clz[1].innerHTML);
  var tags =document.getElementsByTagName("p");
  console.log(tags[2].innerHTML);

  function showP1(message,message2){
  	var paragraph1 =document.getElementById("p1");
  	paragraph1.innerHTML =message;
  	document.getElementById("p2").innerHTML =message2;

  }

  function showP4(){
  	var p4=document.getElementById("p4");
  	p4.innerHTML="ちんこが好きだなあ";
  }

 document.getElementById("change-p1")
 .addEventListener('click',function(){
 	document.getElementById("p1").innerHTML ="イベントリスナから変更";

 });

 var btn =document.getElementById("change-p4");
 btn.addEventListener("click",function(){
 	var p4=document.getElementById("p4");
 	p4.innerHTML="イベリス変更";
 });

