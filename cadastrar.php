

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mac Point</title>
  <style>
    body {
      background-color: black;
      color: white;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .container {
      width: 90%;
      max-width: 400px;
      background-color: #013220;
      border: 3px solid #00ff00;
      border-radius: 10px;
      padding: 20px;
      box-sizing: border-box;
      text-align: center;
    }
    input, button {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #00ff00;
      border-radius: 5px;
      box-sizing: border-box;
    }
    button {
      background-color: #00ff00;
      color: black;
      font-weight: bold;
      cursor: pointer;
    }
    button:hover {
      background-color: white;
      color: #013220;
    }
    #mensagem {
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Cadastro no Mac Point</h1>
    <input type="text" id="nome" placeholder="Digite seu nome" required>
    <input type="email" id="email" placeholder="Digite seu email" required>
    <input type="password" id="senha" placeholder="Digite sua senha" required>
    <button onclick="cadastrar()">Cadastrar</button>
    <p id="mensagem"></p>
  </div>

  <!-- Firebase SDK -->
  <script src="https://www.gstatic.com/firebasejs/9.19.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/9.19.1/firebase-firestore.js"></script>
  <script>
    const firebaseConfig = {
      apiKey: "AIzaSyAO3As6jMMmENtzaK9zlDADbpS9UlNxx8o",
      authDomain: "mac-projeto-4e552.firebaseapp.com",
      projectId: "mac-projeto-4e552",
      storageBucket: "mac-projeto-4e552.appspot.com",
      messagingSenderId: "537330451519",
      appId: "1:537330451519:web:5a1b4c921119b5ee98e48a"
    };

    const app = firebase.initializeApp(firebaseConfig);
    const db = firebase.firestore();

    function cadastrar() {
      const nome = document.getElementById("nome").value;
      const email = document.getElementById("email").value;
      const senha = document.getElementById("senha").value;

      db.collection("usuarios").add({
        nome: nome,
        email: email,
        senha: senha,
        status: "Bloqueado"
      })
      .then(() => {
        document.getElementById("mensagem").innerText = "Cadastro realizado com sucesso!";
      })
      .catch((error) => {
        document.getElementById("mensagem").innerText = "Erro ao cadastrar: " + error.message;
      });
    }
  </script>
</body>
</html>


