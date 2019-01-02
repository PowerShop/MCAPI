<?php
$led = $_GET['led'];
if ($led <= 40)
{
    echo 'light On';
}
else
{
    echo 'Turn Off';
}
?>