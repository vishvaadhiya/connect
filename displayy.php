<style>
td
{
	padding:10px;
	background-color:cyan;
}
</style>
<?php
	include("connectionn.php");
	error_reporting(0);
	$query = "select * from stud";
	$data = mysqli_query($conn, $query);
	$total =mysqli_num_rows($data);
	echo $total;
	if($total != 0)
	{
		?>
			<table border="1">
			<tr>
				<th>number</th>
				<th>fname</th>
				<th>lname</th>
				<th colspan="2">operations</th>
			</tr>
		<?php
		while($result = mysqli_fetch_assoc($data))
		{
			echo "<tr>
			<td>".$result['num']."</td>
			<td>".$result['fname']."</td>
			<td>".$result['name']."</td>
			<td><a href='update.php?num=$result[num] &fn=$result[fname] &ln=$result[name]'>Edit</a></td>
			<td><a href='delete.php?num=$result[num]' onclick='return checkdelete()'>delete</a></td>
			</tr>
			";
		}
	}
	else
	{
		echo "no record";
	}
?>
</table>
<script>
function checkdelete()
{
	return confirm("are you sure you want to delet ?");
}
</script>