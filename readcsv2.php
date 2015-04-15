<?php

ini_set('auto_detect_line_endings', true);
echo "<html><body>\n\n";

$file = fopen("us-500.csv", "r");

$headings = fgetcsv($file);
$c = 0;

while( ( $line = fgetcsv($file)) !== false ) {
    $c++;
    $z = 0;
    echo "<h1>Record $c</h1>";
    echo "<ul>";
    foreach ( $line as $cell ) {
        echo "<li>$headings[$z]: $cell</li>";
        $z++;
    } echo "</ul>";

}

fclose($file);
echo "\n</body></html>";

?>