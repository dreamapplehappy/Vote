<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VOTE</title>
	<link rel="stylesheet" href="css/init.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/mask.css">
	<link rel="stylesheet" href="css/form.css">
	<link rel="stylesheet" href="css/iconvault/iconvault-preview.css" />

	<script type="text/javascript" src="js/jquery-2.0.0.js"></script>
	<script type="text/javascript" src="js/mask.js"></script>
	<script type="text/javascript" src="js/time.animation.js"></script>
	<script type="text/javascript" src="js/location.array.js"></script>
	
	<script>
		$(function(){
			var startAngle = 0;
			var startAnglec;
			var canvas = document.getElementById("canvas");
			var context = canvas.getContext("2d");
			context.beginPath();
			context.strokeStyle="#000";
			context.lineWidth=5;
			context.arc(100, 100, 95, 0, 2*Math.PI, false);
			context.stroke();
			context.closePath();
			setInterval(function(){
				startAngle++;
				startAnglec = startAngle/25;
				context.beginPath();
				context.strokeStyle="#008866";
				context.lineWidth=5;
				context.arc(100, 100, 95, (0.5-startAnglec)*Math.PI, (0.5+startAnglec)*Math.PI, false);
				context.stroke();
				context.fillStyle="#2EBDB6";
				context.fill();
				if(25 <= startAngle){
					startAngle = 0;
					//cxt.clearRect(0,0,WINDOW_WIDTH, WINDOW_HEIGHT);
					context.clearRect(0, 0, 200, 200);
					context.beginPath();
					context.strokeStyle="#000";
					context.lineWidth=5;
					context.arc(100, 100, 95, 0, 2*Math.PI, false);
					context.stroke();
					context.closePath();
				}
			},500);			
		});
		$(function(){
			var canvas = document.getElementById("canvasFC");
			var context = canvas.getContext("2d");
			var startAngle = 0;
			var startAnglec;
			context.beginPath();
			context.strokeStyle="#000";
			context.lineWidth=5;
			context.arc(100, 100, 95, 0, 2*Math.PI, false);
			context.stroke();
			context.closePath();

			setInterval(function(){
				startAngle++;
				startAnglec = startAngle/25;
				context.beginPath();
				context.strokeStyle="#0F0";
				context.lineWidth=5;
				context.arc(100, 100, 95, 0, startAnglec*2*Math.PI, false);
				context.lineTo(100,100);
				context.lineTo(200,100);
				context.stroke();
				context.fillStyle="#00F";
				context.fill();
				if(25 <= startAngle){
					startAngle = 0;
					context.clearRect(0, 0, 200, 200);
					context.beginPath();
					context.strokeStyle="#0F0";
					context.lineWidth=5;
					context.arc(100, 100, 95, 0, 2*Math.PI, false);
					context.stroke();
					context.closePath();
				}
			},500);
		});
		$(function(){
			$("#vote_content #vote_show .c_up").click(function(){
				if($("#canvasFC").is(":hidden")){
					$("#canvas").hide(1000);
					$("#canvasFC").show(1000).css({"display":"block"});
				}
				else{
					$("#canvasFC").hide(1000);
					$("#canvas").show(1000);
				}
			});
		});
		$(function(){
			$("#vote_content #vote_detail #vd_d  button").mousedown(function(){
				$("#vote_content #vote_detail #vd_d  button").css("btn_mousedown");
			});
		});
	</script>
	<style type="text/css">
	body{background-image: url("images/bgimg.jpg");}
		#main{width: 1300px; height: 1000px;  margin: 0 auto;}
		#main #countdown{width: 100%; height: 120px; background-color: ; color: white;}
		#main #vote_c{width: 1270px; height: 472px;  background-image: url("images/huazhou2.jpg"); margin: 0 auto;}
		#main #vote_content{width: 1100; height: 300px; position: absolute; margin-top: 81px; margin-left: 85px;
		 background-color:#FFF; filter:alpha(opacity=80); opacity: 0.8; border: 2px solid #81DBFD;}/* #81DBFD */
		#vote_content #vote_list{width: 100px; height: 100%; float: left; background-color: ;}

		#vote_content #vote_detail{width: 800px; height: 100%; float: left; position: relative;background-color:; }
		#vote_content #vote_detail #vd_a{width: 100px; height: 100%; float: left; background-color:;}
		#vote_content #vote_detail #vd_a .vdal{width: 100px; height: 100px; }
		#vote_content #vote_detail #vd_a .vdal label{width: 100px; height: 40px; display: block; background-color: rgb(255, 255, 119); font-size: 16px; line-height: 40px; text-align: left;}
		#vote_content #vote_detail #vd_a .vdal input{width: 100px; height: 60px; font-size: 20px; line-height: 60px; background-color: rgb(119, 255, 221);}

		#vote_content #vote_detail #vd_b{width: 20px; height: 100%; float: left; background-color: red;}
		#vote_content #vote_detail #vd_c{width: 580px; height: 100%; float: left;}
		#vote_content #vote_detail #vd_c .title{width: 578px; height: 36px; margin-top: 3px; font-size: 25px; line-height: 36px;
						text-align: center; border-radius: 10px; border:1px solid black;}
		#vote_content #vote_detail #vd_c .content{width: 578px; height: 150px; margin-top: 3px; font-size: 16px; line-height: 16px; border-radius: 10px; border:1px solid black;}
		#vote_content #vote_detail #vd_c .remarks{width: 578px; height: 90px; margin-top: 3px; font-size: 16px; line-height: 16px; border-radius: 10px; border:1px solid black;}

		#vote_content #vote_detail #vd_d{width: 100px; height: 100%; float: right; background-color: ;}
		.step{display: block; width: 100px; height: 100px; font-size: 60px; text-align: center; line-height: 100px;}
		.step:hover{font-size: 65px;}
		.like{color:rgb(17, 255, 17);}
		.dislike{color:rgb(238, 0, 0);}
		#vote_content #vote_detail #vd_d .like{width: 100px; height: 50%; background-color: ;}
		#vote_content #vote_detail #vd_d .like .like_btn{display: block; width: 90px; height: 90px; margin-left: 5px; background-color: ;  cursor: pointer; color:rgb(136, 238, 0);}
		
		#vote_content #vote_detail #vd_d .like .like_icon{width: 100%; height: 100px; background-color: ;}

		#vote_content #vote_detail #vd_d .dislike{width: 100px; height: 50%; background-color: ;}
		#vote_content #vote_detail #vd_d .dislike .dislike_btn{display: block; width: 90px; height: 90px; margin-left: 5px; background-color:; cursor: pointer;color:rgb(255, 85, 17);}
		#vote_content #vote_detail #vd_d .dislike .dislike_icon{width: 100%; height: 100px; background-color:;}
		#vote_content #vote_detail #vd_d  button{border: 1px solid #999;}
		#vote_content #vote_detail #vd_d  button:hover{box-shadow: 0px 5px 5px 5px black;}
		.btn_mousedown{box-shadow: 1px black;}
		#vote_content #vote_detail #vd_d .count{width: 100%; height: 50px; background-color: #000; border-radius: 10px;}
		#vote_content #vote_detail #vd_d .count div{width: 100%; height: 25px; font-size: 20px; text-align: center; line-height: 25px;}

		#vote_content #vote_show{width: 200px; height: 100%; float: right; background-color: ;}
		.block{display: block;}
		#vote_content #vote_show .c_up{width: 200px; height: 50px; background-color: #333; color: white; cursor: pointer;}
		#vote_content #vote_show .c_down{width: 200px; height: 50px; background-color: #333; color: white;}
	</style>
