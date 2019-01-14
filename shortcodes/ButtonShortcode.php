<?php
namespace Grav\Plugin\Shortcodes;

use Grav\Common\Utils;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class ButtonShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('button', function(ShortcodeInterface $sc) {

            // Get shortcode content and parameters
            $str = $sc->getContent();

            $buttonurl= $sc->getParameter('url', $sc->getBbCode());
            $buttontarget= $sc->getParameter('target', $sc->getBbCode());
            $buttontype= $sc->getParameter('type', $sc->getBbCode());
            $buttonsize= $sc->getParameter('size', $sc->getBbCode());
            $buttonclasses= $sc->getParameter('classes', $sc->getBbCode());
            $buttonlabel= $sc->getParameter('label', $sc->getBbCode());

            if (empty($buttontype)) {
              $buttontype = "primary";
            }

            if (!empty($buttonurl) && !empty($buttonlabel)) {
                $output = '<a href="'.$buttonurl.'" target="'.$buttontarget.'" class="btn btn-'.$buttontype.' btn-'.$buttonsize.' '.$buttonclasses.'">'.$buttonlabel.'</a>';

                return $output;
            }

        });
    }
}
