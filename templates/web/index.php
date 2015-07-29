<?php include 'header.php'; ?>
<section id="slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>L</span>-awyer</h1>
                                <h2>Legal Lawyer</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="<?= USER_IMG_URL ?>/home/girl1.jpg" class="girl img-responsive" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>L</span>-awyer</h1>
                                <h2>Legal Lawyer</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="<?= USER_IMG_URL ?>/home/girl2.jpg" class="girl img-responsive" alt="" />
                                <!--<img src="<?= USER_IMG_URL ?>/home/pricing.png"  class="pricing" alt="" />-->
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>L</span>-awyer</h1>
                                <h2>Legal Lawyer</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="<?= USER_IMG_URL ?>/home/girl3.jpg" class="girl img-responsive" alt="" />
                            </div>
                        </div>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->

<section>
    <div class="container">
        <div class="row">
            <?php include 'sitebar.php'; ?>
            <div class="col-sm-9 padding-right">


                <div class="category-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#top-user" data-toggle="tab">For User</a></li>
                            <li><a href="#for-lawyer" data-toggle="tab">For Lawyer</a></li>
                            <li><a href="#top-lawyers" data-toggle="tab">Top Lawyers</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="for-user"  >
                            <?php
                            $userMenus = Menu::getMenus(Validation::getAccessType(0), "Top User");
                            $prefixurl = "";
                            if (count($userMenus)) {
                                foreach ($userMenus as $key => $data) {
                                    if(strlen($prefixurl) == 0){
                                        $accessObj = new AccessType();
                                        $accessObj->set("access_id", $data['access_type']);
                                        $access_url = $accessObj->getName();
                                        print_r($access_url);
                                        $prefixurl = SERVER_URL."/";
                                    }
                                    ?>
                                    <div class="col-sm-3">
                                        <div class="lawyer-image-wrapper">
                                            <div class="single-lawyer">
                                                <div class="lawyerinfo text-center">
                                                    <img  alt="<?= $data["name"] ?>" rel="<?= $data["name"] ?> logo" name="<?= $data["name"] ?>" 
                                                          src="<?php echo MENU_IMG_URL . "/" . $data['image']; ?>" width="80px"height="75px"><br/>
                                                    <a class="btn btn-default"  href="<?= $data["url"] ?>"><?= $data["name"] ?> </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                <?php }
                            } ?>
                        </div>

                        <div class="tab-pane fade" id="for-lawyer"  >
                            <?php
                            $lawyerMenus = Menu::getMenus(Validation::getAccessType(0), "Top Lawyer");
                            if (count($lawyerMenus)) {
                                foreach ($lawyerMenus as $key => $data) {
                                    ?>
                                    <div class="col-sm-3">
                                        <div class="lawyer-image-wrapper">
                                            <div class="single-lawyer">
                                                <div class="lawyerinfo text-center">
                                                    <img  alt="<?= $data["name"] ?>" rel="<?= $data["name"] ?> logo" name="<?= $data["name"] ?>" 
                                                          src="<?php echo MENU_IMG_URL . "/" . $data['image']; ?>" width="80px"height="75px"><br/>
                                                    <a class="btn btn-default"  href="<?= $data["url"] ?>"><?= $data["name"] ?> </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
    <?php }
} ?>

                        </div>

                        <div class="tab-pane fade" id="top-lawyers" >
                            hi
                        </div>
                    </div>
                </div><!--/category-tab-->

                <!--/recommended_items-->

            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>
<!--/Footer-->