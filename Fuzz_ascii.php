<?php

for ($ascii = 0; $ascii < 256; $ascii++) {
    
    if (!preg_match('/[\x00- 0-9A-Za-z\'"\`~_&.,|=[\x7F]+/i', chr($ascii))) {
        echo bin2hex(chr($ascii));
        echo "\n";
    }
}
?>
