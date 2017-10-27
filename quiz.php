<?php
    require("connect.php");
?>

<div>
    <?php
        $sql = "SELECT * FROM Quiz";
        $result = $conn->query($sql);
    ?>
   
    <form action="quiz.php" method="post">
    <?php if ($result->num_rows > 0) {
        $count = o;
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
        <p><?php 
        $question = $row['question'];
        echo "$question" ?></p>
        <input type="checkbox" value="<?php $row['option1']; ?>" name="option" id=""><?php $option1= $row['option1']; echo "$option1"?><br>
        <input type="checkbox" value="<?php $row['option2']; ?>" name="option" id=""><?php $option2= $row['option2']; echo "$option2"?><br>
        <input type="checkbox" value="<?php $row['option3']; ?>" name="option" id=""><?php $option3= $row['option3']; echo "$option3"?><br>
        <input type="checkbox" value="<?php $row['option4']; ?>" name="option" id=""><?php $option4= $row['option4']; echo "$option4"?><br>
        <input type="submit" value="Submit">
    <?php 
    $answer = $_POST['option'];
    $correctanswer = $row['answer']
    if($answer == $correctanswer){
        $count++;
    }    
    }
     }
        else{
                echo "no result";
            }?>
        
    </form>
</div>