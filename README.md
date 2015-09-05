# Extravaganza Math Captcha
=======
How it works
---------------
Extravaganza Math Captcha is a small, fast and secure Captcha Class for small sites. E.g. 11 + 36 = ?

Features
---------------
* Only two methods. GenerateCaptcha and CheckCaptcha — it's all!
* Random plus and minus operations.

Requirements
---------------
* PHP 5.4

Using
---------------

Generate captcha
```php
$captcha = ExtravaganzaMathCaptcha::generateCaptcha();
```

Display generated captcha
```php
echo "How much is {$captcha['A']} {$captcha['action']} {$captcha['B']} = ?"; // How much is 5 + 3 = ?
```
Check captcha
```php
if(ExtravaganzaMathCaptcha::checkCaptcha($answer) { // $answer = 8
  echo "Captcha correct";
}
else
{
  echo "Bad captcha";
}
```
