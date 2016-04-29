<?php

namespace GetOlympus\Field;

use GetOlympus\Hera\Controllers\Field;
use GetOlympus\Hera\Controllers\Translate;

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
    protected $faIcon = 'fa-text-height';

    /**
     * @var string
     */
    protected $template = 'textarea.html.twig';

    /**
     * Prepare HTML component.
     *
     * @param array $content
     * @param array $details
     *
     * @since 0.0.1
     */
    protected function getVars($content, $details = [])
    {
        // Build defaults
        $defaults = [
            'id' => '',
            'title' => Translate::t('textarea.title'),
            'default' => '',
            'description' => '',
            'placeholder' => '',
            'rows' => 8,

            // details
            'post' => 0,
            'prefix' => '',
            'template' => 'pages',
        ];

        // Build defaults data
        $vars = array_merge($defaults, $content);

        // Retrieve field value
        $vars['val'] = $this->getValue($details, $vars['default'], $content['id']);

        // Update vars
        $this->getField()->setVars($vars);
    }
}
