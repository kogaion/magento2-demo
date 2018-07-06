console.log('loaded test.js');

requirejs(['jquery', 'my_module'], function($) {
    console.log('loaded jquery in a RequireJs module');
});

define('my_module', function(my_module) {
   return {

   } ;
});