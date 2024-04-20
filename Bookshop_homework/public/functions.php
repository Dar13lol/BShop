<?php 

$name1 = filter_var(trim($_POST['name1'])),
FILTER_SANITIZE_STRING);
 

$name2=filter_var(trim($_POST['name2'])),
FILTER_SANITIZE_STRING);


$email=filter_var(trim($_POST['email'])),
FILTER_SANITIZE_STRING);

$pass=filter_var(trim($_POST['pass'])),
FILTER_SANITIZE_STRING);

if(mb_strlen)($name1) < 5 || mb_strlen($name1) > 90) {
echo "Некорректные данные";

}


	?>