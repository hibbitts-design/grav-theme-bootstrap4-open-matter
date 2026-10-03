<?php
namespace Grav\Plugin\Shortcodes;

use Grav\Common\Utils;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class PDFShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('pdf', function(ShortcodeInterface $sc) {

            // Get shortcode content and parameters
            $str = $sc->getContent();

            $pdfurl= $sc->getParameter('url', $sc->getBbCode());

            // ratio="16:9", "4:3" or "portrait" (letter/A4, as in Helios Course Hub); default stays 4:3
            $pdfratio = $sc->getParameter('ratio');
            if ($pdfratio === '16:9') {
                $pdfaspectratio = '16by9';
            } elseif ($pdfratio === 'portrait') {
                $pdfaspectratio = 'portrait';
                // Bootstrap 4 has no portrait ratio, so add one (11 x 8.5 letter page) - added via shortcode-core so it is kept for cached pages
                $this->shortcode->addAssets('inlineCss', '.embed-responsive-portrait::before{padding-top:129.4118%}');
            } else {
                $pdfaspectratio = '4by3';
            }

            $pdftitle = htmlspecialchars($sc->getParameter('title', 'PDF document'), ENT_QUOTES, 'UTF-8');

            if (!$pdfurl) {
                $pdfurl = $str;
            }

            if ($pdfurl) {
                return '<p><div class="embed-responsive embed-responsive-'.$pdfaspectratio.'"><iframe src="https://docs.google.com/gview?url='.$pdfurl.'&embedded=true" title="'.$pdftitle.'" width="640" height="480"></iframe></div></p>';
            }

        });
    }
}
