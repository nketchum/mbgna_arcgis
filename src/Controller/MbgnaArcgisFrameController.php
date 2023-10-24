<?php

namespace Drupal\mbgna_arcgis\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Render\Markup;

/**
 * Returns responses for MBGNA ArcGIS routes.
 */
class MbgnaArcgisFrameController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $url = "https://storymaps.arcgis.com/stories/044dd5eadbab4fd9a8ffc20babc91e3ds";
    $content = file_get_contents($url);
    $content = '<iframe id="arcgis_iframe" src="'. $url .'" onload="iFrameLoaded()"></iframe>';

    $build['content'] = [
      '#type' => 'markup',
      '#markup' => Markup::create($content),
      '#attached' => array(
        'library' => array(
          'mbgna_arcgis/iframe',
        ),
      ),
    ];

    return $build;
  }

}
