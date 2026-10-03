<?php
namespace Grav\Plugin\Shortcodes;

use Grav\Common\Utils;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class iFrameShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('iframe', function(ShortcodeInterface $sc) {

            // Get shortcode content and parameters
            $str = $sc->getContent();

            $iframeurl= $sc->getParameter('url', $sc->getBbCode());

            // ratio="16:9" or "4:3" (as in Helios Course Hub), or the earlier aspectratio="16by9", "4by3", "21by9" or "1by1"; default stays 4:3
            $ratios = ['16:9' => '16by9', '4:3' => '4by3', '21:9' => '21by9', '1:1' => '1by1', '16by9' => '16by9', '4by3' => '4by3', '21by9' => '21by9', '1by1' => '1by1'];
            $iframeratio = $sc->getParameter('ratio', $sc->getParameter('aspectratio'));
            $iframeaspectratio = $ratios[$iframeratio] ?? '4by3';

            $iframetitle = htmlspecialchars($sc->getParameter('title', 'Embedded content'), ENT_QUOTES, 'UTF-8');

            if ($iframeurl) {
                $output = '<p><div class="embed-responsive embed-responsive-'.$iframeaspectratio.'"><iframe src="'.$iframeurl.'" title="'.$iframetitle.'" width="640" height="480"></iframe></div></p>';

                return $output;
            }

        });
    }
}
