<?php
$email = "sa:jib_(pal)20@gm;ail.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (filter_var($email, FILTER_VALIDATE_EMAIL) == true) {
    echo("$email is a valid email address");
} else {
    echo("$email is not a valid email address");
}
?> 