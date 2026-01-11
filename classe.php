<link rel="stylesheet" href="style.css">

<?php include 'header.php'; ?>

<section>
    <h2>Page Classe</h2>
</section>

<?php

$classe = [
    001 =>
        [
            "nom" => "Adrien",
            "prenom" => "Remond",
            "age" => "18",
            "sexe" => "homme",
            "filiere" => "informatique"
        ]
];

$reponse_user = isset($_POST["formulaire"]) ? $_POST["formulaire"] : NULL;
?>




<form action="" method="post">
    <input type="text" name="formulaire" placeholder="Quelle table vous voulez modifier ? "
        value="<?php echo $reponse_user ?>">
    <button type="submit">Valider </button>
</form>





<?php echo "<pre>";
echo "<h3>Informations de l'étudiant :</h3>";
echo "<ul>";
// 1ère boucle : parcourt les étudiants
foreach ($classe as $id_etudiant => $etudiant) {
    echo "<strong>Étudiant $id_etudiant :</strong><br>";

    // 2ème boucle : parcourt les infos de l'étudiant
    echo "<ul>";
    foreach ($etudiant as $cle => $valeur) {
        echo "<li><strong>" . ucfirst($cle) . " :</strong> " . $valeur . "</li>";
        //                                                        ^^^^^^^
        //                                                        Maintenant $valeur est une chaîne !
    }
    echo "</ul>";
}

echo "</ul>";
echo "</pre>"; ?>



<?php include 'footer.php'; ?>