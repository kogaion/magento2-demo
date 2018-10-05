define(['jquery', 'mage/mage'], function ($) {
    'use strict';

    $.widget('mage.trainingjsAttribute', {
        _create: function () {
            this._super();
            this._showDetails();
            this._bind();
        },
        _showDetails: function () {
            console.log(this.element.attr("name") + ": " + this.element.val());
        },
        _bind: function () {
            this._on(this.element, {
                "change": function () {
                    this._showDetails();
                }
            });
        }
    });

    $.widget('mage.trainingjsAll', {
        _create: function() {
            console.log("test all refreshes");
        }
    });

    return {
        trainingjsAttribute: $.mage.trainingjsAttribute,
        trainingjsAll: $.mage.trainingjsAll
    }
});

