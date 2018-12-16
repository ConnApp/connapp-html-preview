<!DOCTYPE html>
<html>
    <?php include '../components/head.php'; ?>

    <body class="body">

        <header>
            <div class="logo">
                <img src="img/logo2.png" alt="">
            </div>
        </header>

        <section>
            <button class="btn">
                Programação<a href="programacao.php">></a>
            </button>
        </section>

        <section>
            <button class="btn">
                Agenda<a href="agenda.php">></a>
            </button>
        </section>

        <section>
            <button class="btn">
                Informações<a href="informacoes.php">></a>
            </button>
        </section>

        <section>
            <button class="btn">
                Notícias<a href="noticias.php">></a>
            </button>
        </section>

        <section>
            <button class="btn">
                Notas<a href="notas.php">></a>
            </button>
        </section>

        <script type="text/javascript">
            window.setTimeout(function () {
                location.href = "mainMenu.php";
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
    }

    .logo{
        position: relative;
        top: 35%;
        width: 100%;
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
