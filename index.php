<?php

// Redirect to new URL + page.
header("Location: https://vdtg.nl$_SERVER[REQUEST_URI]");

// Stop code execution.
exit;

?>
