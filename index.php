<?php 


include('config.php');
include('deliveryController.php');
include('deliveryModel.php');


$deliveryConttroller = new delveryController;
$deliveryConttroller->index();



?>