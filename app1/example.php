<html ng-app="app1">
    <body>
        <div ng-controller="ctrl1">
            <span>Values:</span>
            <input type="text" ng-model="first" />
            <input type="text" ng-model="second" />

            <button ng-click="updateValue()">Sum</button>
            {{ calculation }}
            <br><br>

            <p>Your first value is {{first}}</p>
            <p>Your second value is <span data-ng-bind="second"></span></p>

            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.6/angular.min.js"></script>
            <script src="exam1.js"></script>
        </div>
    </body>
</html>