<?php

if(!empty($messageSuccess)) {



echo "<div class='alert alert-success' role='alert' id='alertSuccess'>
     $messageSuccess 
</div>";
}

if (!empty($messageError)) { 
echo "<div class='alert alert-danger' role='alert' id='alertDanger'>
     $messageError 
</div>";
}
