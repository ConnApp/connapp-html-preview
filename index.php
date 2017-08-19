<!DOCTYPE html>
<html>
    <?php include 'head.php'; ?>

    <body class="body">

        <div class="logo">
            <img src="img/logo2.png" alt="">
        </div>

        <div class="bg">
            <div class="layer"></div>
        </div>

        <script type="text/javascript">
            window.setTimeout(function () {
                location.href = "loading.php";
            }, 5000);
        </script>

    </body>
</html>

<style>
    *{
        box-sizing: border-box;
    }

    .body{
        position: relative;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        min-height: 100vh;
    }

    .logo{
        position: absolute;
        top: 40%;
        width: 100%;
        z-index: 10;
    }

    .logo img{
        margin-left: auto;
        display: block;
        margin-right: auto;
        height: auto;
        width: 60vw;
    }

    .bg{
        z-index: 0;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-image: url("img/joinville.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }

    .layer{
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(62, 168, 244, .8);
    }
</style>
