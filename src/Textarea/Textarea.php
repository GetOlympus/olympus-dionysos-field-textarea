<?php

namespace GetOlympus\Dionysos\Field;

use GetOlympus\Zeus\Field\Field;

/**
 * Builds Textarea field.
 *
 * @package    DionysosField
 * @subpackage Textarea
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
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
    protected function getDefaults() : array
    {
        return [
            'title'       => parent::t('textarea.title', $this->textdomain),
            'default'     => '',
            'description' => '',
            'counter'     => true,
            'placeholder' => '',
            'readonly'    => false,
            'rows'        => 8,

            // texts
            't_length_label' => parent::t('textarea.length_label', $this->textdomain),
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
    protected function getVars($value, $contents) : array
    {
        // Update vars
        return $contents;
    }
}
