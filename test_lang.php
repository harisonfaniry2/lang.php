<?php
$fichier = "index.php";

if (file_exists($fichier) && is_readable($fichier)) {
    $contenu = file_get_contents($fichier);
    echo $contenu;
} else {
    echo "Fichier introuvable ou non lisible.";
}
?>
