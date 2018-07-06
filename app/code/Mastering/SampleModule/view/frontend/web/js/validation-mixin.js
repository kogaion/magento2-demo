define(["mage/utils/wrapper"], function (wrapper) {
    "use strict";

    return function (targetModule) {

        console.log(typeof targetModule.isValid);

        targetModule.isValid = wrapper.wrap(targetModule.isValid, function(originalFunction) {
            return window.confirm("Are you sure?");
        });

        return targetModule;
    };
});