<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

    <!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <!-- Bootstrap -->
        <?php // Yii::app()->bootstrap->register(); ?>
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet" media="screen" />
        <!-- JavaScript plugins (requires jQuery) -->
        <script src="http://code.jquery.com/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
        <!-- Enable responsive features in IE8 with Respond.js (https://github.com/scottjehl/Respond) -->
        <!--<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/respond.js"></script>-->    
        <!-- Chaakri specific stuff -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/chaakri.js"></script>    	
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/chaakri.css" rel="stylesheet" media="screen" />
        <style>
            @media (min-width: 768px)
            {		
                .container {
                    margin-top: 80px;
                }
            }	
        </style>
    </head>

    <body>
        <?php
//        $this->widget('bootstrap.widgets.TbNavbar', array(
//            'items' => array(
//                array(
//                    'class' => 'bootstrap.widgets.TbMenu',
//                    'items' => array(
//                        array('label' => 'Home', 'url' => array('/site/index')),
//                        array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
//                        array('label' => 'Contact', 'url' => array('/site/contact')),
//                        array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
//                        array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
//                    ),
//                ),
//            ),
//        ));
        ?>

        <div class="navbar navbar-fixed-top">
            <a class="navbar-brand" href="/">Chaakri</a>
            <form class="navbar-form pull-left" action="">
                <input type="text" class="form-control col-lg-12" placeholder="Visual Search Here">
            </form>	
            <ul class="nag navbar-nav pull-right">
                <ul class="nav navbar-nav pull-right">
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Rajnikanth <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Log Out</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Administration</a></li>
                        </ul>
                    </li>
                </ul>
            </ul>
        </div><!--//navbar-->
        <div class="container chaakriMain" id="page">

            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>

            <div class="clear"></div>

            <div id="footer">
                <a href="https://github.com/bipinu/chaakri">Chaakri - the job app</a>, initiated at <a href="http://devthon.org/">Devthon</a> <br />
                <?php echo Yii::powered(); ?>
            </div><!-- footer -->

        </div><!-- page -->

    </body>
</html>
