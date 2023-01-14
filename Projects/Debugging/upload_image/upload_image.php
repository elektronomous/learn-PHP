<?php

function varDump($var): void {
    echo "<pre>";
    var_dump($var);
    echo "</pre><br />";
}

if (isset($_FILES) && count($_FILES)) {
    $uploaddir = "/opt/lampp/htdocs/learn-PHP/Projects/Debugging/upload_image/image";
    varDump($_FILES);
    /* 

    array(1) {
    ["img_file"]=>
    array(6) {
        ["name"]=>
        string(38) "Screenshot at 2022-09-22 02-47-57.jpeg"
        ["full_path"]=>
        string(38) "Screenshot at 2022-09-22 02-47-57.jpeg"
        ["type"]=>
        string(10) "image/jpeg"
        ["tmp_name"]=>
        string(25) "/opt/lampp/temp/phpYDd381"
        ["error"]=>
        int(0)
        ["size"]=>
        int(486473)
    }
    }
    */

    // from this result you can you the `type` key as the verification
    if ($_FILES['img_file']['type'] != "image/jpeg" || $_FILES['img_file']['type'] != "image/png") {
        echo "Invalid Image type.\n";
        // flush before sleep
        // ob_flush();
        // flush();
        // sleep(3);
    }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debugging Uploading Image</title>
</head>

<body>

    <form method="post" enctype="multipart/form-data" name="upload">
        <input type="file" name="img_file" id="img_file" />
        <button>Send</button>
    </form>

</body>

</html>