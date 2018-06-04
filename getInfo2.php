<div class="bg-light pt-3 pb-2 pt-5 mt-5">
            <center>
                <h3 style="font-size: 50px">
                    <img style="width: 60px" src="img/a.jpg"> Mouka Foam  
                </h3><p style="font-size: 13px; margin-top: 10px">Indusral Estate, Lagos</p>
                
            </center>
        </div>
        <div class="container">
            <p><a href="#"> Home</a> > <a href=""> Mouka Foam</a> > Mouka REGINAL (6 ft by 6 ft 16 inches)(free delivery within Lagos) </p>
            <div class="row">
                <div class=" mt-3 col-md-4">
                    <img class="border" src="img/c.jpg">
                    <img class="border mt-2" src="img/c.jpg" style="width: 200px">
                </div>
                <div class="mt-3 col-md-6 border ml-5 pl-0 pr-0">
                    <div class="card-title p-2 pl-3" style="background-color:#416270;color: white; font-size:20px ">
                        Mouka Reginal (6ft by 6ft by 16 inches)...
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div style="font-size: 18px">
                                    LIST PRICE: <b><del>₦330,000</del></b><br>
                                OUR PRICE: <b>₦250,179</b><br>
                                <b>size</b> <input class="form-control" type="text" name="" value="0" disabled="true"> <br>
                                <b>Quality</b> <select class="form-control" id="qut">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                                <button class="btn mt-4 offset-3" ng-click="cartButton()"; style="background-color: #FE9A00">Add to Cart</button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <b class="ml-2"><img src="img/mc.png">PAY WITH MASTERCARD</b> <br>
                                <p align="center">and an additional 10% off</p>
                                <b class="ml-2"><img src="img/nationwide.png">NATIONWIDE DELIVER</b> <br>
                                <p align="center">We deliver Nationwide</p>
                                <b class="ml-2"><img src="img/Contact.png">CONTACT THE MARCHANT</b> <br>
                                <p align="center">Ask contact the narhm</p>
                            </div>
                        </div>                  
                    </div>
                        <div class="card-text p-2 pl-3 bg-light" style="background-color:#416270; font-size:20px; margin-top: 400px ">
                        <a href="#" style="text-align: center;">View size Guide</a>
                    </div>
                </div>
                <div class="col-md-10 text-center">
                    <h5 class="mt-3">PRODUCT DESCRIPTION</h5>
                    <p class="border mt-3 pt-3 pl-2 pr-2" style="width: 990px; height: 200px; font-size: 14px; text-align: left;">
                        MOUKA Regal: (6ft*6ft*16") • High quality ORTHOPEDIC mattress made from ultra high density foam covered with quilted premium grade jacquard. • Supports the lower back, lumbar area. • Endorsed by the Nigerian society of Physiotherapy. • 5 year warranty. • Ideal for adults with a combined weight of 290kg and above and also senior citizens. (6ft*6ft*16")
                    </p>
                </div>
            </div>
                <div class="col-md-2"></div>
            </div>
        </div><hr class="mt-4">
        <div class="container" ng-controller="hold">
            <h5 class="mt-4 mb-4">
                Related Products
            </h5>
            <div class="row">
                    <div class="col-md-2 mt-4" ng-model="infom" ng-repeat="x in pefCard|filter:search|orderBy:bring" value="{{x.price}}">
                        <div class="card pb-5 pl-1 pr-1">
                            <div class="card-img-top">
                                <a href="{{x.info}}"><img src="{{x.img}}" class="img-fluid mt-1"></a>
                            </div>
                            <div class="card-body p-3">
                                <div class="row pl-2 pb-1" style="font-size: 12px">
                                    {{x.name}}
                                </div>
                                <div class="price row pl-2">
                                {{x.price}} <p class="offset-5 pt-2" style="color: #FD7C22">{{x.buy}}</p>
                                </div>
                                <div class="row mb-0" style="">
                                <img class="pt-1 pl-2" src="img/a.jpg" width="25px" height="23px"> <p class="offset-4" style="color: #5200F1;">MOUKA FOAM</p>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
        </div><hr class="mt-4">
        <div class="container" ng-controller="hold">
            <h5 class="mt-4 mb-4">
                More Products From This Merchant
            </h5>
            <div class="row">
                    <div class="col-md-2 mt-4" ng-model="infom" ng-repeat="x in pefCard|filter:search|orderBy:bring" value="{{x.price}}">
                        <div class="card pb-5 pl-1 pr-1">
                            <div class="card-img-top">
                                <a href="{{x.info}}"><img src="{{x.img}}" class="img-fluid mt-1"></a>
                            </div>
                            <div class="card-body p-3">
                                <div class="row pl-2 pb-1" style="font-size: 12px">
                                    {{x.name}}
                                </div>
                                <div class="price row pl-2">
                                {{x.price}} <p class="offset-5 pt-2" style="color: #FD7C22">{{x.buy}}</p>
                                </div>
                                <div class="row mb-0" style="">
                                <img class="pt-1 pl-2" src="img/a.jpg" width="25px" height="23px"> <p class="offset-4" style="color: #5200F1;">MOUKA FOAM</p>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
             