angular.module("rubedoBlocks").lazy.controller("HelloWorldController",['$scope','$http','RubedoModuleConfigService',function($scope, $http, RubedoModuleConfigService){
    var me=this;
    var config=$scope.blockConfig;

    me.apiMessage = "";

    //Direct call to the API endpoint created in this extension
    $http.get("/api/v1/helloworld?name=toto").then(function(response) {
        if(response.data.success) {
            me.apiMessage = response.data.helloworld;
        }
    });

    //Call AngularJs service (see https://github.com/WebTales/rubedo-frontoffice/blob/3.3.x/src/modules/rubedoDataAccess/rubedoDataAccess.js to get all declared services)
    me.config = RubedoModuleConfigService.getConfig();

    me.foo = "bar";
}]);
