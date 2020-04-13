<?php
    $ipv4 = '^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?).){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$';
    if (preg_match('/' . $ipv4 . '/', $_SERVER['REMOTE_ADDR']) ) {
        echo '<img src="https://img.shields.io/badge/-IPv4-lightgrey" alt="ipv4" border="0" />';
    }else{
        echo '<img src="https://img.shields.io/badge/-IPv6-brightgreen" alt="ipv6" border="0" />';
    }
?>