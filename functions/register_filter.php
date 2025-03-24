
<?php 
function formater_prix_euro_filter($nombre,$prefix="") {
        // Formate le nombre avec un espace comme séparateur de milliers et sans décimales
        $nombreFormate = number_format($nombre, 0, ',', ' ');
    if(empty($nombre)){
            return;
    }
        // Ajoute le symbole "€" à la fin
        return $prefix.$nombreFormate . ' €';
}
add_filter('formater_prix', 'formater_prix_euro_filter', 10, 2);

function couper_texte_filter($texte, $max_caracteres) {
        // Si le texte est plus court que la limite, on le retourne tel quel
        if (strlen($texte) <= $max_caracteres) {
            return $texte;
        }
    
        // On coupe le texte à la limite de caractères
        $texte_coupe = substr($texte, 0, $max_caracteres);
    
        // On s'assure de ne pas couper un mot en deux en revenant au dernier espace
        $dernier_espace = strrpos($texte_coupe, ' ');
    
        if ($dernier_espace !== false) {
            $texte_coupe = substr($texte_coupe, 0, $dernier_espace);
        }
    
        // On ajoute "..." à la fin pour indiquer que le texte a été coupé
        return $texte_coupe . '...';
    }

add_filter('couper_texte', 'couper_texte_filter', 10, 2);
