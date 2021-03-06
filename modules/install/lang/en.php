<?php
$lang->introduce_title = 'RhymiX Installation';
$lang->enviroment_gather = 'Agreement on gathering installation environment information';
$lang->input_dbinfo_by_dbtype = 'Input %s info';
$lang->install_progress_menu['language'] = 'Select language';
$lang->install_progress_menu['license_agreement'] = 'License Agreement';
$lang->install_progress_menu['condition'] = 'Environment Check';
$lang->install_progress_menu['ftp'] = 'FTP Setup';
$lang->install_progress_menu['dbSelect'] = 'Choose database type';
$lang->install_progress_menu['dbInfo'] = 'DB Setup';
$lang->install_progress_menu['configInfo'] = 'Configuration';
$lang->install_progress_menu['adminInfo'] = 'Create Administrator Account';
$lang->install_condition_enable = 'Your server is compatible with RhymiX.';
$lang->install_condition_disable = 'Your server does not support RhymiX.';
$lang->install_details = 'Details';
$lang->install_simply = 'Simply';
$lang->advanced_setup = 'Advanced Setup';
$lang->install_ftp_reason = 'Reason of FTP info is needed.';
$lang->install_checklist_title['php_version'] = 'PHP Version';
$lang->install_checklist_title['permission'] = 'files folder permissions';
$lang->install_checklist_title['xml'] = 'xml / simplexml';
$lang->install_checklist_title['curl'] = 'curl';
$lang->install_checklist_title['iconv'] = 'iconv / mbstring';
$lang->install_checklist_title['json'] = 'json';
$lang->install_checklist_title['gd'] = 'gd';
$lang->install_checklist_title['mcrypt'] = 'mcrypt / openssl';
$lang->install_checklist_title['session'] = 'session.auto_start setting';
$lang->install_checklist_title['db_support'] = 'DB support';
$lang->install_checklist_desc['php_version'] = '[Required] RhymiX supports only PHP Version %s or higher';
$lang->install_checklist_desc['php_version_warning'] = '[Recommend] RhymiX recommends only PHP Version %s or higher';
$lang->install_checklist_desc['permission'] = '[Required] RhymiX installation path or ./files directory\'s permission must be 777';
$lang->install_checklist_desc['xml'] = '[Required] XML Library is needed for XML communication';
$lang->install_checklist_desc['session'] = '[Required] PHP setting file\'s (php.ini) \'Session.auto_start\' must equal to zero in order for RhymiX to use the session';
$lang->install_checklist_desc['iconv'] = 'Iconv should be installed in order to convert between UTF-8 and other language sets';
$lang->install_checklist_desc['gd'] = 'GD Library should be installed in order to use functions to convert images';
$lang->install_checklist_xml = 'Install XML Library';
$lang->install_without_xml = 'XML Library is not installed';
$lang->install_checklist_gd = 'Install GD Library';
$lang->install_without_gd = 'GD Library is not installed for image convertion';
$lang->install_without_iconv = 'Iconv Library is not installed for processing characters';
$lang->install_session_auto_start = 'Possible problems might occur due to the php setting. session.auto_start is equal to 1';
$lang->install_permission_denied = 'Installation path\'s permission doesn\'t equal to 777';
$lang->install_notandum = 'You can edit this information in the admin module after installation.';
$lang->cmd_install_refresh_page = 'Refresh';
$lang->cmd_install_next = 'Continue installation';
$lang->cmd_ignore = 'Ignore';
$lang->cmd_recommended = 'Recommended';
$lang->db_desc['mysqli'] = 'Use MySQL as a database via the mysqli extension.<br />Use the MyISAM storage engine, which does not support transactions.';
$lang->db_desc['mysqli_innodb'] = 'Use MySQL as a database via the mysqli extension.<br />Use the InnoDB storage engine, which supports transactions and higher concurrency.';
$lang->db_desc['mysql'] = 'Use MySQL as a database via PHP\'s mysql_* functions.<br />Use the MyISAM storage engine, which does not support transactions.';
$lang->db_desc['mysql_innodb'] = 'Use MySQL as a database via PHP\'s mysql_* functions.<br />Use the InnoDB storage engine, which supports transactions and higher concurrency.';
$lang->db_desc['cubrid'] = 'Use CUBRID as a database. See <a href="http://www.cubrid.org/wiki_tutorials/entry/cubrid-installation-instructions" target="_blank">Manual</a> for more info';
$lang->db_desc['mssql'] = 'Use Microsoft SQL Server as a database.';
$lang->can_use_when_installed = 'Not installed on this server';
$lang->form_title = 'Database &amp; Administrator Information';
$lang->db_title = 'Please input DB information';
$lang->db_type = 'DB Type';
$lang->select_db_type = 'Please select the DB you want to use.';
$lang->db_hostname = 'DB Hostname';
$lang->db_port = 'DB Port';
$lang->db_userid = 'DB ID';
$lang->db_password = 'DB PW';
$lang->db_name = 'DB Name';
$lang->db_database_file = 'DB Database File';
$lang->db_table_prefix = 'Table Prefix';
$lang->db_info_desc = 'Please check database server information with your server administrator.';
$lang->db_prefix_desc = 'You can customize the table prefix. We recommend that you use lowercase alphabets only.';
$lang->admin_title = 'Administrator Info';
$lang->env_title = 'Settings';
$lang->use_optimizer = 'Enable Optimizer';
$lang->about_optimizer = 'If optimizer is enabled, users can quickly access to this site, since multiple CSS / JS files are put together and compressed before transmission. <br /> Nevertheless, this optimization might be problematic according to CSS or JS. If you disable it, it would work properly though it would work slower.';
$lang->use_rewrite = 'mod_rewrite';
$lang->use_sso = '<abbr title="Single Sign On">SSO</abbr>';
$lang->about_rewrite = 'If web server provides mod_rewrite, long URL such as <em>http://blah/</em><strong>?document_srl=123</strong> can be shortened like <em>http://blah/</em><strong>123</strong>';
$lang->checking_rewrite = 'Checking whether "Friendly URL" feature is available...';
$lang->disable_rewrite = '"Friendly URL" feature is not available. Please check with the server administrator about mod_rewrite module support.';
$lang->disable_rewrite_can_proceed = 'It is OK to continue to install and use RhymiX without the "Friendly URL" feature.';
$lang->about_nginx_rewrite = 'To use this feature at nginx, you need to configure rewrite. See <a href="https://github.com/xpressengine/xe-core/wiki/Nginx-rewite-%EC%84%A4%EC%A0%95%ED%95%98%EA%B8%B0" target="_blank">here</a>.';
$lang->time_zone = 'Time Zone';
$lang->about_time_zone = 'If the server time is different from your time zone, you can use this option to display times in your time zone.';
$lang->use_ssl = 'SSL';
$lang->ssl_options['none'] = 'Never';
$lang->ssl_options['optional'] = 'Optional';
$lang->ssl_options['always'] = 'Always';
$lang->about_database_file = 'Sqlite saves data in a file. Location of the database file should be unreachable by web<br/><span style="color:red">Data file should be inside the permission of 777.</span>';
$lang->success_installed = 'Installation has been completed.';
$lang->msg_cannot_proc = 'Installation environment is not proper to proceed.';
$lang->msg_already_installed = 'RhymiX is already installed.';
$lang->msg_dbconnect_failed = 'An error has occurred while connecting to DB. Please check DB information again.';
$lang->msg_table_is_exists = 'Table is already created in the DB. Config file is recreated.';
$lang->msg_install_completed = 'Installation has been completed. Thank you for choosing RhymiX.';
$lang->msg_install_failed = 'An error has occurred while creating installation file.';
$lang->msg_create_table_failed = 'Failed to create database tables.';
$lang->ftp_get_list = 'Get List';
$lang->ftp_form_title = 'FTP Account Information';
$lang->ftp = 'FTP';
$lang->ftp_host = 'FTP hostname';
$lang->ftp_port = 'FTP server port';
$lang->about_ftp_password = 'FTP password will not be stored.';
$lang->cmd_check_ftp_connect = 'Check FTP Connection';
$lang->msg_safe_mode_ftp_needed = 'When safe_mode setting of PHP is On, you should enter FTP account information to install RhymiX.';
$lang->msg_safe_mode_ftp_needed2 = 'Easy installation or update of module is enabled.';
$lang->msg_safe_mode_ftp_config = 'This information is stored in <strong>files/config/ftp.config.php</strong>. You can add, change or delete this on the Settings page after the installation.';
$lang->msg_ftp_not_connected = 'Connection to the localhost via FTP failed. Please check the port number and whether the FTP service is available.';
$lang->msg_ftp_invalid_auth_info = 'Authentication failed. Please check the username and password.';
$lang->msg_ftp_mkdir_fail = 'Failed to create a directory using FTP. Please check the permission of FTP account.';
$lang->msg_ftp_chmod_fail = 'Chmod failed. Please check the permission and configuration of the FTP server.';
$lang->msg_ftp_connect_success = 'Successfully connected to FTP server and authenticated.';
$lang->ftp_path_title = 'FTP Path Information';
$lang->msg_ftp_installed_realpath = 'Absolute Path of RhymiX';
$lang->msg_ftp_installed_ftp_realpath = 'RhymiX installation path';
$lang->db_config_php_validation = 'Validation of db.config.php';
$lang->msg_possible_only_file = 'You can upload files only.';
