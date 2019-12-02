<?php
    class User {
        private $username;
        private $password;

        function set_name($name) {
            $this->username = $name;
        }

        function get_name() {
            return $this->username;
        }

        function set_password($password) {
            $this->password = $password;
        }

        function get_password() {
            return $this->password;
        }
    }
?>