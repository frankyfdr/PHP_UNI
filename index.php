<?php
SESSION_START();
include "includes/connect.php";
include "includes/debug.php";

?>
<html>

<?php  
if(!$_SESSION['logged'])
header('Location: pages/login/login.php');
?>

<meta >

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="pages/order/style.css">
<?php  ?>

<?php  include "header.php"?>
<body>


<?php  include "pages/order/order.php"?>
</body>
<?php include "footer.php" ?>
</html>