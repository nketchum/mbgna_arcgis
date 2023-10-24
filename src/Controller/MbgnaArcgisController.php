<?php

namespace Drupal\mbgna_arcgis\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * Returns responses for MBGNA ArcGIS routes.
 */
class MbgnaArcgisController extends ControllerBase {

  public function build(Request $request) {

    $response = new Response();
    $response->headers->set('Expires', 'Sun, 19 Nov 1978 05:00:00 GMT');
    $response->headers->set('Cache-Control', 'must-revalidate');
    $response->headers->set('Content-Type', 'text/html; charset=utf-8');
    $response->headers->set('X-FRAME-OPTIONS', 'Allow-From https://some.othersite.com');
    // Response.AddHeader("X-FRAME-OPTIONS", "SAMEORIGIN"); or response.addHeader("X-FRAME-OPTIONS", "Allow-From https://some.othersite.com");

    $url = "https://storymaps.arcgis.com/stories/d253fe38bd5f4da2af959e14e26b88d2";
    $content = file_get_contents($url);
    $content = str_replace('="/', '="https://storymaps.arcgis.com/', $content);

    $response->setContent($content);
    return $response;
  }

}
