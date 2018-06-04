<!DOCTYPE html>
<html>
<head>
	<title>Joytune foam</title>
	<script type="text/javascript" src="angular.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap4/js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="javascript/angular.js"></script>
	<script type="text/javascript" src="javascript/angular-route.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap4/font/fontawesome/web-fonts-with-css/css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="css/moukasite.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<style type="text/css">
		
	</style>
</head>
<body ng-app="myApp" ng-controller="hold">
	<header class="fixed-top">
		<nav class="navbar navbar-expand-sm navbar-white" style="background-color: #25363F;">
			<div class="container">				
				<span class="justify-content-center">
					<a href="#" style="color: white; font-size: 12px;">BULK PURCHASE</a>
					<a href="#" style="color: white; font-size: 12px; margin-left: 20px ">SIGN UP</a> 
					<a href="#" style="color: white; font-size: 12px; margin-left: 20px" >LOG IN</a>
				</span>
				<span class="justify-content-center">
					<a href="#" style="color: white; font-size: 12px;">ayoadelala@yahoo.com</a>
					<a href="#" style="color: white; font-size: 12px; margin-left: 20px">07064196171</a>
				</span>
				<span class="justify-content-center">
					<a href="#" style="color: white; font-size: 12px;"><img src="img/whatsapp.jpg"></a>
					<a href="#" style="color: white; font-size: 12px;"><img src="img/bbm.jpg"></a>
					<a href="#" style="color: white; font-size: 12px;"><img src="img/instagram.jpg"></a>
					<a href="#" style="color: white; font-size: 12px;"><img src="img/facebook.png"></a>
					<a href="#" style="color: white; font-size: 12px;"><img src="img/twitter.png"></a>
					<a href="#" style="color: white; font-size: 12px;"><img src="img/youtube.png"></a>
				</span>				
			</div>	
		</nav>
		<nav class="navbar navbar-expand-sm navbar-white pb-1" style="background-color: #416270">
			<div class="container">				
				<span class="justify-content-center">
						<a class="" href="#!"><img src="img/logo.png"></a>				
				</span>
				<span >
					<div class="nav-item dropdown">
					    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;">CATEGORIES</a>
					    <div class="dropdown-menu" >
					      <a class="dropdown-item" href="#">Link 1</a>
					      <a class="dropdown-item" href="#">Link 2</a>
					      <a class="dropdown-item" href="#">Link 3</a>
					    </div>
					</div>	
				</span>
				<span style="width: 40%">
					<input class="mt-2 mb-2 form-control ml-0" type="text" name="search" ng-model="search" placeholder="i am searching for">
				</span>
				<span class="justify-content-center">
					<a href="#" style="color: white; font-size: 24px;">₦ {{cart}}</a>
				</span>
				<span>
					<a href="#" class="fa fa-shopping-cart" style="color: white; font-size: 20px; margin-left: 15px"></a>
				</span>
				<span class="justify-content-center">
					<a class="" href="#"><img src="img/sell.gif"></a>
				</span>				
			</div>	
		</nav>
	</header>
    <main>
    	<div ng-view></div>
    </main>
    <footer style=" background-color:#416270">
        <div class="container">
        	<p class="pt-5" style="color: white;">
        	<b>THE WEBMALL STORY</b><br>
        	<b>WebMall,</b>which launched in 2013, has become one of Nigeria's leading e-commerce platforms in an impressive amount of time. The WebMall site is designed to create the most appealing user experience, for both the customer and the merchant. We provide online and offline tools to promote the businesses of our merchants as well as affordable merchant plans. Our customers have access to an extensive range of high quality products and an excellent logistics service. We offer a wide range of products such as laptops, mobile phones, toys, speakers, sneakers, hair products, chargers, food items, wrist watches, printers and so on.<br><br>
        	<b>ONLINE SHOPPING ON WEBMALL</b><br>
        	<b>WebMall</b>customers can shop products from a number of categories - computer & accessories; electronics; home & office appliances; baby, kids & toys; phones & tablets; fashion; food & drink; gifts,books & stationery; pet foods & products; POS & accounting; sports & fitness; beauty, health & personal; movies, games & music and automative & industrial. With over a thousand products available, customers are not only assured of quality, but variety too. Get products delivered directly to your doorstep, anywhere in Nigeria. Enjoy easy and convenient payment by choosing to either pay on delivery or through bank transfer. Merchants are also given the option to pay in instalments. Everything at WebMall is designed around ensuring the customer experience is one of little to no hiccups along the way.<br><br>
        
        	Take advantage of the amazing deals we offer regularly, but in particular, be on the lookout for our cyber week deals. For a limited time only - the last week of November - WebMall is offering crazy deals on Sony Bravia LED TV, sound bar with wireless subwoofer, Microsoft Office 365 personal, ruffle open back dress, women lingerie, Samsung LED curved TV, men’s T-Shirts, doormats and so on.<br>
  			We stock a number of products that are sure to appeal to a wide variety of customers, including yam pounder, fit bit fitness bands, baby clothes, multifunctional lunch box, infinix hot 2 X510, Crea T-shirts, QI wireless pad, pancake pan, selfie sticks, hover board and more. We also boast an impressive collection of international brands such as Apple, ASOS, Kenwood, HP, Samsung, Microsoft, IKEA, Blackberry and so much more.<br><br>
  			<b>POPULAR PRODUCTS ON WEBMALL?</b><br>
  			<b>DVD Player -</b>
  			Kenwood smoothie blender - Canon EOS 700D camera - HP Laser Jet Pro printer - iHome wireless portable recharge speaker - IKEA laundry hamper - Kinelco dry iron - automatic toothpick dispenser - multifunction juicer - twin cereal dispenser - high waist thong shaper - rechargeable lamp - ASOS divide plimsolls - Kenwood microwave oven - Sabichi easy grip pan - Sabichi spaghetti server - Kenwood sandwich maker - Kenwood traditional kettle - Blackberry passport - Blackberry Q5 - Blackberry classic - Kenwood blender - bow tie - brooch - shoe organiser - chopping board
 
        	</p>
        </div>
    </footer>

