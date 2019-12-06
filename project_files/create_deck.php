<?php
    include './db_config.php';

    // Make sure the session variables are available
    session_start();

    $user = $_SESSION["username"];
    $table_name = 'decks';

    if (isset($_POST["deckname"]) && isset($_POST["game"])) {
        $deckname = $mysqli->real_escape_string($_POST["deckname"]);
        $game = $mysqli->real_escape_string($_POST["game"]);

        $query = "INSERT INTO `$table_name` (`deckId`, `deckname`, `username`, `cardlist`, `game`) VALUES (null,'$deckname','$user', null, '$game')";

        mysqli_query($mysqli, $query);

        header("Location: http://localhost/SSSD-Final/SSSD-Final-Frontend/project_files/pages/deck_list.html");
        die();
    }

?>