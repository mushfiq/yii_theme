<?php
   
   $deleteButton = '<li class="delete"><a href="%s">Delete</a></li>';
   
   // if the deleteHandler is not set, the delete link is never created 
   if(isset($deleteHandler))
   {
      $deleteButton  = sprintf($deleteButton, $deleteHandler."/%s");
   }

?>


<li>
   <img src="<?php echo $data['thumbnail']; ?>" alt="" />
   <ul>
      <li class="view"><a href="<?php echo $data['source']; ?>" rel="facebox">View</a></li>
      <?php if(isset($deleteHandler)){ echo sprintf($deleteButton, $data['deleteKey']); }?>
   </ul>
</li>	