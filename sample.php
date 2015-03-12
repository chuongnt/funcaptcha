<!DOCTYPE html>
<?php
//******************************************************************************
/*
	Name:		sample.php

	Purpose:	Provide an example of how to integrate an SwipeAds FunCaptcha on PHP web form.

	Requirements:
			- your web server uses PHP5 (or higher).
			- you have read the installation instructions page at:
				https://www.funcaptcha.co/setup
*/
//******************************************************************************

// Instantiate the FUNCAPTCHA object.
require_once("funcaptcha.php");
$funcaptcha = new FUNCAPTCHA();

// OPTIONAL
// If FunCaptcha does not work correctly, enable debug mode to help find the cause.
//$funcaptcha->debugMode(TRUE);

// OPTIONAL
// Enable FunCaptcha lightbox mode, for more information view our FAQ at https://www.funcaptcha.co/faqs/
// $funcaptcha->setLightboxMode(1);

// OPTIONAL
// Enable FunCaptcha to show a fallback CAPTCHA if a user has JavaScript turned off, we recommend it disabled (default) as bots generally browse with JavaScript off.
// $funcaptcha->setNoJSFallback(1);

// OPTIONAL
// Change FunCaptcha visual theme - see https://www.funcaptcha.co/themes/ for examples
// $funcaptcha->setTheme(1);

// OPTIONAL
// Set the security level of FunCaptcha, for more information view our FAQ at https://www.funcaptcha.co/faqs/
//$funcaptcha->setSecurityLevel(0);



// The form submits to itself, so see if the user has submitted the form.
if (array_key_exists('submit', $_POST))
{
	// Use the funcaptcha object to get verified. Pass in Private Key.
	$verified = $funcaptcha->checkResult("YOUR_PRIVATE_KEY_HERE");
	// Check if verified to determine what to do.
	if ($verified)
	{
		echo "Successfully passed!";
	}
	else
	{
		echo "Failed verification, please try again.";
	}
}
?>

<form method="post" action="">
	<p>Please enter your name: <input type="text" name="name"></p>
	<?php
		// Use the funcaptcha object to get the HTML code needed to
		// load and run the FunCaptcha. Pass in Public Key.
		 echo $funcaptcha->getFunCaptcha("YOUR_PUBLIC_KEY_HERE");
	?>
	<input type="Submit" name="submit" value=" GO ">
</form>
