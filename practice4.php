<?php
echo "<table border =\"1\" style='border-collapse: collapse'>";

// Loop through rows
for ($row=1; $row <= (int)$_POST['size']; $row++) { 
    echo "<tr> \n"; // Start a new table row
    
    // Loop through columns
    for ($col=1; $col <= (int)$_POST['size']; $col++) { 
        // Calculate the product of column and row
        $p = $col * $row;
        
        // Print the product in a table cell
        echo "<td>$p</td> \n";
    }
    
    echo "</tr>"; // End the table row
}

// Close the HTML table
echo "</table>";
?>