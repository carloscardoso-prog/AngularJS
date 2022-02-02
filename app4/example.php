<html ng-app="app4" ng-cloak>

    <style>
        [ng\:cloack], [ng-cloak], .ng-cloak {
            display: none;
        }
        .bluetext{
            color: blue;
        }
        .boldtext{
            font-weight: bold;
        }
        .stripedblue{
            color:#007FFF;
            background-color: #DBE9F4;
        }
        .stripedbeige{
            color:#CC0000;
            background-color: #F5F5DC;
        }
    </style>
    <body>
        <div ng-controller="ctrl4">

            <table>
                <tr ng-repeat="item in capitals" ng-class-even="'stripedblue'" ng-class-odd="'stripedbeige'">
                    <td>{{item.City}}</td>
                    <td>{{item.State}}</td>
                </tr>
            </table>

            <p>
                <select ng-model="textStyling">
                    <option value="bluetext">Blue Text</option>
                    <option value="boldtext">Bold Text</option>
                </select>
            </p>

            <p ng-class="textStyling">Some Random Text</p>

            <input 
            ng-model="confirmed"

            ng-blur="blur = blur + 1"
            ng-click="click = click + 1"
            ng-dblclick="dblclick = dblclick + 1"
            ng-copy="copy = copy + 1"
            ng-paste="paste = paste + 1"
            ng-cut="cut = cut + 1"
            ng-focus="focus = focus + 1"
            ng-change="change = change + 1"
            ng-keydown="keydown(event)"
            ng-mouseenter="mouseenter = mouseenter + 1"
            ng-mouseleave="mouseleave = mouseleave + 1"
            >
            
            <h4> Blur Events : {{blur}}</h4>
            <h4> Click Events : {{click}}</h4>
            <h4> Double Click Events : {{dblclick}}</h4>
            <h4> Copy Events : {{copy}}</h4>
            <h4> Paste Events : {{paste}}</h4>
            <h4> Cut Events : {{cut}}</h4>
            <h4> Focus Events : {{focus}}</h4>
            <h4> Change Events : {{change}}</h4>
            <h4> Key Pressed Events : {{kdKey}}</h4>
            <h4> Mouse Enter Events : {{mouseenter}}</h4>
            <h4> Mouse Leave Events : {{mouseleave}}</h4>

            <p><button ng-disabled="disableButton">Button</button></p>
            <p><input type="checkbox" ng-model="disableButton">DisableButton</p>

            <p>
                <input type="checkbox" ng-model="daytimeButton">Morning
            </p>

            <p ng-hide="!daytimeButton">Good Morning</p>
            <p ng-hide="daytimeButton">Good Evening</p>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
        <script src="exam4.js"></script>
    </body>
</html>