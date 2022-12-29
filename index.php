<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- meta tags facebook open graph -->
    <meta property="og:title" content="Lugares onde quero viajar!">
    <meta property="og:site_name" content="Minhas futuras viagens">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">
    <!-- meta tags de imagens -->
    <meta property="og:image" content="https://res.cloudinary.com/dlsuopwkn/image/upload/v1671675718/preikestolen.jpg">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:alt" content="Preikestolen">
    <meta property="og:image:width" content="250">
    <meta property="og:image:height" content="250">
    <!--  tags de meta, título da pág, logo da pág e arquivo css -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Guilherme Crispim - Site de lugares onde quero viajar usando HTML, CSS e JS">
    <title>Minhas futuras viagens</title>
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="icon" href="https://res.cloudinary.com/dlsuopwkn/image/upload/v1671721450/logo_feecor.png">
</head>
<body>
    <header>
        <div class="container_header">
            <a href="#section1"><img class="logo_img" src="https://res.cloudinary.com/dlsuopwkn/image/upload/v1671721545/umjovemincentivandojovens.png" alt="logo"></a>
            <ul class="countries">
                <li>Noruega</li>
                <li>Brasil</li>
                <li>Austrália</li>
                <li>Islândia</li>
                <li>Canadá</li>
            </ul>
        </div>
    </header>
    <section id="section0">
        <h1>Apresentação</h1>
    </section>
    <section id="section1">
        <div class="container">
            <div class="card">
                <div class="imgBox">
                    <img src="https://res.cloudinary.com/dlsuopwkn/image/upload/c_scale,h_3264,w_4928/v1671675718/preikestolen.jpg" alt="preikestolen">
                </div>
                <div class="content">
                    <h2>Preikestolen</h2>
                    <p>Também é conhecida como Pulpit Rock, Preikestolen é uma falésia de 604 metros de desnível que se ergue sobre o Fiorde de Lyse, em frente ao platô Kjerag, em Forsand, no sudoeste da Noruega.</p>
                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="https://res.cloudinary.com/dlsuopwkn/image/upload/v1672024200/Trolltunga.jpg" alt="trolltunga">
                </div>
                <div class="content">
                    <h2>Trolltunga</h2>
                    <p>Trolltunga é uma rocha horizontal esticada a 700 metros de altura, no sudoeste da Noruega. O nome significa Língua do Troll, pela semelhança da rocha com uma língua estendida.</p>

                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="https://res.cloudinary.com/dlsuopwkn/image/upload/c_scale,h_3264,w_4928/v1672024199/tromso.jpg" alt="Tromsø">
                </div>
                <div class="content">
                    <h2>Tromsø</h2>
                    <p>Tromsø, a linda cidade de incríveis fenômenos da natureza como a Aurora Boreal e do sol da meia-noite, é a maior cidade do norte da Noruega e está localizada no lado leste da ilha de Tromsøya</p>
                </div>
            </div>

            <div class="card">
                <div class="imgBox">
                    <img src="https://res.cloudinary.com/dlsuopwkn/image/upload/c_scale,h_3264,w_4928/v1672024197/kjeragbolten.jpg" alt="kjeragbolten">
                </div>
                <div class="content">
                    <h2>Kjeragbolten</h2>
                    <p>Kjeragbolten é uma rocha de 5 m³, presa em uma fenda das montanhas Kjerag, conhecida por trilhas e escaladas, a 1.084 metros acima do fiorde Lysefjorden, localizada no sul da Noruega.</p>
                </div>
            </div>

            <div class="card">
                <div class="imgBox">
                    <img src="https://res.cloudinary.com/dlsuopwkn/image/upload/c_scale,h_3264,w_4928/v1672024309/Atlanterhavsvegen.jpg" alt="Atlanterhavsvegen">
                </div>
                <div class="content">
                    <h2>Atlanterhavsvegen</h2>
                    <p>Atlanterhavsvegen, a Estrada do Atlântico, é uma experiência única que fica no Norte da Noruega com pontes que se arqueiam entre as ilhotas e recifes ao longo da áspera Baía de Hustadvika.</p>
                </div>
            </div>

            <div class="card">
                <div class="imgBox">
                    <img src="https://res.cloudinary.com/dlsuopwkn/image/upload/v1672321549/lofoten_soccerfield.png" alt="Lofoten Islands">
                </div>
                <div class="content">
                    <h2>Lofoten Islands</h2>
                    <p>Localizadas em Nordland e bem acima do círculo ártico, as Ilhas Lofoten têm paisagens incríveis, formadas pelos oceanos, picos acidentados, praias de areia branca e vilas pesqueiras.
</p>
                </div>
            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>

</body>
<script src="js/script.js"></script>
</html>
