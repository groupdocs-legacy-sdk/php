<?php

    $result = "";
    //counter to not wait forever
    $counter = 0;
    //Local path to the downloads folder
    $downloadFolder = __DIR__ . '/../../downloads';
	//Check folder for downloaded file
    do {
        //Set max. iterations
        if ($counter >= 10) {
            $result = "Error";
            break;
        }
        sleep(5);
        //Check is downloads folder exist
        if (!file_exists($downloadFolder)) {
            //If folder don't exist create it
            $di = mkdir($downloadFolder);
        }
        //Open downloads folder
        $filePaths = opendir($downloadFolder);
        //Get all elements from folder
        while (($file = readdir($filePaths)) !== false) {
            //Get downloaded file name
            $name = $file;
        }
        //Close folder
        closedir($filePaths);
        //Check is file downloaded
        if ($name == "") {
            //If file don't downloaded yet do one mor itaretion
            $counter++;
            continue;
        //If file downloaded get file name and break.
        } else {
            array_slice($name, 2);
            $result = $name; //get the name of the fist file in the directory
            break;
        }
    } while (true);
    //Check result
    if ($result == "Error") {
         return "File was not found. Looks like something went wrong.";
    }
	//Return file name to the template for ajax
    echo $result;
?>