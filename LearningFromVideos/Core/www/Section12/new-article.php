<!-- 2 -->
<?php
// get the db connection first    
require "includes/database.php";

// 9
$errors = [];
$title = '';
$content = '';
$published_date = '';


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $title = $_POST['title'];
    $content = $_POST['content'];
    $published_date = $_POST['published_at'];

    // 9
    if (empty($title))
        array_push($errors, "Title is missing");
    if (empty($content))
        array_push($errors, "Content is missing");
    if (empty($published_date))
        $published_date = null;
    
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

        // 11
        if ($published_date != '' || $published_date != null) {
            $datetime = date_create_from_format('Y-m-d H:i:s', $published_date);

            if ($datetime === false) {
                array_push($errors, "Invalid date and time");
            } else {
                // say that you try to insert 30 februari, this function will handle that
                $date_errors = date_get_last_errors();

                if ($date_errors['warning_count'] > 0) {
                    array_push($errors, "Invalid date and time");
                }
            }
        }

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
            // and redirect to the location where we inserted the data.
            header("Location: $protocol://" . $host . "/article.php?id=$id");
        }
        
    }
}

?>
<!-- 1 -->
<?php require "includes/header.php"; ?>

<h2>New Article</h2>
<?php if (!empty($errors)): ?>
<ul>
    <?php foreach ($errors as $error): ?>
    <li><?= $error ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>

<form method="post">
    <!-- we use POST method because this script will insert into database -->
    <table>
        <!-- TITLE -->
        <tr>
            <td>
                <label for="Title">Title:</label>
            </td>
            <td>
                <!-- 10 -->
                <input type="text" name="title" id="Title" placeholder="Article's title"
                    value="<?= htmlspecialchars($title) ?>" />
            </td>
        </tr>
        <!-- CONTENT of the ARTICLE -->
        <tr>
            <td>
                <label for="Content">Content:</label>
            </td>
            <td>
                <!-- 10 -->
                <textarea name="content" cols="40" rows="4" id="Content" placeholder="Article's Content"
                    value="<?= htmlspecialchars($content) ?>"></textarea>
            </td>
        </tr>
        <!-- Date Publication -->
        <tr>
            <td>
                <label for="Published_date">Publication Date and Time:</label>
            </td>
            <td>
                <!-- 10 -->
                <input type="datetime-local" name="published_at" id="Published_date"
                    value="<?= htmlspecialchars($published_date) ?>" />
            </td>
        </tr>

        <!-- Submit Button -->
        <tr>
            <td><button>Send</button></td>
        </tr>
    </table>
</form>

<?php require "includes/footer.php"; ?>