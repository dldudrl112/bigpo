<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<meta name="keywords" content="Callget">
	<meta name="description" content="Callget">

	<link href="/assets/images/utopia_sbj/favicon.png" rel="shortcut icon" type="image/x-icon">
	<link href="/assets/images/utopia_sbj/favicon.png" rel="icon" type="image/x-icon">

	<title>AIA_μνΌμ</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

	<link href="/assets/css/sbj_landing.css" rel="stylesheet" type="text/css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<style>
		.web1{
			display: block;
		}
		.mobile1{
			display: none;
		}
		@media (max-width:450px) {
			.web1 {display: none;}
			.mobile1{display: block;}
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
			display: none;
		}

		.info_call {
			width: 100%;
			line-height: 36px;
			color: black;
			border: 1px solid #2970d6;
			font-size: 1.4vw;
		}

		.infoDetail {
			width: 100%;
			padding: 54px 0;
			border: 1px solid #2970d6;
			font-size: 20px;
			line-height: 40px;
		}

		.infobutton {
			width: 100%;
			background-color: #2970d6;
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

</head>

<body>
	<div class="sect_1">
		<div class="container">
			<div class="col-sm-offset-3 col-sm-6 col-xs-12">
				<img src="/assets/images/sbj_01/main.png" alt="λ©μΈμ΄λ―Έμ§">
			</div>
		</div>
	</div>
	<div class="sect_2">
		<div class="container">
			<div class="col-sm-offset-3 col-sm-6 col-xs-12">
				<div class="video-bg add_bg_01">
					<div class="video-container">
						<iframe width="100%" src="https://www.youtube.com/embed/zdyjrmnmdjg" frameborder="0"></iframe>
					</div>
					<div id="text">
						<img id="img" src="/assets/images/addward/addward1_play.png" alt="λμμμ΄λ―Έμ§">
						<p>μ μμ μμ²­ ν</p>
						<p>μλ΄ μμ½ λ²νΌμ ν΄λ¦­νμ¬ μλ΄ μμ½μ λ¨κΈ°λ©΄ λ!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="sect_3 web1">
		<div class="container">
			<div class="col-sm-offset-3 col-sm-6 col-xs-12">
				<div class="get_area_m" id="list" style="margin: 20px;">
					<button id="button" class="sbj_01" onclick="location.href='tel:080-868-0200'">
						<p style="color: white; font-size :13px;">365μΌ 24μκ° κ°λ₯</p>μλ΄ μμ½νκΈ°<br>
				</div>
				</button>
			</div>
		</div>
	</div>
	<div class="sect_3 mobile1">
		<div class="container">
			<div class="col-sm-offset-3 col-sm-6 col-xs-12">
				<div  style="margin: 20px;">
					<button id="button" class="sbj_01" onclick="location.href='tel:080-868-0200'">
						<p style="color: white; font-size :13px;">365μΌ 24μκ° κ°λ₯</p>μλ΄ μμ½νκΈ°<br>
				</div>
				</button>
			</div>
		</div>
	</div>
	<div id="pop">
		<article>
			<div class="info_call">μλ΄μλ΄</div>
			<div class="infoDetail">
				<!-- <img class="infoimg" src="/assets/uploads/<?= $data->product_thumb ?>" alt=""> -->
				<div style="height: 30px;"></div>
				<!-- <p><strong>[ <?= $data->product_name ?> ]</strong>λ₯Ό λ°μΌμκΈ° μν΄ μλ΄μμ½μ΄ νμ μλλ€. </p>  -->
				<p>μλ΄μ λ°μΌμκΈ° μν΄ μλ΄μμ½μ΄ νμ μλλ€. </p>
				<p><strong>[ 080-868-0200 ]</strong>μΌλ‘ μ§κΈλ°λ‘ μ νμ£ΌμΈμ.</p><br>
				<p>365μΌ,24μκ° μλ΄μμ½ κ°λ₯ </p>
			</div>
			<button class="infobutton" type="button">νμΈ</button>
		</article>
	</div>
	<footer>
		<div class="container">
			<div class="col-sm-offset-3 col-sm-6 col-xs-12">
				<img src="/assets/images/sbj_01/footer.png" alt="νΈν°μ΄λ―Έμ§">
			</div>
		</div>
	</footer>
</body>

</html>