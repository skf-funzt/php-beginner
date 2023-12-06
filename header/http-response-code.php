<?php
// Set the response code to 200 (OK)
http_response_code(200);

// Output a message based on the response code
if (http_response_code() === 200) {
    echo "Success! The response code is 200.";
} else {
    echo "Oops! Something went wrong.";
}

print("<br><br>");

// Set the response code to 404 (NOT FOUND)
http_response_code(404);

// Output a message based on the response code
if (http_response_code() === 200) {
    echo "Success! The response code is 200.";
} else {
    echo "Oops! Something went wrong. Status code " . http_response_code();
}
?>
