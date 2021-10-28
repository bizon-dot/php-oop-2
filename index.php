<?php

require_once __DIR__ . '/Classes/User.php';
require_once __DIR__ . '/Classes/Products.php';
// require_once __DIR__ . '/Classes/InfoOrder.php';
//     require_once __DIR__ . '/Classes/HistoryOrders.php';

$first = new User();
$first->firstName = "Thomas";
$first->lastName = "Anderson";
$first->email="neo@nabucco.org";
$first->= "+42412";
print_r($first); 

?>
