<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contactus - Login</title>
  <style>
    body {
      margin: 0;
      font-family: ;
      background-color:rgb(24, 24, 24);
      color: white;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .container {
      text-align: center;
      padding: 20px;
      width: 90%;
      max-width: 400px;
    }

  
    .logo-icon {
      font-size: 48px;
      color: white;
      display : block;
    }

    h1 {
      margin: 10px 0;
    }

    form {
      margin-top: 20px;
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    input[type="text"],
    input[type="password"] {
	  background-color: rgb(46, 46, 46);
      padding: 10px;
      border-radius: 8px;
      border: none;
      width: 100%;
      color: rgb(255, 255, 255);
    }

    input[type="submit"] {
      background-color: rgb(46, 46, 46);
      color: rgb(170, 170, 170);
      border: none;
      padding: 12px;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #ddd;
    }

    .checkbox-container {
      display: flex;
      align-items: center;
      font-size: 14px;
    }

    .checkbox-container input {
      margin-right: 8px;
    }

    .alert {
      background-color: #ff4d4d;
      color: white;
      padding: 10px;
      border-radius: 6px;
      margin-top: 15px;
    }

    .terms {
      margin-top: 20px;
      font-size: 12px;
      color: #aaa;
    }

    .terms a {
      color: white;
      text-decoration: underline;
    }

    .princi {
      
    }
    img{
      width:190px

    }
  </style>
</head>
<body>
  <main class="container">
    <h1>Contactus</h1>
    <div class="logo">
      <span class="logo-icon"><img src='logo.png' ></span>
    </div>

    <section class = "princi">
      <h2>Login</h2>
      <p>Insira seu Telefone</p>
      
      <form method="post" action="login.php">
        <input type="text" name="usuario" placeholder="Nome do usuário" />
        <input type="password" name="senha" placeholder="Senha" />
        
        <div class="checkbox-container">
          <input type="checkbox" id="termos" />
          <label for="termos">Concordo com os termos de uso e privacidade</label>
        </div>
        
        <input type="submit" value="Continue" />
      </form>
      <div class="terms"> Não tem uma conta? <a href="singup.php">Criar</a></div>
      <div class="terms">
        Ao clicar em continuar, você concorda com nossos <a href="#">Termos de Serviço</a> e <a href="#">Política de Privacidade</a>.
      </div>
      
      <?php if (isset($_GET['erro'])){ ?>
        <div class="alert" role="alert">
          Usuário e/ou senha inválido(s).
        </div>
        <?php } ?>
      </div>
    </section>
    </body>
    </html>
