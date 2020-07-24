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
            $badgeurl= $sc->getParameter('url', $sc->getBbCode());

            if (empty($badgetype)) {
              $badgetype = "secondary";
            }

            if (!empty($badgelabel) && !empty($badgeurl)) {
                $output = '<a href="'.$badgeurl.'" class="badge badge-'.$badgetype.'">'.$badgelabel.'</a>';
                return $output;
            } elseif (!empty($badgelabel)) {
                $output = '<span class="badge badge badge-'.$badgetype.'">'.$badgelabel.'</span>';
                return $output;
            }

        });
    }
}
