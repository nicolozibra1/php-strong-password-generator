<?php
    // PASSWORD GENERATOR
    function getPassword(){
        $password = '';
        if (isset($_GET['pass-length'])) {
            $length = $_GET['pass-length'];
            if ($length >= 8 && $length <= 32) {
                $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?';
                for ($i = 0; $i < $length; $i++) {
                    $index = random_int(0, strlen($chars) - 1);
                    $password .= chr(ord($chars[$index]));
                }
            }
        }
        return $password;
    }
?>