funcaptcha-php-library
======================

Stop spam with a free, fun, fast CAPTCHA game
Spammers abuse your site, but users hate typing out twisty letters. This significantly reduces user conversions, and it’s just not OK any more. FunCaptcha presents a mini-game that blocks the bots while giving your users a few moments of fun. It’s a real security solution hardened by experts and automatically updated to provide the best protection.

Users complete these little games faster than other CAPTCHAs, with no frustrating failures and no typing. FunCaptcha works on all browsers and mobile devices. It’s easy to implement, so join thousands of other sites and try it!

You can get started and view a demo at our [website](https://www.funcaptcha.co).

## PHP setup
Our PHP code makes it easy to use FunCaptcha on your site. It’s just like adding any other popular captcha.

## Registration
You’ll need to register on our [website](https://www.funcaptcha.co) and add your domains.  Once you have registered, you can add your website URL which will generate a private and public key. These keys are used in the php library to authenticate your website with our servers.

## Setup Requirements

FunCaptcha currently requires cURL support and PHP 5.0 or later to work.

## Installation

1. Copy the funcaptcha.php and json.php files to a directory on your web server.

2. Include that funcaptcha.php in your php code.

```php
require_once('funcaptcha.php');
```

4. Create a reference to the FunCaptcha object.

```php
$funcaptcha = new FUNCAPTCHA();
```

3. Echo the FunCaptcha object where you’d like it to appear, passing in your public key (You can get this key by [registering](https://www.funcaptcha.co/register/)) .

```php
echo $funcaptcha->getFunCaptcha('YOUR_PUBLIC_KEY_HERE');
```

4. When the user submits the form, where you are validating your form results, add a check to see if FunCaptcha is validated, passing in your private key.

```php
$verified = $funcaptcha->checkResult('YOUR_PRIVATE_KEY_HERE');
if ($verified) {
echo 'Successfully passed!';
} else {
echo 'Failed verification, please try again.';
}
```

Everything should now be up and working. Please [contact us](https://www.funcaptcha.co/contact-us/) if you have any issues or questions. Some further options are shown in the sample.php.

