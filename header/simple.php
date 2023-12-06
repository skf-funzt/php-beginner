<?php
    header("Set-Cookie: foo=bar");

    // Alternative syntax
    header("Something: else", false, 200);

    // Override previous header
    header("Set-Cookie: now=\"We are following you?\"", true, 200);

    // Print all headers
    echo "<pre>";
    var_dump(headers_list());
    echo "</pre>";
?>