</body>
</html>

	<script type="text/javascript">
	var app= angular.module('myApp',['ngRoute']);
	app.controller('hold', function($scope)
	{
		
		$scope.card=
		[
			{	"name":"MOUKA REGINAL (4FT X 8) ","img":"img/home/perfume3.jpg","price":"₦58,833.70","buy":"BUY NOW","info":"#!getInfo1"},
			{	"name":"MOUKA EXQUISITE (7FT X 12) ","img":"img/home/perfume1.png","price":"₦122,700.70","buy":"BUY NOW","info":"#!getInfo2"},
			{	"name":"MOUKA LEGEND (7FT X 9) ","img":"img/home/perfume2.jpg","price":"₦44,399.55","buy":"BUY NOW","info":"getInfo3.html"},

			{	"name":"MOUKA REGAL (7FT X 8) ","img":"img/home/perfume4.jpg","price":"₦140,959.00","buy":"BUY NOW","info":"getInfo4.html"},
			{	"name":"MOUKA LEGEND (4FT X 12) ","img":"img/home/perfume5.jpg","price":"₦55,919.70","buy":"BUY NOW","info":"getInfo5.html"},
			{	"name":"MOUKA MONDEO 76FT X 8) ","img":"img/home/perfume6.png","price":"₦84,719.70","buy":"BUY NOW","info":"getInfo6.html"	},

			{	"name":"MOUKA REGINAL (4FT X 8) ","img":"img/home/perfume7.jpg","price":"₦58,833.70","buy":"BUY NOW","info":"getInfo7.html"},
			{	"name":"MOUKA EXQUISITE (7FT X 12) ","img":"img/home/perfume8.png","price":"₦122,700.70","buy":"BUY NOW","info":"getInfo8.html"},
		];

		$scope.cardB=
		[
			{	"name":"MOUKA REGINAL (4FT X 8) ","img":"img/home/electronic1.jpg","price":"₦58,833.70","buy":"BUY NOW","info":"#!getInfo1.html"},
			{	"name":"MOUKA EXQUISITE (7FT X 12) ","img":"img/home/electronic2.jpg","price":"₦122,700.70","buy":"BUY NOW","info":"getInfo2.html"},
			{	"name":"MOUKA LEGEND (7FT X 9) ","img":"img/home/electronic3.jpg","price":"₦44,399.55","buy":"BUY NOW","info":"getInfo3.html"},

			{	"name":"MOUKA REGAL (7FT X 8) ","img":"img/home/electronic4.jpg","price":"₦140,959.00","buy":"BUY NOW","info":"getInfo4.html"},
			{	"name":"MOUKA LEGEND (4FT X 12) ","img":"img/home/electronic5.png","price":"₦55,919.70","buy":"BUY NOW","info":"getInfo5.html"},
			{	"name":"MOUKA MONDEO 76FT X 8) ","img":"img/home/electronic6.jpg","price":"₦84,719.70","buy":"BUY NOW","info":"getInfo6.html"	},

			{	"name":"MOUKA REGINAL (4FT X 8) ","img":"img/home/electronic7.jpg","price":"₦58,833.70","buy":"BUY NOW","info":"getInfo7.html"},
			{	"name":"MOUKA EXQUISITE (7FT X 12) ","img":"img/home/electronic8.jpg","price":"₦122,700.70","buy":"BUY NOW","info":"getInfo8.html"},
		];

		$scope.cardC=
		[
			{	"name":"MOUKA REGINAL (4FT X 8) ","img":"img/home/electro1.jpg","price":"₦58,833.70","buy":"BUY NOW","info":"getInfo1.html"},
			{	"name":"MOUKA EXQUISITE (7FT X 12) ","img":"img/home/electro2.jpg","price":"₦122,700.70","buy":"BUY NOW","info":"getInfo2.html"},
			{	"name":"MOUKA LEGEND (7FT X 9) ","img":"img/home/electro3.jpg","price":"₦44,399.55","buy":"BUY NOW","info":"getInfo3.html"},

			{	"name":"MOUKA REGAL (7FT X 8) ","img":"img/home/electro4.jpg","price":"₦140,959.00","buy":"BUY NOW","info":"getInfo4.html"},
			{	"name":"MOUKA LEGEND (4FT X 12) ","img":"img/home/electro5.jpg","price":"₦55,919.70","buy":"BUY NOW","info":"getInfo5.html"},
			{	"name":"MOUKA MONDEO 76FT X 8) ","img":"img/home/electro6.jpeg","price":"₦84,719.70","buy":"BUY NOW","info":"getInfo6.html"	},

			{	"name":"MOUKA REGINAL (4FT X 8) ","img":"img/home/electro7.jpg","price":"₦58,833.70","buy":"BUY NOW","info":"getInfo7.html"},
			{	"name":"MOUKA EXQUISITE (7FT X 12) ","img":"img/home/electro8.jpg","price":"₦122,700.70","buy":"BUY NOW","info":"getInfo8.html"},
		];

		$scope.cardD	=
		[
			{	"name":"MOUKA REGINAL (4FT X 8) ","img":"img/home/home1.jpg","price":"₦58,833.70","buy":"BUY NOW","info":"getInfo1.html"},
			{	"name":"MOUKA EXQUISITE (7FT X 12) ","img":"img/home/home2.jpg","price":"₦122,700.70","buy":"BUY NOW","info":"getInfo2.html"},
			{	"name":"MOUKA LEGEND (7FT X 9) ","img":"img/home/home3.jpg","price":"₦44,399.55","buy":"BUY NOW","info":"getInfo3.html"},

			{	"name":"MOUKA REGAL (7FT X 8) ","img":"img/home/home4.jpg","price":"₦140,959.00","buy":"BUY NOW","info":"getInfo4.html"},
			{	"name":"MOUKA LEGEND (4FT X 12) ","img":"img/home/home5.jpg","price":"₦55,919.70","buy":"BUY NOW","info":"getInfo5.html"},
			{	"name":"MOUKA MONDEO 76FT X 8) ","img":"img/home/home6.jpg","price":"₦84,719.70","buy":"BUY NOW","info":"getInfo6.html"	},

			{	"name":"MOUKA REGINAL (4FT X 8) ","img":"img/home/home7.jpg","price":"₦58,833.70","buy":"BUY NOW","info":"getInfo7.html"},
			{	"name":"MOUKA EXQUISITE (7FT X 12) ","img":"img/home/home8.jpg","price":"₦122,700.70","buy":"BUY NOW","info":"getInfo8.html"},
		];

		$scope.cardE=
		[
			{	"name":"MOUKA REGINAL (4FT X 8) ","img":"img/home/children1.jpg","price":"₦58,833.70","buy":"BUY NOW","info":"getInfo1.html"},
			{	"name":"MOUKA EXQUISITE (7FT X 12) ","img":"img/home/children2.png","price":"₦122,700.70","buy":"BUY NOW","info":"getInfo2.html"},
			{	"name":"MOUKA LEGEND (7FT X 9) ","img":"img/home/children3.jpg","price":"₦44,399.55","buy":"BUY NOW","info":"getInfo3.html"},

			{	"name":"MOUKA REGAL (7FT X 8) ","img":"img/home/children4.jpg","price":"₦140,959.00","buy":"BUY NOW","info":"getInfo4.html"},
			{	"name":"MOUKA LEGEND (4FT X 12) ","img":"img/home/children5.jpg","price":"₦55,919.70","buy":"BUY NOW","info":"getInfo5.html"},
			{	"name":"MOUKA MONDEO 76FT X 8) ","img":"img/home/children6.jpeg","price":"₦84,719.70","buy":"BUY NOW","info":"getInfo6.html"	},

			{	"name":"MOUKA REGINAL (4FT X 8) ","img":"img/home/children7.jpg","price":"₦58,833.70","buy":"BUY NOW","info":"getInfo7.html"},
			{	"name":"MOUKA EXQUISITE (7FT X 12) ","img":"img/home/children8.jpg","price":"₦122,700.70","buy":"BUY NOW","info":"getInfo8.html"},
		];

		$scope.cardF	=
		[
			{	"name":"MOUKA REGINAL (4FT X 8) ","img":"img/home/food1.jpg","price":"₦58,833.70","buy":"BUY NOW","info":"getInfo1.html"},
			{	"name":"MOUKA EXQUISITE (7FT X 12) ","img":"img/home/food2.jpg","price":"₦122,700.70","buy":"BUY NOW","info":"getInfo2.html"},
			{	"name":"MOUKA LEGEND (7FT X 9) ","img":"img/home/food3.jpg","price":"₦44,399.55","buy":"BUY NOW","info":"getInfo3.html"},

			{	"name":"MOUKA REGAL (7FT X 8) ","img":"img/home/food4.jpg","price":"₦140,959.00","buy":"BUY NOW","info":"getInfo4.html"},
			{	"name":"MOUKA LEGEND (4FT X 12) ","img":"img/home/food5.jpg","price":"₦55,919.70","buy":"BUY NOW","info":"getInfo5.html"},
			// {	"name":"MOUKA MONDEO 76FT X 8) ","img":"img/home/home6","price":"₦84,719.70","buy":"BUY NOW","info":"getInfo6.html"	},

			// {	"name":"MOUKA REGINAL (4FT X 8) ","img/home/home7","price":"₦58,833.70","buy":"BUY NOW","info":"getInfo7.html"},
			// {	"name":"MOUKA EXQUISITE (7FT X 12) ","img/home/home8","price":"₦122,700.70","buy":"BUY NOW","info":"getInfo8.html"},
		];

		$scope.pefCard=
        [
            {   "name":"MOUKA REGINAL (4FT X 8) ","img":"img/c.jpg","price":"₦58,833.70","buy":"BUY NOW"},
            {   "name":"MOUKA EXQUISITE (7FT X 12) ","img":"img/d.jpg","price":"₦122,700.70","buy":"BUY NOW"},
            {   "name":"MOUKA LEGEND (7FT X 9) ","img":"img/e.jpg","price":"₦44,399.55","buy":"BUY NOW","info":"inventrysystem.html"},

            {   "name":"MOUKA REGAL (7FT X 8) ","img":"img/f.jpg","price":"₦140,959.00","buy":"BUY NOW"},
            {   "name":"MOUKA LEGEND (4FT X 12) ","img":"img/g.jpg","price":"₦55,919.70","buy":"BUY NOW"},
            {   "name":"MOUKA MONDEO 76FT X 8) ","img":"img/h.jpg","price":"₦84,719.70","buy":"BUY NOW" },

            {   "name":"MOUKA REGINAL (4FT X 8) ","img":"img/c.jpg","price":"₦58,833.70","buy":"BUY NOW"},
            {   "name":"MOUKA EXQUISITE (7FT X 12) ","img":"img/d.jpg","price":"₦122,700.70","buy":"BUY NOW"},
            {   "name":"MOUKA LEGEND (7FT X 9) ","img":"img/e.jpg","price":"₦44,399.55","buy":"BUY NOW"},

            {   "name":"MOUKA REGAL (7FT X 8) ","img":"img/f.jpg","price":"₦140,959.00","buy":"BUY NOW"},
            {   "name":"MOUKA LEGEND (4FT X 12) ","img":"img/g.jpg","price":"₦55,919.70","buy":"BUY NOW"},
            {   "name":"MOUKA MONDEO 76FT X 8) ","img":"img/h.jpg","price":"₦84,719.70","buy":"BUY NOW" },
            {   "name":"MOUKA MONDEO (6FT X 8) ","img":"img/h.jpg","price":"₦64,719.70","buy":"BUY NOW"},
            {   "name":"MOUKA FLODY (3FT X 6) ","img":"img/j.jpg","price":"₦24,719.70","buy":"BUY NOW"}
        ];
       	 
        $scope.qut;
        $scope.cart= 0.00;
        $scope.cartButton= 	function(){
        	$scope.cart=$scope.cart+250.179;
        }

		$scope.infoo=function(){$scope.pric="#0.00";}

		$scope.lm=function() {$scope.add=6}
		$scope.ar=function() {$scope.bring="name"}
		$scope.ap=function() {$scope.bring="price"}
		
		// $scope.sub=function()
		// {
		// 	var ob= {};
		// 	ob.name=$scope
		// }
	});

	app.config(function($routeProvider)
		{
			$routeProvider
			.when("/", {templateUrl:"home.php"})
			.when("/getInfo1",{templateUrl:"getInfo1.php"})
			.when("/getInfo2",{templateUrl:"getInfo2.php"})
		});
</script>
