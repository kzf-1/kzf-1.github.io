<?php
global $cdnserver, $accredit;
?>
<div style="height:20vh;">
</div>
<style>
    #loading {
        background: linear-gradient(to bottom, #8f75da, #727cf5);
        height: 100%;
        width: 100%;
        position: fixed;
        z-index: 100001111;
        margin-top: 0px;
        top: 0px
    }

    #loading-center {
        width: 100%;
        height: 100%;
        position: relative
    }

    #loading-center-absolute {
        position: absolute;
        left: 50%;
        top: 50%;
        height: 100px;
        width: 100px;
        margin-top: -50px;
        margin-left: -50px
    }

    .object {
        position: absolute;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-bottom: 20px solid #FFF
    }

    .object:nth-child(25) {
        bottom: 0px;
        left: 80px;
        -webkit-animation: animate_25 3s infinite ease-in-out;
        animation: animate_25 3s infinite ease-in-out
    }

    .object:nth-child(24) {
        bottom: 0px;
        left: 60px;
        -webkit-animation: animate_24 3s infinite ease-in-out;
        animation: animate_24 3s infinite ease-in-out
    }

    .object:nth-child(23) {
        bottom: 0px;
        left: 40px;
        -webkit-animation: animate_23 3s infinite ease-in-out;
        animation: animate_23 3s infinite ease-in-out
    }

    .object:nth-child(22) {
        bottom: 0px;
        left: 20px;
        -webkit-animation: animate_22 3s infinite ease-in-out;
        animation: animate_22 3s infinite ease-in-out
    }

    .object:nth-child(21) {
        bottom: 0px;
        left: 0px;
        -webkit-animation: animate_21 3s infinite ease-in-out;
        animation: animate_21 3s infinite ease-in-out
    }

    .object:nth-child(20) {
        bottom: 0px;
        left: 70px;
        -ms-transform: rotate(180deg);
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
        -webkit-animation: animate_20 3s infinite ease-in-out;
        animation: animate_20 3s infinite ease-in-out
    }

    .object:nth-child(19) {
        bottom: 0px;
        left: 50px;
        -ms-transform: rotate(180deg);
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
        -webkit-animation: animate_19 3s infinite ease-in-out;
        animation: animate_19 3s infinite ease-in-out
    }

    .object:nth-child(18) {
        bottom: 0px;
        left: 30px;
        -ms-transform: rotate(180deg);
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
        -webkit-animation: animate_18 3s infinite ease-in-out;
        animation: animate_18 3s infinite ease-in-out
    }

    .object:nth-child(17) {
        bottom: 0px;
        left: 10px;
        -ms-transform: rotate(180deg);
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
        -webkit-animation: animate_17 3s infinite ease-in-out;
        animation: animate_17 3s infinite ease-in-out
    }

    .object:nth-child(16) {
        bottom: 20px;
        left: 70px;
        -webkit-animation: animate_16 3s infinite ease-in-out;
        animation: animate_16 3s infinite ease-in-out
    }

    .object:nth-child(15) {
        bottom: 20px;
        left: 50px;
        -webkit-animation: animate_15 3s infinite ease-in-out;
        animation: animate_15 3s infinite ease-in-out
    }

    .object:nth-child(14) {
        bottom: 20px;
        left: 30px;
        -webkit-animation: animate_14 3s infinite ease-in-out;
        animation: animate_14 3s infinite ease-in-out
    }

    .object:nth-child(13) {
        bottom: 20px;
        left: 10px;
        -webkit-animation: animate_13 3s infinite ease-in-out;
        animation: animate_13 3s infinite ease-in-out
    }

    .object:nth-child(12) {
        bottom: 20px;
        left: 60px;
        -ms-transform: rotate(180deg);
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
        -webkit-animation: animate_12 3s infinite ease-in-out;
        animation: animate_12 3s infinite ease-in-out
    }

    .object:nth-child(11) {
        bottom: 20px;
        left: 40px;
        -ms-transform: rotate(180deg);
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
        -webkit-animation: animate_11 3s infinite ease-in-out;
        animation: animate_11 3s infinite ease-in-out
    }

    .object:nth-child(10) {
        bottom: 20px;
        left: 20px;
        -ms-transform: rotate(180deg);
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
        -webkit-animation: animate_10 3s infinite ease-in-out;
        animation: animate_10 3s infinite ease-in-out
    }

    .object:nth-child(9) {
        bottom: 40px;
        left: 60px;
        -webkit-animation: animate_9 3s infinite ease-in-out;
        animation: animate_9 3s infinite ease-in-out
    }

    .object:nth-child(8) {
        bottom: 40px;
        left: 40px;
        -webkit-animation: animate_8 3s infinite ease-in-out;
        animation: animate_8 3s infinite ease-in-out
    }

    .object:nth-child(7) {
        bottom: 40px;
        left: 20px;
        -webkit-animation: animate_7 3s infinite ease-in-out;
        animation: animate_7 3s infinite ease-in-out
    }

    .object:nth-child(6) {
        bottom: 40px;
        left: 50px;
        -ms-transform: rotate(180deg);
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
        -webkit-animation: animate_6 3s infinite ease-in-out;
        animation: animate_6 3s infinite ease-in-out
    }

    .object:nth-child(5) {
        bottom: 40px;
        left: 30px;
        -ms-transform: rotate(180deg);
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
        -webkit-animation: animate_5 3s infinite ease-in-out;
        animation: animate_5 3s infinite ease-in-out
    }

    .object:nth-child(4) {
        bottom: 60px;
        left: 50px;
        -webkit-animation: animate_4 3s infinite ease-in-out;
        animation: animate_4 3s infinite ease-in-out
    }

    .object:nth-child(3) {
        bottom: 60px;
        left: 30px;
        -webkit-animation: animate_3 3s infinite ease-in-out;
        animation: animate_3 3s infinite ease-in-out
    }

    .object:nth-child(2) {
        bottom: 60px;
        left: 40px;
        -ms-transform: rotate(180deg);
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
        -webkit-animation: animate_2 3s infinite ease-in-out;
        animation: animate_2 3s infinite ease-in-out
    }

    .object:nth-child(1) {
        bottom: 80px;
        left: 40px;
        -webkit-animation: animate_1 3s infinite ease-in-out;
        animation: animate_1 3s infinite ease-in-out
    }

    @-webkit-keyframes animate_1 {
        50% {
            -ms-transform: translate(0, -100px) rotate(180deg);
            -webkit-transform: translate(0, -100px) rotate(180deg);
            transform: translate(0, -100px) rotate(180deg)
        }
    }

    @keyframes animate_1 {
        50% {
            -ms-transform: translate(0, -100px) rotate(180deg);
            -webkit-transform: translate(0, -100px) rotate(180deg);
            transform: translate(0, -100px) rotate(180deg)
        }
    }

    @-webkit-keyframes animate_2 {
        50% {
            -ms-transform: translate(0, -80px) rotate(180deg);
            -webkit-transform: translate(0, -80px) rotate(180deg);
            transform: translate(0, -80px) rotate(180deg)
        }
    }

    @keyframes animate_2 {
        50% {
            -ms-transform: translate(0, -80px) rotate(180deg);
            -webkit-transform: translate(0, -80px) rotate(180deg);
            transform: translate(0, -80px) rotate(180deg)
        }
    }

    @-webkit-keyframes animate_3 {
        50% {
            -ms-transform: translate(-100px, -100px) rotate(180deg);
            -webkit-transform: translate(-100px, -100px) rotate(180deg);
            transform: translate(-100px, -100px) rotate(180deg)
        }
    }

    @keyframes animate_3 {
        50% {
            -ms-transform: translate(-100px, -100px) rotate(180deg);
            -webkit-transform: translate(-100px, -100px) rotate(180deg);
            transform: translate(-100px, -100px) rotate(180deg)
        }
    }

    @-webkit-keyframes animate_4 {
        50% {
            -ms-transform: translate(100px, -100px) rotate(180deg);
            -webkit-transform: translate(100px, -100px) rotate(180deg);
            transform: translate(100px, -100px) rotate(180deg)
        }
    }

    @keyframes animate_4 {
        50% {
            -ms-transform: translate(100px, -100px) rotate(180deg);
            -webkit-transform: translate(100px, -100px) rotate(180deg);
            transform: translate(100px, -100px) rotate(180deg)
        }
    }

    @-webkit-keyframes animate_5 {
        50% {
            -ms-transform: translate(-40px, -100px) rotate(180deg);
            -webkit-transform: translate(-40px, -100px) rotate(180deg);
            transform: translate(-40px, -100px) rotate(180deg)
        }
    }

    @keyframes animate_5 {
        50% {
            -ms-transform: translate(-40px, -100px) rotate(180deg);
            -webkit-transform: translate(-40px, -100px) rotate(180deg);
            transform: translate(-40px, -100px) rotate(180deg)
        }
    }

    @-webkit-keyframes animate_6 {
        50% {
            -ms-transform: translate(40px, -100px) rotate(180deg);
            -webkit-transform: translate(40px, -100px) rotate(180deg);
            transform: translate(40px, -100px) rotate(180deg)
        }
    }

    @keyframes animate_6 {
        50% {
            -ms-transform: translate(40px, -100px) rotate(180deg);
            -webkit-transform: translate(40px, -100px) rotate(180deg);
            transform: translate(40px, -100px) rotate(180deg)
        }
    }

    @-webkit-keyframes animate_7 {
        50% {
            -ms-transform: translate(-80px, -60px) rotate(180deg);
            -webkit-transform: translate(-80px, -60px) rotate(180deg);
            transform: translate(-80px, -60px) rotate(180deg)
        }
    }

    @keyframes animate_7 {
        50% {
            -ms-transform: translate(-80px, -60px) rotate(180deg);
            -webkit-transform: translate(-80px, -60px) rotate(180deg);
            transform: translate(-80px, -60px) rotate(180deg)
        }
    }

    @-webkit-keyframes animate_8 {
        50% {
            -ms-transform: translate(0, -60px) rotate(180deg);
            -webkit-transform: translate(0, -60px) rotate(180deg);
            transform: translate(0, -60px) rotate(180deg)
        }
    }

    @keyframes animate_8 {
        50% {
            -ms-transform: translate(0, -60px) rotate(180deg);
            -webkit-transform: translate(0, -60px) rotate(180deg);
            transform: translate(0, -60px) rotate(180deg)
        }
    }

    @-webkit-keyframes animate_9 {
        50% {
            -ms-transform: translate(80px, -60px) rotate(180deg);
            -webkit-transform: translate(80px, -60px) rotate(180deg);
            transform: translate(80px, -60px) rotate(180deg)
        }
    }

    @keyframes animate_9 {
        50% {
            -ms-transform: translate(80px, -60px) rotate(180deg);
            -webkit-transform: translate(80px, -60px) rotate(180deg);
            transform: translate(80px, -60px) rotate(180deg)
        }
    }

    @-webkit-keyframes animate_10 {
        50% {
            -ms-transform: translate(-100px, -40px) rotate(180deg);
            -webkit-transform: translate(-100px, -40px) rotate(180deg);
            transform: translate(-100px, -40px) rotate(180deg)
        }
    }

    @keyframes animate_10 {
        50% {
            -ms-transform: translate(-100px, -40px) rotate(180deg);
            -webkit-transform: translate(-100px, -40px) rotate(180deg);
            transform: translate(-100px, -40px) rotate(180deg)
        }
    }

    @-webkit-keyframes animate_11 {
        50% {
            -ms-transform: translate(0, -40px) rotate(180deg);
            -webkit-transform: translate(0, -40px) rotate(180deg);
            transform: translate(0, -40px) rotate(180deg)
        }
    }

    @keyframes animate_11 {
        50% {
            -ms-transform: translate(0, -40px) rotate(180deg);
            -webkit-transform: translate(0, -40px) rotate(180deg);
            transform: translate(0, -40px) rotate(180deg)
        }
    }

    @-webkit-keyframes animate_12 {
        50% {
            -ms-transform: translate(100px, -40px) rotate(180deg);
            -webkit-transform: translate(100px, -40px) rotate(180deg);
            transform: translate(100px, -40px) rotate(180deg)
        }
    }

    @keyframes animate_12 {
        50% {
            -ms-transform: translate(100px, -40px) rotate(180deg);
            -webkit-transform: translate(100px, -40px) rotate(180deg);
            transform: translate(100px, -40px) rotate(180deg)
        }
    }

    @-webkit-keyframes animate_13 {
        50% {
            -ms-transform: translate(80px, -80px) rotate(180deg);
            -webkit-transform: translate(80px, -80px) rotate(180deg);
            transform: translate(80px, -80px) rotate(180deg)
        }
    }

    @keyframes animate_13 {
        50% {
            -ms-transform: translate(80px, -80px) rotate(180deg);
            -webkit-transform: translate(80px, -80px) rotate(180deg);
            transform: translate(80px, -80px) rotate(180deg)
        }
    }

    @-webkit-keyframes animate_14 {
        50% {
            -ms-transform: translate(80px, -40px) rotate(180deg);
            -webkit-transform: translate(80px, -40px) rotate(180deg);
            transform: translate(80px, -40px) rotate(180deg)
        }
    }

    @keyframes animate_14 {
        50% {
            -ms-transform: translate(80px, -40px) rotate(180deg);
            -webkit-transform: translate(80px, -40px) rotate(180deg);
            transform: translate(80px, -40px) rotate(180deg)
        }
    }

    @-webkit-keyframes animate_15 {
        50% {
            -ms-transform: translate(-60px, -80px) rotate(180deg);
            -webkit-transform: translate(-60px, -80px) rotate(180deg);
            transform: translate(-60px, -80px) rotate(180deg)
        }
    }

    @keyframes animate_15 {
        50% {
            -ms-transform: translate(-60px, -80px) rotate(180deg);
            -webkit-transform: translate(-60px, -80px) rotate(180deg);
            transform: translate(-60px, -80px) rotate(180deg)
        }
    }

    @-webkit-keyframes animate_16 {
        50% {
            -ms-transform: translate(-100px, -40px) rotate(180deg);
            -webkit-transform: translate(-100px, -40px) rotate(180deg);
            transform: translate(-100px, -40px) rotate(180deg)
        }
    }

    @keyframes animate_16 {
        50% {
            -ms-transform: translate(-100px, -40px) rotate(180deg);
            -webkit-transform: translate(-100px, -40px) rotate(180deg);
            transform: translate(-100px, -40px) rotate(180deg)
        }
    }

    @-webkit-keyframes animate_17 {
        50% {
            -ms-transform: translate(-100px, -20px) rotate(180deg);
            -webkit-transform: translate(-100px, -20px) rotate(180deg);
            transform: translate(-100px, -20px) rotate(180deg)
        }
    }

    @keyframes animate_17 {
        50% {
            -ms-transform: translate(-100px, -20px) rotate(180deg);
            -webkit-transform: translate(-100px, -20px) rotate(180deg);
            transform: translate(-100px, -20px) rotate(180deg)
        }
    }

    @-webkit-keyframes animate_18 {
        50% {
            -ms-transform: translate(-60px, -20px) rotate(180deg);
            -webkit-transform: translate(-60px, -20px) rotate(180deg);
            transform: translate(-60px, -20px) rotate(180deg)
        }
    }

    @keyframes animate_18 {
        50% {
            -ms-transform: translate(-60px, -20px) rotate(180deg);
            -webkit-transform: translate(-60px, -20px) rotate(180deg);
            transform: translate(-60px, -20px) rotate(180deg)
        }
    }

    @-webkit-keyframes animate_19 {
        50% {
            -ms-transform: translate(0, -20px) rotate(180deg);
            -webkit-transform: translate(0, -20px) rotate(180deg);
            transform: translate(0, -20px) rotate(180deg)
        }
    }

    @keyframes animate_19 {
        50% {
            -ms-transform: translate(0, -20px) rotate(180deg);
            -webkit-transform: translate(0, -20px) rotate(180deg);
            transform: translate(0, -20px) rotate(180deg)
        }
    }

    @-webkit-keyframes animate_20 {
        50% {
            -ms-transform: translate(60px, -20px) rotate(180deg);
            -webkit-transform: translate(60px, -20px) rotate(180deg);
            transform: translate(60px, -20px) rotate(180deg)
        }
    }

    @keyframes animate_20 {
        50% {
            -ms-transform: translate(60px, -20px) rotate(180deg);
            -webkit-transform: translate(60px, -20px) rotate(180deg);
            transform: translate(60px, -20px) rotate(180deg)
        }
    }

    @-webkit-keyframes animate_21 {
        50% {
            -ms-transform: translate(-80px, 30px) rotate(180deg);
            -webkit-transform: translate(-80px, 30px) rotate(180deg);
            transform: translate(-80px, 30px) rotate(180deg)
        }
    }

    @keyframes animate_21 {
        50% {
            -ms-transform: translate(-80px, 30px) rotate(180deg);
            -webkit-transform: translate(-80px, 30px) rotate(180deg);
            transform: translate(-80px, 30px) rotate(180deg)
        }
    }

    @-webkit-keyframes animate_22 {
        50% {
            -ms-transform: translate(-40px, 30px) rotate(180deg);
            -webkit-transform: translate(-40px, 30px) rotate(180deg);
            transform: translate(-40px, 30px) rotate(180deg)
        }
    }

    @keyframes animate_22 {
        50% {
            -ms-transform: translate(-40px, 30px) rotate(180deg);
            -webkit-transform: translate(-40px, 30px) rotate(180deg);
            transform: translate(-40px, 30px) rotate(180deg)
        }
    }

    @-webkit-keyframes animate_23 {
        50% {
            -ms-transform: translate(0, 30px) rotate(180deg);
            -webkit-transform: translate(0, 30px) rotate(180deg);
            transform: translate(0, 30px) rotate(180deg)
        }
    }

    @keyframes animate_23 {
        50% {
            -ms-transform: translate(0, 30px) rotate(180deg);
            -webkit-transform: translate(0, 30px) rotate(180deg);
            transform: translate(0, 30px) rotate(180deg)
        }
    }

    @-webkit-keyframes animate_24 {
        50% {
            -ms-transform: translate(40px, 30px) rotate(180deg);
            -webkit-transform: translate(40px, 30px) rotate(180deg);
            transform: translate(40px, 30px) rotate(180deg)
        }
    }

    @keyframes animate_24 {
        50% {
            -ms-transform: translate(40px, 30px) rotate(180deg);
            -webkit-transform: translate(40px, 30px) rotate(180deg);
            transform: translate(40px, 30px) rotate(180deg)
        }
    }

    @-webkit-keyframes animate_25 {
        50% {
            -ms-transform: translate(80px, 30px) rotate(180deg);
            -webkit-transform: translate(80px, 30px) rotate(180deg);
            transform: translate(80px, 30px) rotate(180deg)
        }
    }

    @keyframes animate_25 {
        50% {
            -ms-transform: translate(80px, 30px) rotate(180deg);
            -webkit-transform: translate(80px, 30px) rotate(180deg);
            transform: translate(80px, 30px) rotate(180deg)
        }
    }
