<?php

  // custom relationships
  define( 'BUG_CUSTOM_RELATIONSHIP_ORIGIN_OF',       99 );
  define( 'BUG_CUSTOM_RELATIONSHIP_ORIGINATES_FROM', 98 );

  $g_relationships[ BUG_CUSTOM_RELATIONSHIP_ORIGIN_OF ] = array(
    '#forward' => true,
    '#complementary' => BUG_CUSTOM_RELATIONSHIP_ORIGINATES_FROM,
    '#description' => 'rel_origin_of',
    '#notify_added' => 'email_notification_title_for_action_origin_of_relationship_added',
    '#notify_deleted' => 'email_notification_title_for_action_origin_of_relationship_deleted',
    '#edge_style' => array ( 'style' => 'dashed', 'color' => '808080' ),
  );

  $g_relationships[ BUG_CUSTOM_RELATIONSHIP_ORIGINATES_FROM ] = array(
    '#forward' => false,
    '#complementary' => BUG_CUSTOM_RELATIONSHIP_ORIGIN_OF,
    '#description' => 'rel_originates_from',
    '#notify_added' => 'email_notification_title_for_action_originates_from_relationship_added',
    '#notify_deleted' => 'email_notification_title_for_action_originates_from_relationship_deleted',
    '#edge_style' => array ( 'style' => 'dashed', 'color' => '808080' ),
  );
?>
