<?php
function svg_decoratif_from_file($fichier = 'images/wave-haikei.svg', $flip = false) {
    $chemin = get_template_directory() . '/' . $fichier;

    if (file_exists($chemin)) {
        $svg = file_get_contents($chemin);

        $classes = 'svg-vague';
        if ($flip) {
            $classes .= ' svg-flip';
        }

        // Injecte uniquement la classe, pas de style inline !
        $svg = preg_replace('/<svg([^>]*)>/', '<svg$1 class="' . esc_attr($classes) . '">', $svg);

        echo $svg;
    } else {
        echo '<!-- SVG introuvable : ' . esc_html($fichier) . ' -->';
    }
}
?>
