<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Результаты поиска</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="search-container">
        <form action="result.php" method="GET">
            <input type="text" name="query" placeholder="Введите запрос" value="<?php echo $_GET['query']; ?>">
            <button type="submit">Поиск</button>
        </form>
    </div>
    
    <div class="image-gallery">
        <div class="image-card">
            <img src="image1.jpg" alt="Картинка 1" onclick="toggleImage(this)">
        </div>
        <div class="image-card">
            <img src="image2.jpg" alt="Картинка 2" onclick="toggleImage(this)">
        </div>
        <div class="image-card">
            <img src="image3.jpg" alt="Картинка 3" onclick="toggleImage(this)">
        </div>
    </div>
    
    <script>
        function toggleImage(image) {
            image.classList.toggle("fullscreen");
        }
    </script>
</body>
</html>