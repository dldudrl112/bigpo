<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<meta name="keywords" content="Callget">
	<meta name="description" content="Callget">

	<link href="/assets/images/utopia_sbj/favicon.png" rel="shortcut icon" type="image/x-icon">
	<link href="/assets/images/utopia_sbj/favicon.png" rel="icon" type="image/x-icon">

	<title>Cuckoo</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

	<link href="/assets/css/sbj_landing.css" rel="stylesheet" type="text/css">
	
	<?php

	if (!isset($_SERVER["HTTPS"])) {

		header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);

		exit;
	}

	?>

</head>
<style>
	#text {
		text-align: center;
		font-weight: bold;
		margin-top: 40px;
	}

	#img {
		margin: 0 0 10px;
		width: 15%;
	}

	#button {
		width: 80%;
	}

	#pop {
		position: fixed;
		z-index: 1;
		top: 0;
		width: 100%;
		height: 100%;
		display: none;
	}

	#pop>article {
		width: 50%;
		position: relative;
		z-index: 2;
		background: white;
		box-shadow: 3px 3px 5px black;
		margin: 12% 0 0 25%;
		cursor: pointer;
		text-align: center;
	}

	.black {
		background: rgba(0, 0, 0, 0.6);
	}

	.info_call {
		width: 100%;
		line-height: 36px;
		color: black;
		border: 1px solid #54b9ff;
		font-family: 'Noto Sans KR',sans-serif;
		font-size: 1.4vw;
	}

	.infoDetail {
		width: 100%;
		padding: 54px 0;
		border: 1px solid #54b9ff;
		font-family: 'Noto Sans KR',sans-serif;
		font-size: 20px;
		line-height: 40px;
	}

	.infobutton {
		width: 100%;
		background-color: #54b9ff;
		color: #ffffff;
		border: none;
		line-height: 70px;
		cursor: pointer;
	}

	.infoimg {
		width: 20%;
		border-radius: 100px;
	}

	@media (max-width: 767px) {
		#get_main .fill .middle {
			width: 100%;
			height: 100%;
			position: absolute;
			top: 32%;
		}

		#get_main .manual .manual_area .manual_contents .panel-group .panel-body br {
			display: none;
		}

		#get_main .get_area1 {
			display: inline;
		}

		#get_main .get_area_m {
			display: none;
		}
	}
</style>
<script>
	$(document).ready(function() {
		$("#list>button:first-of-type").click(function() {
			$("#pop").fadeIn();
			$("#pop").addClass("black");
		});
		$("#pop>article").click(function() {
			$(this).parent().fadeOut();
		});
	});
</script>
<body>
	<div class="sect_1">
		<div class="container">
			<div class="cuckoo" class="col-sm-offset-3 col-sm-6 col-xs-12">
				<img class="W_img" src="/assets/images/cuckoo/gong/cuckoo_gong1.jpg" alt="???????????????">
				<img class="M_img" src="/assets/images/cuckoo/gong/cuckoo_gong1_m.jpg" alt="???????????????">
			</div>
		</div>
	</div>
	<div class="sect_2">
		<div class="container">
			<div class="col-sm-offset-3 col-sm-6 col-xs-12">
				<div class="video-bg bg_cuckoo_gong">
					<div class="video-container">
						<iframe width="100%" src="https://www.youtube.com/embed/8Km3JuxKXOo" frameborder="0"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="sect_1">
		<div class="container">
			<div class="cuckoo" class="col-sm-offset-3 col-sm-6 col-xs-12">
				<img class="W_img" src="/assets/images/cuckoo/gong/cuckoo_gong2.jpg" alt="???????????????">
				<img class="M_img" src="/assets/images/cuckoo/gong/cuckoo_gong2_m.jpg" alt="???????????????">
			</div>
		</div>
	</div>
	


	<div class="get_area1">
		<div class="sect_3">
			<div class="container">
				<div class="sang_button" id="contents">
					<div class="get_area1" id="list">
					<button id="AIA_OCB01" class="sbj_cuckoo_gong" onclick="location.href='tel:080-719-7777'">
							<p style="color: white; font-size :13px;">365??? 24?????? ??????</p>?????? ????????????<br>
					</button>
					</div>
					<!-- <button id="AIA_OCB01" class="sbj_cuckoo_gong" onclick="location.href='tel:080-834-7777'">
						<p class="cuckoo_btn">365??? 24?????? ??????</p>
						<p class="cuckoo_btn1">?????? ????????????</p>
					</button> -->
				</div> 
			</div>
		</div>
	</div>
	<div class="get_area_m" id="list" name="list">
		<div class="sect_3">
			<div class="container">
				<div class="sang_button">
					<button id="AIA_OCB01" class="sbj_cuckoo_gong" onclick="location.href='tel:080-719-7777'">
						<p class="cuckoo_btn">365??? 24?????? ??????</p>
						<p class="cuckoo_btn1">?????? ????????????</p>
					</button>
				</div>
			</div>
		</div>
	</div>

	<!-- ?????? -->
	<div id="pop">
		<article>
			<div class="info_call">????????????</div>
			<div class="infoDetail">
				<!-- <img class="infoimg" src="/assets/uploads/<?= $data->product_thumb ?>" alt=""> -->
				<div style="height: 30px;"></div>
				<!-- <p><strong>[ <?= $data->product_name ?> ]</strong>??? ???????????? ?????? ??????????????? ?????? ?????????. </p>  -->
				<p>????????? ???????????? ?????? ??????????????? ?????? ?????????. </p>
				<p><strong>[ 080-719-7777 ]</strong>?????? ???????????? ???????????????.</p><br>
				<p>365???,24?????? ???????????? ?????? </p>
			</div>
			<button class="infobutton" type="button">??????</button>
		</article>
	</div>
	<div class="floating">
			<div><a href="#list"><img src="/assets/images/cuckoo/gong/side.png"></a> </div>
		</div>


	<footer>
		<div class="container">
			<div class="col-sm-offset-3 col-sm-6 col-xs-12" style="width:100%;margin-left:0px;">
				<img class="W_img" src="/assets/images/cuckoo/gong/cuckoo_gong3.jpg" alt="???????????????">
				<img class="M_img" src="/assets/images/cuckoo/gong/cuckoo_gong3_m.jpg" alt="???????????????">
			</div>
		</div>
	</footer>
	<div class="webgongback"></div>
</body>

</html>