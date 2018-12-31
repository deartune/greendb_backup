<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>다락골 초록원</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">

	<!-- w3.css-->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
	<!-- <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

		<!-- <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->


<style>
a {
    color: black;
}
a:hover {
    color: black;
}
.main-text{
        width:100%;
        margin:0 auto;
    }

</style>


</head>

<body>

	<div class="colorlib-loader"></div>

<div id="page">
	<nav class="colorlib-nav" role="navigation">
		<!-- <div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-4">
						<p class="site">www.yoursitehere.com</p>
					</div>
					<div class="col-xs-8 text-right">
						<p class="num">Call: +01-123-456</p>
						<ul class="colorlib-social">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div> -->
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="colorlib-logo"><a href="index.php"><img src="images/logo.png" width="80px" alt=""></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li class="has-dropdown">
								<a href="rooms.php">Rooms</a>
								<!-- <ul class="dropdown">
									<li><a href="#">Web Design</a></li>
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Branding</a></li>
									<li><a href="#">API</a></li>
								</ul> -->
							</li>
							<li><a href="do.html">Do</a></li>
							<li><a href="tour.php">Tour</a></li>
							<li><a href="info.html">Info</a></li> 
							<li><a href="reservation.php">Reservation</a></li>
							<!-- <li><a href="blog.html">Q&amp;A</a></li> -->
							<li class="active"><a href="notice.php">Notice</a></li>
							<!-- <li><a href="#">관리자 로그인</a></li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url(images/notice.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text main-text">
									<div class="slider-text-inner slider-text-inner2 text-center">
										<h2>
											Good for knowing comfort</h2>
										<h1>Notice</h1>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>


<div id="colorlib-amenities" >
	<div class="container">
		<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
								<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
								<h2>Notice</h2>
					</div>
				
	
			<div class="col-md-10 col-md-offset-1 animate-box">
				<?
				include 'db_info.php';
				$no=(isset($_GET['no']))? $_GET['no'] : 0;
				
				
				
				$page_size = 10; //한페이지 게시물 갯수
				$page_list_size = 10;
				
				$PHP_SELF = $_SERVER['PHP_SELF'];
				
				
				$query = "select notice_id, notice_title, notice_content, DATE_FORMAT(notice_wdate,'%Y-%m-%d') from notice ORDER BY notice_id DESC limit $no, $page_size";
				$result= mysql_query($query,$conn);
				
				
				$query="select count(*) from notice";
				$count=mysql_query($query,$conn);
				$result1=mysql_fetch_row($count);
				
				$total_row=$result1[0];
				
				//음수일때 예외처리//
				if($total_row <= 0){
				    $total_row = 0;
				}
				//total_page는 0부터 시작하기때문에 페이지 갯수는 10/10=1  <--2페이지를 뜻함  //
				$total_page= floor(($total_row -1) / $page_size);
				
				$current_page=floor($no / $page_size);
				
				?>
				
				
				 <table class="w3-table-all w3-hoverable">
				    <thead>
				      <tr class="w3-light-grey">
				        <th style="text-align: center;" width="10%">No</th>
				        <th style="text-align: center;">제목</th>
				        <th style="text-align: center;" width="15%">날짜</th>
				      </tr>
				    </thead>
				
				
				          <?
				          while(list($notice_id,$notice_title,$notice_content,$notice_wdate)=mysql_fetch_array($result)){
				              ?>
				<tr style = "cursor:pointer;" onClick = " location.href='notice_read.php?notice_id=<?=$notice_id?>'">
				<td style="text-align: center;"><?=$notice_id?></td>
				 <td><?=$notice_title?></td>
				<td style="text-align: center;"><?=$notice_wdate?></td>
						 
				</tr> 
				              <?
				          }
				          ?>
						</table>
						
				      <center>  <?
				
				//페이지리스트 첫번째 페이지 구하기
				// 0,10,20,30,40... 계산하는 방법 1 / 10=(int)0.1=0   을 뜻함 //
				$start_page=(int)($current_page / $page_list_size) * $page_list_size;
				//페이지리스트 마지막 페이지 구하기
				//0부터 시작함. 첫번째 페이지 +9페이지 = 마지막페이지
				$end_page=$start_page + $page_list_size -1;
				if($total_page<$end_page) $end_page=$total_page;
						
						
				if($start_page>= $page_list_size){
				    $prev_list=($start_page-1) * $page_size;
				    echo "<div class='w3-container'>
					<div class='w3-bar'><a href=\"$PHP_SELF?no=$prev_list\" class='w3-button'>«</a>";
				
				} 
				
				
				
				## 페이징
				for($i = $start_page; $i <= $end_page; $i++){
				    $page = $i * $page_size;  //페이지값을 넘버로 변환
				    $page_num= $i + 1; //보여질 페이지 번호
				echo"<a href= \"$PHP_SELF?no=$page\" class='w3-button'>";
				    echo "$page_num ";
				    echo "</a>";
				}
				
				
				#다음 페이지 리스트가 필요할 때//총 페이지가 마지막 리스트 페이지보다 클때
				if($total_page>$end_page){
				    $next_list=($end_page+1)*$page_size;
				    echo "<a href=\"$PHP_SELF?no=$next_list\" class='w3-button'>»</a>
					</div>
					
					</div>";
				}
				
				?>
				
				</center>
				
				<br><br><br>
			</div><br><br>
			
		</div>
	</div>
</div>



		
		<div id="colorlib-subscribe" style="background-image: url(images/01_01.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>초록원의 소식을 이메일로 받기</h2>
						<p>지금 예약하고 50%할인된 가격으로 예약하세요</p>
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="이메일을 입력하세요">
										<button type="submit" class="btn btn-primary">등록하기</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>다락골 초록원</h4>
						<!-- <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p> -->
						<!-- <p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p> -->
					</div>
					<div class="col-md-3 colorlib-widget">
						<!-- <h4>Quick Links</h4> -->
						<p>
							<ul class="colorlib-footer-links">
								<!-- <li><a href="#">Accomodation</a></li>
								<li><a href="#">Dining &amp; Bar</a></li>
								<li><a href="#">Restaurants</a></li>
								<li><a href="#">Beach &amp; Resorts</a></li>-->
							</ul>
						</p>
					</div>
					<div class="col-md-3">
						<!-- <h4>Recents Blog Post</h4> -->
						<ul class="colorlib-footer-links">
						<li>주소 : 경북 문경시 농암면 서재로 703번지</li>
						<li>TEL : 054.571.8388</a></li>
							<!-- <li><a href="#">A Definitive Guide to the Best Dining and Drinking Venues in the City</a></li> -->
						</ul>
					</div> 

					<div class="col-md-3 col-md-push-1">
						<!-- <h4>Contact Information</h4> -->
						<ul class="colorlib-footer-links">
							<li><a href="mailto:jsg1039@naver.com">jsg1039@naver.com</a></li>
							<li><a href="./darakgol_admin/admin_index.html">관리자 로그인</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							<small class="block"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Back-end &#38; front-end 1조(김재연,김주연,박선미,박영주,신재순,장미경)
						</p>
					</div>
				</div>
			</div>
			
		</footer>
	</div>

		<div class="gototop js-top">
			<a href="#" class="js-gotop">
				<i class="icon-arrow-up2"></i>
			</a>
		</div>

		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>
		<!-- Flexslider -->
		<script src="js/jquery.flexslider-min.js"></script>
		<!-- Owl carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/magnific-popup-options.js"></script>
		<!-- Date Picker -->
		<script src="js/bootstrap-datepicker.js"></script>
		<!-- Google Map _ Accordions -->
		<script src="js/main.js"></script>
	


</body>

</html>

</script>