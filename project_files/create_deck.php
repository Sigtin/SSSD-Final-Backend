<?php
    include './db_config.php';

    // Make sure the session variables are available
    session_start();

    $user = $_SESSION["username"];
    $table_name = 'decks';

    $query = "INSERT INTO `$table_name` (`deckId`, `deckname`, `username`, `cardlist`) VALUES (null,'$deckname','$user', null)";
?>