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
    'TRACKERS_COPYRIGHT'        => 'Développé par phpBB Trackers',
    'TRACKERS_COPYRIGHT_LINK'   => 'https://nextgen.gt',

    // Version Check
    'TRACKERS_UP_TO_DATE'       => 'Votre version de Trackers est à jour, aucune nouvelle mise à jour n’est disponible.',
    'NEW_VERSION_AVAILABLE'     => 'Une nouvelle version est disponible',
    'CURRENT_VERSION'           => 'Version actuelle',
    'LATEST_VERSION'            => 'Dernière version',
    'DOWNLOAD_LATEST'           => 'Télécharger la dernière version',

    // ACP entries
    'ACP_TRACKERS_DASHBOARD'     => 'Tableau de bord',
    'ACP_TRACKERS'               => 'Traueurs',
    'ACP_TRACKERS_TITLE'         => 'Gestion des traqueurs',
    'ACP_TRACKERS_SETTINGS'      => 'Paramètres généraux',
    'TRACKERS_ENABLE'            => 'Activer les traqueurs',
    'TRACKERS_ENABLE_EXPLAIN'    => 'Activer ou désactiver globalement le système des traqueurs.',
    'TRACKERS_ENABLED'           => 'Activer les traqueurs', 
    'TRACKERS_ENABLED_EXPLAIN'   => 'Activer ou désactiver globalement le système des traqueurs.',
    'TRACKERS_PER_PAGE'          => 'Traqueurs par page',
    'TRACKERS_PER_PAGE_EXPLAIN'  => 'Nombre de tickets à afficher sur la vue du projet.',
    'GENERAL_SETTINGS'           => 'Configuration générale',
    'ACP_TRACKERS_PROJECTS'      => 'Gestion de projets',
    'ACP_TRACKERS_EXPLAIN'       => 'Ici vous pouvez configurer vos traqueurs de bugs, gérer des projets spécifiques et définir des statuts ou des gravités.',
    'ACP_TRACKERS_SEVERITIES'    => 'Gérer les gravités',
    'ACP_TRACKERS_STATUSES'      => 'Gérer les statuts',
    'ACP_TRACKERS_COMPONENTS'    => 'Gérer les composants',
    'ITEM_DELETED'               => 'Articje supprimé avec succès.',
    'ITEM_UPDATED'               => 'Article mis à jour avec succès.',
    'SETTINGS_UPDATED'           => 'Paramètres mis à jour avec succès.',
    'ADD'                        => 'Ajouter',
    'EDIT'                       => 'Modifier',
    'DELETE'                     => 'Supprimer',
    'NO_PAGE_MODE'               => 'Mode de page invalide ou non spécifié.',
    'NO_ITEMS'                   => 'Aucun article trouvé.',

    // ACP - Projects & Relations
    'PROJECT_TYPE'               => 'Type de projet',
    'ASSIGN_TO_PROJECTS'         => 'Assigner à des projets',
    'ASSIGN_TO_PROJECTS_EXPLAIN' => 'Sélectionnez les projets qui utiliseront cet élément.',

    // ACP - Attachment Settings
    'ATTACHMENT_SETTINGS'        => 'Paramètres des fichiers joints',
    'ALLOW_ATTACHMENTS'          => 'Autoriser les fichiers joints',
    'TRACKERS_ATTACHMENTS'       => 'Autoriser les téléchargements de fichiers', 
    'MAX_ATTACH_SIZE'            => 'Taille maximale des fichiers',
    'MAX_ATTACH_SIZE_EXPLAIN'    => 'Taille maximale autorisée pour chaque fichier joint en KiB (0 pour illimité).',
    'ALLOWED_EXTENSIONS'         => 'Extensions de fichiers autorisées',
    'ALLOWED_EXTENSIONS_EXPLAIN' => 'Liste des extensions de fichiers autorisées séparées par des virgules (p.ex., jpg,png,zip).',
    'ATTACH_PATH'                => 'Chemin de stockage des fichiers joints',
    'ATTACH_PATH_EXPLAIN'        => 'Répertoire où les fichiers seront stockés. Relatif à la racine du forum (par exemple, fichiers/traqueurs).',
    'KIB'                        => 'KiB',
    'GROUP_ATTACH_PERMISSIONS'   => 'Permissions de fichier joint par groupe',
    'GROUP_ATTACH_EXPLAIN'       => 'Sélectionnez les groupes autorisés à télécharger des fichiers sur le traqueur.',
    'GROUP_NAME'                 => 'Nom du groupe',
    'CAN_UPLOAD_ATTACH'          => 'Peut télécharger',

    // General & Shared
    'TRACKERS'         => 'Traqueurs',
    'YES'              => 'Oui',
    'NO'               => 'Non',
    'COLON'            => ':',
    'STATISTICS'       => 'Statistiques',
    'ACTION'           => 'Action',
    'OPTIONS'          => 'Options de l‘équipe',
    'COMMENTS'         => 'Commentaires',
    'HISTORY'          => 'Historique',
    'PRIVATE'          => 'Privé',
    'STATUS'           => 'Statut',
    'SEVERITY'         => 'gravité',
    'COMPONENT'        => 'Composant',
    'PROJECT'          => 'Projet',
    'TITLE'            => 'Titre',
    'UNASSIGNED'       => 'Non assigné',
    'UNKNOWN'          => 'Inconnu',
    'UNCATEGORISED'    => 'Sans catégorie/Normal',
    'SUBMIT'           => 'Soumettre',
    'CANCEL'           => 'Annuler',

    // Viewtracker / Viewproject
    'MANAGE_PROJECTS'        => 'Gestion des projets',
    'PROJECT_NAME'           => 'Nom du projet',
    'TRACKER_NAME'           => 'Nom du traqueur',
    'ADD_PROJECT'            => 'Ajouter un nouveau projet',
    'EDIT_PROJECT'           => 'Modifier le projet',
    'NO_PROJECTS'            => 'Il n’y a pas de projets disponibles pour ce traqueur.',
    'NO_TRACKER'             => 'Le traqueur demandé n’existe pas.',
    'TRACKER_EXPLAIN'        => 'Veuillez sélectionner le projet que vous souhaitez ouvrir ci-dessous.',
    'TRACKER_PRIVATE'        => 'Remarque : Les soumissions à ce traqueur sont privées ; seuls vous et les membres de l’équipe verrez les informations.',
    'PROJECT_NOTE'           => 'Notes du projet',
    'PROJECT_ADDED'          => 'Le projet a été ajouté avec succès.',
    'PROJECT_UPDATED'        => 'Le projet a été mis à jour avec succès.',
    'PROJECT_DELETED'        => 'Le projet a été supprimé.',
    'CONFIRM_DELETE_PROJECT' => 'Êtes-vous sûr de vouloir supprimer ce projet ? Cette action ne peut pas être annulée.',
    'ALL_CLOSED'             => 'Tous les tickets fermés',
    'ALL_OPEN'               => 'Tous les tickets ouverts',
    'ALL_TICKETS'            => 'Tous les tickets',
    'NO_TICKETS'             => 'Il n‘y a aucun ticket à afficher.',
    'FILTER_TICKETS'         => 'Filtrer les tickets',
    'CURRENT_STATUS'         => 'À l‘affiche',
    'LOGIN_REQUIRED'         => 'Vous devez être connecté pour accéder au traqueur.',
    'TRACKER_DISABLED'       => 'Le système de traqueur est actuellement désactivé.',

    // Posting (New, Reply, Edit, Delete)
    'NEW_TICKET'               => 'Nouveau ticket',
    'REPLY_TICKET'             => 'Répondre au ticket',
    'EDIT_TICKET'              => 'Modifier le ticket',
    'EDIT_COMMENT'             => 'Editer le Commentaire',
    'BUTTON_NEW_TICKET'        => 'Nouveau ticket',
    'POST_STORED_SUCCESS'      => 'Le message a été enregistré avec succès.',
    'TICKET_DELETED_SUCCESS'   => 'Le ticket a été supprimé avec succès.',
    'POST_DELETED_SUCCESS'     => 'Le message a été supprimé avec succès.',
    'CONFIRM_DELETE'           => 'Êtes-vous sûr de vouloir supprimer cet élément ?',
    'CONFIRM_DELETE_TICKET'    => 'Êtes-vous sûr de vouloir supprimer ce ticket et tous ses commentaires ?',
    'CONFIRM_DELETE_POST'      => 'Êtes-vous sûr de vouloir supprimer ce commentaire ?',
    'RETURN_PROJECT'           => 'Cliquez %1$sICI%2$s pour retourner au projet.',
    'RETURN_PAGE'              => 'Cliquez %1$sICI%2$s pour retourner sur la page précédente.',
    'RETURN_INDEX'             => 'Retour à la page d’index',
    'UPLOAD_ATTACHMENT'        => 'Télécharger le fichier joint',

    // Viewticket & Attachments
    'TICKET_DETAILS'         => 'Détail du ticket',
    'TICKET_ID'              => 'ID du ticket',
    'REPORTED_BY'            => 'Rapporté par',
    'REPORTED_ON'            => 'A ouvert un rapport sur',
    'REPORTED_FROM'          => 'Rapporté depuis (IP)',
    'ASSIGNED'               => 'Assigné à',
    'ASSIGN_TICKET'          => 'Assigner un ticket',
    'FIND_USERNAME'          => 'Trouver un membre',
    'QUICK_REPLY'            => 'Réponse rapide',
    'CURRENT_ASSIGNED'       => 'Actuellement assigné à',
    'DUPLICATE_TICKETS'      => 'Duplicatas des tickets',
    'DUP_TICKET'             => 'Duplicatas de ce ticket',
    'DUP_OTHER'              => 'Doublons de ',
    'NO_ENTRIES'             => 'Aucun commentaire n’a été fait et il n’y a aucune entrée d’historique.',
    'POSTED_BY'              => 'Posté par',
    'SEND_PM'                => 'Envoyer un message privé',
    'CHANGE_SEVERITY'        => 'Changer la gravité du ticket',
    'CHANGE_STATUS'          => 'Changer le statut du ticket',
    'ATTACHMENTS'            => 'Fichiers joints',
    'DOWNLOAD_ATTACHMENT'    => 'Télécharge le fichier joint',
    'ATTACHMENT_NOT_FOUND'   => 'Le fichier joint demandé n’a pas pu être trouvé dans la base de données.',
    'FILE_NOT_FOUND_ON_DISK' => 'Le fichier a été trouvé dans la base de données mais est absent du stockage du serveur.',
    'CLOSE_TICKET'           => 'Fermer le ticket',
    'TICKET_CLOSED_SUCCESS'  => 'Le ticket a été fermé avec succès.',
    'CLOSED'                 => 'Fermé',

	// --- Ticket Moderation & Tools ---
    'TICKET_TOOLS'               => 'Outils de ticket',
    'MOVE'                       => 'Déplacer',
    'MOVE_TICKET'                => 'Déplacer le ticket',
    'MOVE_TICKET_CONFIRM'        => 'Êtes-vous sûr de vouloir déplacer ce ticket ?',
    'SELECT_DESTINATION_PROJECT' => 'Sélectionnez le projet de destination',
    'UNASSIGN'                   => 'Désassigner',
    'UNASSIGN_TICKET'            => 'Déssassigner le responsable actuel',
    'CONFIRM_UNASSIGN_TICKET'    => 'Êtes-vous sûr de vouloir déssassigner l’utilisateur actuel de ce ticket ?',
    'CLOSE_TICKET'               => 'Fermer le ticket',
    'REOPEN_TICKET'              => 'Rouvrir le ticket',

    // --- Success Messages ---
    'TICKET_UNASSIGNED'          => 'L’utilisateur a été correctement désssigné du ticket.',
    'TICKET_MOVED'               => 'Le ticket a été déplacé avec succès vers le nouveau projet.',
    'TICKET_CLOSED'              => 'Le ticket a été fermé avec succès.',
    'TICKET_REOPENED'            => 'Le ticket a été rouvert avec succès.',
    'TICKET_WATCH_UPDATED'       => 'Vos paramètres d’abonnement ont été mis à jour.',

    // --- Audit Log & History ---
    'LOG_TICKET_MOVED'           => '<strong>Ticket déplacé :</strong> de %1$s vers %2$s',
    'LOG_TICKET_UNASSIGNED'      => '<strong>Modération :</strong> Le ticket a été désassigné par un modérateur.',
    'LOG_TICKET_CLOSED'          => '<strong>Modération :</strong> Le ticket a été fermé.',
    'LOG_TICKET_REOPENED'        => '<strong>Modération :</strong> Le billet a été rouvert.',

    // --- Statistics & Errors ---
    'STATISTICS_TRACKER_EXPLAIN' => 'Aperçu détaillé des tickets et de l’activité du projet dans le traqueur.',
    'NO_TICKET_SELECTED'         => 'Aucun ticket n’a été sélectionné.',
    'NO_CLOSED_STATUS_FOUND'     => 'Erreur : pas de statut "Fermé" trouvé pour ce traqueur.',
    'NO_OPEN_STATUS_FOUND'       => 'Erreur : pas de statut "Ouvert" trouvé pour rouvrir ce ticket.',
	
	
    'NO_PARENT'                 => 'Aucun parent',
    'PARENT_PROJECT'            => 'Projet parent',

    // History Logs
    'TICKET_ASSIGNED_TO' => 'Tickets assignés à : %s',
    'CHANGED_STATUS'     => 'Statut du ticket changé de "%1$s" à "%2$s"',
    'CHANGED_SEVERITY'   => 'Gravité du ticket changé de "%1$s" à "%2$s"',
    'CHANGED_COMPONENT'  => 'Composant du ticket changé de "%1$s" à "%2$s"',
    'CHANGED_ASSIGN'     => 'Ticket assigné à %1$s %2$s',

    // Totals & Statistics
    'TOTALS'             => 'Total',
    'TRACKER_STATISTICS' => 'Statistiques du traqueur',
    'CLOSED_TICKETS'     => 'Tickets fermés',
    'OPEN_TICKETS'       => 'Tickets ouverts',
    'NUMBER_TICKETS'     => 'Nombre de tickets',
    'PROJECTS_ALL'       => 'Tous les projets',
    'NO_STATS'           => 'Il n’y a pas de statistiques pour ce traqueur.',
    'STATUS_OVERVIEW'    => 'Aperçu du statut des tickets',

    'TOTAL_TICKETS'    => [
        0    => '0 tickets',
        1    => '1 ticket',
        2    => '%d tickets',
    ],
    'PAGE_TOTAL_POSTS'    => [
        0    => '0 messages',
        1    => '1 message',
        2    => '%d messages',
    ],

    // Dashboard Sync
    'TRACKERS_SYNC_COMPLETE'    => 'Les tickets et les projets ont été resynchronisés avec succès.',
    'TICKET_SYNC'               => 'Synchronisation des tickets',
    'TICKET_SYNC_EXPLAIN'       => 'Ce processus recalcule les compteurs de tickets pour chaque projet afin de garantir l’intégrité des données.',
    'RESYNC_TICKETS'            => 'Resynchroniser maintenant',

    // Dashboard Statistics Labels
    'TOTAL_TICKETS_LBL'         => 'Total des tickets',
    'UNANSWERED_TICKETS_LBL'    => 'Tickets non assignés',
    'CLOSED_TICKETS_LBL'        => 'Tickets fermés',
    'OPEN_TICKETS_LBL'          => 'Tickets ouverts',
    
    'NOTIFICATION_GROUP_TRACKERS'           => 'Notifications des traqueurs',
    'NOTIFICATION_TYPE_TRACKERS_ASSIGNED'   => 'Un ticket vous est assigné',
    'NOTIFICATION_TICKET_ASSIGNED'          => '%1$s vous a assigné un ticket : <strong>%2$s</strong>',
    'NOTIFICATION_TYPE_TRACKERS_REPLY'      => 'Une réponse est postée dans un ticket dans lequel vous êtes impliqué',
    'NOTIFICATION_TICKET_REPLY'             => '%1$s a répondu au ticket : <strong>%2$s</strong>',

    'CHANGELOG_GITHUB' => 'Activités et Mises à jour GitHub',
    'CHANGELOG_ERROR'  => 'Erreur : fichier CHANGELOG.md introuvable.',
    'CHANGELOG_WAITING' => 'En attente de synchronisation distante avec le dépôt GitHub...',
    'VIEW_ON_GITHUB' => 'Voir sur GitHub',
	
	'ACL_M_TRACKER_REPORT'	=> 'Peut gérer les tickets signalés',
	
	'NOTIFICATION_TICKET_REPORTED' => 'L’utilisateur %1$s a signalé le ticket : %2$s',
    'NOTIFICATION_TYPE_TRACKERS_REPORT' => 'Quelqu’un signale un ticket',
	
	// Module titles (Used in the sidebar and tabs)
	'MCP_TRACKERS'              => 'Traqueurs',
	'MCP_TRACKERS_REPORT_LIST'  => 'Tickets rapportés',
	
	// Page headers
	'MCP_TRACKERS_TITLE'        => 'Panneau de modération des traqueurs',
	
	// Watch & Notifications
	'WATCH_TICKET'           => 'Surveiller le ticket',
	'STOP_WATCHING_TICKET'    => 'Arrête de surveiller le ticket',
	'UNWATCH_TICKET'         => 'Retirer le ticket de la surveillance',
	'NOTIFICATION_TICKET_UPDATE' => 'Mise à jour du traqueur : %s',
	'TICKET_WATCH_UPDATED'   => 'Votre statut d’abonnement a été mis à jour.',

	// Quote & Reply
	'QUOTE'                  => 'Citation',
	'QUICK_REPLY'            => 'Réponse rapide',
	'REPLY_TICKET'           => 'Répondre à ce ticket',
	// Email Notifications
	'NOTIFICATION_TICKET_UPDATE_EMAIL_SUBJECT' => 'Mise à jour de ticket - %s',
	'NOTIFICATION_TICKET_UPDATE_EMAIL_BODY'    => "Bonjor,\n\nVous recevez cette notification parce que vous surveillez le ticket \"%1\$s\" sur %2\$s. Ce ticket a reçu une nouvelle mise à jour ou un commentaire.\n\nVous pouvez consulter le ticket en cliquant sur le lien suivant :\n%3\$s\n\nSi vous ne souhaitez plus regarder ce ticket, veuillez cliquer sur le lien \"Arrêter de regarder le ticket\" situé dans le ticket lui-même.",

	// Permissions
    'ACL_U_TRACKER_WATCH'         	=> 'Peut surveiller les tickets',
    'ACL_U_TRACKER_WATCH_EXPLAIN' 	=> 'Permet à l’utilisateur de s’abonner aux tickets et de recevoir des notifications pour les mises à jour.',

	// --- RC4: Watch System & UCP ---
    'UCP_TRACKERS_WATCH'      		=> 'Traqueurs',
    'UCP_TRACKERS_WATCH_LIST' 		=> 'Gérer la surveillance des tickets',
    'UCP_TRACKERS_WATCH_EXPLAIN'    => 'Ci-dessous se trouve une liste de tous les tickets auxquels vous êtes actuellement abonné. Vous recevrez des notifications pour tout nouveau commentaire ou changement de statut sur ces tickets.',
    'NO_WATCHED_TICKETS'            => 'Vous ne surveillez aucun ticket pour le moment.',
    'TICKET_WATCH_UPDATED'          => 'Les abonnements des tickets sélectionnés ont été mis à jour.',
    'STOP_WATCHING_TICKET'          => 'Arrêter la surveillance',
    'WATCH_TICKET'                  => 'Surveiller le ticket',
    'UNWATCH_TICKET'                => 'Ne plus surveiller le ticket',
    
    // Notifications toggle (UCP Settings)
    'NOTIFICATION_TYPE_NEXTGEN_TRACKERS_TICKET_UPDATE' => 'Un billet que vous surveillé a été mis à jour',
    
    // Board/Email Notification text
    'NOTIFICATION_TICKET_UPDATE'    => 'Ticket mis à jour : %s',
    
    // UI Elements for UCP Table
    'TICKET_TITLE'                  => 'Titre du ticket',
    'MARK_ALL'                      => 'Tout cocher',
    'UNMARK_ALL'                    => 'Tout décocher',
	
	'NO_TICKET'				=> 'Aucun ticket trouvé',
	'TRACKER_TYPES'			=> 'Types de traqueurs',
	'PROJECTS_MANAGEMENT'	=> 'Gestion des projets',
	'TRACKER_ICON'			=> 'Icône du traqueur',
	'TRACKER_ICON_EXPLAIN'	=> 'Entrez la classe de l’icône (par ex., <code>fa-music</code>). Consultez le site officiel pour voir tous les <a href="https://fontawesome.com/v4/icons/" target="_blank">Icônes disponibles</a>.<br /><br /><b>Exemples courants :</b><br />• <code>fa-globe</code> (Web/Général)<br />• <code>fa-shopping-cart</code> (Store)<br />• <code>fa-facebook</code> (Facebook)<br />• <code>fa-whatsapp</code> (WhatsApp)',
	'TRACKER_COLOR'			=> 'Couleur du traqueur',
	'TRACKER_UPDATED'		=> 'Traqueur mis à jour avec succès',
	'ADD_TRACKER' 			=> 'Ajouter un nouveau type de traqueur',
	'PARENT_TRACKER' 		=> 'Traqueur parent',
	
	'DELETE_TRACKER'            => 'Supprimer le type de traqueur',
	'TRACKER_ADDED'           	=> 'Traqueur ajouté',
	'TRACKER_DELETED'           => 'Traqueur supprimé',
	'TRACKER_DETAILS'			=> 'Détails du traqueur',
    'DELETE_TRACKER_EXPLAIN'    => 'Si ce traqueur a des projets associés, vous devez décider quoi en faire.',
    'DELETE_ALL_PROJECTS'       => 'Supprimer tous les projets associés',
    'MOVE_PROJECTS_TO'          => 'Déplacer les projets vers',
    'ACTION'                    => 'Action',
    'LOCKED'                    => 'Verrouillé',
    'DESCRIPTION'               => 'Description',
    'TRACKER'                   => 'Traqueur',
	
	// My Tickets & Global Links
	'MY_TICKETS'			=> 'Mes tickets',
	'NO_TICKETS_FOUND'		=> 'Vous n’avez pas encore créé de ticket.',
	'TOTAL_TICKETS'			=> '%d tickets',
	'TICKET_TITLE'			=> 'Titre du ticket',
	'VIEW_MY_TICKETS'		=> 'Voir vos tickets signalés',

	// Status & Logic Indicators (for future use in RC5/RC6)
	'STATUS'				=> 'Statut',
	'STATUS_NEW'			=> 'Nouveau ticket',
	'STATUS_CLOSED'			=> 'Fermé',
	'STATUS_RESOLVED'		=> 'Résolu',
	'STATUS_REVIEWED'		=> 'Étudié',
	'STATUS_DUPLICATE'		=> 'Dupliqué',

	// Table Headers
	'PROJECT'				=> 'Projet',
	'SEVERITY'				=> 'Gravité',
	'COMPONENT'				=> 'Composant',
	'POSTED'				=> 'Posté',
	
	// General Tracker terms
	'ATTACHMENTS_EXPLAIN'	=> 'Vous pouvez télécharger des fichiers ou des images pour fournir plus de détails sur le ticket.',
	'COLOR'					=> 'Coleur',
	'NAME'					=> 'Nom',
	'NEW'					=> 'Nouveau',
	'PROJECTS'				=> 'Projets',
	'TICKETS'				=> 'Tickets',
	'TIMESPAN_TICKETS'		=> 'Tickets par projet'
]);
