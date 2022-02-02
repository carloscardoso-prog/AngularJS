var app12 = angular.module('app12', []);

app12.directive("exDir", function(){
    return{
        transclude: true,
        template: "<div><h4>{{moreLorem}}</h4></div><p ng-transclude></p>"
    }
})

app12.controller("mainCtrl", function($scope){
    $scope.moreLorem = "The Amazing Lore Story";
});

