<?php
/**
 * MyBB 1.8.x Czech Language Pack
 * Copyright 2017 MyBB Group & Czech translators (See: https://github.com/Cu8eeeR/MyBB_CZE-translation-1.8.x); All Rights Reserved (Všechna práva vyhrazena)
 *
 */

$l['board_settings'] = "Nastavení fóra";
$l['change_settings'] = "Změnit nastavení";
$l['change_settings_desc'] = "Tato část ti umožní spravovat všechna různá nastavení týkající se tvého fóra. To begin, select a group below to manage settings relating to that group.";
$l['add_new_setting'] = "Přidat nové nastavení";
$l['add_new_setting_desc'] = "V této části můžeš přidat nové nastavení pro tvé fórum.";
$l['modify_existing_settings'] = "Upravit nastavení";
$l['modify_existing_settings_desc'] = "Tato část ti umožnuje upravovat již existující nastavení tvého fóra.";
$l['add_new_setting_group'] = "Add New Setting Group";
$l['add_new_setting_group_desc'] = "This section allows you to create a setting group to categorize individual settings.";
$l['edit_setting_group'] = "Edit Setting Group";
$l['edit_setting_group_desc'] = "This section allows you to edit an existing setting group.";

$l['title'] = "Název";
$l['description'] = "Popis";
$l['group'] = "Kategorie";
$l['display_order'] = "Zobrazit pořadí";
$l['name'] = "Identifier";
$l['name_desc'] = "This unique identifier is used in the settings array to reference this setting (in scripts, translations, and templates).";
$l['group_name_desc'] = "This unique identifier is used for the translation system.";
$l['text'] = "Text";
$l['numeric_text'] = "Numeric Text";
$l['textarea'] = "Textarea";
$l['yesno'] = "Volba Ano / Ne";
$l['onoff'] = "On / Off Choice";
$l['select'] = "Selection Box";
$l['radio'] = "Radio Buttons";
$l['checkbox'] = "Checkboxes";
$l['language_selection_box'] = "Language Selection Box";
$l['forum_selection_box'] = "Forum Selection Box";
$l['forum_selection_single'] = "Single Forum Selection Box";
$l['group_selection_box'] = "Group Selection Box";
$l['group_selection_single'] = "Single Group Selection Box";
$l['adminlanguage'] = "Administration Language Selection Box";
$l['cpstyle'] = "Control Panel Style Selection Box";
$l['php'] = "Evaluated PHP";
$l['type'] = "Typ";
$l['extra'] = "Extra";
$l['extra_desc'] = "If this setting is a select, radio or check box enter a key paired (key=Item) list of items to show. Separate items with a new line. If PHP, enter the PHP to be evaluated.";
$l['value'] = "Value";
$l['insert_new_setting'] = "Vložit nové nastavení";
$l['edit_setting'] = "Upravit nastavení";
$l['delete_setting'] = "Smazat nastavení";
$l['setting_configuration'] = "Konfigurace nastavení";
$l['update_setting'] = "Aktualizovat nastavení";
$l['save_settings'] = "Uložit nastavení";
$l['setting_groups'] = "Setting Groups";
$l['bbsettings'] = "Nastavení";
$l['insert_new_setting_group'] = "Insert New Setting Group";
$l['setting_group_setting'] = "Setting Group / Setting";
$l['order'] = "Pořadí";
$l['delete_setting_group'] = "Delete Setting Group";
$l['save_display_orders'] = "Save Display Orders";
$l['update_setting_group'] = "Update Setting Group";
$l['modify_setting'] = "Modify Setting";
$l['search'] = "Hledat";
$l['plugin_settings'] = "Nastavení pluginu";

$l['show_all_settings'] = "Show All Settings";
$l['settings_search'] = "Search For Settings";

$l['confirm_setting_group_deletion'] = "Jsi si naprosto jistý, že chceš vymazat nastavení skupiny? (možná pro skupinu)";
$l['confirm_setting_deletion'] = "Jsi si naprosto jistý, že chceš smazat tohle nastavení?";

$l['error_missing_title'] = "Nezadal si název pro tohle nastavení.";
$l['error_missing_group_title'] = "You did not enter a title for this setting group";
$l['error_invalid_gid'] = "You did not select a valid group to place this setting in";
$l['error_invalid_gid2'] = "You have followed a link to an invalid setting group. Please ensure it exists.";
$l['error_missing_name'] = "You did not enter an identifier for this setting";
$l['error_missing_group_name'] = "You did not enter an identifier for this setting group";
$l['error_invalid_type'] = "You did not select a valid type for this setting";
$l['error_invalid_sid'] = "The specified setting does not exist";
$l['error_duplicate_name'] = "The identifier specified has already been used for the \"{1}\" setting -- it must be unique";
$l['error_duplicate_group_name'] = "The identifier specified has already been used for the \"{1}\" setting group -- it must be unique";
$l['error_no_settings_found'] = "No settings were found for the specified search phrase.";
$l['error_cannot_edit_default'] = "Default settings and groups may not be edited or removed.";
$l['error_cannot_edit_php'] = "This is a special type of setting which cannot be edited.";
$l['error_ajax_search'] = "There was a problem searching for settings:";
$l['error_ajax_unknown'] = "An unknown error occurred while searching for settings.";
$l['error_chmod_settings_file'] = "The settings file \"./inc/settings.php\" isn't writable. Please CHMOD to 777.<br />For more information on CHMODing, see the <a href=\"https://docs.mybb.com/1.8/administration/security/file-permissions\" target=\"_blank\">MyBB Docs</a>.";

$l['success_setting_added'] = "Nastavení bylo úspěšně přidáno.";
$l['success_setting_updated'] = "Nastavení bylo úspěšně upraveno";
$l['success_setting_deleted'] = "Vybrané nastavení bylo úspěšně vymazáno.";
$l['success_settings_updated'] = "The settings have been updated successfully.";
$l['success_settings_updated_hiddencaptchaimage'] = '<div class="smalltext" style="font-weight: normal;">Please note that the <strong>Hidden CAPTCHA field</strong> setting was reverted to <strong>{1}</strong> due to a conflict with the <strong>{2}</strong> field in the registration form.</div>';
$l['success_settings_updated_username_method'] = '<div class="smalltext" style="font-weight: normal;">Please note that the <b>Allowed Login Methods</b> setting was not updated due to multiple users using the same e-mail address at this time.</div>';
$l['success_settings_updated_allowmultipleemails'] = '<div class="smalltext" style="font-weight: normal;">Please note that the <b>Allow emails to be registered multiple times?</b> setting can\'t be enabled because the <b>Allowed Login Methods</b> setting allows users to login by e-mail address.</div>';
$l['success_settings_updated_captchaimage'] = '<div class="smalltext" style="font-weight: normal;">Please note that the <strong>CAPTCHA Images for Registration &amp; Posting</strong> setting was reverted to <strong>MyBB Default Captcha</strong> due to the lack of public/private key(s).</div>';
$l['success_display_orders_updated'] = "The setting display orders have been updated successfully.";
$l['success_setting_group_added'] = "The setting group has been created successfully.";
$l['success_setting_group_updated'] = "The setting group has been updated successfully.";
$l['success_setting_group_deleted'] = "The selected setting group has been deleted successfully.";
$l['success_duplicate_settings_deleted'] = "All duplicate setting groups have been deleted successfully.";

$l['searching'] = 'Hledám…';
$l['search_error'] = 'Vyskytl se error při načítání výsledků vyhledávání:';
$l['search_done'] = 'Hotovo!';
