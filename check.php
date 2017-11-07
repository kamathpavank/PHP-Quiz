<?php
    require("connect.php");
?>

<?php
require("header.php");
?>

<?php
$count = 0;
$numberofquestons = 0;
$i=1;
$sql = "SELECT answer FROM quiz";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) { 

	if(isset($_POST[$i])){
		$numberofquestons++;
	}
	
	if($_POST[$i] == $row['answer']){
		$count++;	
	}
	$i++;
}

?>

<div class="container">
	<div class="jumbotron" style="text-align: center">
		<h1 >RESULT</h1>
		<br>
		<h2>TOTAL QUESTION ATTEMPTED = <?php echo "$numberofquestons"; ?></h2>
		<br>
		<hr>
		<br>
		<h2>TOTAL SCORE = <?php echo "$count"; ?></h2>
	</div>
	
</div>