</style>
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                2020 - 2025 © All rights reserved - 武夷山晴玖天网络科技有限公司
            </div>
            <div class="col-md-6">
                <div class="text-md-right footer-links d-none d-md-block">
                    <a href="https://cdn.79tian.com/api/wxapi/view/flock.php" class="group" target="_blank">官方交流群</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- 应用全局悬浮 -->
<div id="Hover" style="display: none">
    <div class="Hover" v-if="List.length>=1">
        <div class="HoverIcon mdui-ripple" title="展开" @click="switchs()">
            <img src="../assets/img/apps.png" style="width: 2.5rem;height: 2.5rem;"/>
        </div>
        <div v-if="state===true" class="HoverRight mdui-ripple">
            <div class="layui-row layui-col-space8">
                <div class="layui-col-xs4 HoverApp" v-for="item in List" :title="item.name"
                     @click="Open(item.id,item.name)">
                    <img :src="item.image" style="width: 2.2em;height: 2.2em;border-radius: 0.5rem;margin-top: 0.2em;"/>
                    <div class="layui-elip" style="font-size: 0.5rem;width: 100%;margin: auto;margin-top: 0.2em;">
                        {{ item.name }}
                    </div>
                </div>
            </div>
        </div>
        <div v-if="state===true" class="HoverRightS"></div>
    </div>
</div>
<script src="../assets/js/app.min.js"></script>
<script src="../assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
<script src="../assets/layui/layui.all.js"></script>
<script src="../assets/js/vue.js"></script>
<script src="../assets/mdui/js/mdui.min.js"></script>
<script src="../assets/js/pages/demo.dashboard.js"></script>
<link href="../assets/admin/css/Global.css?vs=<?= $accredit['versions'] ?>" rel="stylesheet" type="text/css"/>
<?php if (!empty($_SESSION['ADMIN_TOKEN'])) { ?>
    <script src="../assets/admin/js/Global.js?vs=<?= $accredit['versions'] ?>"></script>
<?php } ?>
<script>
    window.onload = function () {
        let loading = document.getElementById('loading');
        let jis = 100;
        for (let i = jis; i >= 0; i--) {
            setTimeout(function () {
                let sum = loading.style.opacity - 0;
                if (sum > 0.5) {
                    loading.style.opacity = '' + i / 100 + '';
                } else {
                    loading.style.display = 'none';
                }
            }, 5 * (jis - i));
        }
    }
</script>