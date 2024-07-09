<?php
// fragment d'affichage de l'espace et bouton de changement

echo "<section class='flex j-between a-center'>";
if($espace === "vendeur"){
    ?>
        <h4 class="fs20">Espace Vendeur</h4>
        <a href="index.php?controleur=changer_espace&espace=technicien"><button class="btnPad fs12">Espace Technicien</button></a>
    <?php
}else if($espace === "technicien"){
    ?>
        <a href="index.php?controleur=changer_espace&espace=vendeur"><button class="btnPad fs12">Espace Vendeur</button></a>
        <h4 class="fs20">Espace Technicien</h4>
    <?php
}
echo "</section>";


