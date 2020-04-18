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
		background-color: white;
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
        <div class="container">
            <div class="row">
							<?php $db = new SQLite3('storage.db'); ?>
                    <table class="table">
                <thead>
                    <tr>
										<th>ID</th>
                    <th>Produto</th>
                    <th>Cep</th>
                    <th>Email</th>
                    <th>Nome</th>
                    <th>Cidade</th>
                    <th>Rua</th>
                    <th>Referência</th>
                    </tr>
                </thead>
                <tbody>

									<?php $res = $db->query('SELECT * FROM aprovados'); ?>
									<?php	while($row = $res->fetchArray()){ ?>
                    <tr>
												<td><?php echo $row['id'] ?> </td>
                        <td><?php echo $row['produto']?></td>
                        <td><?php echo $row['cep']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['nome']?></td>
                        <td><?php echo $row['cidade']?></td>
                        <td><?php echo $row['rua']?></td>
                        <td><?php echo $row['referencia'] ?></td>

                    </tr>
									<?php } ?>

                </tbody>
            </table>
						<form action="" class="container" name="Enviar" method="POST">
							<div class="row">
								 <div class="col-md-6">

										<input type="text" name="id" id="id" placeholder="id" class="form-control"/>
										<?php $id = $_POST['id']; ?>
										<?php
										if ( isset( $_POST['id'] ) ){
										$id = $_POST['id'];
										}else{
										$id = 'ERRO AO EXCLUIR TENTE NOVAMENTE';
										}
											?>
											<?php $db->exec("DELETE FROM aprovados WHERE id='$id'"); ?>

								 <div class="row col-xs-12">
										 <button type="submit" class="btn btn-block btn-sucess">Excluir</button>
								 </div>
								 </div>
						</form>
    </div>
    </div>
    </body>
</html>
