<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="language" content="en" />
 
   <!--[if lt IE 8]>
   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
   <![endif]-->

   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
   
   <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div id="wrapper">

    <header id="header" class="clearfix" role="banner">
    
        <hgroup>
            <h1 id="site-title"><a href="#"><?php echo CHtml::encode($this->pageTitle); ?></a></h1>
<!--            <h2 id="site-description">YII Test App!</h2>-->
        </hgroup>
    
    </header> <!-- #header -->

<div id="main" class="clearfix">

	<!-- Navigation -->
    <nav id="menu" class="clearfix" role="navigation">
       
        
        <div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
    </nav> <!-- #nav -->
    
    <!-- Show a "Please Upgrade" box to both IE7 and IE6 users (Edit to IE 6 if you just want to show it to IE6 users) - jQuery will load the content from js/ie.html into the div -->
    
    <!--[if lte IE 7]>
        <div class="ie warning"></div>
    <![endif]-->
    
    <div id="content" role="main">
    <?php echo $content; ?>
<!--        <article class="post">
        
            <h2 class="entry-title"><a href="#">Post heading</a></h2>
            
            <figure>
                <a href="#"><img src="images/thumbnail.jpg" alt="Post thumbnail" class="thumbnail alignleft" /></a>
            </figure>
            
            <div class="entry-content">
                <p>
                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. 
                    Separated they live in <a href="#">Bookmarksgrove right at the coast of the Semantics</a>, a large language ocean. 
                    A small river named Duden flows by their place and supplies it with the necessary regelialia. 
                    It is a paradisematic country, in which roasted parts of sentences fly into your mouth. 
                </p>
                
                <p>
                    Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.
                    One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. 
                </p>
            </div>  .entry-content 
            
            <footer class="post-meta">
                <p>
                    In <a href="#" rel="category">Category Name</a>
                    by <span class="author vcard"><a class="url fn n" href="#">Author name</a></span>
                    on <time datetime="2011-05-14" pubdate>May 14th, 2011</time>
                </p>
                <a href="#" class="more-link">Read more</a>
            </footer>  .post-meta 
        
        </article>  .post 1 
        -->
        <hr /> <!-- Post seperator - Not the most optimal solution -->
        
        <article class="post">
       
    </div> <!-- #content -->
    
    <aside id="sidebar" role="complementary">
    
        <aside class="widget">
            <h3>Sidebar heading</h3>
            
            <?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
        </aside> <!-- .widget -->
        
<!--        <aside class="widget">
             Non working search 
            <form action="#" class="searchform">
                <input type="search" results="10" placeholder="Search..." />
                <input type="submit" value="Search" />
            </form>  .searchform 
        </aside>  .widget 
        
        <aside class="widget">
            <h3>Widget</h3>
            
            <p>
                Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.
            </p>
            <p>
                One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. 
            </p>
        </aside>  .widget 
    
    </aside>  #sidebar -->
    
</div> <!-- #main -->
<footer id="footer">
        <!-- You're free to remove the credit link to Jayj.dk in the footer, but please, please leave it there :) -->
        <p>
            Copyright &copy; 2011 <a href="#">mushfiq.me</a>
            <span class="sep">|</span>
            Design by <a href="http://jayj.dk" title="Design by Jayj.dk">Jayj.dk</a>
        </p>
    </footer> <!-- #footer -->
    
    <div class="clear"></div>

<!--[if IE]><?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/excanvas.js'); ?><![endif]-->   
<?php //Yii::app()->clientScript->registerCoreScript('jquery'); ?>

<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/script.js'); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
    <script src="js/script.js"></script>


</body>
</html>