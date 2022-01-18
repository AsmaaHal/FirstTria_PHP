<?php

echo '<pre>';
print_r($_POST);
echo '</pre>';
?>

<?php

if (isset($_POST['register'])) {

    $userName = $_POST['first-name'];
    $userLastName = $_POST['last-name'];
    $MobEmail = $_POST['email-mobile'];
    $userPass = $_POST['up-password'];
    
    $userBirth_day = $_POST['birth-day'];
    $userBirth_month = $_POST['birth-month'];
    $userBirth_year = $_POST['birth-year'];
    
    $usergender = $_POST['gen'];
    
    echo "UserName is $userName and LastName is $userLastName </br>";
    
    echo "Mobile or eamil is: $MobEmail </br>";
    
    echo "Password is:$userPass </br>";
    
    echo "User BirthDay: $userBirth_day:$userBirth_month:$userBirth_year </br>";
    
    echo "user gender is: $usergender";
}

?>