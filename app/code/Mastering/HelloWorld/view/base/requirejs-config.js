console.log("Loaded requirejs-config");
var config = {
    paths: {
        "my_module": "Mastering_HelloWorld/my_module"
    },
    shim:{
        'my_module':{
            'deps':['jquery']
        }
    }
};