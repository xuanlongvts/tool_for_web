<?php
    session_start();
    //echo 'Session ID';
    $_SESSION['user_id'] = 1;

    setcookie('data', 'cats', time() + 3600);
?>
<p>Session, cookie</p>