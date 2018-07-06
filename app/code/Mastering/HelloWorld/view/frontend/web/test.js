console.log('loaded test.js');

requirejs(['jquery'], function($) {
    console.log('loaded jquery in a RequireJs module');
});