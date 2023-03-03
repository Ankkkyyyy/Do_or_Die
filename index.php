
<?php 

include "database.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do or Die</title>
    <link rel="stylesheet" href="https://kit.fontawesome.com/08a7f2049e.css" crossorigin="anonymous">
    <link rel='stylesheet'href="style.css">
</head>
<body>

<h1 class="top-heading"> Do or Die List </h1>
<p class='below-heading'>Disclaimer: Please only add tasks that you are truly committed to completing, even if it means sacrificing your life Xd.</p>

<!-- <h4 class='below-heading'>Disclamiar:  Only add the task for which you're ready to die for...   </h4> -->
<!-- <p class='below-heading'>Disclamiar:  Only add the task for which you're ready to die for... </p> -->

<div class="container">
    <form action="Actionhandle.php" method="post">
        <div class="input-container">
            <input type="text" name="inputBox" id="inputBox" >
            <button type="submit" id="add" name='add' >Add</button>
        </div>

        <h3 class="top-heading">Remaining Task </h3>
        <ul class="list">
        <?php
            
            $itemlist = get_items(); 
            while($row=$itemlist->fetch_assoc())
            {
            ?>
            <li class="item"> 
                <p> <?php echo $row["item"]; ?> </p>
                <div class="icon-container">

                <button type="submit" name="checked" value=" <?php echo $row["id"]; ?> ";  > <i class="fa-sharp fa-solid fa-circle-check" ></i> </button>
                <button type="submit" name="deleted" value=" <?php echo $row["id"]; ?> ";  ><i class="fa-solid fa-trash"></i></button>

                </div>
            </li>

            <?php } ?>

        </ul>
    
        <hr>

        <h3 class="top-heading">Completed Task </h3>

        <ul class="list">

        <?php
            
            $itemlist = get_item_checked(); 
            while($row=$itemlist->fetch_assoc())
            {
            ?>
            <li class="item fade">
                
            <p class="deleted-text"> <span> <?php echo $row["item"]; ?> </span></p> 
             <div class="icon-container">

                <button type="submit" name=""  > <i class="fa-sharp fa-solid fa-circle-check hidden"></i> </button>
                <button type="submit" name="deleted"  value=" <?php echo $row["id"]; ?> ";  ><i class="fa-solid fa-trash"></i></button>
                
                </div>
            </li>
          <?php  }  ?>
        </ul>

    </form>

</div>

<div>

</div>


<div>

</div>

<!-- <p class='below-heading'>Disclaimer: Please only add tasks that you are truly committed to completing, even if it means sacrificing your life.</p>
 -->


<script src="https://kit.fontawesome.com/08a7f2049e.js" crossorigin="anonymous"></script>
</body>
</html>