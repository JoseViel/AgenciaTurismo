<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style-cliente.css">
    <title>Quem Somos - Agência de Turismo</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('img/egito.jfif');
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        section {
            max-width: 800px;
            margin: 2em auto;
            padding: 2em;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            color: white;
        }

        h2 {
            color: #333;
        }

        p {
            line-height: 1.6;
            color: #666;
        }

        img {
            max-width: 100%;
            height: 170px;
            border-radius: 8px;
            margin-top: 1em;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <div class="header" id="header">
        <button onclick="toggleSidebar()" class="btn_icon_header">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </button>
        <div class="logo_header">
            <h1>Viel Turismo</h1>
        </div>
        <div class="navigation_header" id="navigation_header">
            <button onclick="toggleSidebar()" class="btn_icon_header">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </button>
            <a href="dashboardCliente.php">Home</a>
            <a href="quemsomos.php" class="active">Sobre nós</a>
            <a href="#">Contato</a>
        </div>
    </div>

    <section>
        <h2>Quem Somos</h2>
        <p>Somos uma agência de turismo dedicada a proporcionar experiências incríveis aos nossos clientes. Com anos de experiência no setor, nossa equipe está comprometida em tornar cada viagem uma memória inesquecível.</p>
        
        <p>Nossos serviços incluem pacotes de viagens personalizados, reservas de hotéis, transporte e muito mais. Trabalhamos para garantir que cada detalhe seja cuidadosamente planejado, proporcionando aos nossos clientes uma jornada tranquila e enriquecedora.</p>

        <img src="img/roma.jfif" alt="Agência de Turismo">
        <img src="img/grecia.jfif" alt="Agência de Turismo">
        <img src="img/japao.jfif" alt="Agência de Turismo">

        <p>Descubra o mundo conosco e deixe-nos transformar seus sonhos de viagem em realidade.</p>
    </section>

    <footer>
        &copy; 2023 Agência de Turismo. Todos os direitos reservados.
    </footer>

</body>
</html>
