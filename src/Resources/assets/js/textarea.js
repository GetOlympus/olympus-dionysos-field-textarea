/*!
 * textarea.js v2.0.0
 * https://github.com/GetOlympus/olympus-dionysos-field-textarea
 *
 * This plugin adds a simple word counter.
 *
 * Example of JS:
 *      $('.textarea-field').dionysosTextarea({
 *          counter: '.counter', // counter element to update
 *          field: 'textarea',   // textarea node element
 *      });
 *
 * Example of HTML:
 *      <fieldset class="textarea-field">
 *          <textarea></textarea>
 *          <span class="counter"></span>
 *      </fieldset>
 *
 * Copyright 2016 Achraf Chouk
 * Achraf Chouk (https://github.com/crewstyle)
 */

(function ($){
    "use strict";

    /**
     * Constructor
     * @param {nodeElement} $el
     * @param {array}       options
     */
    var Textarea = function ($el,options){
        // vars
        var _this = this;
        _this.$el = $el;
        _this.options = options;

        // update field
        _this.$field = _this.$el.find(_this.options.field);

        // update counter
        _this.$counter = _this.$el.find(_this.options.counter);
        _this.$counter.text(_this.$field.val().length);

        //bind all event
        _this.$field.on('keyup', $.proxy(_this.char_counter, _this));
    };

    /**
     * Counter element
     * @type {nodeElement}
     */
    Textarea.prototype.$counter = null;

    /**
     * Field element
     * @type {nodeElement}
     */
    Textarea.prototype.$field = null;

    /**
     * Main element
     * @type {nodeElement}
     */
    Textarea.prototype.$el = null;

    /**
     * Main options array
     * @type {array}
     */
    Textarea.prototype.options = null;

    /**
     * Fires keyUp event on source input
     * @param {event} e
     */
    Textarea.prototype.char_counter = function (){
        var _this = this;
        _this.$counter.text(_this.$field.val().length);
    };

    var methods = {
        init: function (options){
            if (!this.length) {
                return false;
            }

            var settings = {
                counter: '.counter',
                field: 'textarea',
            };

            return this.each(function (){
                if (options) {
                    $.extend(settings, options);
                }

                new Textarea($(this), settings);
            });
        }
    };

    $.fn.dionysosTextarea = function (method){
        if (methods[method]) {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        }
        else if (typeof method === 'object' || !method) {
            return methods.init.apply(this, arguments);
        }
        else {
            $.error('Method '+method+' does not exist on dionysosTextarea');
            return false;
        }
    };
})(window.jQuery);
