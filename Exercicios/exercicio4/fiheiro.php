<?php
$menu = array(
    'Inicio' => 'Inicio',
    'Sobre Nos' => array('Visao', 'Missao', 'Valores'),
    'Contactos' => 'Contactos',
    'Redes Sociais' => array('Facebook', 'Tweeter', 'Instagram')
);

echo "<ul>";
foreach ($menu as $chave => $valor) {
    if (is_array($valor)) {
        
        echo "<li>$chave";
        echo "<ul>";
        foreach ($valor as $subItem) {
            echo "<li>$subItem</li>";
        }
        echo "</ul>";
        echo "</li>";
    } else {
        // Se for um item comum, apenas exibe o valor
        echo "<li>$valor</li>";
    }
}
echo "</ul>";
?>