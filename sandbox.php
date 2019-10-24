<?php 

 //file system - part 1
//reading a txt file (number at end of content is number of bytes in the file)
//  $quotes = readfile('readme.txt');
//  echo $quotes;

//checking file exists
    $file = 'readme.txt';

    if(file_exists($file)) {
        //readfile
        echo readfile($file) . '<br />';

        //copyfile doesnt matter doesnt exist will make for us
        copy($file, 'quotes.txt');

        //absolute path
        echo realpath($file) . '<br />';

        //file size
        echo filesize($file) . '<br />';

        // rename file
        rename($file, 'test.txt');

    } else {
        echo 'file does not exist';
    }

    //make directory
    mkdir('quotes');

?>

