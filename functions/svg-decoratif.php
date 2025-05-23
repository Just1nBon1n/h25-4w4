<?php
function svg_decoratif_from_file($fichier = 'images/wave-haikei.svg', $flip = false, $classe = '') {
    $chemin = get_template_directory() . '/' . $fichier;

    if (file_exists($chemin)) {
        $svg = file_get_contents($chemin);

        $classes = 'svg-vague';
        if (!empty($classe)) $classes .= ' ' . esc_attr($classe);

        // Injecte la classe dans la balise <svg>
        $svg = preg_replace('/<svg([^>]*)>/', '<svg$1 class="' . $classes . '">', $svg);

        echo $svg;
    } else {
        echo '<!-- SVG introuvable : ' . esc_html($fichier) . ' -->';
    }
}
?>
