<?php
    require("connect.php");
?>

<div>
    <?php
        $sql = "SELECT * FROM Quiz";
        $result = $conn->query($sql);
    ?>
    <p><?php $row['question'];?></p>
    <form action="action.php" method="post">
    <?php if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
        <p><?php $row['question']; ?></p>
        <input type="checkbox" value="<?php $row['option1']; ?>" name="option1" id="">
        <input type="checkbox" value="<?php $row['option2']; ?>" name="option2" id="">
        <input type="checkbox" value="<?php $row['option3']; ?>" name="option3" id="">
        <input type="checkbox" value="<?php $row['option4']; ?>" name="option4" id="">
    <?php }
    }
            else{
                echo "no result";
            }?>
        <input type="submit" value="Submit">
    </form>
</div>