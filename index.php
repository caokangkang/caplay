<?php
// require_once "/var/www/html/home/share/jssdk.php";
require_once "/home/wwwroot/default/share/jssdk.php";

$jssdk = new JSSDK("wxd528445c82cd091a", "8d5083914e65085144dfd6694ce10c24 ");
$signPackage = $jssdk->GetSignPackage();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name='viewport' content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
	<script src="http://g.tbcdn.cn/mtb/lib-flexible/0.3.4/??flexible_css.js,flexible.js"></script>
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/tel.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="//at.alicdn.com/t/font_30sypawsi5krcnmi.css">
	<title>首页</title>
</head>
<body>
	<div class="conainter">
		<div class="meta" id="meta">
			<div class="times">
				<img src="img/img_ckk/index/times.png" alt="">
			</div>
			<div class="back">
				<img src="img/img_ckk/index/back.png" alt="" id="backbtn">
			</div>
		</div>
		<div class="index_content">
			<div class="index_box">
				<div class="box_content">
					<div class="cont_top clearfix">
						<div class="img_dot telphone">
							<div class="imgCont">
								<img src="img/img_ckk/index/img_dot_01.png" alt="">
							</div>
							<p>电话</p>
						</div>
						<a class="img_dot" href="music.html">
							<div class="imgCont">
								<img src="img/img_ckk/index/img_dot_02.png" alt="">
							</div>
							<p>音乐</p>
						</a>
						<a class="img_dot" href="map.html">
							<div class="imgCont">
								<img src="img/img_ckk/index/img_dot_03.png" alt="">
							</div>
							<p>地图</p>
						</a>
						<div class="img_dot messagebtn">
							<div class="imgCont">
								<img src="img/img_ckk/index/img_dot_04.png" alt="">
							</div>
							<p>信息</p>
						</div>
					</div>
					<div class="cont_top clearfix">
						<a class="img_dot" href="read.html">
							<div class="imgCont">
								<img src="img/img_ckk/index/img_dot_05.png" alt="">
							</div>
							<p>有声读物</p>
						</a>
						<a class="img_dot" href="audio.html">
							<div class="imgCont">
								<img src="img/img_ckk/index/img_dot_06.png" alt="">
							</div>
							<p>播放中</p>
						</a>
					</div>
				</div>
			</div>

			<!-- 电话模块 start -->
			<div id="map">
				<div class="voice_prompt">
					<div class="navigatetop clearfix">
						<div class="navitate_arrow">
							<img src="img/img_ckk/index/img_dot_01.png" alt="" class="">
						</div>
						<p class="telphone_name">电话</p>
						<p class="navitate_title">显示通讯录 &gt; </p>
					</div>
					<div class="mapconTent">
						<div class="mic">
							<img class="micImg" alt="" src="img/tel_ckk/micro.png">
						</div>
						<div class="siriwave_container">
							<div class="subcontainer" id="container-ios9_1-canvas"></div>
						</div>
					</div>
				</div>
				<div class="voice_prompt" id="Address">
					<div class="navigatetop clearfix bgc">
						<ul class="Address_menu">
							<li>
								<div class="Address_content tel_call_after">
									<i class="iconfont icon-xingxing3"></i>
									<span>个人收藏</span>
								</div>
							</li>
							<li>
								<div class="Address_content">
									<i class="iconfont icon-iconshizhong0101"></i>
									<span>最近通话</span>
								</div>
							</li>
							<li>
								<div class="Address_content">
									<i class="iconfont icon-tongxunlu"></i>
									<span>通讯录</span>
								</div>
							</li>
							<li>
								<div class="Address_content">
									<i class="iconfont icon-bohaopan1"></i>
									<span>拨号键盘</span>
								</div>
							</li>
						</ul>
					</div>
					<div class="mapconTent Address_con">
						<div class="Address_con_dot" style="display:block;">
							<div class="Address_on_content collect_content">
								<span>无个人收藏</span>
							</div>
						</div>
						<div class="Address_con_dot">
							<div class="Address_on_content">
								<div class="collection_left collection">
									<ul>
										<li><span class="penson_tel"></span></li>
									</ul>
								</div>
								<div class="collection_middle collection">
									<div class="conllection_middle_name">
										<ul>
											<li class="conllection_name_dot">
												<div class="box_dot clearfix">
													<div class="callnow">
														<span class="callnow_top">中国移动客服</span>
														<span class="callnow_bottom">手机</span>
													</div>
													<div class="conllection_time">上午11:58</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="collection_right address_scroll">
									<div class="up"><i class="iconfont icon-xiangshang"></i></div>
									<div class="scroll_text"></div>
									<div class="down"><i class="iconfont icon-xiangshang"></i></div>
								</div>
							</div>
						</div>
						<div class="Address_con_dot">
							<div class="address_list">
								<div class="acronym"><span>Z</span></div>
								<div class="acronym address_list_dot"><span>中国移动客服</span></div>
								<div class="acronym address_list_dot"><span>中国电信客服</span></div>
							</div>
							<div class="address_scroll">
								<div class="up"><i class="iconfont icon-xiangshang"></i></div>
								<div class="scroll_text">
									<span>A<br><i class="iconfont icon-dian3"></i><br>Z<br>#</span>
								</div>
								<div class="down"><i class="iconfont icon-xiangshang"></i></div>
							</div>
						</div>
						<div class="Address_con_dot">
							<div class="Address_on_content">
								<div class="tel_key">
									<div class="dial_centent tel_key_content">
										<div class="tel_bohao">
											<span data-numb="1"><i class="tel_num">1</i></span>
											<span data-numb="2"><i class="tel_num">2</i><i class="tel_en">ABC</i></span>
											<span data-numb="3"><i class="tel_num">3</i><i class="tel_en">DEF</i></span>
										</div>
										<div class="tel_bohao">
											<span data-numb="4"><i class="tel_num">4</i><i class="tel_en">GHI</i></span>
											<span data-numb="5"><i class="tel_num">5</i><i class="tel_en">GKL</i></span>
											<span data-numb="6"><i class="tel_num">6</i><i class="tel_en">MNO</i></span>
										</div>
										<div class="tel_bohao">
											<span data-numb="7"><i class="tel_num">7</i><i class="tel_en">PQRS</i></span>
											<span data-numb="8"><i class="tel_num">8</i><i class="tel_en">TUV</i></span>
											<span data-numb="9"><i class="tel_num">9</i><i class="tel_en">WXYZ</i></span>
										</div>
										<div class="tel_bohao">
											<span class="iconstyle" data-numb="*"><i class="iconfont icon-asterisks-1-copy-copy1"></i></span>
											<span data-numb="0"><i class="tel_num">0</i><i class="tel_en">+</i></span>
											<span class="iconstyle" data-numb="#"><i class="iconfont icon-jing"></i></span>
										</div>
									</div>
								</div>
								<div class="key_call">
									<div class="key_show">
										<span class="keyinput"></span>
										<div class="keyclose">
											<i class="iconfont icon-delete"></i>
										</div>
									</div>
									<span class="prompt_box"></span>
									<img src="img/tel_ckk/key_call.png" alt="" class="callbtn">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="dialing">
					<span class="telNumber">10086</span>
					<span class="callnows">正在呼叫10086...</span>
					<ul class="telmenu">
						<li>
							<div class="telkey telkey_over">
								<i class="iconfont icon-guaduan"></i>
							</div>
							<span>结束</span>
						</li>
						<li>
							<div class="telkey telkey_mute">
								<i class="iconfont icon-iosmicoff"></i>
							</div>
							<span>静音</span>
						</li>
						<li>
							<div class="telkey telkey_call">
								<i class="iconfont icon-bohaopan1"></i>
							</div>
							<span>拨号按键</span>
						</li>
						<li>
							<div class="telkey telkey_addcall">
								<i class="iconfont icon-jiahao1"></i>
							</div>
							<span>添加通话</span>
						</li>
					</ul>
				</div>
				<div class="voice_prompt dial"><!-- 拨通中的键盘拨号键 -->
					<div class="dial_top clearfix">
						<span class="dial_back toptext">返回</span>
						<span class="dial_over toptext">结束</span>
					</div>
					<div class="dial_centent">
						<div class="tel_bohao">
							<span><i class="tel_num">1</i></span>
							<span><i class="tel_num">2</i><i class="tel_en">ABC</i></span>
							<span><i class="tel_num">3</i><i class="tel_en">DEF</i></span>
						</div>
						<div class="tel_bohao">
							<span><i class="tel_num">4</i><i class="tel_en">GHI</i></span>
							<span><i class="tel_num">5</i><i class="tel_en">GKL</i></span>
							<span><i class="tel_num">6</i><i class="tel_en">MNO</i></span>
						</div>
						<div class="tel_bohao">
							<span><i class="tel_num">7</i><i class="tel_en">PQRS</i></span>
							<span><i class="tel_num">8</i><i class="tel_en">TUV</i></span>
							<span><i class="tel_num">9</i><i class="tel_en">WXYZ</i></span>
						</div>
						<div class="tel_bohao">
							<span class="iconstyle"><i class="iconfont icon-asterisks-1-copy-copy1"></i></span>
							<span><i class="tel_num">0</i><i class="tel_en">+</i></span>
							<span class="iconstyle"><i class="iconfont icon-jing"></i></span>
						</div>
					</div>
				</div>
				<div class="voice_prompt address_book">
					<div class="navigatetop clearfix">
						<span class="address_title">通讯录</span>
						<span class="address_cancel">取消</span>
					</div>
					<div class="mapconTent clearfix">
						<div class="address_list">
							<div class="acronym"><span>Z</span></div>
							<div class="acronym address_list_dot"><span>中国移动客服</span></div>
							<div class="acronym address_list_dot"><span>中国电信客服</span></div>
						</div>
						<div class="address_scroll">
							<div class="up"><i class="iconfont icon-xiangshang"></i></div>
							<div class="scroll_text">
								<span>A<br><i class="iconfont icon-dian3"></i><br>Z<br>#</span>
							</div>
							<div class="down"><i class="iconfont icon-xiangshang"></i></div>
						</div>
					</div>
				</div>
			</div>
			<!-- 电话模块 end -->

			<!-- 信息模块 start -->
				
			<div id="messageContent">
				<div class="voice_prompt">
					<div class="navigatetop clearfix">
						<div class="navitate_arrow navitate_arrow2">
							<img src="img/message_ckk/msg_icon.png" alt="" class="">
						</div>
						<p class="navitate_state">信息</p>
						<div class="navitate_cancel" style="display:none;">
							<p>取消</p>
						</div>
						<p class="navitate_title navitate_title2">显示信息 &gt; </p>
					</div>
					<div class="mapconTent">
						<div class="message_waiting">
							<ul>
								<li class="on">正在读取...</li>
								<li>更改</li>
								<li>发送</li>
							</ul>
						</div>
						<div class="mic mic2">
							<img class="micImg" alt="" src="img/tel_ckk/micro.png">
						</div>
						<div class="siriwave_container siriwave_container2">
							<div class="subcontainer" id="container-ios9_2-canvas"></div>
						</div>
					</div>
				</div>
				<div class="voice_prompt" id="msg_list">
					<div class="navigatetop">
						<div class="msg_title">
							<p class="msg_title">信息</p>
							<div class="msg_modify">
								<img src="img/message_ckk/modify.png" alt="">
							</div>
						</div>
					</div>
					<div class="mapconTent Address_con">
						<div class="msg_con_dot">
							<div class="Address_on_content">
								<div class="collection_left collection">
									<ul>
										<!-- <li><span class="penson_tel"></span></li> -->
									</ul>
								</div>
								<div class="collection_middle collection">
									<div class="conllection_middle_name">
										<ul>
											<li class="conllection_name_dot">
												<div class="box_dot clearfix">
													<span class="box_dot_left">张总</span>
													<div class="conllection_time">上午11:58</div>
												</div>
											</li>
											<li class="conllection_name_dot">
												<div class="box_dot clearfix">
													<span class="box_dot_left">李总</span>
													<div class="conllection_time">昨天</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="collection_right address_scroll">
									<div class="up"><i class="iconfont icon-xiangshang"></i></div>
									<div class="scroll_text"></div>
									<div class="down"><i class="iconfont icon-xiangshang"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
			<!-- 信息模块 end -->
		</div>
	</div>
	<audio controls="controls" name="media" id="audio"></audio>
	<script src="script/jquery-3.1.1.min.js"></script>
	<script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js" type="text/javascript" charset="utf-8"></script>
	<script src="script/siriwave.js"></script>
	<script src="script/tel.js"></script>
	<script type="text/javascript" charset="utf-8">
	    /*
	     * 注意：
	     * 1. 所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。
	     * 2. 如果发现在 Android 不能分享自定义内容，请到官网下载最新的包覆盖安装，Android 自定义分享接口需升级至 6.0.2.58 版本及以上。
	     * 3. 常见问题及完整 JS-SDK 文档地址：http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html
	     *
	     * 开发中遇到问题详见文档“附录5-常见错误及解决办法”解决，如仍未能解决可通过以下渠道反馈：
	     * 邮箱地址：weixin-open@qq.com
	     * 邮件主题：【微信JS-SDK反馈】具体问题
	     * 邮件内容说明：用简明的语言描述问题所在，并交代清楚遇到该问题的场景，可附上截屏图片，微信团队会尽快处理你的反馈。
	     */
	    wx.config({
	        debug: false,
	        appId: '<?php echo $signPackage["appId"];?>',
	        timestamp: <?php echo $signPackage["timestamp"];?>,
	        nonceStr: '<?php echo $signPackage["nonceStr"];?>',
	            signature: '<?php echo $signPackage["signature"];?>',
	            jsApiList: [

	        'checkJsApi',
	        'onMenuShareTimeline',
	        'onMenuShareAppMessage',
	        'onMenuShareQQ',
	        'onMenuShareWeibo',
	        'hideMenuItems',
	        'showMenuItems',
	        'hideAllNonBaseMenuItem',
	        'showAllNonBaseMenuItem',
	        'translateVoice',
	        'startRecord',
	        'stopRecord',
	        'onRecordEnd',
	        'playVoice',
	        'pauseVoice',
	        'stopVoice',
	        'uploadVoice',
	        'downloadVoice',
	        'chooseImage',
	        'previewImage',
	        'uploadImage',
	        'downloadImage',
	        'getNetworkType',
	        'openLocation',
	        'getLocation',
	        'hideOptionMenu',
	        'showOptionMenu',
	        'closeWindow',
	        'scanQRCode',
	        'chooseWXPay',
	        'openProductSpecificView',
	        'addCard',
	        'chooseCard',
	        'openCard'
	    ]
	    });

	    wx.ready(function () {
	        wx.checkJsApi({
	            jsApiList: [
	                'checkJsApi',
	                'onMenuShareTimeline',
	                'onMenuShareAppMessage',
	                'onMenuShareQQ',
	                'onMenuShareWeibo'
	            ]
	        });
	        wx.onMenuShareAppMessage({
	            title: 'IntelliLink智能车载交互系统',
	            desc:'Carplay模块',
	            link: 'http://www.puzzle-idea.com/m/caokangkang/carplay/index.php',
	            imgUrl: 'http://www.puzzle-idea.com/m/caokangkang/carplay/img/share.jpg',
	            trigger: function (res) {
	                // 不要尝试在trigger中使用ajax异步请求修改本次分享的内容，因为客户端分享操作是一个同步操作，这时候使用ajax的回包会还没有返回
	            },
	            success: function (res) {

	            },
	            cancel: function (res) {

	            },
	            fail: function (res) {

	            }
	        });
	        wx.onMenuShareTimeline({
	            title: 'IntelliLink智能车载交互系统',
	            link: 'http://www.puzzle-idea.com/demo/xyn/Intellilink0621/calenda_0621.php',
	            imgUrl: 'http://www.puzzle-idea.com/demo/xyn/Interlink0614/ico_bg.jpg',
	            trigger: function (res) {

	            },
	            success: function (res) {

	            },
	            cancel: function (res) {

	            },
	            fail: function (res) {

	            }
	        });
	    });
	    wx.error(function (res) {

	    });
	</script>
	<script>
		var SW9_2 = new SiriWave({
			amplitude: 0.5,
			container: document.getElementById('container-ios9_2-canvas'),
			autostart: false,
			style: 'ios9',
			color:'#fff',
			speed:0.05
		});


		var messagemusic = [
			"http://www.puzzle-idea.com/m/caokangkang/canplay/music/who-are-message.mp3",
			"http://www.puzzle-idea.com/m/caokangkang/canplay/music/mother.mp3",
			"http://www.puzzle-idea.com/m/caokangkang/canplay/music/do-you-want-mother-say-something.mp3",
			"http://www.puzzle-idea.com/m/caokangkang/canplay/music/ok.mp3",
			"http://www.puzzle-idea.com/m/caokangkang/canplay/music/over.mp3",
			"http://www.puzzle-idea.com/m/caokangkang/canplay/music/do-you-send.mp3",
			"http://www.puzzle-idea.com/m/caokangkang/canplay/music/dingding.mp3",
			"http://www.puzzle-idea.com/m/caokangkang/canplay/music/dongdong.mp3",
			"http://www.puzzle-idea.com/m/caokangkang/canplay/music/i-have-everning-go-hone.mp3",
			"http://www.puzzle-idea.com/m/caokangkang/canplay/music/you-content-have-dinner.mp3"
		];

		$(".messagebtn").on("click" , function(){
			$(".index_box").fadeOut();
			$("#map").fadeOut();

			$("#audio").attr("src",messagemusic[0])
			$("#audio")[0].play();
			$("#audio")[0].pause();

			$("#audio").attr("src",telmusic[1])
			$("#audio")[0].play();
			$("#audio")[0].pause();

			$("#audio").attr("src",telmusic[2])
			$("#audio")[0].play();
			$("#audio")[0].pause();

			$("#audio").attr("src",telmusic[3])
			$("#audio")[0].play();
			$("#audio")[0].pause();

			$("#audio").attr("src",telmusic[4])
			$("#audio")[0].play();
			$("#audio")[0].pause();

			$("#audio").attr("src",telmusic[5])
			$("#audio")[0].play();
			$("#audio")[0].pause();

			$("#audio").attr("src",telmusic[6])
			$("#audio")[0].play();
			$("#audio")[0].pause();

			$("#audio").attr("src",telmusic[7])
			$("#audio")[0].play();
			$("#audio")[0].pause();

			$("#audio").attr("src",telmusic[8])
			$("#audio")[0].play();
			$("#audio")[0].pause();

			$("#audio").attr("src",telmusic[9])
			$("#audio")[0].play();
			$("#audio")[0].pause();

			// $("#messageContent").fadeIn();

			// 你想给谁发信息
			animate(2000,function(){
				$(".mapconTent .mic2").fadeIn();
				$("#audio").attr("src",messagemusic[0])
				$("#audio")[0].play();
			})

			animate(3500,function(){
				$(".mapconTent .mic2").fadeOut();
			})

			animate(4500,function(){
				SW9_2.start()
				$("#audio").attr("src",messagemusic[6])
				$("#audio")[0].play();
			})

			// 10086
			animate(5500,function(){
				$("#audio").attr("src",messagemusic[1])
				$("#audio")[0].play();
			})


			animate(7500,function(){
				$("#audio").attr("src",messagemusic[7])
				$("#audio")[0].play();
				SW9_2.setAmplitude(0)
				$(".siriwave_container2").fadeOut()
			})

			animate(7500,function(){
				$(".mapconTent .mic2").fadeIn()
			})

			// 你想对10086说些什么
			animate(8000,function(){
				$("#audio").attr("src",messagemusic[2])
				$("#audio")[0].play();
			})

			animate(11000,function(){
				$(".mapconTent .mic2").fadeOut()
				$(".siriwave_container2").fadeIn()
				SW9_2.setSpeed(0.02)
				SW9_2.setAmplitude(0.5)
				SW9_2.start()
				$("#audio").attr("src",messagemusic[6])
				$("#audio")[0].play();
			})

			//
			animate(13000,function(){
				$("#audio").attr("src",messagemusic[8])
				$("#audio")[0].play();
			})

			animate(15500,function(){
				SW9_2.setAmplitude(0)
				$(".siriwave_container2").fadeOut()
				$("#audio").attr("src",messagemusic[7])
				$("#audio")[0].play();
			})

			animate(16500,function(){
				$(".mapconTent .mic2").fadeIn()
				$(".navitate_arrow2").hide()
				$(".navitate_state").hide()
				$(".navitate_cancel").fadeIn()
				$(".navitate_title2").css("color","#fff")
				$(".navitate_title2").html("妈妈")
				$(".message_waiting").fadeIn()
			})

			animate(17500,function(){
				$("#audio").attr("src",messagemusic[9])
				$("#audio")[0].play();
			})

			animate(22000,function(){
				$("#audio").attr("src",messagemusic[5])
				$("#audio")[0].play();
			})

			//可以
			animate(24000,function(){
				$(".mapconTent .mic2").fadeOut()
				$(".siriwave_container2").fadeIn()
				$(".message_waiting ul li.on").css("color","#fff")
				$(".message_waiting ul li.on").html("检查")
				SW9_2.setSpeed(0.02)
				SW9_2.setAmplitude(0.5)
				SW9_2.start()
				$("#audio").attr("src",messagemusic[3])
				$("#audio")[0].play();
			})

			animate(25500,function(){
				SW9_2.setAmplitude(0);
				$(".siriwave_container2").fadeOut();
				$(".mapconTent .mic2").fadeOut();
				$("#audio").attr("src",messagemusic[4])
				$("#audio")[0].play();
			})

			animate(27000,function(){
				$(".mapconTent .mic2").fadeOut();
				$("#msg_list").fadeIn();
			})
		})

		//点击返回主页
		$("#backbtn").on("click",function(){
			location.href = "index.html";
		})

		$(".msg_modify img").on("click",function(){
			$(".navitate_arrow2").fadeIn()
			$(".navitate_state").fadeIn()
			$(".navitate_cancel").hide()
			$(".navitate_title2").css("color","#7ec9fc")
			$(".navitate_title2").html("显示信息 &gt;")
			$(".message_waiting").fadeOut()
			$("#msg_list").fadeOut();
		})

		
		function animate( time , callback ){
			setTimeout(function(){
				callback()
			},time)
		}
	</script>
</body>
</html>