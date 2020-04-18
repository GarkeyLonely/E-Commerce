<!DOCTYPE html>
<html>
<head>
<title>No Salto - A melhor loja do Brasil</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="No Salto - A melhor loja do Brasil" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Amaranth:400,700' rel='stylesheet' type='text/css'>
<!--//fonts-->

<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>

<script src="js/simpleCart.min.js"> </script>

<style>
	body{
		background-color: black;
	}
</style>
</head>
<body>
<!--header-->
<div class="header" >
	<div class="top-header" >
		<div class="container">
		<div class="top-head" >
			<div class="header-para">
				<ul class="social-in">
					<li><a href="https://api.whatsapp.com/send?phone=5506198599494"><img src="images/whats.png" height="30" width="30"></i></a></li>
					<li><a href="https://instagram.com/no.salto?igshid=1qrbjxk52kv66"><img src="images/insta.png" height="30" width="30"> </i></a></li>
					<li><a href="https://www.facebook.com/lojasnosalto/"><img src="images/facebook.png" height="30" width="30"> </i></a></li>
					<!--<a href="index.html"><img src="images/logo.jpeg" alt="" ></a>-->
				</ul>
			</div>

			<ul class="header-in">
				<li ><a href="/produts.php" >  Nossos Produtos</a></li>
				<li><a href="/contact.php">   Fale conosco!</a></li>
			</ul>

				<!--<div class="world">
					<ul >
						<li><a href="#"><span> </span></a> </li>
						<li><select class="in-drop">
							  <option>EN</option>
							  <option>DE</option>
							  <option>ES</option>
							</select>
						</li>
					</ul>
				</div>-->
				<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
		<!---->

		<div class="header-top">
		<div class="container">
		<div class="head-top">
			<div class="logo">
		<a href="/"><img src="images/logo.jpeg" alt=""></a>
				</div>
		<div class="top-nav">
			  <ul class="megamenu skyblue">
					    <div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">

								</div>
							</div>



							<div class="col1">
								<div class="col1">

							</div>
							</div>
						  </div>
						</div></li>
			 </ul>
				</div>
					<div class="cart box_1">
						<a href="/produts.php">
						<h3> <div class="total">
							<span class=""></span> <span id="" class=""></span></div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<div class="clearfix"> </div>
					</div>

				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
</div>
<!--banner-->
	<div class="banner">
<div class="container">
		  <div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
			 <article style="position: absolute; width: 100%; opacity: 0;">
				 <?php $db = new SQLite3("storage.db"); ?>
				 <?php $res = $db->query('SELECT * FROM produtos'); ?>
				 <?php	while($row = $res->fetchArray()){ ?>
				   	<div class="banner-wrap">

						<div class="banner-top">
						<a href="/produts.php">

						<div class="banner-top-in">
							<img src="<?php echo $row['link']?>" class="img-responsive" alt="">
						</div></a>
						<div class="cart-at grid_1 simpleCart_shelfItem">

							<div class="off">


							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<?php } ?>
						</div>
						<div class="clearfix"> </div>

						</div>
				   		 <div class="clearfix"> </div>

				   	 </div>
			</article>
			</div>
			 <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="wmuActive">2</a></li>
                </ul>
		</div>
		<!---->
		  <script src="js/jquery.wmuSlider.js"></script>
			  <script>
       			$('.example1').wmuSlider({
					 pagination : true,
					 nav : false,
				});
   		     </script>

		</div>
	</div>
					<!---->
				</div>
			</div>
				<div class="clearfix"> </div>
			</div>

		</div>

		 </div>

		<!---->

	<!---->

	<!--	<div class="content-bottom">
				<div class="col-md-8 latter">
					<h6>NEWSLETTER</h6>
					<p>sign up now to our newsletter discount! to get the Welcome discount</p>

					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 latter-right">

						<form>
						<div class="join">
							<input type="text" value="your email here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'your email here';}">
							<i> </i>
						</div>
							<input type="submit" value="join us">
						</form>

				</div>
				<div class="clearfix"> </div>
			</div>


	<div class="bottom-content">

			<div class="col-md-4">
				<img src="images/ad1.png" class="img-responsive" alt="">
			</div>
			<div class="col-md-4">
				<img src="images/ad1.png" class="img-responsive" alt="">
			</div>
			<div class="col-md-4">
				<img src="images/ad1.png" class="img-responsive" alt="">
			</div>
			<div class="clearfix"> </div>
		</div>

	</div>
</div>
	<!--
	<div class="footer">
		<div class="container">
			<div class="col-md-3 footer-left">
			<!--	<a href="index.html"><img src="images/logo.jpeg" alt=""></a>
			</div>
			<div class="col-md-2 footer-middle">
				<ul>
					<li><a href="404.html">about us</a> </li>
					<li><a href="contact.html">   contact us</a></li>
					<li ><a href="products.html" >  our stores</a></li>
				</ul>
			</div>
			<div class="col-md-4 footer-left-in">
				<ul class="term">
					<li><a href="#">terms and conditions</a> </li>
					<li><a href="#">  No Salto in the press</a></li>
					<li ><a href="#" >  testimonials</a></li>
				</ul>
				<ul class="term">
					<li><a href="#">join us</a> </li>
					<li><a href="#">  No Salto videos</a></li>

				</ul>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 footer-right">
				<h5>WE SUPPORT</h5>
				<ul>
					<li><a href="#"><i> </i></a> </li>
					<li><a href="#"><i class="we"> </i></a></li>
					<li ><a href="#" ><i class="we-in"> </i></a></li>
					<li ><a href="#" ><i class="we-at"> </i></a></li>
					<li ><a href="#" ><i class="we-at-at"> </i></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	-->
		<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear'
					 		};
							*/

							$().UItoTop({ easingType: 'easeOutQuart' });

						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

	</div>

</body>
</html>
