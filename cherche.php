<?php include 'header.php'; ?>

<?php
// Déclaration d'une variable qui contient le nombre à deviner
// Le symbole $ est utilisé pour déclarer des variables en PHP
$adeviner = 30;


// Récupération de la valeur entrée par l'utilisateur depuis le formulaire
// La valeur du champ "chiffre" du formulaire est stockée dans la variable $nombre
$nombre = isset($_POST["chiffre"]) ? $_POST["chiffre"] : null;

if ($nombre !== null) {
    echo "Vous avez entré le nombre : " . $nombre . "<br> <br>";

    // Structure conditionnelle pour comparer le nombre entré avec le nombre à deviner
    if ($nombre > $adeviner) {
        // Si le nombre entré est supérieur au nombre à deviner
        echo "votre chiffre est trop grand";
    } elseif ($nombre < $adeviner) {
        // Si le nombre entré est inférieur au nombre à deviner
        echo "votre chiffre est trop petit";
    } else {
        // Si le nombre entré est égal au nombre à deviner
        echo "Bravo vous avez trouvé";
    }
}

?>
<!--
    Partie HTML du formulaire
    method="post" : les données du formulaire seront envoyées via la méthode POST
    action="" : le formulaire sera soumis à la même page (cherche.php)
-->
<form method="post" action="">
    <!--
        Champ de saisie pour entrer un nombre
        type="number" : champ qui n'accepte que des nombres
        name="chiffre" : nom du champ, utilisé pour récupérer la valeur en PHP ($_POST["chiffre"])
        placeholder : texte affiché dans le champ quand il est vide
        value : valeur préremplie du champ
    -->
    <input type="number" name="chiffre" placeholder="Entrez un nombre entre 0 et 100" value="<?php
    // Opérateur ternaire en PHP :
    // condition ? valeur_si_vrai : valeur_si_faux
    // Ici : si le formulaire a été soumis, on affiche la valeur précédemment entrée,
    // sinon on affiche une chaîne vide
    echo isset($_POST['chiffre']) ? $_POST['chiffre'] : '';
    ?>">
    <!-- Bouton pour soumettre le formulaire -->
    <button type="submit">Valider </button>
</form>

<?php include 'footer.php'; ?>