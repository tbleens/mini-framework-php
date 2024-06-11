<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <header class="header">
        <main class="main">
            <a href="#" class="logo">Logo</a>

            <ul>
                <li><a href="#">Accueil</li>
                <li><a href="#features">Fonctionnalités</a></li>
                <li><a href="#">A propos</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </main>

        <div class="content-header">
            <div>
                <h1>Bienvenue sur le mini framework php</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt ea quod, laudantium qui expedita ut consectetur, accusantium dolore aspernatur error aliquid nam velit in? Iure odio itaque provident quam eum?</p>
                <button type="button" class="discover">Découvrir</button>
            </div>
        </div>

    </header>

    <section id="features" class="container">
        <h2>Nos fonctionnalités</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio modi at magnam! Dolore consequuntur perferendis autem cupiditate eius atque ullam, aperiam excepturi quae nulla tempore ipsa, totam, rerum nemo pariatur.</p>
        <div class="row r-3">
            <div class="card">
                <div class="card-title">Gestion des routes</div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt ea quod.</p>
            </div>
            <div class="card">
                <div class="card-title">Gestions des vues</div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt ea quod.</p>
            </div>
            <div class="card">
                <div class="card-title">Controlleurs</div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt ea quod.</p>
            </div>
            <div class="card">
                <div class="card-title">Models & Database</div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt ea quod.</p>
            </div>
            <div class="card">
                <div class="card-title">Config database</div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt ea quod.</p>
            </div>
            <div class="card">
                <div class="card-title">Optimise the public assets</div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt ea quod.</p>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="public/js/main.js"></script>
</body>
</html>