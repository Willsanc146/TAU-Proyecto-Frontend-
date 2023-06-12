<?php

session_start();
session_destroy();

header("location: ../pages/acc_intranet.html");
?>