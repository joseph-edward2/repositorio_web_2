<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contactus - Criar Conta</title>
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

    .logo {
      width: 100px;
      height: 100px;
      background: radial-gradient(circle at top left, #ff0080, #ff8c00);
      border-radius: 50%;
      margin: 20px auto;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .logo-icon {
      font-size: 48px;
      color: white;
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
</style>
</head>
<body>
          <input type="text" name="usuario" placeholder="Como devemos chamá-lo?" />
          <input type="password" name="senha" placeholder="Crie uma senha"/>
          <input type="password" name="senha" placeholder="Confirmar senha"/>
</body>


</html>