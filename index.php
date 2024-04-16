<?php
  $GetUserIP = $_SERVER['REMOTE_ADDR'];
?>

<html>
  <body>
    <label for="language">Languages :</label>
    <select id="language" onchange="changeLanguage(this.value)">
        <option value="fr">Français</option>
        <option value="en">English</option>
        <option value="jp">日本語</option>
    </select>
    <p id="text" data-translate="text">hello !</p>
  </body>

  <script>
    const translations = {
            "fr": {
                "text": "Bonjour !",
            },
            "en": {
                "text": "Hello !",
            },
            "jp": {
                "text": "こんにちは",
            }
        };

        function changeLanguage(language) {
            const elements = document.querySelectorAll('[data-translate]');
            elements.forEach(element => {
                const key = element.getAttribute('data-translate');
                element.textContent = translations[language][key];
            });
        }
  </script>
</html>
