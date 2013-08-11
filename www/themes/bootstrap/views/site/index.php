<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<?php
$this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading' => 'Welcome to ' . CHtml::encode(Yii::app()->name),
));
?>
<?php $this->endWidget(); ?>

<div class="row">
    <div class="col-lg-4">
        <div class = "chaakriJob">
            <ul>
                <li  class = "jobCompany"><span class = "jobLogo"><img src = "<?php echo Yii::app()->theme->baseUrl; ?>/images/logos/devthon.png"></span></li>
                <li  class = "jobTitle">
                    <h1>Pizza Guy</h1>
                </li>
                <li class = "jobLocation">Hyderabad</li>
                <li class = "jobSummary">
                    Has patience to go to Pizza Hut, watch people eat for half an hour while waiting for money.  Then order, then wait again, then deliver hot pizza to hackers.
                </li>	
                <li>
                    <span class = "jobActions">
                        <button type="button" id = "btnApply" class="btn btn-primary">Apply</button>
                    </span>
                    <span class = "jobPostedOn">2 days ago</span>
                </li>	  			
            </ul>
        </div><!--//chaakriJob-->
    </div><!--//col1-->


    <div class="col-lg-4">
        <div class = "chaakriJob">
            <ul>
                <li  class = "jobCompany">
                    <span class = "jobLogo"><img src = "<?php echo Yii::app()->theme->baseUrl; ?>/images/logos/devthon.png"></span>
                </li>
                <li  class = "jobTitle">
                    <h1>Community Manager</h1>
                </li>
                <li class = "jobLocation">
                    Hyderabad
                </li>
                <li class = "jobSummary">
                    Spread the word about the awesomeness of DevThon and inspire the hacking culture across India.
                </li>	
                <li>
                    <span class = "jobActions">
                        <button type="button" id = "btnApply" class="btn btn-primary">Apply</button>
                    </span>
                    <span class = "jobPostedOn">4 days ago</span>
                </li>	  			
            </ul>
        </div><!--//chaakriJob-->		  
    </div><!--//col2-->
    <div class="col-lg-4">
        <div class = "chaakriJob">
            <ul>
                <li  class = "jobCompany">
                    <span class = "jobLogo"><img src = "<?php echo Yii::app()->theme->baseUrl; ?>/images/logos/zurilabs.png"></span>
                </li>
                <li  class = "jobTitle">
                    <h1>Vice President, Products</h1>
                </li>
                <li class = "jobLocation">
                    Hyderabad
                </li>
                <li class = "jobSummary">
                    The best product job you could have. Drive innovation in a design thinking company & create beautiful products.
                </li>	
                <li>
                    <span class = "jobActions">
                        <button type="button" id = "btnApply" class="btn btn-primary">Apply</button>
                    </span>
                    <span class = "jobPostedOn">1 day ago</span>
                </li>	  			
            </ul>
        </div><!--//chaakriJob-->
    </div><!--//col3-->		  
