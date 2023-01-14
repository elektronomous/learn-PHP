<!-- 2 -->
<?php
// get the db connection first    
require_once "includes/database.php";
require_once "includes/article.php";
require_once "includes/auth.php";

session_start();

if (!isLoggedIn()) {
    die("Unauthorized");
}
// 9
$title = '';
$content = '';
$published_date = '';


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $title = $_POST['title'];
    $content = $_POST['content'];
    $published_date = $_POST['published_at'];

    $errors = validateArticle($title, $content, $published_date);
    
    if (empty($errors)) {
        $connect = getDB();

        // debugging $_POST array
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre><br />";

        /* THE SAFEST WAY TO INSERT DATA TO DATABASE
        // $sql = mysqli_prepare($connect,"INSERT INTO article(title, content, published_at) VALUES(?,?,?);");
        // $sql->bind_param('sss', $_POST['title'], $_POST['content'], $_POST['published_at']);
        // $result = $sql->execute();

        if ($result === false) {
            echo mysqli_error($connect);
        } else {
            // if success, get the id of the new inserted data.
            $id = $sql->insert_id;
            echo "Inserted record with the id: " . $id . "<br />";
        }
        */

        

        /* THE DANGEROUS WAY TO INSERT DATA TO DATABASE */
        $sql = "INSERT INTO article(title, content, published_at)
        VALUES('" . $title . "', '" 
                . $content . "', '" 
                . $published_date . "')";
                
        $result = mysqli_query($connect, $sql);
    
        if ($result == false) {
            echo mysqli_error($connect);
        } else {
            $id = mysqli_insert_id($connect);
            echo '<br />Inserted record with ID: ' . $id . '<br />';
            
            // 12
            // get the protocol
            if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
                $protocol = 'https';
            } else {
                $protocol = 'http';
            }

            // get our website name
            $host = $_SERVER['HTTP_HOST'];
            // you need the uri
            $URIs = explode("/", $_SERVER['REQUEST_URI']);
            $folder_path = "";

            for ($i = 0; $i < count($URIs)-1; $i++)
                $folder_path .= $URIs[$i] . "/";
                
            // and redirect to the location where we inserted the data.
            header("Location: http://$host$folder_path" . "article.php?id=$id");
            exit;
                
        }
        
    }
}

?>
<!-- 1 -->
<?php require "includes/header.php"; ?>
<h2>New Article</h2>
<?php require_once "includes/article-form.php"; ?>
<?php require "includes/footer.php"; ?>