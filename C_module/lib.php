<?php

function hashPsw($password)
{
    $salt = bin2hex(random_bytes(32));

    $h_psw = hash("sha256", $salt . $password);

    return [$salt, $h_psw];
}

function alert($msg)
{
    echo "<script>alert('$msg')</script>";
}

function move()
{
    echo "<script>location.href='/폴해리슨/C_module'</script>";
}

