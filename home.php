<!DOCTYPE html>
<html>
<body>
	<style>
	body{
	background-image: url("img17.jpeg");
	background-size: cover;
	background-repeat: no-repeat;
}

</style>
<?php
require'conn.php';
include 'menu.php';

$select=mysqli_query($conn,"SELECT * FROM news");
if ($select) {
	while ($r=mysqli_fetch_assoc($select)) {
		$id=$r['id'];
		$title=$r['title'];
		$comment=$r['comment'];
		$password=$r['image'];
		$website=$r['website'];
		$email=$r['email'];
		$dater=$r['dater'];
		$image=$r['image'];
		

		?>
		
			<?php echo $id; ?>
			<br><br>
			<?php echo $title; ?>
		    <br><br>
			<?php echo $comment; ?>
			<br><br>
			<?php echo $website; ?>
			<br><br>
			<?php echo $email; ?>
			<br><br>
			<?php echo $dater; ?>
			<br><br>
			
			<?php echo "<img src=data:image/jpg;base64,$image width=20%>";?></td>
		



		<?php
	}

	
	

}else{
	echo $conn->error;
}


?>

</body>
</html>