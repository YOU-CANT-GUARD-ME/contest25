<?php
require_once 'db.php';
?>
<style>


</style>

<div class="header">
    <div class="nav">
        <div class="logo">
            <a href="./index.php"><img src="./images/logo.png" alt="로고"></a>
        </div>
        <div class="nav-A">
            <ul>
                <li>
                    <a href="./sub01.php">소개</a>
                    <ul class="drop">
                        <li></li>
                        <li></li>
                    </ul>
                </li>
                <li>
                    <a href="./sub02.php">판매상품</a>
                    <ul class="drop">
                        <li><a href="./sub02.php">전체상품</a></li>
                        <li><a href="./sub03.php">인기상품</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">가맹점</a>
                    <ul class="drop">
                        <li></li>
                        <li></li>
                    </ul>
                </li>
                <li>
                    <a href="./sub04.php">장바구니</a>
                    <ul class="drop">
                        <li></li>
                        <li></li>
                    </ul>
                </li>
            </ul>
        </div>
        <?php
        $user = $_SESSION['ss'] ?? null;
        if ($user == null) { ?>
            <div class="nav-B">
                <ul>
                    <li>장바구니</li>
                    <li>관리자</li>
                </ul>

                <div class="open">로그인/회원가입</div>
            </div>
            <?php } else if (($user->iAd ?? 0) == 1) { ?>
                <div class="nav-B">
                    <ul>
                        <li>
                            <a href="#">관리자</a>
                            <ul class="dropdown">
                                <li><a href="./noticeLists.php"></a></li>
                                <li><a href="./itemList.php"></a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="./userLists.php">회원관리</a>
                        </li>

                        <li>
                            <a href="./sub04.php">장바구니</a>
                        </li>

                        <li>
                            <a href="./logout.php">로그아웃</a>
                        </li>
                    </ul>
                </div>

            <?php
        } else {
            ?>

                <div class="nav-B">
                    <ul>
                        <li>
                            <a href="./sub04.php">장바구니</a>
                        </li>
                        <li>
                            <a href="./logout.php">로그아웃</a>
                        </li>
                    </ul>
                    <div><?= $user->name ?>님,환영합니다!</div>
                </div>

            <?php } ?>
    </div>
</div>

<div class="login">
    <form action="./userAction.php" method="post">
        <div class="closeLogin">닫기</div>
        <input type="hidden" name="type" value="login">
        <div class="formCon">
            <div class="df">
                <h1>로그인</h1>
            </div>

            <div>
                <label for="id">아이디</label>
                <input type="text" name="id" id="id">
            </div>

            <div>
                <label for="password">비밀번호</label>
                <input type="password" name="password" id="password">
            </div>

            <div>
                <input type="submit" value="로그인">
            </div>

            <div>
                <div class="signupBtn">회원가입</div>
            </div>
        </div>
    </form>
</div>

<div class="signup">
    <form action="./userAction.php" method="post">
        <div class="closeSignup">닫기</div>
        <input type="hidden" name="type" value="signup">

        <div class="df">
            <h1>회원가입</h1>
        </div>

        <div>
            <label for="name">이름</label>
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="id">아이디</label>
            <input type="text" name="id" id="id">
        </div>

        <div>
            <label for="password">비밀번호</label>
            <input type="password" name="password" id="password">
        </div>

        <div>
            <label for="email">이메일</label>
            <input type="email" name="email" id="email">
        </div>


        <div>
            <input type="submit" value="회원가입">
        </div>

        <div>
            <div class="loginBtn">로그인</div>
        </div>
    </form>
</div>

<script>
    const login = document.querySelector(".login");
    const signup = document.querySelector(".signup");
    const closeLogin = document.querySelector(".closeLogin");
    const closeSignup = document.querySelector(".closeSignup");
    const open = document.querySelector(".open");
    const signupBtn = document.querySelector(".signupBtn");
    const loginBtn = document.querySelector(".loginBtn");

    closeLogin.addEventListener("click", () => {
        login.style.display = "none";
    })
    closeSignup.addEventListener("click", () => {
        signup.style.display = "none";
    })
    if (open) {
        open.addEventListener("click", () => {
            login.style.display = "flex";
        })
    }
    signupBtn.addEventListener("click", () => {
        login.style.display = "none";
        signup.style.display = "flex";
    })
    loginBtn.addEventListener("click", () => {
        signup.style.display = "none";
        login.style.display = "flex";
    })
</script>