<?php
    require("connect.php");
?>

<?php
$count = 0;
$i=1;
$sql = "SELECT answer FROM quiz";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) { 
	
	if($_POST[$i] == $row['answer']){
		$count++;	
	}
	$i++;
}

echo "Total scroe is = $count";
?>