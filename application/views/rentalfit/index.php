<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<meta name="keywords" content="Callget">
	<meta name="description" content="Callget">

	<link href="/assets/images/utopia_sbj/favicon.png" rel="shortcut icon" type="image/x-icon">
	<link href="/assets/images/utopia_sbj/favicon.png" rel="icon" type="image/x-icon">

	<title>렌탈핏</title>

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
				display: none;
			}

			.mobile1 {
				display: block;
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
				<img src="/assets/images/rentalfit/main.jpg" alt="메인이미지">
			</div>
		</div>
	</div>
	<div class="sect_1">
		<div class="container">
			<div class="item-grid col-sm-offset-3 col-sm-6 col-xs-12">
				<a href="http://rentalfit.rental-shop.net/html/dh_prod/prod_view/10097">
					<img src="/assets/images/rentalfit/LG오브제.jpg" alt="1">
				</a>
			</div>
		</div>
	</div>
	<div class="sect_1">
		<div class="container">
			<div class="col-sm-offset-3 col-sm-6 col-xs-12">
			<img src="/assets/images/rentalfit/main2.jpg" alt="메인이미지">
			</div>
		</div>
	</div>
	<div class="sect_1">
		<div class="container">
			<div class="item-grid col-sm-offset-3 col-sm-6 col-xs-12">
				<a href="http://rentalfit.rental-shop.net/html/dh_prod/prod_view/9980"><img src="/assets/images/rentalfit/코웨이 아이콘.jpg" alt="2"></a>
				<a href="http://rentalfit.rental-shop.net/html/dh_prod/prod_view/5809"><img src="/assets/images/rentalfit/쿠쿠 인스퓨어.jpg" alt="3"></a>
				<a href="http://rentalfit.rental-shop.net/html/dh_prod/prod_view/6426"><img src="/assets/images/rentalfit/코웨이 노블.jpg" alt="4"></a>
				<a href="http://rentalfit.rental-shop.net/html/dh_prod/prod_view/5787"><img src="/assets/images/rentalfit/LG 퓨리케어.jpg" alt="5"></a>
				<a href="http://rentalfit.rental-shop.net/html/dh_prod/prod_view/496"><img src="/assets/images/rentalfit/코웨이 인텔리케어.jpg" alt="6"></a>
				<a href="http://rentalfit.rental-shop.net/html/dh_prod/prod_view/8756"><img src="/assets/images/rentalfit/웰스 스프링에어.jpg" alt="7"></a>
				<a href="http://rentalfit.rental-shop.net/html/dh_prod/prod_view/8036"><img src="/assets/images/rentalfit/LG 오브제 스타일러.jpg" alt="8"></a>
				<a href="http://rentalfit.rental-shop.net/html/dh_prod/prod_view/3266"><img src="/assets/images/rentalfit/코웨이 노블 공기청.jpg" alt="9"></a>
				<a href="http://rentalfit.rental-shop.net/html/dh_prod/prod_view/9076"><img src="/assets/images/rentalfit/LG 퓨리케어 오브제컬렉션.jpg" alt="10"></a>
				<a href="http://rentalfit.rental-shop.net/html/dh_prod/prod_view/8798"><img src="/assets/images/rentalfit/웰스 안마의자.jpg" alt="11"></a>
			</div>
		</div>
	</div>
</body>

</html>