</div>
<div class="row">
    <div class="col-lg-4">
        <div class = "chaakriJob">
            <ul>
                <li  class = "jobCompany"><span class = "jobLogo"><img src = "<?php echo Yii::app()->theme->baseUrl; ?>/images/logos/devthon.png"></span></li>
                <li  class = "jobTitle">
                    <h1>Pizza Guy</h1>
                </li>
                <li class = "jobLocation">Hyderabad</li>
                <li class = "jobSummary">
                    Has patience to go to Pizza Hut, watch people eat for half an hour while waiting for money.  Then order, then wait again, then deliver hot pizza to hackers.
                </li>	
                <li>
                    <span class = "jobActions">
                        <button type="button" id = "btnApply" class="btn btn-primary">Apply</button>
                    </span>
                    <span class = "jobPostedOn">2 days ago</span>
                </li>	  			
            </ul>
        </div><!--//chaakriJob-->
    </div><!--//col1-->


    <div class="col-lg-4">
        <div class = "chaakriJob">
            <ul>
                <li  class = "jobCompany">
                    <span class = "jobLogo"><span class = "jobLogo"><img src = "<?php echo Yii::app()->theme->baseUrl; ?>/images/logos/devthon.png"></span></span>
                </li>
                <li  class = "jobTitle">
                    <h1>Community Manager</h1>
                </li>
                <li class = "jobLocation">
                    Hyderabad
                </li>
                <li class = "jobSummary">
                    Spread the word about the awesomeness of DevThon and inspire the hacking culture across India.
                </li>	
                <li>
                    <span class = "jobActions">
                        <button type="button" id = "btnApply" class="btn btn-primary">Apply</button>
                    </span>
                    <span class = "jobPostedOn">4 days ago</span>
                </li>	  			
            </ul>
        </div><!--//chaakriJob-->		  
    </div><!--//col2-->
    <div class="col-lg-4">
        <div class = "chaakriJob">
            <ul>
                <li  class = "jobCompany">
                    <span class = "jobLogo"><span class = "jobLogo"><img src = "<?php echo Yii::app()->theme->baseUrl; ?>/images/logos/zurilabs.png"></span></span>
                </li>
                <li  class = "jobTitle">
                    <h1>Vice President, Products</h1>
                </li>
                <li class = "jobLocation">
                    Hyderabad
                </li>
                <li class = "jobSummary">
                    The best product job you could have. Drive innovation in a design thinking company & create beautiful products.
                </li>	
                <li>
                    <span class = "jobActions">
                        <button type="button" id = "btnApply" class="btn btn-primary">Apply</button>
                    </span>
                    <span class = "jobPostedOn">1 day ago</span>
                </li>	  			
            </ul>
        </div><!--//chaakriJob-->
    </div><!--//col3-->		  
</div>
<div class="row">
    <div class="col-lg-4">
        <div class = "chaakriJob">
            <ul>
                <li  class = "jobCompany"><img src = "<?php echo Yii::app()->theme->baseUrl; ?>/images/logos/devthon.png"></li>
                <li  class = "jobTitle">
                    <h1>Pizza Guy</h1>
                </li>
                <li class = "jobLocation">Hyderabad</li>
                <li class = "jobSummary">
                    Has patience to go to Pizza Hut, watch people eat for half an hour while waiting for money.  Then order, then wait again, then deliver hot pizza to hackers.
                </li>	
                <li>
                    <span class = "jobActions">
                        <button type="button" id = "btnApply" class="btn btn-primary">Apply</button>
                    </span>
                    <span class = "jobPostedOn">2 days ago</span>
                </li>	  			
            </ul>
        </div><!--//chaakriJob-->
    </div><!--//col1-->


    <div class="col-lg-4">
        <div class = "chaakriJob">
            <ul>
                <li  class = "jobCompany">
                    <img src = "<?php echo Yii::app()->theme->baseUrl; ?>/images/logos/devthon.png">
                </li>
                <li  class = "jobTitle">
                    <h1>Community Manager</h1>
                </li>
                <li class = "jobLocation">
                    Hyderabad
                </li>
                <li class = "jobSummary">
                    Spread the word about the awesomeness of DevThon and inspire the hacking culture across India.
                </li>	
                <li>
                    <span class = "jobActions">
                        <button type="button" id = "btnApply" class="btn btn-primary">Apply</button>
                    </span>
                    <span class = "jobPostedOn">4 days ago</span>
                </li>	  			
            </ul>
        </div><!--//chaakriJob-->		  
    </div><!--//col2-->
    <div class="col-lg-4">
        <div class = "chaakriJob">
            <ul>
                <li  class = "jobCompany">
                    <img src = "<?php echo Yii::app()->theme->baseUrl; ?>/images/logos/zurilabs.png">
                </li>
                <li  class = "jobTitle">
                    <h1>Vice President, Products</h1>
                </li>
                <li class = "jobLocation">
                    Hyderabad
                </li>
                <li class = "jobSummary">
                    The best product job you could have. Drive innovation in a design thinking company & create beautiful products.
                </li>	
                <li>
                    <span class = "jobActions">
                        <button type="button" id = "btnApply" class="btn btn-primary">Apply</button>
                    </span>
                    <span class = "jobPostedOn">1 day ago</span>
                </li>	  			
            </ul>
        </div><!--//chaakriJob-->
    </div><!--//col3-->		  
</div>