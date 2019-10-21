<?php
namespace Grav\Plugin\Shortcodes;

use Grav\Common\Utils;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

// [stopnote title="Important Reminder" message="Midterm exam is on June 20th."]

class WCStopNoteShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('stopnote', function(ShortcodeInterface $sc) {

            // Get shortcode content and parameters
            $str = $sc->getContent();

            $stopnotetitle = $sc->getParameter('title', $sc->getBbCode());
            $stopnotemessage = $sc->getParameter('message', $sc->getBbCode());

            if (!empty($stopnotetitle)) {
                $output = '<p><stop-note title="'.$stopnotetitle.'"><span slot="message">'.$stopnotemessage.'</span></stop-note></p>';

                return $output;
            }

        });
    }
}
