<?php
//crunch.php
if (isset($_POST["last"]))
{
    extract($_POST);
    echo $first + $last;
}
else
{
    echo "Error. No data was sent!!!";
}