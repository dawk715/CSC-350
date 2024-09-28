<?php
// Number of rows and columns 
$size = 9;  

//must be an odd number and >= 5
if ($size < 5 || $size % 2 == 0) {
    echo "The size must be an odd number greater than or equal to 5";
    exit;
}

// Output the ASCII art in <pre> tags to preserve spaces and newlines
echo "<pre>";

// First row (top rounded edge)
echo "/";
for ($i = 0; $i < $size - 2; $i++) {
    echo "-";  // Single dash width for the top row
}
echo "\\\n";  // Newline

// Middle rows
$middle = floor($size / 2);
for ($row = 1; $row < $size - 1; $row++) {
    echo "|";  // Left side pipe
    
    for ($col = 1; $col < $size - 1; $col++) {
        if ($row == $middle && $col == $middle) {
            echo "+";  // Center plus sign
        } elseif ($row == $middle) {
            echo "-";  // Horizontal crosshair (single dashes) on the middle row
        } elseif ($col == $middle) {
            echo "|";  // Vertical crosshair (pipes) on the middle column
        } else {
            echo " ";  // Single space width for all other cells
        }
    }
    
    echo "|";  // Right side pipe
    echo "\n";  // Newline
}

// Last row (bottom rounded edge)
echo "\\";
for ($i = 0; $i < $size - 2; $i++) {
    echo "_";  // Single underscore width for the bottom row
}
echo "/\n";  // Newline

// Close the <pre> tag
echo "</pre>";
?>
