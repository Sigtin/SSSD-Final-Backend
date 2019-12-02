<?php
    include './db_config.php';
    include './models/user.php';

    // make sure the username and password have both been entered
    if (trim($_POST['username']) != "" && trim($_POST['password']) != "" && trim($_POST['password_confirm']) != "") {
        // get the raw data entered
        $raw_name = $_POST['username'];
        $raw_password = $_POST['password'];
        $raw_confirm = $_POST['password_confirm'];

        // filter and sanitize the data
        $enteredUsername = filter_var($raw_name, FILTER_SANITIZE_STRING);
        $enteredPassword = filter_var($raw_password, FILTER_SANITIZE_STRING);
        $enteredConfirm = filter_var($raw_confirm, FILTER_SANITIZE_STRING);

        // build the query
        $table_name = "users";
        $query = "Select * from `$table_name` where username = '$enteredUsername'";

        // query the database
        $results = $mysqli->query($query);

        $users = array();

        while ($row = $results->fetch_assoc()) {
            extract($row);
            $user = new User();
            $user->set_name($username);
            $user->set_password($password);

            array_push($users, $user);
        }

        foreach ($users as $user) {
            // check if the username already exists in the database
            if ($user->get_name() == $enteredUsername) {
                header("Location: http://localhost/SSSD-Final/SSSD-Final-Frontend/project_files/pages/sign_up.html");
                die();
            }
        }

        $insertQuery = "INSERT INTO `$table_name` (`userId`, `username`, `password`) VALUES (null,'$enteredUsername','$enteredPassword')";

        if ($enteredPassword == $enteredConfirm) {
            if (mysqli_query($mysqli, $insertQuery)) {
                header("Location: http://localhost/SSSD-Final/SSSD-Final-Frontend/project_files/pages/index.html");
                die();
            }
        } else {
            header("Location: http://localhost/SSSD-Final/SSSD-Final-Frontend/project_files/pages/sign_up.html");
            die();
        }

        $mysqli->close();
    } else {
        header("Location: http://localhost/SSSD-Final/SSSD-Final-Frontend/project_files/pages/sign_up.html");
        die();
    }
?>