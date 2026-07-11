<?php
namespace Grav\Plugin\Shortcodes;

use Grav\Common\Utils;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class EmbedlyShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('embedly', function(ShortcodeInterface $sc) {

            // Get shortcode content and parameters
            $str = $sc->getContent();

            $embedlycardurl = $sc->getParameter('url', $sc->getBbCode());

            if (!$embedlycardurl) {
                $embedlycardurl = $str;
            }

            if (!$embedlycardurl) {
                return '';
            }

            $mode = $this->config->get('theme.dark_mode.mode', 'disabled');
            $darkAttr = ($mode === 'enabled') ? ' data-card-theme="dark"' : '';

            if ($mode === 'auto') {
                $this->grav['assets']->addInlineJs(
                    "if(window.matchMedia&&window.matchMedia('(prefers-color-scheme: dark)').matches){document.querySelectorAll('a.embedly-card').forEach(function(e){e.setAttribute('data-card-theme','dark')})}"
                );
            }

            $this->grav['assets']->addJs('//cdn.embedly.com/widgets/platform.js', ['loading' => 'async']);

            return '<a class="embedly-card" data-card-controls="0" data-card-align="left"' . $darkAttr . ' href="' . $embedlycardurl . '"></a>';

        });
    }
}
