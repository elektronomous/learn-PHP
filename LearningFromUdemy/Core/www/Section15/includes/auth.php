<?php

/**
 * return the user authentication status
 *
 * @return boolean
 */
function isLoggedIn(): bool {
    return (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']);
}