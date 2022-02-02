<!DOCTYPE html>
<html ng-app="app5" ng-cloak>
    <head>
        <title>AngularJS Tutorial 5</title>
        <style>
            [ng\:cloak], [ng-cloak], .ng-cloak {
                display: none;
            }
            table{
                width: 400px;
                text-align: left;
                border: 2px solid black;
                padding: 10px;
            }
            input.ng-dirty.ng-invalid {
                border-color: red;
            }
        </style>
    </head>
    <body>
        <div ng-controller="gListCtrl">

            <h3>GroceryList</h3>
            <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Purchased</th>
                    </tr>
                </thead>
                <tr ng-repeat="grocery in groceries">
                    <td>{{grocery.item}}</td>
                    <td><input type="checkbox" ng-model="grocery.purchased"></td>
                </tr>
            </table>
            
            <label>New Item:
                <input type="text" ng-model="newItem">
            </label>
            <button ng-click="addItem(newItem)">Add Item</button>

            <h4>{{missingNewItemError}}</h4>
        </div>

        <div ng-controller="userCtrl">
            <form name="userForm" ng-submit="saveUser(userInfo)">
                <label>First Name: </label>
                <input type="text" name="fname" ng-model="userInfo.fName" ng-required="true" ng-minlenght="2">
                
                <span class="error-message" ng-show="userForm.fName.$dirty &&
                userForm.fName.$error.required">Must Enter a First Name</span>

                <span class="error-message" ng-show="userForm.fName.$dirty && userForm.fName.$error.minlenght">
                    Must be a Minimum of 2 Characters
                </span>

                <br><br>

                <label>Last Name: </label>
                <input type="text" name="lname" ng-model="userInfo.lName" ng-required="true" ng-minlenght="2">
                
                <span class="error-message" ng-show="userForm.lName.$dirty &&
                userForm.lName.$error.required">Must Enter a Last Name</span>

                <span class="error-message" ng-show="userForm.lName.$dirty && userForm.lName.$error.minlenght">
                    Must be a Minimum of 2 Characters
                </span>

                <br><br>

                <label>Street: </label>
                <input type="text" name="street" ng-model="userInfo.street" 
                    ng-required="true" ng-minlength="6">

                <span class="error-message" ng-show="userForm.street.$dirty && userForm.street.$invalid">
                    Must Enter a Number, Street, and Street Type (ex: 123 Main St.)
                </span>

                <br><br>
                
                <label>Subscribe:</label>

                <input type="checkbox" name="subscribe" ng-model="userInfo.subscribe" ng-true-value="'Subscribe'"
                ng-false-value="'Don\'t Subscribe'">

                <br><br>

                <label>Delivery Method:</label>
                <select name="delivery" ng-model="userInfo.delivery" ng-required="true">
                    <option value="Email">Email</option>
                    <option value="Mail">Mail</option>
                </select>

                <br><br>

                <input type="submit" value="Save" ng-disabled="userForm.$invalid">

                <ul>
                    <li ng-repeat="item in user">
                        {{'User: ' + item.fName + " " + item.lName + " " + item.street + " " + item.subscribe + " " +
                        item.delivery}}
                    </li>
                </ul>
            </form>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
        <script src="exam5.js"></script>
    </body>
</html>