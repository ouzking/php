<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Mention donnée</title>
    <!-- Intégration de Bootstrap 5  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        /* Style pour la taille de police unique */
        .mention {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <?php
    // Variables
    $moyenne = floatval($_POST['moyenne']); 

    // Détermination de la décision
    $decision = ($moyenne >= 10) ? "Admis" : "Éliminé";

    // Détermination de la mention
    if ($moyenne >= 18) {
        $mention = "Excellent, avec étonnement du jury";
        $mention_class = "text-success"; 
    } elseif ($moyenne >= 16) {
        $mention = "Très Bien";
        $mention_class = "text-warning";
    } elseif ($moyenne >= 14) {
        $mention = "Bien";
        $mention_class = "text-primary"; 
    } elseif ($moyenne >= 12) {
        $mention = "Assez Bien";
        $mention_class = "text-danger"; 
    } elseif ($moyenne >= 10) {
        $mention = "Passable";
        $mention_class = "text-warning"; 
    } else {
        $mention = "Aucune Mention";
        $mention_class = "text-dark";
    }
    ?>

    <div class="container d-flex mt-5">
        <h1 class="text-center">Décision et Mention</h1>
        <div class="text-center mt-4">
            <p class="text-primary">Décision: <?php echo $decision; ?></p>
            <p class="h4 mention <?php echo $mention_class; ?>">Mention: <?php echo $mention; ?></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>