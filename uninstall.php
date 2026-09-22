<?php
/**
 * Uninstall cleanup for Respondo.
 *
 * Runs when the plugin is deleted from wp-admin. Removes the plugin's options.
 * Per-product FAQ meta (_answers_faqs) is intentionally left in place: it is
 * user content attached to products that may be reused if the plugin is
 * reinstalled.
 *
 * @package Answers
 */

declare(strict_types=1);

defined('WP_UNINSTALL_PLUGIN') || exit;

delete_option('answers_settings');
delete_option('answers_db_version');

// The PRO banner's dismissal is stored per user, so it belongs to the
// plugin rather than to the site content. User meta is global, not
// per-site, which is why this uses delete_metadata's \$delete_all rather
// than a loop over the users of one blog.
delete_metadata('user', 0, 'answers_pro_banner_dismissed', '', true);
