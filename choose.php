<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="style-dashaboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose</title>

    <style>
        body {
            background-image: url('img/visto.avif');
        }
        .area-login{
            display: flex;
            height: 85vh;
            justify-content: center;
            align-items: center;
        }
        .choose{
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #575656;
            width: 360px;
            height: 280px;
            padding: 35px;
            border-radius: 10px;
        }

        .choose form{
            display:flex;
            width: 80%;
            flex-direction: column;
        }

        p{
            color: #cbd0f7;    
        }

        a{
            color: #5568fe;
            text-decoration: none;
            margin-left: 5px;
        }
    </style>
</head>
<body>
        <div class="logo_header">
            <a> </a>
        </div>
        <div class="navigation_header" id="navigation_header">
            <button onclick="toggleSidebar()" class="btn_icon_header">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </button>
            <a href="#" class="active">Home</a>
            <a href="#">Cursos</a>
            <a href="#">Sobre nós</a>
            <a href="#">Contato</a>
        </div>
    <section class="area-login">
        <div class="choose">
            <p style="font-weight: bold;
            color: rgb(199, 162, 58);">
            ESCOLHA A AÇÃO DESEJADA:</p>
            <form method="POST">
                <a style="margin-top: 12px;
                    background-color: rgb(107, 107, 100);
                    border-radius: 8px;
                    color: rgb(199, 162, 58);
                    padding-left: 40%;
                    padding-top: 15px;
                    height: 35px;
                    font-weight: bold;" href="dashboardCadastro.php">Cadastros</a>
                <a style="margin-top: 12px;
                    background-color: rgb(107, 107, 100);
                    border-radius: 8px;
                    color: rgb(199, 162, 58);
                    padding-left: 40%;
                    padding-top: 15px;
                    height: 35px;
                    font-weight: bold;" href="dashboardRelatorio.php">Relatórios</a>
                <a style="margin-top: 12px;
                    background-color: rgb(107, 107, 100);
                    border-radius: 8px;
                    color: rgb(199, 162, 58);
                    padding-left: 42%;
                    padding-top: 15px;
                    height: 35px;
                    font-weight: bold;" href="logout.php">Logout</a>
            </form>
        </div>
    </section>
</body>

<script>
    var header           = document.getElementById('header');
    var navigationHeader = document.getElementById('navigation_header');
    var content          = document.getElementById('content');
    var showSidebar      = false;

    function toggleSidebar()
    {
        showSidebar = !showSidebar;
        if(showSidebar)
        {
            navigationHeader.style.marginLeft = '-10vw';
            navigationHeader.style.animationName = 'showSidebar';
            content.style.filter = 'blur(2px)';
        }
        else
        {
            navigationHeader.style.marginLeft = '-100vw';
            navigationHeader.style.animationName = '';
            content.style.filter = '';
        }
    }

    function closeSidebar()
    {
        if(showSidebar)
        {
            showSidebar = true;
            toggleSidebar();
        }
    }

    window.addEventListener('resize', function(event) {
        if(window.innerWidth > 768 && showSidebar) 
        {  
            showSidebar = true;
            toggleSidebar();
        }
    });

</script>

</html>