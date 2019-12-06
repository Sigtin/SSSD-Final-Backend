<?php
    include './db_config.php';

    // Make sure the session variables are available
    session_start();

    $user = $_SESSION["username"];
    $table_name = 'decks';

    if (isset($_POST["name"]) && isset($_POST["deckId"])) {
        $name = $mysqli->real_escape_string($_POST["name"]);
        $deckId = $mysqli->real_escape_string($_POST["deckId"]);

        $query = "INSERT INTO `$table_name` (`deckId`, `deckname`, `username`, `cardlist`, `game`) VALUES ($deckId,'$name','$user', null, '$game')";

        mysqli_query($mysqli, $query);

        header("Location: http://localhost/SSSD-Final/SSSD-Final-Frontend/project_files/pages/deck_list.html");
        die();
    }

?>