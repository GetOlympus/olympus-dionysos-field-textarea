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
     * Prepare variables.
     */
    protected function setVars()
    {
        $this->getModel()->setFaIcon('fa-text-height');
        $this->getModel()->setScript('js'.S.'textarea.js');
        $this->getModel()->setStyle('css'.S.'textarea.css');
        $this->getModel()->setTemplate('textarea.html.twig');
    }

    /**
     * Prepare HTML component.
     *
     * @param array $content
     * @param array $details
     */
    protected function getVars($content, $details = [])
    {
        // Build defaults
        $defaults = [
            'id' => '',
            'title' => Translate::t('textarea.title', [], 'textareafield'),
            'default' => '',
            'description' => '',
            'placeholder' => '',
            'rows' => 8,
        ];

        // Build defaults data
        $vars = array_merge($defaults, $content);

        // Retrieve field value
        $vars['val'] = $this->getValue($content['id'], $details, $vars['default']);

        // Update vars
        $this->getModel()->setVars($vars);
    }
}
