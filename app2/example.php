<html ng-app="app2" ng-cloak>
    <style>
        [ng\:cloack], [ng-cloak], .ng-cloak {
            display: none;
        }
    </style>
    <body>
        <h4 ng-controller="ctrl1">First RN: {{randomNum1}}</h4>
        <h4 ng-controller="ctrl1">Second RN: {{randomNum2}}</h4>

        <h3>Feelings to get</h3>

        <div ng-controller="gListCtrl">
            <ol start="9">
                <li ng-repeat="grocery in groceries" ng-if="$index > 1">{{ grocery.item }} {{ $index }}</li>
            </ol>

            <table>
                <tr ng-repeat-start="grocery in groceries">
                    <td>{{grocery.item}}</td>
                </tr>
                <tr ng-repeat-end>
                    <td>{{grocery.purchased}}</td>
                </tr>
            </table>

            <label>Change 1st Item:</label>
            <input ng-model="groceries[0].item">
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.6/angular.min.js"></script>
        <script src="exam1.js"></script>
    </body>
</html>