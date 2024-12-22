
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Protegida</title>
  <!-- Link para o Firebase -->
  <script src="https://www.gstatic.com/firebasejs/9.17.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/9.17.1/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/9.17.1/firebase-firestore.js"></script>

  <style>
    body {
      background-color: #000; /* Fundo preto */
      color: #fff; /* Texto branco */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: Arial, sans-serif;
      margin: 0;
    }
    .container {
      background-color: #2c3e50; /* Fundo verde escuro */
      padding: 40px;
      border-radius: 10px;
      border: 3px solid #27ae60; /* Borda verde */
      text-align: center;
      width: 80%;
      max-width: 800px;
    }
    h1 {
      font-size: 2.5rem;
      margin-bottom: 20px;
    }
    p {
      font-size: 1.2rem;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Conteúdo Premium</h1>
    <p>Bem-vindo à página exclusiva para membros com assinatura ativa!</p>
  </div>

  <!-- Adiciona o script do Firebase e o código de autenticação -->
  <script>
    // Configuração do Firebase
    const firebaseConfig = {
      apiKey: "AIzaSyAO3As6jMMmENtzaK9zlDADbpS9UlNxx8o", // Sua API Key
      authDomain: "mac-projeto-4e552.firebaseapp.com", // Seu Auth Domain
      projectId: "mac-projeto-4e552", // Seu Project ID
      storageBucket: "mac-projeto-4e552.appspot.com", // Seu Storage Bucket
      messagingSenderId: "537330451519", // Seu Sender ID
      appId: "1:537330451519:web:5a1b4c921119b5ee98e48a" // Seu App ID
    };

    // Inicializa o Firebase
    const app = firebase.initializeApp(firebaseConfig);
    const auth = firebase.auth();

    // Verifica se o usuário está autenticado
    auth.onAuthStateChanged((user) => {
      if (!user) {
        // Se o usuário não estiver autenticado, redireciona para a página de login
        window.location.href = 'login.html'; 
      }
    });
  </script>

</body>
</html>

