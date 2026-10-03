<?php
namespace Grav\Plugin\Shortcodes;

use Grav\Common\Utils;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class GoogleSlidesShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('googleslides', function(ShortcodeInterface $sc) {

            // Get shortcode content and parameters
            $str = $sc->getContent();

            $googleslidesurl= $sc->getParameter('url', $sc->getBbCode());

            // ratio="16:9" or "4:3" (as in Helios Course Hub); default stays 16:9
            $googleslidesaspectratio = ($sc->getParameter('ratio') === '4:3') ? '4by3' : '16by9';

            $googleslidestitle = htmlspecialchars($sc->getParameter('title', 'Google Slides presentation'), ENT_QUOTES, 'UTF-8');

            if (!$googleslidesurl) {
                $googleslidesurl = $str;
            }

            if ($googleslidesurl) {
                return '<span class="embed-responsive embed-responsive-'.$googleslidesaspectratio.'"><iframe src="'.$googleslidesurl.'" title="'.$googleslidestitle.'" frameborder="0" width="960" height="569" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe></span>';
            }

        });
    }
}