</head>
<body >
	<div id="header">
		<div id="vote_div">
			<a id="vote" href="#">我要提议</a>
		</div>
		<div id="action">
			<a id="login" href="#" action="login_form">登录</a>
			<a id="register" href="#" action="register_form">注册</a>
		</div>
	</div>

	<div id="main">
		<div id="countdown">
			<canvas id="canvastime" width="1000px" height="120px" style="display: block; border-radius: 30px; background-color:#000; margin: 20px auto; filter:alpha(opacity=80); opacity: 0.8;";>
				当前浏览器不支持Canvas，请更换浏览器后再试
			</canvas>
		</div>
	<div id="vote_c">
		<div id="vote_content">
			<div id="vote_list">表决列表</div>
			<div id="vote_detail">
				<div id="vd_a">
					<div class="vdal">
						<label for="username">提议者：</label>
						<input id="username" name="username" disabled="disabled" type="text" value="张 帆">
					</div>
					<div class="vdal">
						<label for="starttime">开始日期：</label>
						<input id="starttime" name="starttime" disabled="disabled" type="text" value="2014.10.10">
					</div>
					<div class="vdal">
						<label for="endtime">截止日期：</label>
						<input id="endtime" name="endtime" disabled="disabled" type="text" value="2015.10.10">
					</div>
				</div>
				<div id="vd_b"></div>
				<div id="vd_c">
					<p class="title">标题</p>
					<p class="content">内容提议者可以在页面上填写事务表决的标题以及具体内容</p>
					<p class="remarks">备注</p>
				</div>
				<div id="vd_d">
					<div class="like">
						<div class="like_icon">
							<button class="like_btn"><i class="step icon-like size-60"></i></button>
						</div>
						<div class="count">
							<div>赞成票数</div>
							<div>100</div>
						</div>
						
					</div>
					<div class="dislike">
						<div class="dislike_icon">
							<button class="dislike_btn"><i class="step icon-dislike size-60"></i></button>
						</div>
						<div class="count">
							<div>反对票数</div>
							<div>10</div>
						</div>
					</div>
				</div>
			</div>
			<div id="vote_show">
					<div class="c_up">点我呀,你妹</div>
					<canvas id="canvas" width="200px" height="200px"; style=" border: 0px solid black; display: block;">
						您的浏览器不支持canvas，请使用更高版本的浏览器。
					</canvas>
					<canvas id="canvasFC" width="200px" height="200px"; style=" border: 0px solid black; display: none;">
						您的浏览器不支持canvas，请使用更高版本的浏览器。
					</canvas>
					<div class="c_down">别看我</div>
			</div>
		</div>
	</div>
	</div>

















	<!-- 遮罩部分 -->
	<div id="login_form" class="login_content">
	<form action="#" method="post">
		<div id="form_left"></div>
		<div id="form_middle">
			<p class="welcome">欢 迎 您 登 录</p>
			<p class="content_p first">
				<label for="username">用户名：</label>
				<input id="username" name="username" class="content" type="text" placeholder="请输入用户名">
			</p>
			<p class="content_p">
				<label for="password">密码：</label>
				<input id="password" name="password" class="content" type="text" placeholder="请输入密码">
			</p>
			<p id="submit_p">
				<button id="submit" type="submit">登录</button>
			</p>
		</div>
		<div id="form_right">
			<div class="connection">QQ</div>
			<div class="connection">新浪</div>
			<div class="connection">微信</div>
		</div>
	</form>
	</div>
	<div id="register_form" class="register_content">
	<form action="#" method="post">
		<div id="form_left"></div>
		<div id="form_middle">
			<p class="welcome">欢 迎 您 注 册</p>
			<p class="content_p first">
				<label for="username">用户名：</label>
				<input id="username" name="username" class="content" type="text" placeholder="请输入用户名">
			</p>
			<p class="content_p">
				<label for="password">密码：</label>
				<input id="password" name="password" class="content" type="text" placeholder="请输入密码">
			</p>
			<p class="content_p">
				<label for="repeat_password">重复密码：</label>
				<input id="password" name="repeat_password" class="content" type="text" placeholder="请再次输入密码">
			</p>
			<p class="content_p">
				<label for="email">邮箱：</label>
				<input id="email" name="email" class="content" type="text" placeholder="请输入邮箱">
			</p>
			<p id="submit_p">
				<button id="submit" type="submit">注册</button>
			</p>
		</div>
		<div id="form_right">
			<div class="connection">QQ</div>
			<div class="connection">新浪</div>
			<div class="connection">微信</div>
		</div>
	</form>
	</div>
	
	<div id="mask"></div>
</body>
</html>