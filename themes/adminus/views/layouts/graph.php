<table class="stats" rel="<?php echo $type; ?>">
					
		<thead>
			<tr>
         <?php
          
         for($index = $xAxis['start']; $index <= $xAxis['end']; $index += $xAxis['interval'])
         {
   
         ?>
				<th scope="col"><?php echo $index; ?></th>
                     
         <?php
         }
         ?>
			</tr>
		</thead>
		
		<tbody>
         <?php echo $content; ?>
		</tbody>
	</table>