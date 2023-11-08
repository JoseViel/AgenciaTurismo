<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <title>Cadastro Cliente</title>
</head>
<body class="body-login">
    <div class="form-container">
        <div class="form-screen">
            <div class="form-screen__content">
                <form class="form-login" action="insCliente.php" method="POST">
                    <div class="form-login__field">
                        <i class="form-login__icon fas fa-user"></i>
                            <input type="text" class="form-login__input" name="nome" id="nome" placeholder="Nome" required>
                    </div>
                    <div class="form-login__field">
                        <i class="form-login__icon fa-solid fa-address-card"></i>
                            <input type="cpf" class="form-login__input" name="cpf" id="cpf" placeholder="CPF" required>
                    </div>
                    <div class="form-login__field">
                        <i class="form-login__icon fa-solid fa-envelope"></i>
                            <input type="email" class="form-login__input" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="form-login__field">
                        <i class="form-login__icon fa-solid fa-phone"></i>
                            <input type="phone" class="form-login__input" name="telefone" id="telefone" placeholder="Telefone" required>
                    </div>
                    <div class="form-login__field">
                        <i class="form-login__icon fas fa-location-dot"></i>
                            <input type="endereco" class="form-login__input" name="endereco" id="endereco" placeholder="Endereço" required>
                    </div>
                    <button class="form-button form-login__submit" type="submit" name="submit" id="submit">
                        <span class="form-button__text">Cadastrar</span>
                        <i class="form-button__icon fas fa-chevron-right"></i>
                    </button>
                </form>
                
            </div>
            <div class="form-screen__background">
                <span class="form-screen__background__shape form-screen__background__shape4"></span>
                <span class="form-screen__background__shape form-screen__background__shape3"></span>
                <span class="form-screen__background__shape form-screen__background__shape2"></span>
                <span class="form-screen__background__shape form-screen__background__shape1"></span>
            </div>
        </div>
    </div>
    
</body>
</html>