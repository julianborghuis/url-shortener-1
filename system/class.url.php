<?php
/*
 * Copyright (c) 2019 - 2020 Julian van Schijndel
 * https://juliandev.nl ~ <info@juliandev.nl>
 * https://github.com/Julianvschijndel
 * --------------------------------------------------
 * Url shortener.
 * --------------------------------------------
 * A PHP script to short up URL.
*/

/*
 * Functions of this off the URL class.
 * ----------------------
 * URLError()
 * URLSuccess()
 * postURL()
*/

class url {

    public function URLError($errorName) {
        echo '
            <div class="notice notice-error">
                <i class="mdi mdi-alert-circle"></i>
                <p>'.$errorName.'</p>
            </div>';
    }

    public function URLSuccess($successName) {
        echo'
            <div class="notice notice-success">
                <i class="mdi mdi-check-circle"></i>
                <p>'.$successName.'</p>
            </div>';
    }

    public function postURL() {

        if(isset($_POST['submit-url'])) {
            $url = $_POST['url'];

            $string = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 6);

            if(is_dir($string)) {
                return (new url)->URLError('Someting went wrong. Please try again.');
            } else {
                mkdir($string);
                $file = dirname('../')."/$string/index.php";
                $index = fopen($file, 'w');
                $data = '<?php header("Location: '.$url.'"); ?>';
                fwrite($index, $data);
                fclose($index);

                return (new url)->URLSuccess("You're new url is: <a href='http://localhost/$string' target='_blank'><b>http://localhost/$string</b></a>");
            }
        }
    }

}
