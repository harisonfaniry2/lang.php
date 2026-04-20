<?php
$fichier = "index.php";

if (file_exists($fichier) && is_readable($fichier)) {
    $handle = fopen($fichier, "r");
    $contenu = fread($handle, filesize($fichier));
    fclose($handle);

    echo $contenu;
} else {
    echo "Fichier introuvable ou non lisible.";
}
?>
