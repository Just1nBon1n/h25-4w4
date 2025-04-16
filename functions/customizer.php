<?php 
  function theme_tp_customize_register($wp_customize) {
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.

    ////////////////////////////////////////////// HERO SECTION //////////////////////////////////////////////
    // Création d'une nouvelle section dans le customizer
    $wp_customize->add_section('hero_section', array(
      'title' => __('Section Hero', 'theme_tp'),
      'priority' => 30,
    ));

    ////////////////////////////////////////////// ajout de la donnée (adresse auteur)
    $wp_customize->add_setting('hero_adresse', array(
      'default' => __('justinbonin7@gmail.com', 'theme_tp'),
      'sanitize_callback' => 'sanitize_text_field'
    ));
    ////////////////////////////////////////////// ajout du controle de la donnée
    $wp_customize->add_control('hero_adresse', array(
      'label' => __('Adresse', 'theme_tp'),
      'section' => 'hero_section',
      'type' => 'text',
    ));

    ////////////////////////////////////////////// ajout de la donnée (auteur)
    $wp_customize->add_setting('hero_auteur', array(
      'default' => __('Justin Bonin', 'theme_tp'),
      'sanitize_callback' => 'sanitize_text_field'
    ));
    ////////////////////////////////////////////// ajout du controle de la donnée
    $wp_customize->add_control('hero_auteur', array(
      'label' => __('Auteur', 'theme_tp'),
      'section' => 'hero_section',
      'type' => 'text',
    ));
    

    ////////////////////////////////////////////// ajout image en arrière plan
    for ($i = 1; $i <= 3; $i++) {
      $wp_customize->add_setting('hero_background_' . $i, array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
      ));
      ////////////////////////////////////////////// ajout du controle de la donnée
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_' . $i, array(
        'label' => __('Image en arriere plan ' . ($i+1), 'theme_tp'),
        'section' => 'hero_section',
      )));
    }

    $wp_customize->add_setting('hero_background', array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    ////////////////////////////////////////////// ajout du controle de la donnée
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
      'label' => __('Image en arriere plan', 'theme_tp'),
      'section' => 'hero_section',
    )));


    ////////////////////////////////////////////// ajout de la donnée (texte du bouton)
    $wp_customize->add_setting('hero_cta_text', array(
      'default' => __('CTA text', 'theme_tp'),
      'sanitize_callback' => 'sanitize_text_field',
    ));
    ////////////////////////////////////////////// ajout du controle de la donnée
    $wp_customize->add_control('hero_cta_text', array(
      'label' => __('CTA Bouton Text', 'theme_tp'),
      'section' => 'hero_section',
      'type' => 'text',
    ));

    ////////////////////////////////////////////// ajout de la donnée (lien du bouton)
    $wp_customize->add_setting('hero_cta_link', array(
      'default' => '#',
      'sanitize_callback' => 'esc_url_raw',
    ));
    ////////////////////////////////////////////// ajout du controle de la donnée
    $wp_customize->add_control('hero_cta_link', array(
      'label' => __('CTA Button Link', 'theme_tp'),
      'section' => 'hero_section',
      'type' => 'url',
    ));

    ////////////////////////////////////////////// ajout de la donnée (couleur du texte)
    $wp_customize->add_setting('hero_texte_couleur', array(
      'default' => '#000000',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
    ////////////////////////////////////////////// ajout du controle de la donnée
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_texte_couleur', array(
      'label' => __('Couleur du texte', 'theme_tp'),
      'section' => 'hero_section',
    )));

    ////////////////////////////////////////////// FOOTER SECTION //////////////////////////////////////////////
    // Création d'une nouvelle section dans le customizer
    $wp_customize->add_section('footer_section', array(
      'title' => __('Section Footer', 'theme_tp'),
      'priority' => 30,
    ));

    ////////////////////////////////////////////// ajout de la donnée (adresse)
    $wp_customize->add_setting('footer_adresse', array(
      'default' => __('3800, Sherbrooke Est, Montréal, Québec, H1X 2A2', 'theme_tp'),
      'sanitize_callback' => 'sanitize_text_field'
    ));
    ////////////////////////////////////////////// ajout du controle de la donnée
    $wp_customize->add_control('footer_adresse', array(
      'label' => __('Footer Adresse', 'theme_tp'),
      'section' => 'footer_section',
      'type' => 'text',
    ));

    ////////////////////////////////////////////// ajout de la donnée (telephone)
    $wp_customize->add_setting('footer_telephone', array(
      'default' => __('(514) 254-7131', 'theme_tp'),
      'sanitize_callback' => 'sanitize_text_field'
    ));
    ////////////////////////////////////////////// ajout du controle de la donnée
    $wp_customize->add_control('footer_telephone', array(
      'label' => __('Footer Téléphone', 'theme_tp'),
      'section' => 'footer_section',
      'type' => 'text',
    ));

    ////////////////////////////////////////////// ajout de la donnée (mission)
    $wp_customize->add_setting('footer_mission', array(
      'default' => __('vide', 'theme_tp'),
      'sanitize_callback' => 'sanitize_text_field'
    ));
    ////////////////////////////////////////////// ajout du controle de la donnée
    $wp_customize->add_control('footer_mission', array(
      'label' => __('Footer Mission', 'theme_tp'),
      'section' => 'footer_section',
      'type' => 'text',
    ));

    ////////////////////////////////////////////// ERREUR 404 SECTION //////////////////////////////////////////////
    // Création d'une nouvelle section dans le customizer
    $wp_customize->add_section('erreur_404_section', array(
      'title' => __('Section Erreur 404', 'theme_tp'),
      'priority' => 30,
    ));

    ////////////////////////////////////////////// ajout de la donnée (titre)
    $wp_customize->add_setting('erreur_404_titre', array(
      'default' => __('Erreur 404', 'theme_tp'),
      'sanitize_callback' => 'sanitize_text_field'
    ));
    ////////////////////////////////////////////// ajout du controle de la donnée
    $wp_customize->add_control('erreur_404_titre', array(
      'label' => __('Titre de la page 404', 'theme_tp'),
      'section' => 'erreur_404_section',
      'type' => 'text',
    ));

    ////////////////////////////////////////////// ajout de la donnée (texte)
    $wp_customize->add_setting('erreur_404_texte', array(
      'default' => __('Lorem ipsum', 'theme_tp'),
      'sanitize_callback' => 'sanitize_text_field'
    ));
    ////////////////////////////////////////////// ajout du controle de la donnée
    $wp_customize->add_control('erreur_404_texte', array(
      'label' => __('Texte de la page 404', 'theme_tp'),
      'section' => 'erreur_404_section',
      'type' => 'text',
    ));

    ////////////////////////////////////////////// ajout image en arrière plan
    $wp_customize->add_setting('erreur_404_background', array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    ////////////////////////////////////////////// ajout du controle de la donnée
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_404_background', array(
      'label' => __('Image en arriere plan', 'theme_tp'),
      'section' => 'erreur_404_section',
    )));

    ////////////////////////////////////////////// ajout de la donnée (couleur du texte)
    $wp_customize->add_setting('erreur_404_texte_couleur', array(
      'default' => '#000000',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
    ////////////////////////////////////////////// ajout du controle de la donnée
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'erreur_404_texte_couleur', array(
      'label' => __('Couleur du texte', 'theme_tp'),
      'section' => 'erreur_404_section',
    )));
  }

  add_action('customize_register', 'theme_tp_customize_register');
?>
