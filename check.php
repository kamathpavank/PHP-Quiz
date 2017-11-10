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

		if($_POST[$i] == $row['answer']){
			$count+=2;	
		}
	}
	
	$i++;
}

?>

<div class="container" style="background-color: #1B4F72;">
	<div class="jumbotron" style="background-color: #2E86C1;">
		<div class="container">
		
			<div class="jumbotron" style="text-align: center; border: 15px solid  #1B4F72;">
				<h1 >RESULT</h1>
				<br>
				<h2>TOTAL QUESTION ATTEMPTED = <?php echo "$numberofquestons"; ?></h2>
				<br>
				<hr style="background-color: #1B4F72; height: 5px;">
				<br>
				<h2>TOTAL SCORE = <?php echo "$count"; ?></h2>
			</div>
	
		</div>
	</div>
</div>