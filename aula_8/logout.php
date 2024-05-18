<?php

if(!isset($_SESSION))
{
    session-start();
}
session_destroy();
header('Location: index.php?deslogado')

?>