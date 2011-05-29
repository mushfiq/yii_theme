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

<div class="<?php echo $blockClass;  ?> withsidebar">
  <div class="block_head">
    <div class="bheadl"></div>
    <div class="bheadr"></div>
    <h2><?php echo $head; ?></h2>
  </div>
  <div class="block_content">
    <div class="sidebar">
      <ul class="sidemenu">
      <?php if (isset($menu) && !empty($menu)) { foreach ($menu as $href => $display) { ?>
        <li><a href="#<?php echo $href; ?>"><?php echo $display; ?></a></li>
      <?php }} ?>
      </ul>
      <?php if (isset($sidebarContent)) { echo $sidebarContent; } ?>
    </div>
    <?php echo $content; ?>
  </div>
  <div class="bendl"></div>
  <div class="bendr"></div>
</div>