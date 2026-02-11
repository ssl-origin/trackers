<?php
/**
 *
 * Trackers extension for the phpBB Forum Software package
 *
 * @copyright (c) 2026 nextgen <https://nextgen.gt>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'REPORT_TICKET'			=> 'Signaler un ticket',
	'REPORT_TICKET_EXPLAIN'	=> 'Utilisez ce formulaire pour signaler le ticket sélectionné aux modérateurs. Les rapports ne devraient généralement être utilisés que si le ticket enfreint les règles de suivi ou contient un contenu inapproprié.',
	'REPORT_REASON'			=> 'Raison du signalement',
	'REPORT_TEXT'			=> 'Information complémentaire',
	'REPORT_TEXT_EXPLAIN'	=> 'Veuillez fournir plus de détails si nécessaire pour expliquer pourquoi vous signalez ce ticket.',
	
	'TICKET_REPORTED_SUCCESS'	=> 'Le ticket a été signalé avec succès.',
	'ALREADY_REPORTED'			=> 'Un signalement a déjà été fait pour ce ticket.',
	
	'CLOSE_REPORT'			=> 'Fermer le rapport',
	'REPORT_CLOSED_SUCCESS'	=> 'Le rapport a été fermé.',
	
	'NOTIFICATION_TICKET_REPORTED'	=> '<strong>ticket signalé</strong><br />Un ticket a été signalé par %1$s: <em>%2$s</em>',
	
	'REPORTED' => 'Ce ticket a été signalé.',
]);
