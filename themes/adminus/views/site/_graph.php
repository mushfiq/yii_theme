<tr>
	<th scope="row"><?php echo $data['name']; ?></th>
 <?php
   
   foreach($data['values'] as $value)
   {
   
 ?>
	<td><?php echo $value; ?></td>
 <?php
 
   }
 
 ?>
</tr>