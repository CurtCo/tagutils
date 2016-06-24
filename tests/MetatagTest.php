<?php
namespace CurtCo\Tagutils\Tests;

use CurtCo\Tagutils\Metatag;

/**
 * @coversDefaultClass \CurtCo\Tagutils\Metatag
 */
class MetatagTest extends \PHPUnit_Framework_TestCase {

  /**
   * @covers ::build
   */
  public function testBuild() {
    $name = 'Asset Type';
    $value = 'EPO Agent';

    $expected = [
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

    $built = Metatag::build($name, $value);

    $this->assertEquals($expected, $built);
  }

}
