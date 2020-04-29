<?php
namespace Grav\Plugin\Shortcodes;

use Grav\Common\Utils;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class BadgeShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('badge', function(ShortcodeInterface $sc) {

            // Get shortcode content and parameters
            $str = $sc->getContent();

            $badgetype= $sc->getParameter('type', $sc->getBbCode());
            $badgelabel= $sc->getParameter('label', $sc->getBbCode());

            if (empty($badgetype)) {
              $badgetype = "secondary";
            }

            if (!empty($badgelabel)) {
                $output = ' <span class="badge badge-pill badge-'.$badgetype.'">'.$badgelabel.'</span>';

                return $output;
            }

        });
    }
}
