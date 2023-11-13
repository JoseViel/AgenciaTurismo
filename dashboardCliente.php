<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style-cliente.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Dashboard</title>
</head>
<style>
    body {
    margin: 0px;
    padding: 0px;
    font-family: 'Poppins', sans-serif;
    background-image: url('img/paisagem0123.jpg');
    background-repeat: none;
    background-position: center 0;
    background-size: auto;
}
</style>
<body>
    <div class="header" id="header">
        <button onclick="toggleSidebar()" class="btn_icon_header">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </button>
        <div class="logo_header">
            <img src="img/aviao-logo.png" alt="Logo Avião" class="img_logo_header">
        </div>
        <div class="navigation_header" id="navigation_header">
            <button onclick="toggleSidebar()" class="btn_icon_header">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </button>
            <a href="dashboardCliente.php" class="active">Home</a>
            <a href="quemsomos.php">Sobre nós</a>
            <a href="#">Contato</a>
        </div>
    </div>
    <div class="container-wrapper">
        <div class="container">
            <div class="input-wrapper">
                <div class="input-wrapper">
                    <input type="text" class="form-login__input" placeholder="Destino">
                </div>
                <div class="input-wrapper">
                    <input type="date" class="form-login__input" placeholder="Data">
                </div>
                <div class="input-wrapper">
                    <input type="text" class="form-login__input" placeholder="Quantidade de Pessoas">
                </div>
                <div class="input-wrapper">
                    <i class="fa-solid fa-search"></i>
                </div>
            </div>
        </div>
    </div>
    
    <section id="dashboard">
        <div class="dashboard-heading">
            <h3>DESTINOS MAIS ESCOLHIDOS, APROVEITE!</h3>
        </div>
        <div class="dashboard-container">
            <div class="dashboard-box">
                <div class="dashboard-img">
                    <img src="img/caribe.jfif" alt="Caribe">
                </div>
                <div class="dashboard-text">
                    <span>Caribe / Viaje e tenha as melhores experiências</span>
                    <a href="#" class="dashboard-title">Embarque nessa aventura e conhaça um dos lugares mais lindos do mundo!</a>
                    <p>R$299,00</p>
                    <a href="#">Mais Informações</a>
                </div>
            </div>
            <div class="dashboard-container">
                <div class="dashboard-box">
                    <div class="dashboard-img">
                        <img src="img/nova-york.webp" alt="Destino">
                    </div>
                    <div class="dashboard-text">
                        <span>Nova York / Viaje e tenha as melhores experiências</span>
                        <a href="#" class="dashboard-title">Embarque nessa aventura e conhaça um dos lugares mais lindos do mundo!</a>
                        <p>R$299,00</p>
                        <a href="#">Mais Informações</a>
                    </div>
                </div>
            </div>
            <div class="dashboard-container">
                <div class="dashboard-box">
                    <div class="dashboard-img">
                        <img src="img/suica.webp" alt="Destino">
                    </div>
                    <div class="dashboard-text">
                        <span>Suíça / Viaje e tenha as melhores experiências</span>
                        <a href="#" class="dashboard-title">Embarque nessa aventura e conhaça um dos lugares mais lindos do mundo!</a>
                        <p>R$299,00</p>
                        <a href="#">Mais Informações</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------------------------------------> 
    <section id="dashboard">
        <div class="dashboard-heading">
        <h3 color="white">MAIS VENDIDOS</h3>
        <h3>__________________________________________________</h3>
        </div>
        <div class="dashboard-container">
            <div class="dashboard-box">
                <div class="dashboard-img">
                    <img src="img/quartoteste.jpg" alt="Quarto">
                </div>
                <div class="dashboard-text">
                    <span>Viaje e tenha as melhores experiências</span>
                    <a href="#" class="dashboard-title">Embarque nessa aventura e conhaça um dos lugares mais lindos do mundo!</a>
                    <p>R$299,00</p>
                    <a href="#">Mais Informações</a>
                </div>
            </div>
            <div class="dashboard-container">
                <div class="dashboard-box">
                    <div class="dashboard-img">
                        <img src="img/quarto4.jfif" alt="Quarto">
                    </div>
                    <div class="dashboard-text">
                        <span>Viaje e tenha as melhores experiências</span>
                        <a href="#" class="dashboard-title">Embarque nessa aventura e conhaça um dos lugares mais lindos do mundo!</a>
                        <p>R$299,00</p>
                        <a href="#">Mais Informações</a>
                    </div>
                </div>
            </div>
            <div class="dashboard-container">
                <div class="dashboard-box">
                    <div class="dashboard-img">
                        <img src="img/chale-quarto.jpg" alt="Quarto">
                    </div>
                    <div class="dashboard-text">
                        <span>Viaje e tenha as melhores experiências</span>
                        <a href="#" class="dashboard-title">Embarque nessa aventura e conhaça um dos lugares mais lindos do mundo!</a>
                        <p>R$299,00</p>
                        <a href="#">Mais Informações</a>
                    </div>
                </div>
            </div>
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