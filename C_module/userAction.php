<?php
require_once 'db.php';
require_once 'lib.php';

$type = $_POST['type'];

if ($type === "signup") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if (DB::fetch("select * from users where username = '$id'")) {
        alert("이미 사용중인 아이디입니다");
    } else {
        [$salt, $h_psw] = hashPsw($password);
        DB::exec("insert into users (username, password, name, email, salt) values ('$id', '$h_psw', '$name', '$email', '$salt')");
        alert("회원가입 성공");
    }
    move();
} else {
    $id = $_POST['id'];
    $password = $_POST['password'];

    if (!DB::fetch("select * from users where username = '$id'")) {
        alert("존재하지 않는 사용자입니다");
    } else {
        $user = DB::fetch("select * from users where username = '$id'");

        $h_psw = $user->password;
        $salt = $user->salt;

        if ($h_psw === hash("sha256", $salt . $password)) {
            $_SESSION["ss"] = $user;
            alert("로그인 성공");
        } else {
            alert("비밀번호 일치하지 않습니다");
        }
    }
    move();
}