<?php

session_start();
session_destroy();

header("location: ../acc_intranet.html");
?>