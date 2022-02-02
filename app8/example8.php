<!DOCTYPE html>
<html ng-app="app8">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title></title>
        <link rel='stylesheet' href=''>
    </head>
    <body>
        
        <div ng-controller="mainCtrl">
            <label>Make Uppercase: </label>
            <input type="text"  ng-model="name">
            <p>Uppercase: {{name | uppercase}}</p>
            <p>Lowercase: {{name | lowercase}}</p>

            <label>Currency Filter : </label>
            <input type="text" ng-model="money">
            <p>Uppercase : {{money | currency}}</p>

            <ul>
                <li ng-repeat="student in student.gpas | filter: studentName |orderBy: '-gpa'">
                    {{'Name: ' + student.name + ' : GPA: ' + student.gpa}}
                </li>
            </ul>
            
            <label>Number Filter:</label>
            <input type="text" ng-model="numVal">
            <p>Default : {{numVal | number}}</p>
            <p>No Fractions : {{numVal | number:0}}</p>
            <p>Negative 4 Decimal : {{-numVal | number:4}}</p>

            <p>Date 1 : {{currDate | date: 'medium'}}</p>
            <p>Date 2 : {{currDate | date: "dd/mm/yyyy 'at' h:mma"}}</p>

            <ul>
                <li ng-repeat="item in weather">
                    {{item.day + " : "}} {{item.rain}}
                </li>
            </ul>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
        <script src="exam8.js"></script>
    </body>
</html>