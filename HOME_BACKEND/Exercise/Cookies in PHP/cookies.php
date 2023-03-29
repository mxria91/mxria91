<?php

// Used to store date in the remote browser and tracking or identifying return users
// specific data can be stored in the browser and be retreived when the user visits the site again
// Sensitive Data though must be stored in SESSIONS and not COOKIES!
// Cookies are set on the CLIENT whilst SESSIONS are set on the SERVER = more secure !!


setcookie("name", "Brad", time() + 86400); // cookie set for 1 day = 86400 .. for 30 days 86400 * 30

if (isset($_COOKIE["name"])) {
    echo $_COOKIE["name"];
}

// check Cookie under "Application" or "Anwendung"

setcookie("name", " ", time() - 86400);



?>