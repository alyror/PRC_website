<?php
include('dbcon.php');

if(isset($_POST['btnLogin']))
{
    if(isset($_POST['g-recaptcha-response']))
    {
        $recaptchaSecretKey = '6LcKX54nAAAAAJyPUD6FOYNBZ8FWN77DSJh0U1vA';
        $recaptchaResponse = $_POST['g-recaptcha-response'];

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array(
            'secret' => $recaptchaSecretKey,
            'response' => $recaptchaResponse
        );

        $options = array(
            'http' => array(
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            )
        );

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $response = json_decode($result, true);

        // Debugging statements
        if ($response['success']) {
            echo "reCAPTCHA verification successful!";
        } else {
            echo "reCAPTCHA verification failed!";
        }

        if (!$response['success']) {
            $_SESSION['status'] = "reCAPTCHA verification failed. Please complete the CAPTCHA.";
            header("Location: index.php");
            exit(0);
        }
    }
    else
    {
        $_SESSION['status'] = "Please complete the CAPTCHA.";
        header("Location: index.php");
        exit(0);
    }
}
?>
