<?php
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class HideIfEmbeddedShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('hideifembedded', static function(ShortcodeInterface $sc) {
            return '<div class="chromeless-hide">' . $sc->getContent() . '</div>';
        });
    }
}
