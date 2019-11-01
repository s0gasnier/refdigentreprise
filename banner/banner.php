<?php
/*
Plugin Name: Short Code Bannière
Plugin URI: https://solenegasnier.referentnumerique-insarouen.fr/certification
Description: Plugin à développer dans le cadre de la certification WordPress - formation Référent Numérique Entreprise (INSA, CESI et Simplon) 
Version: 0.1
Author: Solène Gasnier
Author URI: https://solenegasnier.referentnumerique-insarouen.fr/certification
License: GPL2
*/

function banner_shortcode(){
$code_html='<p>Rendez-vous sur la boutique pour continuer à découvrir notre gamme de parfum !</p>
	<a href="https://solenegasnier.referentnumerique-insarouen.fr/certification/categorie-produit/parfum/">
   <input type="button" value="Visiter la boutique" </input></a>';


return $code_html;
}

add_shortcode('banner', 'banner_shortcode');


