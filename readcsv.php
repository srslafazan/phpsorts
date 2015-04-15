<?php

ini_set('auto_detect_line_endings', true);
echo "<html><body><table>\n\n";

$file = fopen("us-500.csv", "r");

while( ( $line = fgetcsv($file)) !== false ) {
    echo "<tr>";
    foreach ( $line as $cell ) {
        echo "<td>" . htmlspecialchars($cell) . "</td>";
    }
    echo "</tr>\n";
}

fclose($file);
echo "\n</table></body></html>";

?>