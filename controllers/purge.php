<?php

session_abort();
session_destroy();
header("Location: /contact");
exit();

?>