<!DOCTYPE html>
<html ng-app="app9">
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

            <ul jql-directive>
                <li id="barry">Barry Bonds</li>
                <ul>
                    <li>AVG : .298
                    <li>HR : 762
                    <li>OBP : .444
                </ul>
                <li id="hank">Hank Aaron</li>
                <ul>
                    <li>AVG : .305
                    <li>HR : 755
                    <li>OBP : .374
                </ul>
                <li>Babe Ruth</li>
                <ul>
                    <li>AVG : .342
                    <li>HR : 714
                    <li>OBP : .474
                </ul>
            </ul>

            <h4>Children in List</h4>
            <span id="childrenList"></span><br><br>
            Barry's Number: <span id="barrysNumber">

            </span><br><br>
            Is Hank Bold: <span id="hankBold">

            </span><br><br>
            Barry's ID: <span id="barryID">

            </span><br><br>
            <button ng-click="unBold()">Toggle Bold</button>

        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
        <script src="exam9.js"></script>
    </body>
</html>