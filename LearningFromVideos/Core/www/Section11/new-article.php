<!-- 2 -->
<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // get the db connection first    
    require "includes/database.php";

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
    VALUES('" . $_POST['title'] . "', '" 
              . $_POST['content'] . "', '" 
              . $_POST['published_at'] . "')";
              
    $result = mysqli_query($connect, $sql);
   
    if ($result == false) {
        echo mysqli_error($connect);
    } else {
        $id = mysqli_insert_id($connect);
        echo '<br />Inserted record with ID: ' . $id . '<br />';
    }
    
}

?>
<!-- 1 -->
<?php require "includes/header.php"; ?>

<h2>New Article</h2>

<form method="post">
    <!-- we use POST method because this script will insert into database -->
    <table>
        <!-- TITLE -->
        <tr>
            <td>
                <label for="Title">Title:</label>
            </td>
            <td>
                <input type="text" name="title" id="Title" placeholder="Article's title" />
            </td>
        </tr>
        <!-- CONTENT of the ARTICLE -->
        <tr>
            <td>
                <label for="Content">Content:</label>
            </td>
            <td>
                <textarea name="content" cols="40" rows="4" id="Content" placeholder="Article's Content"></textarea>
            </td>
        </tr>
        <!-- Date Publication -->
        <tr>
            <td>
                <label for="Published_date">Publication Date and Time:</label>
            </td>
            <td>
                <input type="datetime-local" name="published_at" id="Published_date" />
            </td>
        </tr>

        <!-- Submit Button -->
        <tr>
            <td><button>Send</button></td>
        </tr>
    </table>
</form>

<?php require "includes/footer.php"; ?>