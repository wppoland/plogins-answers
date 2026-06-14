<?php
/**
 * Uninstall cleanup for Answers.
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
