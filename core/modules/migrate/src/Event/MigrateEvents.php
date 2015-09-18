<?php

/**
 * @file
 * Contains Drupal\migrate\Event\MigrateEvents.
 */

namespace Drupal\migrate\Event;

/**
 * Defines events for the migration system.
 *
 * @see \Drupal\migrate\Event\MigrateMapSaveEvent
 * @see \Drupal\migrate\Event\MigrateMapDeleteEvent
 * @see \Drupal\migrate\Event\MigrateImportEvent
 * @see \Drupal\migrate\Event\MigratePreRowSaveEvent
 * @see \Drupal\migrate\Event\MigratePostRowSaveEvent
 */
final class MigrateEvents {

  /**
   * Name of the event fired when saving to a migration's map.
   *
   * This event allows modules to perform an action whenever the disposition of
   * an item being migrated is saved to the map table. The event listener method
   * receives a \Drupal\migrate\Event\MigrateMapSaveEvent instance.
   *
   * @Event
   *
   * @see \Drupal\migrate\Event\MigrateMapSaveEvent
   *
   * @var string
   */
  const MAP_SAVE = 'migrate.map_save';

  /**
   * Name of the event fired when removing an entry from a migration's map.
   *
   * This event allows modules to perform an action whenever a row is deleted
   * from a migration's map table (implying it has been rolled back). The event
   * listener method receives a \Drupal\migrate\Event\MigrateMapDeleteEvent instance.
   *
   * @Event
   *
   * @see \Drupal\migrate\Event\MigrateMapDeleteEvent
   *
   * @var string
   */
  const MAP_DELETE = 'migrate.map_delete';

  /**
   * Name of the event fired when beginning a migration import operation.
   *
   * This event allows modules to perform an action whenever a migration import
   * operation is about to begin. The event listener method receives a
   * \Drupal\migrate\Event\MigrateImportEvent instance.
   *
   * @Event
   *
   * @see \Drupal\migrate\Event\MigrateImportEvent
   *
   * @var string
   */
  const PRE_IMPORT = 'migrate.pre_import';

  /**
   * Name of the event fired when finishing a migration import operation.
   *
   * This event allows modules to perform an action whenever a migration import
   * operation is completing. The event listener method receives a
   * \Drupal\migrate\Event\MigrateImportEvent instance.
   *
   * @Event
   *
   * @see \Drupal\migrate\Event\MigrateImportEvent
   *
   * @var string
   */
  const POST_IMPORT = 'migrate.post_import';

  /**
   * Name of the event fired when about to import a single item.
   *
   * This event allows modules to perform an action whenever a specific item
   * is about to be saved by the destination plugin. The event listener method
   * receives a \Drupal\migrate\Event\MigratePreSaveEvent instance.
   *
   * @Event
   *
   * @see \Drupal\migrate\Event\MigratePreRowSaveEvent
   *
   * @var string
   */
  const PRE_ROW_SAVE = 'migrate.pre_row_save';

  /**
   * Name of the event fired just after a single item has been imported.
   *
   * This event allows modules to perform an action whenever a specific item
   * has been saved by the destination plugin. The event listener method
   * receives a \Drupal\migrate\Event\MigratePostRowSaveEvent instance.
   *
   * @Event
   *
   * @see \Drupal\migrate\Event\MigratePostRowSaveEvent
   *
   * @var string
   */
  const POST_ROW_SAVE = 'migrate.post_row_save';

}