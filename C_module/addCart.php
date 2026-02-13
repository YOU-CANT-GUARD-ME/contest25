<?php
require_once 'db.php';
require_once 'lib.php';

$userId = $_GET["ss"]->id ?? false;
$itemId = $_GET["id"];

if ($userId) {
    if (DB::fetch("select * from cart where itemId = '$itemId' and userId = '$userId'")) {
        DB::exec("update cart set count = count + 1 where itemId = '$itemId' and userId = '$userId'");
    } else {
        DB::exec("insert into cart(userId, ItemId) values ('$userId','$itemId', '1'");
    }
    echo "장바구니에 추가에습다";
} else {
    echo "로그인을 해주세요";
}