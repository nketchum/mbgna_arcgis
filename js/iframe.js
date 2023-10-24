/**
 * @file
 * A JavaScript file that autoplays banner videos.
 */
(function($, Drupal, once) {
  Drupal.behaviors.mbgna_arcgis.iframe = {
    attach(context, settings) {
      function iFrameLoaded() {
        var iframe = document.getElementById('arcgis_iframe');
        if (iframe) {
          // here you can make the height, I delete it first, then I make it again
          iframe.height = "";
          iframe.height = iframe.contentWindow.document.body.scrollHeight + "px";
        }
      }
    }
  };
})(jQuery, Drupal, once);
