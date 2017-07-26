<?php
if (isset($_POST["four"]))
{
    extract($_POST);
        echo $one * $two * $three * $four;
}
else
{
    echo "Error !!!";
}