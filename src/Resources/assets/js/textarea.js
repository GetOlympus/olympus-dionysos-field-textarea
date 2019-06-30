/*!
 * textarea.js v2.0.0
 * https://github.com/GetOlympus/olympus-textarea-field
 *
 * This plugin adds a counter in all textarea flieds.
 *
 * Example of JS:
 *      $('textarea').zeusTextarea({
 *          container: 'fieldset',                      //node element containing textarea and container
 *          counter: '.counter'                         //counter element to update
 *      });
 *
 * Example of HTML:
 *      <fieldset>
 *          <textarea></textarea>
 *          <span class="counter"></span>
 *      </fieldset>
 *
 * Copyright 2016 Achraf Chouk
 * Achraf Chouk (https://github.com/crewstyle)
 */

(function ($){
    "use strict";

    var Textarea = function ($el,options){
        //vars
        var _this = this;
        _this.$el = $el;
        _this.options = options;

        //update container
        _this.$container = _this.$el.closest(_this.options.container);

        //update counter
        _this.$counter = _this.$container.find(_this.options.counter);

        //initialize
        _this.init();
    };

    Textarea.prototype.$el = null;
    Textarea.prototype.$container = null;
    Textarea.prototype.$counter = null;
    Textarea.prototype.options = null;

    Textarea.prototype.init = function (){
        var _this = this;

        //update counter
        _this.$counter.text(_this.$el.val().length);

        //bind all event
        _this.$el.on('keyup', $.proxy(_this.charCounter, _this));
    };

    Textarea.prototype.charCounter = function (){
        var _this = this;
        _this.$counter.text(_this.$el.val().length);
    };

    var methods = {
        init: function (options){
            if (!this.length) {
                return false;
            }

            var settings = {
                container: 'fieldset',
                counter: '.counter'
            };

            return this.each(function (){
                if (options) {
                    $.extend(settings, options);
                }

                new Textarea($(this), settings);
            });
        },
        update: function (){},
        destroy: function (){}
    };

    $.fn.zeusTextarea = function (method){
        if (methods[method]) {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        }
        else if (typeof method === 'object' || !method) {
            return methods.init.apply(this, arguments);
        }
        else {
            $.error('Method '+method+' does not exist on zeusTextarea');
            return false;
        }
    };
})(window.jQuery);
