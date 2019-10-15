<?php
/*
Plugin Name: simplon
Plugin URI: http://google.fr
Description: Le plugin à développer dans le cadre de l'atelier 19 : débeloppement backend - formation Référent Numérique Entreprise (INSA, CESI et Simplon) 
Version: 0.1
Author: Solène Gasnier
Author URI: http://solenegasnier.referentnumerique-insarouen.fr/
License: GPL2
*/

function simplon_shortcode(){
	$code_html='
	<p>Destinée aux chercheurs d’emplois en situation de reconversion, la formation <span style="font-weight: bold"> Référent.e Numérique Entreprise </span>prépare en 8 mois aux métiers du numérique et est couronnée par l\'obtention de <span style="color: red">3 certifications</span>.
	</p>
	<p>Le métier de référent numérique consiste à accompagner les structures dans la mise en place de solutions numériques adaptées à leurs besoins.</p>
	<p>La formation est menée conjointement par :</p>
	<ul>
		<li><p>l\'<a href="https://www.insa-rouen.fr/">INSA</a> ;</p></li>
		<li><p>le <a href="https://www.cesi.fr/">CESI</a> ;</li>
		<li><a href="https://simplonline.co/">Simplon.co</a>.</li>
	</ul>';
	return $code_html;
}
add_shortcode('simplon', 'simplon_shortcode');


