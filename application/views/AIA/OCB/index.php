<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<meta name="keywords" content="Callget">
	<meta name="description" content="Callget">

	<link href="/assets/images/utopia_sbj/favicon.png" rel="shortcut icon" type="image/x-icon">
	<link href="/assets/images/utopia_sbj/favicon.png" rel="icon" type="image/x-icon">

	<title>aia</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

	<link href="/assets/css/sbj_landing.css" rel="stylesheet" type="text/css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<style>
		.web1 {
			display: none;
		}

		.mobile1 {
			display: block;
		}

		@media (max-width:450px) {
			.web1 {
				display: block;
			}

			.mobile1 {
				display: none;
			}
		}

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
			width: 100%;
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
			display: none;
		}

		.info_call {
			width: 100%;
			line-height: 36px;
			color: black;
			border: 1px solid #ef2d69;
			font-size: 1.4vw;
		}

		.infoDetail {
			width: 100%;
			padding: 54px 0;
			border: 1px solid #ef2d69;
			font-size: 20px;
			line-height: 40px;
		}

		.infobutton {
			width: 100%;
			background-color: #ef2d69;
			color: #333;
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
 
</head>

<body>
	<div class="sect_1">
		<div class="container">
			<div class="col-sm-offset-3 col-sm-6 col-xs-12">
				<img src="/assets/images/aia/OCB/OCB_main.jpg" alt="???????????????">
			</div>
		</div>
	</div>
	<div class="sect_2">
		<div class="container">
			<div class="col-sm-offset-3 col-sm-6 col-xs-12">
				<div class="video-bg add_bg_01">
					<div class="video-container">
						<iframe width="100%" src="https://www.youtube.com/embed/fcA45umtYoc" frameborder="0"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="sect_3 web1">
		<div class="container">
			<div class="col-sm-offset-3 col-sm-6 col-xs-12">
				<div class="get_area_m">
					<button id="button" class="AIAOCB_01" onclick="location.href='tel:080-406-9900'">
						<p style="color: white; font-size :13px;">365??? 24?????? ??????</p>?????? ????????????<br>
				</div>
				</button>
			</div>
		</div>
	</div>
	<div id="list" name="list" class="sect_3 mobile1">
		<div class="container">
			<div class="col-sm-offset-3 col-sm-6 col-xs-12">
				<div id="list" style="margin: 20px;">
					<button id="button" class="AIAOCB" onclick="location.href='tel:080-406-9900'">
						<p style="color: #fff; font-size :13px; margin:0px;"></p>?????? ????????????<br>
					</button>
				</div>
			</div>
		</div>
		<div id="pop">
			<article>
				<div class="info_call">????????????</div>
				<div class="infoDetail">
					<!-- <img class="infoimg" src="/assets/uploads/<?= $data->product_thumb ?>" alt=""> -->
					<div style="height: 30px;"></div>
					<!-- <p><strong>[ <?= $data->product_name ?> ]</strong>??? ???????????? ?????? ??????????????? ?????? ?????????. </p>  -->
					<p>????????? ???????????? ?????? ??????????????? ?????? ?????????. </p>
					<p><strong>[ 080-406-9900 ]</strong>?????? ???????????? ???????????????.</p><br>
					<p>365???,24?????? ???????????? ?????? </p>
				</div>
				<button class="infobutton" type="button">??????</button>
			</article>
		</div>

		<div class="floating">
			<div><a href="#list"><img src="/assets/images/winix/side.png"></a> </div>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="col-sm-offset-3 col-sm-6 col-xs-12">
				<img src="/assets/images/aia/OCB/OCB_footer.jpg" alt="???????????????">
			</div>
		</div>
		<div style="height: 50px;"></div>
	</footer>
</body>

</html>