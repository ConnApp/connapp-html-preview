<!DOCTYPE html>
<html>
    <?php include 'head.php'; ?>

    <body class="body">

        <header>
            <div class="navbar-1">
                <div class="leftBtn">
                    <i class="material-icons">arrow_back</i>
                </div>

                <div class="logo">
                    <img src="img/logo2.png" alt="">
                </div>

                <div class="rightBtn">
                    <i class="material-icons">search</i>
                </div>
            </div>

            <div class="navbar-2">
                <div class="wrapper">
                    <div class="">
                        <span>10 de Ago</span>
                        <span>11 de Ago</span>
                        <span>12 de Ago</span>
                    </div>
                    <div class="grandient"></div>
                </div>
            </div>
        </header>

        <section>
            <div class="">

            </div>
        </section>

        <script type="text/javascript">
            window.setTimeout(function () {
                location.href = "programacao.php";
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
        background-color: #2196F3;
    }

    header{
        left: 0;
        right: 0;
        background-color: #2196F3;
        height: 25vh;
        position: relative;
        display: block;
    }

    .leftBtn{
        float: left;
    }

    .rightBtn{
        float: left;
    }

    .logo{
        float: left;
        position: relative;
    }

    .logo img{
        margin-left: auto;
        display: block;
        margin-right: auto;
        height: auto;
        width: 60vw;
    }

    section{
        height: 15vh;
        left: 0;
        right: 0;
        padding-top: 1px;
    }

    .btn{
        border: 0;
        width: 100%;
        background-color: #64B9F6;
        position: relative;
        display: block;
        height: 100%;
        color: #FFF;
        font-family: 'Petita Bold', sans-serif;
        text-transform: uppercase;
        font-size: 1.1em;
    }

    .text-center{
        text-align: center;
    }

    .text-left{
        text-align: left;
    }

    .text-right{
        text-align: right;
    }

</style>
