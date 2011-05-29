<?php
$this->pageTitle=Yii::app()->name . ' - Diary Entry';
$this->breadcrumbs=array(
   'Diary',
);
?>

<?php $this->beginContent('/layouts/block', array('head'=>'Personal Diary Entry')); ?>

<p>Dated: <b><?php echo date("d M, Y"); ?></b></p>

<form>
<?php 
   
   $this->widget('application.extensions.tinymce.ETinyMce', array(
   
                                                                     'name'      => 'hello',
                                                                     'mode'      => 'text',
                                                                     //'theme'     => 'simple',
                                                                     'plugins' => array('safari', 'emotions', 'spellchecker', 'advhr', 'insertdatetime', 'preview'),
                                                                     
                                                                     
                                                                  ));
?>
</form>
<?php $this->endContent(); ?>