var fleg = false;
var telmusic = [
	"http://www.puzzle-idea.com/m/caokangkang/canplay/music/1.mp3",
	"http://www.puzzle-idea.com/m/caokangkang/canplay/music/audio_man.mp3",
	"http://www.puzzle-idea.com/m/caokangkang/canplay/music/now_10086.mp3",
];
$(function() {

	var SW9 = new SiriWave({
		amplitude: 0.3,
		container: document.getElementById('container-ios9-canvas'),
		autostart: false,
		style: 'ios9',
		color:'#fff',
		speed:0.05
	});
	$(".telphone").on("click",function(){
		$(".index_box").fadeOut();

		// $("#audio")[0].volume = 0;		
		$("#audio").attr("src",telmusic[0])
		$("#audio")[0].play();
		$("#audio")[0].pause();

		$("#audio").attr("src",telmusic[2])
		$("#audio")[0].play();
		$("#audio")[0].pause();

		$("#audio").attr("src",telmusic[3])
		$("#audio")[0].play();
		$("#audio")[0].pause();

		//提示 "我们要给谁打电话" 语音
		setTimeout(function(){
			$("#audio")[0].volume = 1;
			$(".mapconTent .mic").fadeIn();
			$("#audio").attr("src",telmusic[0])
			$("#audio")[0].play();
		},1000)

		//拨打 "拨打10086" 语音
		setTimeout(function(){
			$(".mapconTent .mic").fadeOut();
		},3000)


		setTimeout(function(){
			$("#audio").attr("src",telmusic[1])
			$("#audio").get(0).play();
			SW9.start()
		},3000)


		setTimeout(function(){
			SW9.setAmplitude(0)
			$("#audio").attr("src",telmusic[2])
			$("#audio").get(0).play();
			$(".siriwave_container").fadeOut();
			$(".mapconTent .mic").fadeIn();
		},5000)


		setTimeout(function(){
			$("#Address").fadeIn();
			setTimeout(function(){
				$(".dialing").fadeIn();
			},400)
		},8000)//7500
	})

	$(".telkey_over").on("click" , function(){
		$(".callnows").html("通话结束");
		$(this).addClass('backgroundred');
		setTimeout(function(){
			$(".telkey_over").removeClass("backgroundred");
			animateTop( "dialing" , '100%' )
		},1000)
	})

	$(".telkey_mute").on("click" , function(){
		if(fleg == false){
			$(this).css('background','#fff');
			$(this).children().css('color','#000')
			fleg = true;
		}else if(fleg == true){
			$(this).css('background','');
			$(this).children().css('color','#fff')
			fleg = false;
		}
	})

	$(".telkey_call").on("click" , function(){//拨号键弹出
		$(this).addClass('telkeyColor');
		setTimeout(function(){
			$(".telkey_call").removeClass("telkeyColor");
			animateTop('dial', 0);
		},200)
	})

	$(".telkey_call").on("click" , function(){//拨号键弹出
		$(this).addClass('telkeyColor');
		setTimeout(function(){
			$(".telkey_call").removeClass("telkeyColor");
			animateTop('dial', 0);
		},200)
	})
	$(".dial_back").on("click",function(){//拨号键收起
		animateTop('dial', '100%')
	})

	$(".telkey_addcall").on('click',function(){
		$(this).addClass('telkeyColor');
		setTimeout(function(){
			$(".telkey_addcall").removeClass("telkeyColor");
			animateTop('address_book', 0);
		},200)
	})
	$(".address_cancel").on("click",function(){//拨号键收起
		animateTop('address_book', '100%')
	})

	function tal(){
		var btnLength = $(".Address_content").length
		$(".Address_content").on('touchstart',function(){
			var index = $(this).parent().index();
			$(this).addClass("tel_call_active").parent().siblings().find(".Address_content").removeClass("tel_call_after");
			$(this).css({
				"background":"#7ec9fc",
			});
			$('.Address_con_dot').eq(index).fadeIn().siblings().hide();
		})
		$(".Address_content").on('touchend',function(){
			var oThis = $(this);
			$(this).removeClass("tel_call_active").addClass("tel_call_after")
			setTimeout(function(){
				oThis.css({
					"background":"",
				});
			},70)
		})

		
	}
	tal()

	$(".tel_bohao span").on("click",function(){//拨号键点击变亮和把文字放在右边的方框里
		var oThis = $(this);
		var val = null;
		$(this).css({
			"background":"#7ec9fc",
		});
		setTimeout(function(){
			oThis.css({
				"background":"",
			});
		},70)
		val = $(this).attr("data-numb");
		$(".keyinput").append(val);
		ifdelete()
	})

	$(".keyclose").on("click",function(){
		var s = $(".keyinput").html();
		if( s !== "" ){
			s = s.substring(0,s.length-1);
			$(".keyinput").html(s);
		}
		ifdelete()
	})

	//点击结束拨号键盘“结束按钮”，结束通话
	$(".dial_over").on("click" , function(){
		animateTop('dial', "100%");
		animateTop( "dialing" , '100%' )
	})

	//点击拨号键触发电话
	$(".callbtn").on("click",function(){
		$("#audio").attr("src","music/now_10086.mp3");
		$("#audio").get(0).play();
		setTimeout(function(){
			animateTop( "dialing" , 0 );
		},1500)
	})
});

function animateTop( el , value ){
	$("." + el).animate({
		top:value,
	},400);
}

function ifdelete(){
	var content = $(".keyinput").html();
	var contentLength = content.length;
	if(contentLength == null || contentLength == 0){
		$(".keyclose i").hide();
	}else{
		$(".keyclose i").show();
	}
}