<?php
    include './db_config.php';

    // Make sure the session variables are available
    session_start();

    // Build the query
    $table_name = "decks";
    $query = 'SELECT * FROM '."`$table_name`"." WHERE `username` = '".$_SESSION['username']."'";

    // Query the database
    $results = $mysqli->query($query);

    if ($results->num_rows > 0) {
        // Declare the rows array
        $arrayOfRows = array();

        while ($row = $results->fetch_assoc()) {
            // Get the data and push to the rows array
            extract($row);
            $rowData = '{"id":'.$deckId.', "deck_name":'.'"'.$deckname.'"'.', "made_by":'.'"'.$username.'"'.', "cardlist":'.'"'.$cardlist.'"'.'}'; // make sure card list is proper json
            array_push($arrayOfRows, $rowData);
        }

        // Start building the json
        $jsonResult = '{"decks":[';

        for ($i = 0; $i < sizeof($arrayOfRows); $i++) {
            $jsonResult .= $arrayOfRows[$i];
            if ($i != sizeof($arrayOfRows) - 1) {
                $jsonResult .= ',';
            }
        }
        
        $jsonResult .= ']}';
    
        $results->free();
        $mysqli->close();

        // Return the json
        echo $jsonResult;
    }
?>