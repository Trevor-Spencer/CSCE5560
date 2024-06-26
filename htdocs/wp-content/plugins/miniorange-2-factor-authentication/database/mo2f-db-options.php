<?php
/**
 * File contains super global variables.
 *
 * @package miniOrange-2-factor-authentication/database
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$GLOBALS['mo2f_enable_brute_force']                         = false;
$GLOBALS['mo2f_show_remaining_attempts']                    = false;
$GLOBALS['mo_wpns_enable_ip_blocked_email_to_admin']        = false;
$GLOBALS['mo2f_activate_plugin']                            = 1;
$GLOBALS['mo2f_login_option']                               = 1;
$GLOBALS['mo2f_number_of_transactions']                     = 1;
$GLOBALS['mo2f_set_transactions']                           = 0;
$GLOBALS['mo2f_enable_forgotphone']                         = 0;
$GLOBALS['mo2f_enable_2fa_for_users']                       = 1;
$GLOBALS['mo2f_enable_xmlrpc']                              = 0;
$GLOBALS['mo2f_custom_plugin_name']                         = 'miniOrange 2-Factor';
$GLOBALS['mo2f_show_sms_transaction_message']               = 0;
$GLOBALS['mo2f_enforce_strong_passswords_for_accounts']     = 'all';
$GLOBALS['mo2f_inline_registration']                        = 1;
$GLOBALS['mo2f_nonce_enable_configured_methods']            = 1;
$GLOBALS['mo_wpns_scan_initialize']                         = 1;
$GLOBALS['mo_wpns_2fa_with_network_security']               = 0;
$GLOBALS['mo_wpns_2fa_with_network_security_popup_visible'] = 1;
$GLOBALS['mo2f_two_factor_tour']                            = -1;
$GLOBALS['mo2f_planname']                                   = '';
$GLOBALS['cmVtYWluaW5nT1RQ']                                = 30;
$GLOBALS['bGltaXRSZWFjaGVk']                                = 0;
$GLOBALS['mo2f_is_NC']                                      = 1;
$GLOBALS['mo2f_is_NNC']                                     = 1;
$GLOBALS['mo2f_enforce_strong_passswords']                  = false;
$GLOBALS['mo2f_enable_debug_log']                           = 0;
$GLOBALS['mo2f_grace_period']                               = 'off';
$GLOBALS['mo2f_grace_period_type']                          = 'hours';
$GLOBALS['mo2f_enable_email_change']                        = 0;
