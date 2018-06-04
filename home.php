
    	<div class="container-fluid ">
    		<img src="img/home/webmall.jpg" id="headCon">
    	</div>
				

    	<div class="container ">
    		<div class="container-fluid mt-4">
    			<p class=" pt-2"><b>  FEATURED MERCHANT:</b> AFFORDABLE PERFUMES AND GIFTS</p>
  
    		</div>

    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md-3">
    					<img src="img/home/affordableperfumessidebanner0.jpg">
    				</div>
    				<div class="col-md-9">
    					<div class="row">
    						<div class="col-md-3 pl-0 mb-3" ng-model="infom" ng-repeat="x in card|filter:search|orderBy:bring" value="{{x.price}}">
							<div class="border">
							<div class="card-img-top p-1">
								<a href="{{x.info}}"><img src="{{x.img}}" class="img-fluid"></a>
							</div>
							<div class="card-body p-3">
								<div class="row pl-2 pb-1">
									{{x.name}}
								</div>
								<div class="price row pl-2">
								{{x.price}} <p class="offset-2" style="color: #FD7C22">{{x.buy}}</p>
								</div>
								<div class="row mb-0" style="">
								<img class="pt-1 pl-2" src="img/a.jpg" width="25px" height="23px"> <p class="offset-4" style="color: #5200F1;">MOUKA FOAM</p>
								</div>
							</div>
						</div>
    				</div>
    					</div>	
    				</div>	
				</div>    			
    		</div>

    		<div class="container-fluid mt-4">
    			<p class=" pt-2"><b> COMPUTER AND ACCESORIES</b></p>
  
    		</div>

    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md-3">
    					<img src="img/home/computerbanner0.jpg">
    				</div>
    				<div class="col-md-9">
    					<div class="row">
    						<div class="col-md-3 pl-0 mb-3" ng-model="infomB" ng-repeat="x in cardB|filter:search|orderBy:bring" value="{{x.price}}">
						<div class="border">
							<div class="card-img-top p-1">
								<a href="{{x.info}}"><img src="{{x.img}}" class="img-fluid"></a>
							</div>
							<div class="card-body p-3">
								<div class="row pl-2 pb-1">
									{{x.name}}
								</div>
								<div class="price row pl-2">
								{{x.price}} <p class="offset-2" style="color: #FD7C22">{{x.buy}}</p>
								</div>
								<div class="row mb-0" style="">
								<img class="pt-1 pl-2" src="img/a.jpg" width="25px" height="23px"> <p class="offset-4" style="color: #5200F1;">MOUKA FOAM</p>
								</div>
							</div>
						</div>
    				</div>
    					</div>	
    				</div>	
				</div>    			
    		</div>

    		<div class="container-fluid mt-4">
    			<p class=" pt-2"><b>ELECTRONICS</b></p>
  
    		</div>

    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md-3">
    					<img src="img/home/electronics20.jpg">
    				</div>
    				<div class="col-md-9">
    					<div class="row">
    						<div class="col-md-3 pl-0 mb-3" ng-model="infom" ng-repeat="x in cardC|filter:search|orderBy:bring" value="{{x.price}}">
						<div class="border">
							<div class="card-img-top p-1">
								<a href="{{x.info}}"><img src="{{x.img}}" class="img-fluid"></a>
							</div>
							<div class="card-body p-3">
								<div class="row pl-2 pb-1">
									{{x.name}}
								</div>
								<div class="price row pl-2">
								{{x.price}} <p class="offset-2" style="color: #FD7C22">{{x.buy}}</p>
								</div>
								<div class="row mb-0" style="">
								<img class="pt-1 pl-2" src="img/a.jpg" width="25px" height="23px"> <p class="offset-4" style="color: #5200F1;">MOUKA FOAM</p>
								</div>
							</div>
						</div>
    				</div>
    					</div>	
    				</div>	
				</div>    			
    		</div>

    		<div class="container-fluid mt-4">
    			<p class=" pt-2"><b>HOME AND OFFICE APPLIANCE</b></p>
  
    		</div>

    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md-3">
    					<img src="img/home/homedecorbanner0.jpg">
    				</div>
    				<div class="col-md-9">
    					<div class="row">
    						<div class="col-md-3 pl-0 mb-3" ng-model="infom" ng-repeat="x in cardD|filter:search|orderBy:bring" value="{{x.price}}">
						<div class="border">
							<div class="card-img-top p-1">
								<a href="{{x.info}}"><img src="{{x.img}}" class="img-fluid"></a>
							</div>
							<div class="card-body p-3">
								<div class="row pl-2 pb-1">
									{{x.name}}
								</div>
								<div class="price row pl-2">
								{{x.price}} <p class="offset-2" style="color: #FD7C22">{{x.buy}}</p>
								</div>
								<div class="row mb-0" style="">
								<img class="pt-1 pl-2" src="img/a.jpg" width="25px" height="23px"> <p class="offset-4" style="color: #5200F1;">MOUKA FOAM</p>
								</div>
							</div>
						</div>
    				</div>
    					</div>	
    				</div>	
				</div>    			
    		</div>

    		<div class="container-fluid mt-4">
    			<p class=" pt-2"><b>BABBY, KIDS AND TOYS</b></p>
  
    		</div>

    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md-3">
    					<img src="img/home/fooditems0.jpg">
    				</div>
    				<div class="col-md-9">
    					<div class="row">
    						<div class="col-md-3 pl-0 mb-3" ng-model="infom" ng-repeat="x in cardE|filter:search|orderBy:bring" value="{{x.price}}">
						<div class="border">
							<div class="card-img-top p-1">
								<a href="{{x.info}}"><img src="{{x.img}}" class="img-fluid"></a>
							</div>
							<div class="card-body p-3">
								<div class="row pl-2 pb-1">
									{{x.name}}
								</div>
								<div class="price row pl-2">
								{{x.price}} <p class="offset-2" style="color: #FD7C22">{{x.buy}}</p>
								</div>
								<div class="row mb-0" style="">
								<img class="pt-1 pl-2" src="img/a.jpg" width="25px" height="23px"> <p class="offset-4" style="color: #5200F1;">MOUKA FOAM</p>
								</div>
							</div>
						</div>
    				</div>
    					</div>	
    				</div>	
				</div>    			
    		</div>

    		<div class="container-fluid mt-4">
    			<p class=" pt-2"><b>FO0D & DRINK</b></p>
  
    		</div>
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md-3">
    					<img src="img/home/children0.jpg">
    				</div>
    				<div class="col-md-9">
    					<div class="row">
    						<div class="col-md-3 pl-0 mb-3" ng-model="infom" ng-repeat="x in cardF|filter:search|orderBy:bring" value="{{x.price}}">
						<div class="border">
							<div class="card-img-top p-1">
								<a href="{{x.info}}"><img src="{{x.img}}" class="img-fluid"></a>
							</div>
							<div class="card-body p-3">
								<div class="row pl-2 pb-1">
									{{x.name}}
								</div>
								<div class="price row pl-2">
								{{x.price}} <p class="offset-2" style="color: #FD7C22">{{x.buy}}</p>
								</div>
								<div class="row mb-0" style="">
								<img class="pt-1 pl-2" src="img/a.jpg" width="25px" height="23px"> <p class="offset-4" style="color: #5200F1;">MOUKA FOAM</p>
								</div>
							</div>
						</div>
    				</div>
    					</div>	
    				</div>	
				</div>    			
    		</div>



    		<!-- <div class="row mt-4" id="btn">
    			<a href="" class="btn col-md-6 offset-3">
    				<span ng-click="lm()" >LOAD MORE</span><span ng-click="ar()">SORT BY NAME </span><span ng-click="ap()">SORT BY PRICE</span>
    			</a>
    		</div>	
 -->
    	</div>