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

<div class="<?php echo $blockClass; ?>" <?php if(isset($id)){echo 'id="'. $id .'"';} ?>>
  <div class="block_head">
    <div class="bheadl"></div>
    <div class="bheadr"></div>
    <h2><?php echo $head; ?></h2>
  </div>
  <div class="block_content">
    <?php echo $content; ?>
  </div>
  <div class="bendl"></div>
  <div class="bendr"></div>
</div>