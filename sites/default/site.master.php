<?php

$conf['install_profile'] = 'minimal';
$conf['master_version'] = 2;
$conf['master_modules'] = array(
  'base' => array(
    'admin_menu_toolbar',
    'adminrole',
    'backup_migrate',
    'better_formats',
    'block',
    'bootstrap',
    'contact',
    'contextual',
    'date',
//     'draggableviews',
    'ds',
    'ds_extras',
    'ds_format',
    'email_registration',
    'entity_token',
    'entityreference',
    'features',
    'field_group',
    'gadd',
    'globalredirect',
    'gnode',
    'googleanalytics',
    'group',
    'imagecache_token',
    'jquery_update',
    'invite',
    'invite_by_email',
    'invite_notifications',
//     'lightbox2',
    'link',
    'list',
    'logintoboggan',
    'media_bulk_upload',
    'media_internet',
    'media_migrate_file_types',
    'media_wysiwyg_view_mode',
    'menu',
    'module_filter',
    'multiform',
    'nice_menus',
    'noindex_external_links',
    'number',
    'pathauto',
    'php',
    'plupload',
    'redirect',
    'remove_ron',
    'strongarm',
    'subpathauto',
    'taxonomy',
    'update',
    'views',

// GDG modules
    'gdg_group_login',
    'ldstabs',
  ),

  'local' => array(
    'dblog',
    'devel',
    'diff',
    'ds_devel',
    'ds_ui',
    'field_ui',
    'stage_file_proxy',
    'views_ui',
  ),

  'dev' => array(
    'dblog',
    'devel',
    'diff',
    'ds_devel',
    'ds_ui',
    'field_ui',
    'stage_file_proxy',
    'views_ui',
  ),

  'prod' => array(),

);
$conf['master_uninstall_blacklist'] = array(
  'base' => array(
    0 => 'ckeditor',
  ),
);
$conf['master_removable_blacklist'] = array(
  0 => 'modules/*',
);
