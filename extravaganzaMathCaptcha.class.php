<?php
/*
 * Extravaganza Math Captcha Class
 * Works with PHP 5.4 and above.
 */
Class ExtravaganzaMathCaptcha {
    public static $minNumberA = 1;
    public static $maxNumberA = 99;
    public static $minNumberB = 1;
    public static $maxNumberB = 99;

    /*
    * Generate captcha
    * @return array $A, $B, $action (first number, second number, action
    */
    public static function generateCaptcha() {
        $A = rand(self::$minNumberA, self::$maxNumberA);
        $B = rand(self::$minNumberB, self::$maxNumberB);

        if(($A - $B) < 0) {
            $action = '-';
        }
        else {
            $action = '+';
        }

        switch($action) {
            case '-':
                $_SESSION['captcha'] = $A - $B;
                break;
            case '+':
                $_SESSION['captcha'] = $A + $B;
                break;
        }

        return [
            'A' => $A,
            'B' => $B,
            'action' => $action
        ];
    }

    /*
    * Returns is captcha correct
    * @return boolean
    */
    public static function checkCaptcha($result) {
        return (int)$_SESSION['captcha'] === (int)$result;
    }

}