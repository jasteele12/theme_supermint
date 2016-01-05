<?php defined('C5_EXECUTE') or die(_("Access Denied."));
$session = \Core::make('session');
$themeColors = $session->get('supermint.colors');
// print_r($themeColors);

?>
/*
** Let's start with some override from dashboard option's page
** This file is generated by php and placed into theme_supermint / elements / overrides.css.php
** Page name : <?php echo $c->getCollectionName() ?> / Theme preset Name : <?php echo $option_object->get_preset_title($o->pID) ?> / Theme preset ID : <?php echo $o->pID ?>

*/

/* --- Text Overrides --- */

<?php
$p 	= new \Concrete\Package\ThemeSupermint\Src\Models\SupermintFont('p');
$alternate 	= new \Concrete\Package\ThemeSupermint\Src\Models\SupermintFont('alternate');
$h1 = new \Concrete\Package\ThemeSupermint\Src\Models\SupermintFont('h1');
$h2 = new \Concrete\Package\ThemeSupermint\Src\Models\SupermintFont('h2');
$h3 = new \Concrete\Package\ThemeSupermint\Src\Models\SupermintFont('h3');
$h4 = new \Concrete\Package\ThemeSupermint\Src\Models\SupermintFont('h4');
$h5 = new \Concrete\Package\ThemeSupermint\Src\Models\SupermintFont('h5');
$h6 = new \Concrete\Package\ThemeSupermint\Src\Models\SupermintFont('h6');
$small = new \Concrete\Package\ThemeSupermint\Src\Models\SupermintFont('small');
?>

/* -- FONTS --- */

.alternate, .tp-caption.big_alternate  {
	<?=$alternate->getStyleCss()?>
	font-size:<?php echo $o->alternate_size?>em;
}

body, p {
	<?=$p->getStyleCss()?>
}
h1,.h1 {<?=$h1->getStyleCss()?> 	font-size:<?=$h1->fullsize?>px}
h2,.h2 {<?=$h2->getStyleCss()?> 	font-size:<?=$h2->fullsize?>px}
h3,.h3 {<?=$h3->getStyleCss()?> 	font-size:<?=$h3->fullsize?>px}
h4,.h4 {<?=$h4->getStyleCss()?> 	font-size:<?=$h4->fullsize?>px}
h5,.h5 {<?=$h5->getStyleCss()?> 	font-size:<?=$h5->fullsize?>px}
h6,.h6 {<?=$h6->getStyleCss()?> 	font-size:<?=$h6->fullsize?>px}

/* -- Navigation -- */
<?php if ($o->first_level_regular_flaterize): ?>
	/* Make Regular nav Flat */
	.regular-top-nav, .regular-top-nav > ul, .regular-top-nav > ul > li.active > a {background:<?php echo isset($themeColors->variables['top-nav-bg-color']) ? $themeColors->variables['top-nav-bg-color'] : $themeColors->variables['quaternary-color'] ?>}
	.regular-top-nav > ul > li > a {text-shadow:none}
	.regular-top-nav > ul > li:not(:last-child),
	.regular-top-nav > ul li + li {	border:none}
	.mgm-drop > ul, .multicolumn-pane, .regular-top-nav > ul > li.active > a {box-shadow:none}
<?php endif ?>
/* items spacing */
.regular-top-nav > ul > li > a {padding:0 <?php echo $o->nav_item_spacing ? $o->nav_item_spacing : 20  ?>px}

.l123 > li > a,
.l12d li > a,
li.mgm-multi-c-title a {
	<?php echo $h1->getFamily(); ?>
}
/* Dropdown Levels */
.mega-menu > li > ul,
.mega-menu > li > ul li > ul
 {
	width: <?php echo $o->nav_sub_level_width/10 ?>rem;
}
/* Lateral Font & Style */
.lateral-nav li a {
	<?php if ($o->lateral_nav_element_font): ?>font-family:<?php echo ${$o->lateral_nav_element_font}->font ?>;<?php endif ?>
	<?php if ($o->lateral_nav_element_uppercase): ?>text-transform:uppercase;<?php endif; ?>
	font-size:<?php echo $o->lateral_nav_element_size ?>px;
}
<?php if ($o->full_screen_nav_font_size) : ?>
/* Full screen nav */
.overlay ul li a {font-size:<?php echo $o->full_screen_nav_font_size?>px}
<?php endif ?>


<?php if ($o->disable_border_main) : ?>
.content, #top-page { border:1px solid transparent}
<?php endif ?>

/* -- Popup -- */

/* content at start */
.mfp-effect.mfp-wrap .mfp-content {
	<?php echo $o->popup_content_start_css ?>
}
/* content animate it */
.mfp-effect.mfp-wrap.mfp-ready .mfp-content {
	<?php echo $o->popup_content_animate_css ?>
}
/* content animate out */
.mfp-effect.mfp-wrap.mfp-removing .mfp-content {
	<?php echo $o->popup_content_out_css ?>
}

/* --- Large desktop */
@media (min-width: 1200px) {

	/* a {font-size:<?=$p->widesize?>px} */
	h1 {font-size:<?=$h1->widesize?>px}
	h2 {font-size:<?=$h2->widesize?>px}
	h3 {font-size:<?=$h3->widesize?>px}
	h4 {font-size:<?=$h4->widesize?>px}
	h5 {font-size:<?=$h5->widesize?>px}
	h6 {font-size:<?=$h6->widesize?>px}

}

/* --- Portrait tablet to landscape and desktop */
@media (min-width: 768px) and (max-width: 979px) {

	body {font-size:<?=$p->tabletsize?>px}
	/* a {font-size:<?=$p->tabletsize?>px} */
	h1 {font-size:<?=$h1->tabletsize?>px}
	h2 {font-size:<?=$h2->tabletsize?>px}
	h3 {font-size:<?=$h3->tabletsize?>px}
	h4 {font-size:<?=$h4->tabletsize?>px}
	h5 {font-size:<?=$h5->tabletsize?>px}
	h6 {font-size:<?=$h6->tabletsize?>px}

}

/* --- Landscape phone to portrait tablet */
@media (max-width: 767px) {
	p,li {font-size:<?=$p->fullsize?>px}
	h1 {font-size:<?=$h1->fullsize?>px}
	h2 {font-size:<?=$h2->fullsize?>px}
	h3 {font-size:<?=$h3->fullsize?>px}
	h4 {font-size:<?=$h4->fullsize?>px}
	h5 {font-size:<?=$h5->fullsize?>px}
	h6 {font-size:<?=$h6->fullsize?>px}
}

/* --- Landscape phones and down */
@media (max-width: 480px) {

}
