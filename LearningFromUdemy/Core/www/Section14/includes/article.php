<?php

/** 
 * Get the article based on the ID
 * 
 * @param object connection result of the database
 * @param int the id article that want to get.
 * @param string the column that you want to get, the default is *
 * 
 * @return array associative array containing the article with that ID, or null if not found
 * 
*/
function getArticle(mysqli $connectedDB, int $id, string $columns = "*") {
    $sql_stmt = "SELECT $columns FROM article WHERE id = ?";
    
    $prepare_stmt = mysqli_prepare($connectedDB, $sql_stmt);

    if ($prepare_stmt === false) {   // mysql compile the sql statement first
        mysqli_error($connectedDB);     // failed: 
    } else {
        // success and bind the parameter
        mysqli_stmt_bind_param($prepare_stmt, 'i', $id);

        if (mysqli_stmt_execute($prepare_stmt)) {   // mysql execute the statement
            // executed successfuly, we get the data from the prepare statement now
            // get data in form of numeric and string indexes
            $result = mysqli_stmt_get_result($prepare_stmt);

            // return the data in associative array form
            return mysqli_fetch_array($result, MYSQLI_ASSOC);
        }
    }
}

/**
 * Validating the title, content, and date time format
 * 
 * @param title the string of the title
 * @param content the string of the content
 * @param published_date the date
 * 
 * @return errors an list of array of the errors occurs
 */

function validateArticle(string $title, string $content, $published_date): array {
    $errors = [];

    // 9
    if (empty($title))
        array_push($errors, "Title is missing");
    if (empty($content))
        array_push($errors, "Content is missing");
    if (empty($published_date))
        $published_date = null;
    // 11
    if ($published_date != '' || $published_date != null) {
        $published_date = str_replace("T", " ", $published_date);
        $datetime = date_create_from_format('Y-m-d H:i', $published_date);

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

    return $errors;
}