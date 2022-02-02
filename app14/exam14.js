var app14 = angular.module('app14', ["ngSanitize"]);

app14.controller('mainCtrl', function($scope, $window, $location, $interval, $log, $exceptionHandler, $sanitize){

    $scope.greetUser = function(userName){
        $window.alert("Hello " + userName);
    }

    $scope.currUrl = $location.absUrl();
    $scope.theProtocol = $location.protocol();
    $scope.currHost = $location.host();
    $scope.currPort = $location.port();
    $location.path("#/the/path");
    $scope.currPath = $location.path();
    $location.search("random=stuff");
    $scope.currSearch = $location.search();

    $interval(function(){
        var hour = new Date().getHours();
        var minutes = new Date().getMinutes();
        var seconds = new Date().getSeconds();

        $scope.time = hour + ":" + minutes + ":" + seconds;
    }, 2000); //o valor após a vírgula é em milisegundos o tempo de atualização do relogio

    $scope.$log = $log;

    $scope.throwException = function(){
        try{
            throw new Error("Exception Thrown");
        }catch(e){
            $exceptionHandler(e.message, "Caught Exception");
        }
    }

    $scope.badStuff = "";

    $scope.$watch("badStuff", function(value){
        $scope.htmlData = $sanitize(value);
        //<span ng-bind-html="badStuff"></span>
    });

    $scope.players = [
        {name: "Barry Bonds", avg: 0.298, hr: 762, obp: 0.444},
        {name: "Hank Aaron", avg: 0.305, hr: 755, obp: 0.374},
        {name: "Babe Ruth", avg: 0.342, hr: 714, obp: 0.474},
        {name: "Ted Williams", avg: 0.344, hr: 521, obp: 0.482},
    ];
});

app14.directive("getPlayerInfo", function($compile){
    return function(scope, element, attrs){

        var playerList = "<ul><li ng-repeat='player in players'>{{player.name}}</li></ul>"

        var listElem = angular.element(playerList); //transforma em objeto jqlite
 
        var compileFunc = $compile(listElem); //compila pra dom

        compileFunc(scope); // seleciona o escopo

        element.append(listElem); //append no html
    }
});