<?php
function afficher_icones_sociales() {
    $socials = array('facebook', 'linkedin', 'instagram', 'github');

    echo '<div class="hero__icone">';
    foreach ($socials as $social) {
        $url = get_theme_mod("social_{$social}_link");
        if ($url) {
            echo '<a href="' . esc_url($url) . '" target="_blank" rel="noopener noreferrer">';
            echo '<img src="https://s2.svgbox.net/social.svg?ic=' . esc_attr($social) . '&color=000000" width="30" height="30">';
            echo '</a>';
        }
    }
    echo '</div>';
}
