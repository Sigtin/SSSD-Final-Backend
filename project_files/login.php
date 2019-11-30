<?php
    include './db_config.php';
    include './models/user.php';

    // make sure the username and password have both been entered
    if (trim($_POST['username']) != "" && trim($_POST['password']) != "") {
        // get the raw data entered
        $raw_name = $_POST['username'];
        $raw_password = $_POST['password'];

        // filter and sanitize the data
        $enteredUsername = filter_var($raw_name, FILTER_SANITIZE_STRING);
        $enteredPassword = filter_var($raw_password, FILTER_SANITIZE_STRING);

        // build the query
        $table_name = "users";
        $query = "Select * from `$table_name` where username = '$enteredUsername'";

        // query the database
        $results = $mysqli->query($query);


        if ($results->num_rows <= 0) {
            header("Location: http://localhost/SSSD-Final/SSSD-Final-Frontend/project_files/pages/index.html");
            die();
        }

        $users = array();

        while ($row = $results->fetch_assoc()) {
            extract($row);
            $user = new User();
            $user->username = $username;
            $user->password = $password;

            array_push($users, $user);
        }

        $mysqli->close();

        foreach ($users as $user) {
            // check if the user matches what was entered
            if ($user->password == $enteredPassword && $user->username == $enteredUsername) {
                header("Location: http://localhost/SSSD-Final/SSSD-Final-Frontend/project_files/pages/home.html");
                die();
            } 
        }

        // if nothing matches in the foreach loop, redirect back to login page
        header("Location: http://localhost/SSSD-Final/SSSD-Final-Frontend/project_files/pages/index.html");
        die();

    } else {
        // if one or more fields are missing, redirect back to the login page
        header("Location: http://localhost/SSSD-Final/SSSD-Final-Frontend/project_files/pages/index.html");
            die();
    }
?>