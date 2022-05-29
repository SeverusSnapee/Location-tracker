<?php
require "header.php"
?>
<main>
<?php
if(isset($_SESSION['userId'])){
    echo'You are in the Location Keeper';
}
else{
    echo'Please Login Or Signup';
}
?>
</main>
<?php
require "footer.php"
?>