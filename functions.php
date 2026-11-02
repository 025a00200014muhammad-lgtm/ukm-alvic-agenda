<?php
function aman(string $teks): string 
{
    return htmlspecialchars($teks, ENT_QUOTES, 'UTF-8');
}
?>