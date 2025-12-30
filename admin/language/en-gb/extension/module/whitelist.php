<?php
$_['heading_title']             = 'Opencart Security Admin Whitelist Access';

// Texts
$_['text_extension']            = 'Extensions';
$_['text_edit']                 = 'Add/Del IP Address';
$_['text_success']              = 'Success: You have modified this module!';
$_['text_whitelist_add']        = 'Add IP Address and Reason for this';
$_['text_whitelist_list']       = 'Admin panel is restricted to these IP addresses';
$_['text_delete_success']       = 'Success: All the table is clean!';
$_['text_settings']             = 'Extension settings';
$_['text_version']              = '[ Version: %s ]';
$_['text_whitelist_current_ip'] = 'Below you can create a list of IP\'s allowed to access the Admin Panel. Your current IP is <strong>%s</strong>';
$_['about_whitelist']           = '<strong>About Admin Whitelist Access:</strong> <p>Whitelisting is the practice of explicitly allowing some identified entities access to a particular privilege, service, mobility, access or recognition. It is the reverse of blacklisting. Many network admins set up IP address whitelists, or a IP address filter, to control who is allowed on their networks / applications / servers. This is used when encryption or authorization is not a practical solution or in tandem with encryption.</p>
<p>Some firewalls can be configured to only allow data-traffic from/ to certain (ranges of) IP-addresses. In this case, Admin Whitelist Access will allowed data-traffic to Opencart Admin Panel only for trusted users added to this list via IP Address.</p>';

// Entries
$_['entry_status']              = 'Extension';
$_['entry_response']            = 'Response';
$_['entry_ip']                  = 'IP Address';
$_['entry_comment']             = 'Comment';
$_['entry_cache_status']        = 'Cache';
$_['entry_cache_type']          = 'Cache Type';
$_['entry_cache_expire']        = 'Cache Expire';

// Placeholders
$_['placeholder_ip']            = 'Typing IPv4..';
$_['placeholder_comment']       = 'Typing comment..';
$_['placeholder_cache_expire']  = 'Typing expire in seconds..';

// Statuses
$_['status_activated']          = 'Activated';
$_['status_deactivated']        = 'Deactivated';

// Buttons
$_['button_whitelist_add']      = 'Add IP Address';
$_['button_truncate']           = 'Truncate Table';


// Columns
$_['column_id']                 = '№';
$_['column_ip']                 = 'IP Address';
$_['column_comment']            = 'Comment / Reason';
$_['column_date_added']         = 'Date Added';
$_['column_action']             = 'Action';

// Errors
$_['error_permission']          = 'Warning: You do not have permission to modify this module!';
$_['error_empty_ip']            = 'Warning: The <b>IP address</b> is required! Please, fill the field!';
$_['error_empty_comment']       = 'Warning: The <b>Comment / Reason</b> is required! Please, fill the field!';
$_['error_invalid_ip']          = 'Warning: The <b>IP address</b> is not valid!';
$_['error_comment']             = 'Warning: The <b>Comment / Reason</b> must be greater than 3 and less than 255 characters!';
$_['error_ip']                  = 'Warning: The <b>Comment / Reason</b> must be equal or less than 15 characters!';
$_['error_try_again']           = 'Warning: Something went wrong! Try again later.';
$_['error_hacking_attempt']     = 'Warning: Hacking attempts are not allowed! Nice try. Maybe next time. ;)';
$_['error_expire']              = 'Warning: Caching must be greater or equal 3600 seconds as minimal value or max 10 digits';
$_['error_cache_types']         = 'Warning: Available Cache Types: File,  Memcache, APCache';
$_['error_reinstall']           = 'Warning: <strong>Opencart Security Admin Whitelist Access</strong> doesn\'t works correctly. Please, reinstall the extension.';
?>
