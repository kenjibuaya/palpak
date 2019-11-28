<?php
// Let's start the session
session_start();

// Now, let's destroy all session data
session_destroy();

// Let's redirect back to login page
header( 'location:login.php' );