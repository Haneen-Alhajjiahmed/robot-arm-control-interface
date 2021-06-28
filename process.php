<?php
include('connection.php');

if(isset($_POST['save'])){

    $act1 = $_POST['Actuator1'];
    $act2 = $_POST['Actuator2'];
    $act3 = $_POST['Actuator3'];
    $act4 = $_POST['Actuator4'];
    $act5 = $_POST['Actuator5'];
    $act6 = $_POST['Actuator6'];

    if(isset($_POST['play'])){
        $play = 'true';
    }else{
        $play = 'false';
    }
    //$act1 , $act2 , $act3 ,$act4 ,$act5 ,$act6 ,'$isOn'
    //(act1 , act2 , act3 ,act4 ,act5 ,act6 ,isOn)
    $insert = "INSERT INTO control values ($act1 , $act2 , $act3 ,$act4 ,$act5 ,$act6 ,'$play') ";
    $result = mysqli_query($con , $insert);
    
}

 if(isset($result) and $result) { ?>
    <p>Item added successfully to the Database</p>

    <?php 
    // to display the added items
    echo "<br>";
    echo "Actuator1 value : ".$act1; echo "<br>";
    echo "Actuator2 value : ".$act2; echo "<br>";
    echo "Actuator3 value : ".$act3; echo "<br>";
    echo "Actuator4 value : ".$act4; echo "<br>";
    echo "Actuator5 value : ".$act5; echo "<br>";
    echo "Actuator6 value : ".$act6; 
    ?>

<?php } else if (isset($result) and !$result){ ?>
    
    <p>Sorry Item was not added</p>
    <?php } ?>