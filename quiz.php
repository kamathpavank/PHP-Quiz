<?php
require("connect.php");
?>

<?php
require("header.php");
?>

<div>
    <h1 style="text-align: center;">QUIZ</h1>
    <?php
    $sql = "SELECT * FROM quiz";
    $result = $conn->query($sql);
    ?>

    <form action="check.php" method="post">
        <?php if ($result->num_rows > 0) {
            $count = 0;
            // output data of each row
            while($row = $result->fetch_assoc()) { 
         ?>
    <!--Questions -->               
        <div class="container">
            <div class="jumbotron">
                <p>
                    <?php 
                        $quesno = $row['qno'];
                        echo "$quesno]   ";
                        $question = $row['question'];
                        echo "$question" ;
                    ?>
                </p>
                <input type="radio" value="<?php echo $row['option1']; ?>" name ="<?php echo "$quesno" ?>" id="">
                <?php $option1= $row['option1']; echo "$option1"?>
                <br>
                <input type="radio" value="<?php echo $row['option2']; ?>" name="<?php echo "$quesno" ?>" id="">
                <?php $option2= $row['option2']; echo "$option2"?>
                <br>
                <input type="radio" value="<?php echo $row['option3']; ?>" name="<?php echo "$quesno" ?>" id="">
                <?php $option3= $row['option3']; echo "$option3"?>
                <br>
                <input type="radio" value="<?php echo $row['option4']; ?>" name="<?php echo "$quesno" ?>"id="">
                <?php $option4= $row['option4']; echo "$option4"?>
                <br>
            </div>
        </div>
                
                <?php 
                        }
                    }
                    else{
                        echo "no result";
                    }
                ?>

        <input type="submit" value="Submit">
    </form>
</div>
