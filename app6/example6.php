<!DOCTYPE html>
<html ng-app="app6">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title></title>
        <link rel='stylesheet' href=''>
    </head>
    <body>
        <div ng-controller="heroCtrl">

            <label>Hero to Search for : </label>
            <input type="text" ng-model="heroName">
            <br><br>
            <button ng-click="getHeroData()">Submit</button>
            <br><br>

            {{heroData}}<br>
        </div>
        <div ng-controller="heroCtrl">

            <label>Hero Name : </label>
            <input type="text" ng-model="heroName">
            <label>Real Name: </label>
            <input type="text" ng-model="realName">
            <br><br>
            <button ng-click="addHeroData(realName, heroName)">Add Hero</button>
            <br><br>

            {{heroData}}<br>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
        <script src="exam6.js"></script>
    </body>
</html>