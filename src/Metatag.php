<?php
namespace CurtCo\Tagutils;

/**
 * Generate meta tags for use in Drupal #attached.
 */
class Metatag {

  /**
   * Build a single tag with a name & value.
   *
   * @param string $name
   *   Meta name="" value.
   * @param string $value
   *   Meta value="" value.
   *
   * @return array
   *   Drupal #attached-able array.
   */
  public static function build($name, $value) {
    $built = [
      [
        '#type' => 'html_tag',
        '#tag' => 'meta',
        '#value' => '',
        '#attributes' => [
          'name' => $name,
          'value' => $value,
        ],
      ],
      'meta_' . $name,
    ];

    return $built;
  }

}
