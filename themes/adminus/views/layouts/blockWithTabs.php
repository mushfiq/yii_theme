<?php

$blockClass = "block";

if(isset($size))
{
   $blockClass = $blockClass . " " . $size;
}
if(isset($align))
{
   $blockClass = $blockClass . " " . $align;
}
?>

<div class="<?php echo $blockClass; ?>">

   <div class="block_head">
      <div class="bheadl"></div>
      <div class="bheadr"></div>
      
      <h2><?php echo $head; ?></h2>
      
      <ul class="tabs">
         <?php if(isset($menu) && !empty($menu))
         { 
            foreach($menu as $href => $tabLabel)
            {
         ?> 
               <li>
               <a href="#<?php echo $href; ?>"><?php echo $tabLabel ?></a>
               </li>
               
         <?php
            } 
         }
         ?> 
      </ul>
   </div>
   <?php echo $content; ?>
   <div class="bendl"></div>
   <div class="bendr"></div>
</div>