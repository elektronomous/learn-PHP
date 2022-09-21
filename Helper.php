<?php

function varDump(array $arr): void{
    echo '<pre>';
    print_r($arr);
    echo '</pre><br />';
}

function errHandler(int $type, string $msg, string $file = null, int $line = null): void {
    echo $type . ':' . $msg . '<br />';
    return;
}