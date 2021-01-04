<DOCTYPE html>

<body>
<?php


if(isset($_POST['submit'])) 

{
    $firstName=$_POST['first'];
    
    $lastName=$_POST['last'];
    echo "Last Name: " .$lastName .$firstName . " <br />";
    $password=$_POST['pw'];
    echo "Password: " .$password . " <br />";
    $status =$_POST['status'];
    echo "Status: " .$status . "<br />";
    $waitList = $_POST['waitlist'];
    echo "Wait List: " .$waitList . "<br />";







}

?>

</body>
