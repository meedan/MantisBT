<?php
  $g_status_colors = array(
    'new' => '#ffa0a0', # red,
    'assigned' => '#c8c8ff', # blue
    'feedback needed' => '#DC50FF', #
    'in progress' => '#ff50a8', # purple
    'pending test deployment' => '#ffd850', # orange
    'resolved' => '#99FF99', # pale dull green
    'ready for production' => '#00CC00', # dark hard green
    'deployed production' => '#00FF00', # green
    'closed' => '#e8e8e8', # light gray
  );
  $g_status_enum_string = '10:new,50:assigned,55:feedback needed,60:in progress,70:pending test deployment,80:resolved,84:ready for production,85:deployed production,90:closed';
  $g_news_enabled = ON;
  $g_preview_attachments_inline_max_size = 1024 * 1024;
  $g_allow_signup = OFF;
  $g_session_validation = OFF;
  $g_form_security_validation = OFF;

  $g_window_title = 'Meedan Mantis';
  $g_logo_image = 'images/meedan.png';
  $g_favicon_image = 'images/meedan.ico';

  $g_view_summary_threshold = REPORTER;

  include_once('config_inc.local.php');
?>
