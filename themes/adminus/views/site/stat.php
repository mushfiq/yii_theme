<?php
$this->pageTitle=Yii::app()->name . ' - Site Statistics';
$this->breadcrumbs=array(
   'Site Statistics',
);
?>

<?php $this->beginContent('/layouts/block', array('head'=>'Visits over the last 12 months')); ?>

   <?php
      /**
       * provide the following 3 parameters for the graph
       */
      $xAxis   = array(
                           'start'     => 1,
                           'end'       => 12,
                           'interval'  => 1,
                         );
   ?>
   
   <?php $this->beginContent('/layouts/graph', array('type'=>'line', 'xAxis'=>$xAxis)); ?>
   <?php 
   
      /**
       * create the individual graphs as the following
       */
      $graph1  = array(
                        'name'      => 'Page Views',
                        'values'    => array(50, 90, 40, 120, 180, 280, 320, 220, 100, 120, 40, 70),
                      );
      $graph2  = array(
                        'name'      => 'Unique Visitors',
                        'values'    => array(30, 50, 15, 90, 140, 160, 230, 170, 50, 90, 30, 300),
                      );
      $graph3  = array(
                        'name'      => 'Registered Members',
                        'values'    => array(10, 25, 1, 9, 60, 19, 90, 120, 150, 190, 2, 205),
                      );
                      
      
      $graphs  = array($graph1, $graph2, $graph3);
      
      $dataPro = new CArrayDataProvider($graphs, array('keyField'=>'name'));
      
      $this->widget('zii.widgets.CListView', array(
                                                      'dataProvider' => $dataPro,
                                                      'itemView'     => '_graph',
                                                      'summaryText'  => "",
                                                  )
                   );
      
      
      
   ?> 
   <?php $this->endContent(); ?>

<?php $this->endContent(); ?>