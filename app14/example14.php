<!DOCTYPE html>
<html ng-app="app14" ng-cloak>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title></title>
        <link rel='stylesheet' href=''>
        <style>
            [ng\:cloak], [ng-cloak], .ng-cloak {
                display: none;
            }
        </style>
    </head>
    <body ng-controller="mainCtrl">

        Current Time: {{time}} 
        <br><br>

        <input type="text" ng-model="badStuff">
        <br><br>
        <span>{{badStuff}}</span>
        <span ng-bind="badStuff"></span>

        <br><br>

        <button ng-click="throwException()">Throw Exception</button>

        <br><br>
        
        <label>Message:
            <input type="text" ng-model="message"></label>
            <button ng-click="$log.log(message)">log</button>
            <button ng-click="$log.warn(message)">warn</button>
            <button ng-click="$log.info(message)">info</button>
            <button ng-click="$log.error(message)">error</button>
            <button ng-click="$log.debug(message)">debug</button>
        <br><br>
        
        <input type="text" ng-model="userName">
        <button ng-click="greetUser(userName)">Hello</button>
        <br><br>

        URL: {{currUrl}}<br><br>
        Protocol: {{theProtocol}}<br><br>
        Host: {{currHost}}<br><br>
        Port: {{currPort}}<br><br>
        Path: {{currPath}}<br><br>
        Search: {{currSearch}}<br><br>

        <p get-player-info></p>

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
        <script src="http:////ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular-sanitize.js"></script>
        <script src="exam14.js"></script>
    </body>
</html>