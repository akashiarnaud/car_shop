<div class="allcontain">
    <div class="feturedsection">
        <h1 class="text-center"><span class="bdots">&bullet;</span>F E A T U R E S<span class="carstxt">C A R S</span>&bullet;</h1>
    </div>
    <div class="feturedimage">
        <div class="row firstrow">
            <div class="col-lg-6 costumcol colborder1">
                <div class="row costumrow">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
                        <img src="image/featurporch.jpg" alt="porsche">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
                        <div class="featurecontant">
                            <h1>LOREM IPSUM</h1>
                            <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                sed do eiusmod tempor incididunt </p>
                            <h2>Price &euro;</h2>
                            <button id="btnRM" onclick="rmtxt()">READ MORE</button>
                            <div id="readmore">
                                <h1>Car Name</h1>
                                <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                    sed do eiusmod tempor incididunt <br>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1 ,
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1<br>
                                </p>
                                <button id="btnRL">READ LESS</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 costumcol colborder2">
                <div class="row costumrow">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img2colon">
                        <img src="image/featurporch1.jpg" alt="porsche1">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
                        <div class="featurecontant">
                            <h1>LOREM IPSUM</h1>
                            <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                sed do eiusmod tempor incididunt </p>
                            <h2>Price &euro;</h2>
                            <button id="btnRM2">READ MORE</button>
                            <div id="readmore2">
                                <h1>Car Name</h1>
                                <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                    sed do eiusmod tempor incididunt <br>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1 ,
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1<br></p>
                                <button id="btnRL2">READ LESS</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ________________________LATEST CARS SECTION _______________________-->
    <div class="latestcars">
        <h1 class="text-center">&bullet; LATEST   CARS &bullet;</h1>
        <ul class="nav nav-tabs navbar-left latest-navleft">
            <li role="presentation" class="li-sortby"><span class="sortby">SORT BY: </span></li>
            <li data-filter=".RECENT" role="presentation"><a href="#mostrecent" class="prcBtnR">MOST RECENT </a></li>
            <li data-filter=".POPULAR" role="presentation"><a href="#mostpopular" class="prcBtnR">MOST POPULAR </a></li>
            <li  role="presentation"><a href="#" class="alphSort">ALPHABETICAL </a></li>
            <li data-filter=".HPRICE" role="presentation"><a href="#" class="prcBtnH">HIGHEST PRICE </a></li>
            <li data-filter=".LPRICE" role="presentation"><a href="#" class="prcBtnL">LOWEST  PRICE </a></li>
            <li id="hideonmobile">
        </ul>
    </div>
    <br>
    <br>
    <!-- ________________________Latest Cars Image Thumbnail________________-->

    <div class="grid">
        <div class="row">
            <?php foreach($listeVoiture as $lv){?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="txthover">
                        <img src="<?php echo base_url();?>image/imageKely/<?php echo $lv['ImageVoiture']; ?>" alt="car1">
                        <div class="txtcontent">
                            <div class="stars">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                            <div class="simpletxt">
                                <h3 class="name"><?php echo $lv['NomVoiture']; ?></h3>
                                <p>
                                    <?php echo $lv['description']; ?>
                                </p>
                                <h4 class="price"> <?php echo $lv['prix']; ?>&euro;</h4>
                                <button>READ MORE</button><br>
                                <div class="wishtxt">
                                    <p class="paragraph1"> Add to Wishlist <span class="glyphicon glyphicon-heart"></span> </p>
                                    <p class="paragraph2">Compare <span class="icon"><img src="image/compicon.png" alt="compicon"></span></p>
                                </div>
                            </div>
                            <div class="stars2">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

</div>