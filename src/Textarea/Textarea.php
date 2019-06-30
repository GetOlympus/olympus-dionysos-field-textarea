<?php

namespace GetOlympus\Field;

use GetOlympus\Zeus\Field\Controller\Field;
use GetOlympus\Zeus\Translate\Controller\Translate;

/**
 * Builds Textarea field.
 *
 * @package Field
 * @subpackage Textarea
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 *
 * @see https://olympus.readme.io/v1.0/docs/textarea-field
 *
 */

class Textarea extends Field
{
    /**
     * @var string
     */
    protected $script = 'js'.S.'textarea.js';

    /**
     * @var string
     */
    protected $style = 'css'.S.'textarea.css';

    /**
     * @var string
     */
    protected $template = 'textarea.html.twig';

    /**
     * @var string
     */
    protected $textdomain = 'textareafield';

    /**
     * Prepare defaults.
     *
     * @return array
     */
    protected function getDefaults()
    {
        return [
            'title' => Translate::t('textarea.title', $this->textdomain),
            'default' => '',
            'description' => '',
            'mode' => 'default',
            'placeholder' => '',
            'rows' => 8,
            'settings' => [
                'rte' => [
                    'teeny' => false,
                    'textarea_rows' => 8,
                ]
            ],
        ];
    }

    /**
     * Prepare variables.
     *
     * @param  object  $value
     * @param  array   $contents
     *
     * @return array
     */
    protected function getVars($value, $contents)
    {
        // Get contents
        $vars = $contents;

        // Mode
        $vars['mode'] = isset($contents['mode']) ? $contents['mode'] : '';
        $vars['mode'] = in_array($vars['mode'], ['default', 'rte']) ? $vars['mode'] : 'default';

        // Update vars
        return $vars;
    }
}
