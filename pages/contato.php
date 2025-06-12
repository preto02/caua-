<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Contato</title>
  <style>
    .form-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f9f9f9;
    }
    .form-container label, .form-container input, .form-container textarea {
      display: block;
      margin-bottom: 10px;
    }
    .form-container input, .form-container textarea {
      width: calc(100% - 20px);
      padding: 8px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    .form-container input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
    .form-container input[type="submit"]:hover {
      background-color: #45a049;
    }
    .error-message {
      color: red;
      font-size: 12px;
    }
  </style>
</head>
<body>

<div class="form-container">
  <h2>Entre em Contato</h2>
  <form id="contactForm" action="javascript:void(0);" onsubmit="validateForm()">
    <label for="fname">Nome:</label>
    <input type="text" id="fname" name="fname" required>

    <label for="lname">Sobrenome:</label>
    <input type="text" id="lname" name="lname" required>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required>

    <label for="phone">Telefone:</label>
    <input type="tel" id="phone" name="phone" required>

    <label for="message">Mensagem:</label>
    <textarea id="message" name="message" rows="4" required></textarea>

    <input type="submit" value="Enviar">
  </form>
</div>

<script>
  function validateForm() {
    let form = document.getElementById('contactForm');
    let fname = form['fname'].value.trim();
    let lname = form['lname'].value.trim();
    let email = form['email'].value.trim();
    let phone = form['phone'].value.trim();
    let message = form['message'].value.trim();

    if (fname === '' || lname === '' || email === '' || phone === '' || message === '') {
      alert('Por favor, preencha todos os campos.');
      return false;
    }

    // Redirecionamento para o WhatsApp
    let whatsappURL = `https://wa.me/SEUNUMERODOWHATSAPP/?text=${encodeURIComponent(message)}`;
    window.location.href = whatsappURL;
  }
</script>

</body>
</html>