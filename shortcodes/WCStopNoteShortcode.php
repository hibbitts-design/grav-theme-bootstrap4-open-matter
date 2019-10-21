<?php
namespace Grav\Plugin\Shortcodes;

use Grav\Common\Utils;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

// [stopnote title="Important Reminder" message="Midterm exam is on June 20th."]

class WCStopNoteShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('wc', function(ShortcodeInterface $sc) {

            // Get shortcode content and parameters
            $str = $sc->getContent();

            $stopnotetitle = $sc->getParameter('title', $sc->getBbCode());
            $tag = $sc->getParameter('tag', $sc->getBbCode());
            $stopnotemessage = $sc->getParameter('message', $sc->getBbCode());

            if (!empty($stopnotetitle)) {
                $output = '<p><'.$tag.' title="'.$stopnotetitle.'"><span slot="message">'.$stopnotemessage.'</span></'.$tag.'></p>';

                return $output;
            }

        });
    }
}
