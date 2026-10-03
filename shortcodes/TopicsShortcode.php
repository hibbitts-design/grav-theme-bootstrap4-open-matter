<?php
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

/**
 * [topics]...[/topics] - alphabetical topics index with an automatic A-Z navigation, from single-letter
 * headings (## A, ## B, ...). Same shortcode and Markdown as in Grav Helios Course Hub - hibbittsdesign.org
 */
class TopicsShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('topics', function(ShortcodeInterface $sc) {
            $content = $sc->getContent();

            // Find single-letter h2 headings (content is already rendered as HTML)
            preg_match_all('/<h2[^>]*>\s*([A-Z])\s*<\/h2>/i', $content, $matches);
            $active = array_unique(array_map('strtoupper', $matches[1]));

            // A-Z index as Bootstrap pagination: letters with entries are links, others are disabled
            $indexItems = array_map(function($letter) use ($active) {
                if (in_array($letter, $active)) {
                    return '<li class="page-item"><a class="page-link" href="#' . strtolower($letter) . '">' . $letter . '</a></li>';
                }
                return '<li class="page-item disabled"><span class="page-link">' . $letter . '</span></li>';
            }, range('A', 'Z'));
            $index = '<nav aria-label="Topics A–Z index"><ul class="pagination pagination-sm flex-wrap justify-content-start topics-index">' . implode('', $indexItems) . '</ul></nav>';

            // Give each letter heading its anchor and the theme's letter style
            $body = preg_replace_callback(
                '/<h2[^>]*>\s*([A-Z])\s*<\/h2>/i',
                function($m) {
                    $letter = strtoupper($m[1]);
                    return '<h2 class="topics-letter" id="' . strtolower($letter) . '">' . $letter . '</h2>';
                },
                $content
            );

            return '<div class="topics-section">' . $index . $body . '</div>';
        });
    }
}
