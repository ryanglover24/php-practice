<?php 

 //file system - part 2

    $file = 'quotes.txt';

    // opening a file for reading second param is code in this case r for read only
    $handle = fopen($file, 'a+');

    //read the file second param is how many bytes want to read
    // echo fread($handle, filesize($file)) . '<br />';

    //read a single line second instance reads second line 'pointer' follows on next example would also follow and not go to the start
    // echo fgets($handle) . '<br />';
    // echo fgets($handle) . '<br />';

    //read a single character
    // echo fgetc($handle);
    // echo fgetc($handle);

    //writing to the file code becomes r+ read and write. Writes at start and writes over text a+ puts pointer at end and writes to end
    fwrite($handle, "\nEverything Popular is wrong");

    //close the file when finised
    fclose($handle);

    //delete a file 
    unlink($file);

?>

