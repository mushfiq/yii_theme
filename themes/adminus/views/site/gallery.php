<?php
$this->pageTitle=Yii::app()->name . ' - Image Gallery';
$this->breadcrumbs=array(
   'Gallery',
);
?>
<?php $this->beginContent('/layouts/block', array('head' => 'Image Gallery')); ?>

<!-- Comment/uncomment the following 2 blocks to do the way you like -->

<!-- THE COMPLEX WAY --> 
   <?php 
      
//      $this->beginContent('/layouts/imageListComplex', array('deleteHandler'=>$this->createUrl('delete')));
   
      /**
       * in this method the attributes(thumbnail, source, deleteKey) are to be put in the same order always
       * because the implode function does not maintain the key
       */
//      $images = array(
//                        array('thumbnail'=>Yii::app()->theme->baseUrl.'/images/thumb1.jpg', 'source'=>'http://farm3.static.flickr.com/2646/4240549111_fcb8c478fe.jpg', 'deleteKey'=>'1'),
//                        array('thumbnail'=>Yii::app()->theme->baseUrl.'/images/thumb2.jpg', 'source'=>'http://farm3.static.flickr.com/2493/4241304118_98ff39d232.jpg', 'deleteKey'=>'2'),
//                        array('thumbnail'=>Yii::app()->theme->baseUrl.'/images/thumb3.jpg', 'source'=>'http://farm3.static.flickr.com/2662/4241252138_b9c755e9ca.jpg', 'deleteKey'=>'3'),
//                     );
//      
      /**
       * this section converts the arrays to string because the content part always goes as a string
       */               
//      foreach($images as $image)
//      {
//         $imageList[] = implode("|", $image);
//      }
//      
//      echo implode(";", $imageList);
//   
//      $this->endContent(); 
//   
   ?>
<!-- end of Complex way -->

<!-- THE EASY WAY -->
   <?php
    
//      $images = array(
//                        array('thumbnail'=>Yii::app()->theme->baseUrl.'/images/thumb1.jpg', 'source'=>'http://farm3.static.flickr.com/2646/4240549111_fcb8c478fe.jpg', 'deleteKey'=>'1'),
//                        array('thumbnail'=>Yii::app()->theme->baseUrl.'/images/thumb2.jpg', 'source'=>'http://farm3.static.flickr.com/2493/4241304118_98ff39d232.jpg', 'deleteKey'=>'2'),
//                        array('thumbnail'=>Yii::app()->theme->baseUrl.'/images/thumb3.jpg', 'source'=>'http://farm3.static.flickr.com/2662/4241252138_b9c755e9ca.jpg', 'deleteKey'=>'3'),
//                     );
//   
//      $this->beginContent('/layouts/imageListEasy', array('deleteHandler'=>$this->createUrl('delete'), 'images'=>$images));   
//      $this->endContent(); 
   
   ?>
<!-- end of Easy way -->

<!-- BEST WAY -->
   <?php
   
      $this->beginContent('/layouts/imageList'); 
      
      $images  = array(
                        array('thumbnail'=>Yii::app()->theme->baseUrl.'/images/thumb1.jpg', 'source'=>'http://farm3.static.flickr.com/2646/4240549111_fcb8c478fe.jpg', 'deleteKey'=>'1'),
                        array('thumbnail'=>Yii::app()->theme->baseUrl.'/images/thumb2.jpg', 'source'=>'http://farm3.static.flickr.com/2493/4241304118_98ff39d232.jpg', 'deleteKey'=>'2'),
                        array('thumbnail'=>Yii::app()->theme->baseUrl.'/images/thumb3.jpg', 'source'=>'http://farm3.static.flickr.com/2662/4241252138_b9c755e9ca.jpg', 'deleteKey'=>'3'),
                     );
                     
      $dataPro    = new CArrayDataProvider($images, array('keyField'=>'deleteKey'));
      
      $this->widget('zii.widgets.CListView', array(
                                                         'dataProvider' => $dataPro,
                                                         'itemView'     => '_gallery',
                                                         'summaryText'  => "",
                                                         'viewData'     => array('deleteHandler' => $this->createUrl('delete')),
                                                     )
                     );
                     
      $this->endContent();
 
   ?>
<!-- end of Best Way -->

<?php $this->endContent(); ?>