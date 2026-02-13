<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>전체상품</title>
    <link rel="stylesheet" href="./css/sub02.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./fontawesome/css/font-awesome.css">
</head>
<body>
    <div class="container">
        <!-- 헤더 -->

        <?php require_once 'header.php'; ?>

        <div class="buy-alert">
            방금 비회원 <span class="user"></span>님이 <span class="all-cost"></span>을 결제하셨습니다!
        </div>

        <!-- 동영상 -->

        <div class="video-section">
            <div class="title-box">
                <div class="block"></div>
                <div class="tbox">
                    <div class="title">동영상</div>
                    <div class="etitle">VIDEO</div>
                </div>
            </div>
            <div class="video-container">
                <video src="./images/AD.mp4"></video>
                <div class="controls-container">
                    <div class="controls">
                        <div class="ctrl01">재생</div>
                        <div class="ctrl02">일시정지</div>
                        <div class="ctrl03">정지</div>
                        <div class="ctrl04">되감기(10초씩)</div>
                        <div class="ctrl05">빨리감기(10초씩)</div>
                        <div class="ctrl06">감속하기(0.1배씩)</div>
                        <div class="ctrl07">배속하기(0.1배씩)</div>
                        <div class="ctrl08">배속 원래대로 돌리기</div>
                        <div class="ctrl09">반복 켜기/끄기</div>
                        <div class="ctrl10">자동재생 켜키/끄기</div>
                    </div>
                    <div class="ctrl11">컨트롤러 보이기/숨기기</div>
                </div>
            </div>
        </div>

        <!-- 전체상품 -->

        <div class="product-section">
            <div class="title-box">
                <div class="block"></div>
                <div class="tbox">
                    <div class="title">전체상품</div>
                    <div class="etitle">ALL PRODUCTS</div>
                </div>
            </div>
            <div class="product-box">
                <div class="ptitles">
                    <div class="ptitle">건강식품</div>
                    <div class="ptitle">디지털</div>
                    <div class="ptitle">팬시</div>
                    <div class="ptitle">향수</div>  
                    <div class="ptitle">헤어케어</div>                                      
                </div>
                <div class="pbox">
                    <div class="box">
                        <?php
                        $heal = DB::fetchAll("select * from item where cate = '건강식품' order by price desc");
                        foreach ($heal as $key => $value) {
                        ?>
                        <div class="pcard">
                            <div class="pro-img">
                                <div>건강식품</div>
                                <img src="<?= $value->img ?>" alt="<?= $value->idx ?>">
                            </div>
                            <div class="pro-desc">
                                <div class="pro-name"><?= $value->title ?></div>
                                <div class="pro-price"><?= $value->price ?>원</div>
                            </div>
                            <div class="pro-btn">
                                <div class="btn get">장바구니</div>
                                <div class="btn">구매하기</div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="box">
                        <?php
                        $digital = DB::fetchAll("select * from item where cate = '디지털' order by price desc");
                        foreach ($digital as $key => $value) {
                        ?>
                        <div class="pcard">
                            <div class="pro-img">
                                <div>디지털</div>
                                <img src="<?= $value->img ?>" alt="<?= $value->idx ?>">
                            </div>
                            <div class="pro-desc">
                                <div class="pro-name"><?= $value->title ?></div>
                                <div class="pro-price"><?= $value->price ?>원</div>
                            </div>
                            <div class="pro-btn">
                                <div class="btn get">장바구니</div>
                                <div class="btn">구매하기</div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="box">
                        <?php
                        $fancy = DB::fetchAll("select * from item where cate = '팬시' order by price desc");
                        foreach ($fancy as $key => $value) {
                        ?>
                        <div class="pcard">
                            <div class="pro-img">
                                <div>팬시</div>
                                <img src="<?= $value->img ?>" alt="<?= $value->idx ?>">
                            </div>
                            <div class="pro-desc">
                                <div class="pro-name"><?= $value->title ?></div>
                                <div class="pro-price"><?= $value->price ?>원</div>
                            </div>
                            <div class="pro-btn">
                                <div class="btn get">장바구니</div>
                                <div class="btn">구매하기</div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="box">
                        <?php
                        $perfume = DB::fetchAll("select * from item where cate = '향수' order by price desc");
                        foreach ($perfume as $key => $value) {
                        ?>
                        <div class="pcard">
                            <div class="pro-img">
                                <div>향수</div>
                                <img src="<?= $value->img ?>" alt="<?= $value->idx ?>">
                            </div>
                            <div class="pro-desc">
                                <div class="pro-name"><?= $value->title ?></div>
                                <div class="pro-price"><?= $value->price ?>원</div>
                            </div>
                            <div class="pro-btn">
                                <div class="btn get">장바구니</div>
                                <div class="btn">구매하기</div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="box">
                        <?php
                        $haircare = DB::fetchAll("select * from item where cate = '헤어케어' order by price desc");
                        foreach ($haircare as $key => $value) {
                        ?>
                        <div class="pcard">
                            <div class="pro-img">
                                <div>헤어케어</div>
                                <img src="<?= $value->img ?>" alt="<?= $value->idx ?>">
                            </div>
                            <div class="pro-desc">
                                <div class="pro-name"><?= $value->title ?></div>
                                <div class="pro-price"><?= $value->price ?>원</div>
                            </div>
                            <div class="pro-btn">
                                <div class="btn get">장바구니</div>
                                <div class="btn">구매하기</div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>                    
                </div>
            </div>

            <!-- 드레그엔드드롭 -->

            <div class="dragAnddrop">
                <button class="open-modal">비회원 주문하기</button>

                <div class="modal-con">
                    <div class="modal-box">
                        <div class="modal-header">
                            <div class="user-id"></div>
                            <div>비회원주문하기</div>
                            <div class="close-modal">닫기</div>
                        </div>
                        <div class="modal-nav">
                            <div data-cate="건강식품" class="active">건강식품</div>
                            <div data-cate="디지털">디지털</div>
                            <div data-cate="팬시">팬시</div>
                            <div data-cate="향수">향수</div>
                            <div data-cate="헤어케어">헤어케어</div>
                        </div>
                        <div class="modal-main">
                            <div class="cart-box"></div>
                            <div class="buy-box"></div>
                        </div>
                        <div class="modal-footer">
                            <div class="all-price">0</div>
                            <div class="user-buy">구매하기</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 푸터 -->

        <div class="footer-section">
            <div class="ftop">
                <img src="./images/grerylogo.png" alt="그레이 로고">
                <p>
                    개인정보처리방침 | 이용약관.법적고지 | 청소년보호방침 | 이메일무단수집거부 | 사이트맵 | 채용
                </p>
                <div class="font">
                    <i class="fa fa-github-square fa-3x"></i>
                    <i class="fa fa-reddit-square fa-3x"></i>
                    <i class="fa fa-youtube-square fa-3x"></i>
                    <i class="fa fa-twitter-square fa-3x"></i>
                    <i class="fa fa-facebook-square fa-3x"></i>                    
                </div>
            </div>
            <div class="fmiddle">
                <p>
                    고객센터 이용안내
                    - 온라인몰 고객센터 1580-8282
                    - 매장고객센터 1577-8254

                    고객센터 운영시간 [평일 09:00 - 18:00]

                    주말 및 공휴일은 1:1문의하기를 이용해주세요.
                    업무가 시작되면 바로 처리해드립니다.  
                </p>
                <p>
                    (주)GIFTS:Mall | 사업자등록번호 : 809-81-01157 | 대표이사 황기영
                    주소 : 서울특별시 용산구 한강대로 123, 40층 
                    본사 대표전화 : 02-123-4567 | GIFTS:Mall 가맹상담전화 : 02-123-4568
                    COPYRIGHTⓒ 2024 GIFTS:MALL KOREA INC. ALL RIGHTS RESERVED
                </p>
                <p>
                    지방은행구매안전서비스
                    GIFTS:Mall은 현금 결제한 금액에 대해 지방은행과 채무지급보증 계약을체결하여 안전한 거래를 보장하고 있습니다
                    서비스 가입사실 확인 >
                </p>
            </div>
        </div>
    </div>
    <script src="./js/sub02.js"></script>
</body>
</html>