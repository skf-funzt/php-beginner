<?php
print("<pre>");
$inventory = 10; // initial inventory
$orders = 15; // total orders received

echo "Starting with $inventory items in inventory.\n";
echo "Received $orders orders.\n";

$orderProcessed = 0;

while ($inventory > 0 && $orderProcessed < $orders) {
  // process order
  $inventory--;
  $orderProcessed++;

  echo "Processed order $orderProcessed. ",
    "Remaining inventory: $inventory.\n";
}

if ($inventory == 0) {
  echo "Inventory depleted. $orderProcessed orders ",
    "were processed.\n";
}

if ($orderProcessed < $orders) {
  echo "\nCould not process " 
    . ($orders - $orderProcessed) 
    . " orders\ndue to insufficient inventory.\n";
}

print("</pre>");
?>