<?php
    // Include the necessary classes
    require_once 'Item.php';
    require_once 'ForsaTanyaTask.php';
    require_once 'InvalidDataFormatException.php';
    require_once 'InvalidFormatException.php';

    // Create an instance of the ItemReader class for reading an XML file
    $itemReader = new ItemReader('items.json', 'json');

    // Call the readItems method to get an array of Item objects
    $items = $itemReader->readItems();



    // Output the item information as an HTML table
    echo "<table>\n";
    echo "<tr><th>ID</th><th>Name</th></tr>\n";
    foreach ($items as $item) {
        echo "<tr><td>" . $item->id . "</td><td>" . $item->name . "</td></tr>\n";
    }
    echo "</table>\n";
