<?php

setcookie("example", "Hello");
// set a cookie called exampe with the value Hello.
// we can also set the expired time for the cookie
// setcookie("exampe","hello", time() * 60 * 60 * 2 /* 2 here for 2 days */)
// to make the cookie expire, you need to set the time backward
// setcookie("example", "hello", time() - 3600); // one our ago

echo "Cookie set.";