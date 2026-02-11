<?php
/**
 *
 * Trackers extension for the phpBB Forum Software package
 *
 * @copyright (c) 2026 nextgen <https://nextgen.gt>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// MCP Trackers
$lang = array_merge($lang, array(	
	// Form actions and success messages
	'CLOSE_REPORTS'             => 'Fermer les rapports sélectionnés',
	'REPORTS_CLOSED_SUCCESS'    => 'Les rapports sélectionnés ont été fermés avec succès.',
	'NO_REPORTED_TICKETS'       => 'Il n’y a pas de tickets signalés à afficher.',
	
	// Table columns
	'TICKET_TITLE'              => 'Titre du ticket',
	'REPORTER'                  => 'Déclarant',
	'REPORT_REASON'             => 'Raison du rapport',
	'REPORT_TIME'               => 'Date',
	'VIEW_DETAILS'              => 'Afficher le ticket',
	'MARK'                      => 'Marquer',
	
	// Navigation and Actions
	'REPORTS'                   => 'Rapports',
	'MARK_ALL'                  => 'Cocher tous',
	'UNMARK_ALL'                => 'Décocher tous',
	'RETURN_PAGE'               => 'Cliquez %sici%s pour revenir à la page précédente.',
	
	// Logs
	'LOG_REPORT_CLOSED_MCP'     => '<strong>Rapport de ticket fermé via le PCM</strong><br />» %s',
));
