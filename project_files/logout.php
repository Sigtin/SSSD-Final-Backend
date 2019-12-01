<?php
    // Removes all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect to login page
    header("Location: http://localhost/SSSD-Final/SSSD-Final-Frontend/project_files/pages/index.html");
    die();
?>