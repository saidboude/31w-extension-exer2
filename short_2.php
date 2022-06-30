<?php
    /**
     * Plugin Name: short_2
     * Description: Structure d'extension utilisant plusieurs dossiers et permettant d'afficher une adresse
     * Author: Said Boudehane
     * Plugin URI: https://github.com/saidboude
     */

    function sh2_31w_enqueue() {
        $version_css = filemtime(plugin_dir_path(__FILE__) . 'style.css');
        $version_js = filemtime(plugin_dir_path(__FILE__) . 'script/message.js');

        wp_enqueue_style('sh2_31w_css', 
                        plugin_dir_url(__FILE__) . "/style.css", 
                        array(), 
                        $version_css);

        wp_enqueue_script('sh2_31w_js', 
                        plugin_dir_url(__FILE__) . "/script/message.js", 
                        array(), 
                        $version_js, 
                        true);
    }

    add_action('wp_enqueue_scripts', 'sh2_31w_enqueue');


function genere_adresse() {
    $contenu  = '<code class="mon__adresse">';
    $contenu .="<code> 3 800, rue Sherbrooke Est Montréal (Québec) H1X 2A2 | 514 254-7131 Copyright © 2014 - Collège de Maisonneuve. Tous droits réservés. </code>";
    $contenu .= '</code> ';
    $contenu .= '<button id="mon_bouton">OK</button>';
    return $contenu;
    }
add_shortcode('adr', 'genere_adresse');




?>