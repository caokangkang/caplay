var fleg = false;
$(function() {
	var SW9 = new SiriWave({
		amplitude: 0.3,
		container: document.getElementById('container-ios9-canvas'),
		autostart: false,
		style: 'ios9',
		color:'#00ff00',
		speed:0.05
	});
	setTimeout(function(){
		$(".mapconTent .mic").fadeIn();
	},1000)
	setTimeout(function(){
		$(".mapconTent .mic").fadeOut();
	},2000)

	setTimeout(function(){
		SW9.start()
	},3000)
	setTimeout(function(){
		SW9.setAmplitude(0)
		$(".siriwave_container").fadeOut();
		$(".mapconTent .mic").fadeIn();
	},6000)
	setTimeout(function(){
		$("#Address").fadeIn();
		setTimeout(function(){
			$(".dialing").fadeIn();
		},400)
	},2000)//7000

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