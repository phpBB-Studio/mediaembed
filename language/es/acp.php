<?php
/**
 *
 * phpBB Media Embed PlugIn extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// Settings
	'ACP_MEDIA_SETTINGS'				=> 'Ajustes de Media Embed',
	'ACP_MEDIA_SETTINGS_EXPLAIN'		=> 'Aquí puede configurar los ajustes del PlugIn Media Embed.',
	'ACP_MEDIA_DISPLAY_BBCODE'			=> 'Mostrar BBCode <samp>[MEDIA]</samp> en la página de publicación',
	'ACP_MEDIA_DISPLAY_BBCODE_EXPLAIN'	=> 'Si se deshabilita, el botón BBCode no será mostrado, pero los usuarios aún podrán seguir usando la etiqueta <samp>[media]</samp> en sus mensajes',
	'ACP_MEDIA_ALLOW_SIG'				=> 'Permitir en firmas de usuario',
	'ACP_MEDIA_ALLOW_SIG_EXPLAIN'		=> 'Permitir que las firmas de usuario muestren contenido multimedia incorporado.',
	'ACP_MEDIA_PARSE_URLS'				=> 'Convertir URLs simples',
	'ACP_MEDIA_PARSE_URLS_EXPLAIN'		=> 'Habilite esto para convertir URLs simples (no envueltas en etiquetas <samp>[media]</samp> o <samp>[url]</samp>) en contenido multimedia incrustado. Tenga en cuenta que cambiar esta configuración solo afectará a los nuevos mensajes, ya que los mensajes existentes ya se han analizado.',
	'ACP_MEDIA_SITE_TITLE'				=> 'ID del sitio: %s',
	'ACP_MEDIA_SITE_DISABLED'			=> 'Este sitio está en conflicto con un BBCode existente: [%s]',

	// Manage sites
	'ACP_MEDIA_MANAGE'					=> 'Gestionar sitios de Media Embed',
	'ACP_MEDIA_MANAGE_EXPLAIN'			=> 'Aquí puede gestionar los sitios que desea permitir en el PlugIn Media Embed, y mostrar su contenido.',
	'ACP_MEDIA_SITES_ERROR'				=> 'No hay sitios para mostrar.',
	'ACP_MEDIA_SITES_MISSING'			=> 'Estos sitios ya no son compatibles o funcionan. Por favor envíe este formulario para eliminarlos.',
));
