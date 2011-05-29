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

$imageList = explode(";",$content);
foreach($imageList as $image)
{
   $images[] = explode("|", $image);
}

foreach($images as $image)
{

?>
   <li>
      <img src="<?php echo $image[0]; ?>" alt="" />
      <ul>
         <li class="view"><a href="<?php echo $image[1]; ?>" rel="facebox">View</a></li>
         <?php if(isset($deleteHandler)){ echo sprintf($deleteButton, $image[2]); }?>
      </ul>
   </li>	
<?php

}

?>
</ul>