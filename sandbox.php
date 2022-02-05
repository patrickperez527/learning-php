<?php 

    // file system part 2

    $file = 'quotes.txt';

    // opening file for a reading
    $handle = fopen($file, 'a+'); // r+ = read and write(start) // a+ = write from the end

    // read the file
    echo fread($handle, filesize($file));
    echo fread($handle, 112); // read only 112 bytes

    // read a single line
    echo fgets($handle);
    echo fgets($handle); // this is the second line

    // read a single character
    echo fgetc($handle); // T

    // writing to a character
    fwrite($handle, "\nEverything popular is wrong");

    fclose($handle);

    // delete a file
    // unlink($file);

?>