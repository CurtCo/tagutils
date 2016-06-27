<?php
namespace CurtCo\Tagutils;

/**
 * Generate meta tags for use in Drupal #attached.
 */
class Metatag {

  /**
   * Build a single tag with a name & content.
   *
   * @param string $name
   *   Meta name="" value.
   * @param string $content
   *   Meta content="" value.
   *
   * @return array
   *   Drupal #attached-able array.
   */
  public static function build($name, $content) {
    $built = [
      [
        '#type' => 'html_tag',
        '#tag' => 'meta',
        '#value' => '',
        '#attributes' => [
          'name' => $name,
          'content' => $content,
        ],
      ],
      'meta_' . $name,
    ];

    return $built;
  }

}
