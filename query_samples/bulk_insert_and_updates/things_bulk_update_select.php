<?php
	include ('../index.php');
	include ('../database_connection.php');
?>	


<select id=thing_select name = thing_select>
<option value=''>-Select-</option>
<?php
$query = "SELECT thing_id, label_name, type, select_values FROM create_user_things";
$stmt = $dbc->prepare($query);
if ($stmt->execute()){
	$stmt->bind_result($thing_id,$label_name,$type,$select_values);
	while ($stmt->fetch()){
    	echo '<option value="'.$thing_id.':'.$label_name.':'.$type.':'.$select_values.'">'.$label_name.'</option>';			}
}
?>
</select>
	
