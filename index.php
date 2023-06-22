<?php 
    class Movie {
        public $titolo;
        public $regista;
        public $genere;
        public $durata;
        public $poster;

        function __construct($titolo, $regista, $genere, $durata, $poster) {
            $this->titolo = $titolo;
            $this->regista = $regista;
            $this->genere = $genere;
            $this->durata = $durata;
            $this->poster = $poster;
        }
    
    }

    $TheFlash = new Movie("The Flash", "Andy Muschietti", "Azione", "2h 35m", "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQlklzzFacl45CgTVqckVSQvyHBUL2w0PrhRpbCCYT0x5xDavgI"); 

    $IndianaJones = new Movie("Indiana Jones 5", "James Mangold", "Avventura", "2h 34m", "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRx7OdWeoL_KV9ACpHksuD4I67KzgJTGV9LJLt2vnFK5drBJPG0" );

    $Elemental = new Movie("Elemental", "Peter Sohn", "Animazione", "1h 49m", "https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTJEOR-kSHRXepeUdYHM1hHxLZdfE9onAQSqquEY_hz-2HQMX_t");

    $movies = [ $TheFlash, $IndianaJones, $Elemental ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php OOP 1</title>
</head>
<body>
    <h1>Film in programmazione</h1>

    <div class="container">
    <?php foreach($movies as $movie){ ?>

        <div class="card">
            <h2><?= $movie->titolo ?></h2>
            <div>Regista: <?= $movie->regista ?> </div>
            <div>Genere: <?= $movie->genere ?></div>
            <div>Durata: <?= $movie->durata ?></div>
            <img src="<?= $movie->poster ?>" alt="<?= $movie->title ?>" >
        </div>

    <?php } ?>
    </div>
   
    <!-- style in pagina per velocizzare -->
    <style>
        h1 {
            text-align: center;
        }

        img {
            width: 300px;
            height: 400px;
        }

        .container {
            display: flex;
            justify-content: space-around;        
        }

        .card {
            padding: 1rem;
            border: 1px solid black;
            background-color: black;
            color: white;
        }

        .card * {
            margin-bottom: 1rem;
        }
    </style>

</body>
</html>