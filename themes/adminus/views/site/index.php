<?php $this->pageTitle=Yii::app()->name; ?>

<!--  
<div class="block">
      <div class="block_head">
         <div class="bheadl"></div>
         <div class="bheadr"></div>
         
         <h2>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h2>
      </div>
      
      
      
      <div class="block_content">
         <p>Congratulations! You have successfully created your Yii application.</p>
         
         <p>You may change the content of this page by modifying the following two files:</p>
         <ul>
            <li>View file: <tt><?php echo __FILE__; ?></tt></li>
            <li>Layout file: <tt><?php echo $this->getLayoutFile('main'); ?></tt></li>
         </ul>
         
         <p>For more details on how to further develop this application, please read
         the <a href="http://www.yiiframework.com/doc/">documentation</a>.
         Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
         should you have any questions.</p>
      </div>
      
      <div class="bendl"></div>
      <div class="bendr"></div>
</div>
-->

<?php
/**
 * The above solutions works. However, it requires the person creating the view to include a lot of markup
 * in every view file. I would prefer to see a more "object-oriented" approach, where the markup for the block
 * only exists in one file, and each view file makes use of that file.
 * 
 * In this case, the easiest way that I found to do this quickly was to create a separate layout file:
 * 
 * /users/nahian/adminusStencil/themes/adminus/views/layouts/block.php
 * 
 * and call beginContent with a few variables (line 48 of this file)
 */
?>

<?php $this->beginContent('/layouts/block', array('head' => 'Welcome to <i>'.CHtml::encode(Yii::app()->name).'</i>')); ?>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
  <li>View file: <tt><?php echo __FILE__; ?></tt></li>
  <li>Layout file: <tt><?php echo $this->getLayoutFile('main'); ?></tt></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>

<?php $this->endContent(); ?>

<?php 
/**
 * As you can see, the amount of markup required is slightly less. More importantly, only the markup for the 
 * content section has to exist in the view file. If we ever decided to change something about the markup for every
 * block on a website, (for example: if we have to upgrade the adminus theme to a new version) we would only have to
 * change one file for the entire site, rather than one file for each view (potentially hundreds of files).
 * 
 * Below is my solution for the "big text box with sidebar" section on this page:
 * 
 * http://enstyled.com/adminus/original/page.html
 * 
 * The structure of the menu array that gets passed to blockWithSidebar.php has indices that match the id's of the content
 * div's and values that are used for the sidebar menu items.
 * 
 * Please take a similar approach in creating a layout file for the "big text box with tabs" section. - aidan
 */
?>

<?php /* notice the menu array structure passed to the blockWithSidebar, the index values should match the id's of the content div's */?>
<?php $this->beginContent('/layouts/blockWithSidebar', array('head' => 'a block with a side menu', 'menu' => array('firstDivID' => 'first option label', 'secondDivID' => 'second option label', 'thirdDivID' => 'third option label'), 'sidebarContent' => 'some text in the sidebar')); ?>

<div class="sidebar_content" id="firstDivID">
  <h2>tab 1</h2>
  
  <p>lorem ipsum...</p>                                                                                                                                                              
  
</div>
<div class="sidebar_content" id="secondDivID">
  <h2>tab 2</h2>
  
  <p>lorem ipsum...</p>
  
</div>
<div class="sidebar_content" id="thirdDivID">
  <h2>tab 3</h2>
  
  <p>lorem ipsum...</p>
  
</div>

<?php $this->endContent(); ?>