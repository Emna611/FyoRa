<?php

session_start();

session_destroy();

header("Location: indexUser.php");
exit;