function move( obj , target , time , cv , callback){//控制进度条方法
	var startTime = new Date();
	var $startVal = $(''+ obj +'').width();
	// console.log($startVal)
	var timer = setInterval(function(){
		var t = new Date() - startTime;
		var b = $startVal;
		var c = parseInt( target ) - b;
		var d = time;
		if ( t >= d )
		{
			t = d;
			clearInterval( timer );
		}

		var r = Tween[cv]( t , b , c , d );

		$(''+ obj +'').width(r);//控制事件

		// console.log(r)

		//显示倒计时
		var mis = Math.floor(time/1000) - Math.floor(t/1000);
		$("#watch span").html(mis)

		//进度条变色
		var cWidth = Math.floor(r);
		var cIfWone = Math.floor($startVal * 0.666666);
		// console.log(cIfWone)
		var cIfWtwe = Math.floor($startVal * 0.333333);
		// console.log(cIfWtwe)
		if(r <= cIfWone ){
			$(''+ obj +'').css("background","#ffff00");
			if(r <= cIfWtwe ){
				$(''+ obj +'').css("background","#ff3333");
			}
		}

		var timeout = true;
		if(mis == 0){
			callback(timeout)
		}
	},30)
}