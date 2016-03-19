<!DOCTYPE html>
<html class="lf" lang="en">
    <head>
    	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=1" name="viewport">
		<title><?=$this->getTitle();?></title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?=$this->getSkinBase();?>/css/custom.css" />
	</head>
	<body>
        <div class="container">
            <nav class="mobile_nav">
                <input type="checkbox" id="mobile-nav" name="mobile-nav" class="dropdown" />
                <label for="mobile-nav">
                    <span class="open-content pull-left blue_fg martop marbot"><i class="fa fa-bars"></i></i></span>
            		<span class="close-content pull-left red_fg martop marbot"><i class="fa fa-bars"></i></span>
    				<div class="drop-content clear">
        				<nav class="blue_a">
                            <?=$this->printContent('nav');?>
                        </nav>
    				</div>
    			</label>
            </nav>
        </div>
		<header class="banner blue light text-center">
			<div class="container">
				<div class="row">
					<div class="col-3"></div>
					<div class="col-6">
                        <h1 class="no_mar">
                            <span class="hidden">Littlefoot</span>
                            <a href="<?=\lf\requestGet('IndexUrl');?>">
                                <img src="<?=\lf\requestGet('LfUrl');?>system/template/images/lf-banner.png"/>
                            </a>
                        </h1>
					</div>
					<div class="col-3"></div>
				</div>
			</div>
		</header>
		<div class="wrapper light_bb">
			<div class="container">
				<nav class="main_nav blue_a">
					<?=$this->printContent('nav');?>
				</nav>
			</div>
		</div>
		<div class="wrapper">
			<div class="container">
				<?=$this->printContent('content');?>
			</div>
		</div>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<span>
							Powered by &copy<a href="http://littlefootcms.com" target="_blank">LittlefootCMS</a>
						</span>
					<div>
				</div>
			</div>
		</footer>
	</body>
</html>
