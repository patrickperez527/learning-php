<?php 

    // file system part 1

    // $quotes = readfile('readme.txt');
    // echo $quotes; // quotes 321(number of bytes)

    // check if file exits
    $file = 'readme.txt';

   if (file_exists($file)) {
       // read file
       echo readfile($file) . '<br/>';

       // copy file
       copy($file, 'quotes.txt');

       // absolute path (find real path of a file)
       echo realpath($file) . '<br/>';

       // find file size
       echo filesize($file) . '<br/>';

       // rename file
       rename($file, 'test.txt');

   } else {
       echo 'file does not exist';
   }

   // make directory
   mkdir('quotes');

?>