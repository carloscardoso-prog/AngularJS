<html ng-app="app3" ng-cloak>
    <style>
        [ng\:cloack], [ng-cloak], .ng-cloak {
            display: none;
        }
    </style>
    <body ng-controller="gListCtrl">
        
        <h3>Grocery List</h3>

        <label>
            <input type="checkbox" ng-model="showList">
            Show Unordered List
        </label>

        <ng-include src="getList()"></ng-include>

        <label>Type a number:
            <input type="text" ng-model="someNumber">
        </label>

        <div ng-switch="someNumber">            
            <p ng-switch-when="1">You entered 1</p>
            <p ng-switch-when="2">You entered 2</p>
            <p ng-switch-when="3">You entered 3</p>
            <p ng-switch-when="4">You entered 4</p>
            <p ng-switch-when="5">You entered 5</p>
            <p ng-switch-default>No directions</p>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.6/angular.min.js"></script>
        <script src="exam1.js"></script>
    </body>
</html>