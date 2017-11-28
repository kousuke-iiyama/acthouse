(function(){
	'use strict';

var priceForm = document.getElementById("price");
var numForm= document.getElementById('num');
var btn = document.getElementById('btn');
var result = document.getElementById('result');

priceForm.addEventListener('clkick',function(){
  this.select();
});

numForm.addEventListener('clkick',function(){
  this.select();
});

btn.addEventListener('click',function(){
	var price = priceForm.value;
	var num = numForm.value;

	if(price.match(/^[1-9][0-9]*$/)&&num.match(/^[1-9][0-9]*$/)) {
		//ok
		// result.innerHTML='オッケー';
		if(price%num === 0){
			result.innerHTML = '一人'+(price/num)+'円ちょうどです';
		} else{
			result.innerHTML = 'something';
		}
	}else{
		result.innerHTML = '入力された値に誤りがあります';
	}
});

})();