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
    'ACL_CAT_TRACKERS'      	 => 'Trackers',

    // User permissions (u_)
    'ACL_U_TRACKER_VIEW'         => 'Peut voir le suivi et les listes de projets',
    'ACL_U_TRACKER_CREATE'       => 'Peut créer de nouveaux tickets',
    'ACL_U_TRACKER_REPLY'        => 'Peut répondre aux tickets',
    'ACL_U_TRACKER_EDIT'         => 'Peut modifier ses propres tickets',
    'ACL_U_TRACKER_DELETE'       => 'Peut supprimer ses propres tickets',
    'ACL_U_TRACKER_CLOSE'        => 'Peut cloturer ses propres tickets',
    'ACL_U_TRACKER_VIEW_PRIVATE' => 'Peut voir les tickets privés',

    // Moderator permissions (m_)
    'ACL_M_TRACKER_EDIT'   => 'Peut modifier n’importe quel ticket',
    'ACL_M_TRACKER_DELETE' => 'Peut supprimer n’importe quel ticket',
    'ACL_M_TRACKER_STATUS' => 'Peut changer le statut ou la gravité du ticket',
    'ACL_M_TRACKER_ASSIGN' => 'Peut assigner des tickets à des utilisateurs/groupes',
    'ACL_M_TRACKER_LOGS'   => 'Peut consulter les journaux de l’historique des tickets',
    'ACL_M_TRACKER_MOVE'     => 'Peut déplacer des tickets',
    'ACL_M_TRACKER_UNASSIGN' => 'Peut annuler l’attribution des tickets',

    // Admin permissions (a_)
    'ACL_A_TRACKERS'       => 'Peut gérer les paramètres et les structures de suivi',
]);
