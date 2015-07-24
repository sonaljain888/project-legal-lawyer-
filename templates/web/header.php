<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?=$pageDetails[0]['description']?>">
        <meta name="author" content="<?=$pageDetails[0]['author']?>">
        <meta name="keywords" content="<?=$pageDetails[0]['Keyword']?>">
        <title><?=$pageDetails[0]['title']?> | <?=SITE_NAME?></title>
        <?php include 'user_csslinks.php'; ?>
        <?php include 'user_jslinks.php'; ?>
        <!--[if lt IE 9]>
        <script src="<?=USER_JS_URL?>/js/html5shiv.js"></script>
        <script src="<?=USER_JS_URL?>/js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="<?=USER_IMG_URL?>/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=USER_IMG_URL?>/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=USER_IMG_URL?>/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=USER_IMG_URL?>/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?=USER_IMG_URL?>/ico/apple-touch-icon-57-precomposed.png">
    </head>
    <body>
        <header id="header"><!--header-->
            <div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="#"><i class="fa fa-phone"></i> +00  000 000 000</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> info@lawyerlegal.com</a></li>
                                    <div class="btn-group pull-right">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                                For User
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" style="min-width: 904px;left: -138px;">
                                                <li>
                                                    <div class="tab-pane fade active in" id="tshirt" style="margin-left: 1%;" >
                                                        <?php
                                                        $userMenus = Menu::getMenus(Validation::getAccessType(0), "Top User");
                                                        if(count($userMenus)){
                                                        foreach ($userMenus as $key => $data){
                                                        ?>
                                                        <div class="col-sm-3" >
                                                            <div class="single-lawyers">
                                                                <div class="lawyerinfo text-center">
                                                                    <img  alt="<?= $data["name"] ?>" rel="<?= $data["name"] ?> logo" name="<?= $data["name"] ?>" src=""><br/>
                                                                    <a class="btn btn-default"  href="<?= $data["url"] ?>"><?= $data["name"] ?> </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        }}
                                                        ?>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                                For Lawyer
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" style="min-width: 904px;left: -138px;">
                                                <li>
                                                    <div class="tab-pane fade active in" id="tshirt" style="margin-left: 1%;">
                                                        <?php
                                                        $lawyerMenus = Menu::getMenus(Validation::getAccessType(0), "Top Lawyer");
                                                        if(count($lawyerMenus)){
                                                        foreach ($lawyerMenus as $key => $data){
                                                        ?>
                                                        <div class="col-sm-3" >
                                                            <div class="single-lawyers">
                                                                <div class="lawyerinfo text-center">
                                                                    <img  alt="<?= $data["name"] ?>" rel="<?= $data["name"] ?> logo" name="<?= $data["name"] ?>" src=""><br/>
                                                                    <a class="btn btn-default"  href="<?= $data["url"] ?>"><?= $data["name"] ?> </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        }}
                                                        ?>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </ul>
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->
            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="<?=SERVER_URL?>" ><span ><font style="font-size: 48px; font-weight: bold;color: #FE980F;">L</font><span style="font-size: 32px;">egal Lawyer</span> </span></a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <?php
                                if(Session::read("access_type")){
                                   $access_id = Session::read("access_type"); 
                                }else{
                                    $access_id = 0;
                                }
                                $access_type = Validation::getAccessType($access_id);
                                $category_name = "Header";
                                $menus = Menu::getMenus($access_type, $category_name);
                                $subUrl = Menu::getMenuSubUrl($access_type);
                                
                                ?>
                                <ul class="nav navbar-nav"> 
                                    <?php
                                    foreach($menus as $menu_key => $menu_value){
                                        $class = "";
                                        if(isset($pageDetails[0]["url"]) && $menu_value['url'] == $pageDetails[0]["url"]){
                                            $class = 'class="active"'; 
                                        }
                                    ?>
                                    <li><a href="<?=SERVER_URL?>/<?=$subUrl?><?=$menu_value['url']?>" <?=$class?> ><?=$menu_value['name']?></a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="mainmenu pull-left">
                                <img src="<?=USER_IMG_URL?>/home/add.png" width="500" height="40"/>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="search_box pull-right">
                                <input type="text" placeholder="Search"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
        </header>