<!DOCTYPE html>
<html ng-app="app15" ng-cloak>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title></title>
        <link rel='stylesheet' href=''>

        <style>
            [ng\:cloak], [ng-cloak], .ng-cloak{
                display: none;
            }
        </style>
    </head>
    <body>

        <div ng-controller="mainCtrl">

            Translate:
            <input type="text" ng-model="wordsToTranslate">
            <br><br>
            <button ng-click="translate()">Translate</button>
            <br><br>
            {{translated}}

            <button ng-click="getData()">Get Data</button>
            <br><br>

            <ul>
                <li ng-repeat="player in players">
                    {{player.name}}
                </li>
            </ul>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
        <script src="exam15.js"></script>
    </body>
</html>