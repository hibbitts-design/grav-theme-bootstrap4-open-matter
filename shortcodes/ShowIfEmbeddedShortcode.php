<?php
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class ShowIfEmbeddedShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('showifembedded', static function(ShortcodeInterface $sc) {
            return '<div class="chromeless-show">' . $sc->getContent() . '</div>';
        });
    }
}
