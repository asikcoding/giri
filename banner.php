
<?php
	include 'koneksi.php';

	$barang = mysqli_query($conn,"SELECT tb_barang.*,  tb_harga.* FROM tb_barang INNER JOIN tb_harga ON  tb_barang.ID = tb_harga.ID ");
	foreach ($barang as $item)
	// var_dump($item);
		// echo json_encode($item);
// ;sscanf(str, format)
	// die()

 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
		<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
		<link href="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.min.css" rel="stylesheet" type="text/css">
			 <script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.js"></script>

			 <!-- Include English language -->
			 <script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.en.js"></script>
		<!--===============================================================================================-->
	</head>
	<body class="animsition">
		<!-- Header -->
		<header class="header1">
			<!-- Header desktop -->
			<div class="container-menu-header">
				<div class="topbar">
					<div class="topbar-social">
						<a href="#" class="topbar-social-item fa fa-facebook"></a>
						<a href="#" class="topbar-social-item fa fa-instagram"></a>
						<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
						<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
						<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
					</div>
					<span class="topbar-child1">
						Free shipping for standard order over $100
					</span>
					<div class="topbar-child2">
						<span class="topbar-email">
							fashe@example.com
						</span>
						<div class="topbar-language rs1-select2">
							<select class="selection-1" name="time">
								<option>USD</option>
								<option>EUR</option>
							</select>
						</div>
					</div>
				</div>
				<div class="wrap_header">
					<!-- Logo -->
					<a href="index.html" class="logo">
						<img src="images/icons/logo.png" alt="IMG-LOGO">
					</a>
					<!-- Menu -->
					<div class="wrap_menu">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="index.html">Home</a>
									<ul class="sub_menu">
										<li><a href="index.html">Homepage V1</a></li>
										<li><a href="home-02.html">Homepage V2</a></li>
										<li><a href="home-03.html">Homepage V3</a></li>
									</ul>
								</li>
								<li>
									<a href="product.html">Shop</a>
								</li>
								<li class="sale-noti">
									<a href="product.html">Sale</a>
								</li>
								<li>
									<a href="cart.html">Features</a>
								</li>
								<li>
									<a href="blog.html">Blog</a>
								</li>
								<li>
									<a href="about.html">About</a>
								</li>
								<li>
									<a href="contact.html">Contact</a>
								</li>
							</ul>
						</nav>
					</div>
					<!-- Header Icon -->
					<div class="header-icons">
						<a href="#" class="header-wrapicon1 dis-block">
							<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
						</a>
						<span class="linedivide1"></span>
						<div class="header-wrapicon2">
							<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
							<span class="header-icons-noti">0</span>
							<!-- Header cart noti -->
							<div class="header-cart header-dropdown">
								<ul class="header-cart-wrapitem">
									<li class="header-cart-item">
										<div class="header-cart-item-img">
											<img src="images/item-cart-01.jpg" alt="IMG">
										</div>
										<div class="header-cart-item-txt">
											<a href="#" class="header-cart-item-name">
												White Shirt With Pleat Detail Back
											</a>
											<span class="header-cart-item-info">
												1 x $19.00
											</span>
										</div>
									</li>
									<li class="header-cart-item">
										<div class="header-cart-item-img">
											<img src="images/item-cart-02.jpg" alt="IMG">
										</div>
										<div class="header-cart-item-txt">
											<a href="#" class="header-cart-item-name">
												Converse All Star Hi Black Canvas
											</a>
											<span class="header-cart-item-info">
												1 x $39.00
											</span>
										</div>
									</li>
									<li class="header-cart-item">
										<div class="header-cart-item-img">
											<img src="images/item-cart-03.jpg" alt="IMG">
										</div>
										<div class="header-cart-item-txt">
											<a href="#" class="header-cart-item-name">
												Nixon Porter Leather Watch In Tan
											</a>
											<span class="header-cart-item-info">
												1 x $17.00
											</span>
										</div>
									</li>
								</ul>
								<div class="header-cart-total">
									Total: $75.00
								</div>
								<div class="header-cart-buttons">
									<div class="header-cart-wrapbtn">
										<!-- Button -->
										<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
											View Cart
										</a>
									</div>
									<div class="header-cart-wrapbtn">
										<!-- Button -->
										<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
											Check Out
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Header Mobile -->
			<div class="wrap_header_mobile">
				<!-- Logo moblie -->
				<a href="index.html" class="logo-mobile">
					<img src="images/icons/logo.png" alt="IMG-LOGO">
				</a>
				<!-- Button show menu -->
				<div class="btn-show-menu">
					<!-- Header Icon mobile -->
					<div class="header-icons-mobile">
						<a href="#" class="header-wrapicon1 dis-block">
							<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
						</a>
						<span class="linedivide2"></span>
						<div class="header-wrapicon2">
							<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
							<span class="header-icons-noti">0</span>
							<!-- Header cart noti -->
							<div class="header-cart header-dropdown">
								<ul class="header-cart-wrapitem">
									<li class="header-cart-item">
										<div class="header-cart-item-img">
											<img src="images/item-cart-01.jpg" alt="IMG">
										</div>
										<div class="header-cart-item-txt">
											<a href="#" class="header-cart-item-name">
												White Shirt With Pleat Detail Back
											</a>
											<span class="header-cart-item-info">
												1 x $19.00
											</span>
										</div>
									</li>
									<li class="header-cart-item">
										<div class="header-cart-item-img">
											<img src="images/item-cart-02.jpg" alt="IMG">
										</div>
										<div class="header-cart-item-txt">
											<a href="#" class="header-cart-item-name">
												Converse All Star Hi Black Canvas
											</a>
											<span class="header-cart-item-info">
												1 x $39.00
											</span>
										</div>
									</li>
									<li class="header-cart-item">
										<div class="header-cart-item-img">
											<img src="images/item-cart-03.jpg" alt="IMG">
										</div>
										<div class="header-cart-item-txt">
											<a href="#" class="header-cart-item-name">
												Nixon Porter Leather Watch In Tan
											</a>
											<span class="header-cart-item-info">
												1 x $17.00
											</span>
										</div>
									</li>
								</ul>
								<div class="header-cart-total">
									Total: $75.00
								</div>
								<div class="header-cart-buttons">
									<div class="header-cart-wrapbtn">
										<!-- Button -->
										<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
											View Cart
										</a>
									</div>
									<div class="header-cart-wrapbtn">
										<!-- Button -->
										<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
											Check Out
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</div>
				</div>
			</div>
			<!-- Menu Mobile -->
			<div class="wrap-side-menu" >
				<nav class="side-menu">
					<ul class="main-menu">
						<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
							<span class="topbar-child1">
								Free shipping for standard order over $100
							</span>
						</li>
						<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
							<div class="topbar-child2-mobile">
								<span class="topbar-email">
									fashe@example.com
								</span>
								<div class="topbar-language rs1-select2">
									<select class="selection-1" name="time">
										<option>USD</option>
										<option>EUR</option>
									</select>
								</div>
							</div>
						</li>
						<li class="item-topbar-mobile p-l-10">
							<div class="topbar-social-mobile">
								<a href="#" class="topbar-social-item fa fa-facebook"></a>
								<a href="#" class="topbar-social-item fa fa-instagram"></a>
								<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
								<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
								<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
							</div>
						</li>
						<li class="item-menu-mobile">
							<a href="index.html">Home</a>
							<ul class="sub-menu">
								<li><a href="index.html">Homepage V1</a></li>
								<li><a href="home-02.html">Homepage V2</a></li>
								<li><a href="home-03.html">Homepage V3</a></li>
							</ul>
							<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
						</li>
						<li class="item-menu-mobile">
							<a href="product.html">Shop</a>
						</li>
						<li class="item-menu-mobile">
							<a href="product.html">Sale</a>
						</li>
						<li class="item-menu-mobile">
							<a href="cart.html">Features</a>
						</li>
						<li class="item-menu-mobile">
							<a href="blog.html">Blog</a>
						</li>
						<li class="item-menu-mobile">
							<a href="about.html">About</a>
						</li>
						<li class="item-menu-mobile">
							<a href="contact.html">Contact</a>
						</li>
					</ul>
				</nav>
			</div>
		</header>
		<br>
		<br>
		<section class="container col-md-8" id="app">


			<!--  -->
			<div class="card">
				<div class="col-md-12">
					<div class="card-header">
						Pemesanan
					</div>
					<div class="card-body">
						<form action="simpanpinjam.php" method="POST" enctype="multitipart-data">
							<div class="form-row">
								<div class="form-group col-md-3">
									<label for="inputEmail4">nama Pemesan</label>
									<input type="text" v-model="pemesan" class="form-control"  name="pemesan" id="inputEmail4" placeholder="">
								</div>
								<div class="form-group col-md-3">
									<label for="inputEmail4">Barang</label>
									<select class="form-control" v-model="barang" @change="jabar()" name="barang">
										<option>---</option>x	x
										<?php foreach ($barang as $item): ?>
											<option value="<?php echo $item['ID'] ?>"><?php echo $item['KODE'] .' / '. $item['NAMA']  ?></option>
										<?php endforeach ?>

									</select>
								</div>

								<!-- <div class="form-group col-md-3">
									<span>Format         :{{panjang}} x {{lebar}} M </span><br>
									<span>Jenis Bahan    : {{bahan}}</span><br>
									     <span>Jenis Finishing: {{finising}} Meter</span><br>
									<span>harga 		 : {{harga}} </span>

								</div> -->
							</div>
							<div class="form-row">
								<div class="col-md-3">
									<label for="inputPassword4">Lebar</label>
									<input type="text" v-model="lebar" class="form-control">
								</div>
								<div class="col-md-3">
										<label for="inputEmail4">Panjang</label>
										<input type="text" v-model="panjang" class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
										<label>	HaRGA sTANDART</label>
									<input type="" name="biaya" class="form-control" v-model="hargastandart">
								</div>
								<div class="form-group col-md-6">
									<label for="inputAddress">Finishing</label>
									<select id="inputState" v-model="finishing" name="finishing" class="form-control">
										<option selected value="Lepas">Lepas</option>
										<option value="Lem">Lem</option>
										<option value="Plong">Plong</option>
										<option value="Selongsong">Selongsong</option>
									</select>
								</div>
								<!-- <div class="form-group col-md-6">
									<label for="inputAddress">Jenis Bahan</label>
									<select id="inputState" v-model="bahan" class="form-control">
										<option selected>Banner</option>
										<option>Backlid</option>
										<option>Korcin</option>
									</select>
								</div> -->
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<label for="inputCity">Jumlah 	Pesanan</label>
									<input type="text" @change="totalBiaya()"  v-model="jumlah" name="jumlah" class="form-control">
								</div>
								<div class="form-group col-md-6">
									<label for="inputState">Total</label>
									<input type="text" name="total" :value="totalHarga" class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<label for="inputZip">Tanggal</label>
									<!-- <input type="text" name="tanggal" class="form-control"> -->
									<input type="text"
									       class="datepicker-here form-control"
									       data-language='en'
												 v-model="tanggal_pesan"
									       data-multiple-dates="3"
									       data-multiple-dates-separator=", "
									       data-position='top left'/>
								</div>
								<div class="form-group col-md-6">
									<label for="inputZip">Uang Muka</label>
									<input type="text" v-model="um" name="uangmuka" class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<label for="inputZip">Sisa</label>
									<input type="text"  :value="sisaTotal"  name="tanggungan" name="sisa" class="form-control">
								</div>
								<div class="form-group col-md-6">
									<input type="file" name="gambar">
								</div>
								<!-- <span>{{totalHarga}}</span> -->
							</div>
							<div>
								<button type="submit" class="btn btn-primary">Simpan</button>
							</div>
							<div>
								<button type="submit" class="btn btn-primary">Cetak</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<table class="table">

		</table>
		<!-- Footer -->
		<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
			<div class="flex-w p-b-90">
				<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
					<h4 class="s-text12 p-b-30">
					GET IN TOUCH
					</h4>
					<div>
						<p class="s-text7 w-size27">
							Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
						</p>
						<div class="flex-m p-t-30">
							<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
							<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
							<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
							<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
							<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
						</div>
					</div>
				</div>
				<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
					<h4 class="s-text12 p-b-30">
					Categories
					</h4>
					<ul>
						<li class="p-b-9">
							<a href="#" class="s-text7">
								Men
							</a>
						</li>
						<li class="p-b-9">
							<a href="#" class="s-text7">
								Women
							</a>
						</li>
						<li class="p-b-9">
							<a href="#" class="s-text7">
								Dresses
							</a>
						</li>
						<li class="p-b-9">
							<a href="#" class="s-text7">
								Sunglasses
							</a>
						</li>
					</ul>
				</div>
				<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
					<h4 class="s-text12 p-b-30">
					Links
					</h4>
					<ul>
						<li class="p-b-9">
							<a href="#" class="s-text7">
								Search
							</a>
						</li>
						<li class="p-b-9">
							<a href="#" class="s-text7">
								About Us
							</a>
						</li>
						<li class="p-b-9">
							<a href="#" class="s-text7">
								Contact Us
							</a>
						</li>
						<li class="p-b-9">
							<a href="#" class="s-text7">
								Returns
							</a>
						</li>
					</ul>
				</div>
				<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
					<h4 class="s-text12 p-b-30">
					Help
					</h4>
					<ul>
						<li class="p-b-9">
							<a href="#" class="s-text7">
								Track Order
							</a>
						</li>
						<li class="p-b-9">
							<a href="#" class="s-text7">
								Returns
							</a>
						</li>
						<li class="p-b-9">
							<a href="#" class="s-text7">
								Shipping
							</a>
						</li>
						<li class="p-b-9">
							<a href="#" class="s-text7">
								FAQs
							</a>
						</li>
					</ul>
				</div>
				<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
					<h4 class="s-text12 p-b-30">
					Newsletter
					</h4>
					<form>
						<div class="effect1 w-size9">
							<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="">.com">
							<span class="effect1-line"></span>
						</div>
						<div class="w-size2 p-t-20">
							<!-- Button -->
							<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Subscribe
							</button>
						</div>
					</form>
				</div>
			</div>
			<div class="t-center p-l-15 p-r-15">
				<a href="#">
					<img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
				</a>
				<a href="#">
					<img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
				</a>
				<a href="#">
					<img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
				</a>
				<a href="#">
					<img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
				</a>
				<a href="#">
					<img class="h-size2" src="images/icons/discover.png" alt="IMG-DISCOVER">
				</a>
				<div class="t-center s-text8 p-t-20">
					Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
				</div>
			</div>
		</footer>
		<!-- Back to top -->
			<div class="btn-back-to-top bg0-hov" id="myBtn">
				<span class="symbol-btn-back-to-top">
					<i class="fa fa-angle-double-up" aria-hidden="true"></i>
				</span>
			</div>
			<!-- Container Selection1 -->
			<div id="dropDownSelect1"></div>
			<!--===============================================================================================-->
			<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
			<!--===============================================================================================-->
			<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
			<!--===============================================================================================-->
			<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
			<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
			<!--===============================================================================================-->
			<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
			<script type="text/javascript">
				$(".selection-1").select2({
					minimumResultsForSearch: 20,
					dropdownParent: $('#dropDownSelect1')
				});
			</script>
			<!--===============================================================================================-->
			<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
			<script type="text/javascript" src="js/slick-custom.js"></script>
			<!--===============================================================================================-->
			<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
			<!--===============================================================================================-->
			<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
			<!--===============================================================================================-->
			<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
			<script type="text/javascript">
				$('.block2-btn-addcart').each(function(){
					var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
					$(this).on('click', function(){
						swal(nameProduct, "is added to cart !", "success");
					});
				});
				$('.block2-btn-addwishlist').each(function(){
					var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
					$(this).on('click', function(){
						swal(nameProduct, "is added to wishlist !", "success");
					});
				});

			</script>
			<!-- <script>
				$('#datepicker').datepicker({
					uiLibrary: 'bootstrap4'
				});
			</script> -->
			<!--===============================================================================================-->
			<script src="js/main.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/vue@2.5.22/dist/vue.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
			<!-- <script src="https://cdn.jsdelivr.net/npm/vue-currency-filter@3.4.2/dist/VueCurrencyFilter.min.js"></script> -->
		<script>
			var app = new Vue ({
				el: '#app',
				data(){
					return {
						panjang: '',
						lebar: '',
						barang:'',
						bahan: '',
						pemesan:'',
						finishing:'',
						jumlah:'',
						totalHarga : '',
						tanggal_pesan:'',
						hargastandart:'',
						hrg: '',
						um: 0,
						sisa:''


						// luas: ''
					}
				},
					computed:{
						luas: function (){
							return (this.panjang * this.lebar) /10000
						},
						harga() {
							return this.hrg = (this.luas * parseInt(this.hargastandart))
							// .toFixed(2)
						},
						sisaTotal(){
							return (parseInt(this.totalHarga) - parseInt(this.um))
						}
					},
					methods:{
							totalBiaya(){
							let biaya = 0
							if (this.finishing == 'lem') {
									biaya = 1000
									console.log(this.finishing)
								}else if(this.finishing == 'Plong'){
									biaya = 500 * (parseInt(this.jumlah) * 4)
								}else if(this.finishing == 'Selongsong'){
									biaya = 1000
								}else if(this.finishing == 'Lepas'){
									biaya = 0
							}

							return this.totalHarga = (parseInt(this.hrg) + biaya) * (parseInt(this.jumlah))

					},
					jabar(){
						if (this.barang == 1) {this.hargastandart = 25000
						}else if(this.barang == 2 ){
							this.hargastandart = 20000
						}else {
							this.hargastandart = 17500
						}
					}
				}
			})

		</script>
	</body>
</html>
