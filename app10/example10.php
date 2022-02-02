<!DOCTYPE html>
<html ng-app="app10" ng-cloak>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title></title>
        <link rel='stylesheet' href=''>
        <style>
            [ng\:cloak], [ng-cloak], .ng-cloak {
                display: none;
            }
            .thick{
                font-weight: bolder;
            }
        </style>
    </head>
    <body>
        <div ng-controller="mainCtrl">
            
            <div bb-player-list="bbPlayers" array-item="name | uppercase"></div>

        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
        <script src="exam10.js"></script>
    </body>
</html>