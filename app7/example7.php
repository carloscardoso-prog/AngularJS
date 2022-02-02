<!DOCTYPE html>
<html ng-app="app7">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title></title>
        <link rel='stylesheet' href=''>
    </head>
    <body>

        <div ng-controller="mainCtrl as parent">
            <p>Name : {{parent.name}}</p>
            <p>Sound : {{parent.sound}}</p>
            <button ng-click=parent.animalClick()>Animal Data</button><br>
        </div>
        
        <div ng-controller="dogCtrl as dog">
            <p>Name : {{dog.child.name}}</p>
            <p>Sound : {{dog.child.sound}}</p>
            <button ng-click=dog.child.animalClick()>Dog Data</button><br>

            <button ng-click=dog.child.dogData()>More Dog Data</button><br>

            <input ng-model="dog.child.bark"><br><br>
            <span>New Bark : {{dog.child.bark}}</span>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
        <script src="exam7.js"></script>
    </body>
</html>