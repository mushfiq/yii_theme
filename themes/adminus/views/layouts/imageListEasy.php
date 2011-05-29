<?php
   
   $deleteButton = '<li class="delete"><a href="%s">Delete</a></li>';
   
   // if the deleteHandler is not set, the delete link is never created 
   if(isset($deleteHandler))
   {
      $deleteButton  = sprintf($deleteButton, $deleteHandler."/%s");
   }

?>

<ul class="imglist">
<?php 
foreach($images as $image)
{

?>
   <li>
      <img src="<?php echo $image['thumbnail']; ?>" alt="" />
      <ul>
         <li class="view"><a href="<?php echo $image['source']; ?>" rel="facebox">View</a></li>
         <?php if(isset($deleteHandler)){ echo sprintf($deleteButton, $image['deleteKey']); }?>
      </ul>
   </li>	
<?php

}

?>
</ul>