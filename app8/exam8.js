var app8 = angular.module('app8', []);

app8.controller('mainCtrl', function($scope){
    $scope.strudent = [
        {name: "George Thomas", gpa: 3.5},
        {name: "Susy Smith", gpa: 3.6},
        {name: "Paul Marks", gpa: 3.2},
        {name: "Sue Edgar", gpa: 3.8}
    ];
    
    $scope.strudent = {
        gpas:[
            {name: "George Thomas", gpa: 3.5}, 
            {name: "Susy Smith", gpa: 3.6},
            {name: "Paul Marks", gpa: 3.2},
            {name: "Sue Edgar", gpa: 3.8}
        ]
    };

    $scope.currDate = new Date();

    $scope.randomStr = "Lorem ipsum dolor sit amet, consectetur";

    $scope.randArray = [
        "Tomate",
        "Potato",
        "Bread",
        "Pickles",
        "Raisins",
    ];

    $scope.weather = [
        {day: "Monday", rain: false},
        {day: "Tuesday", rain: true},
    ];
});

angular.module('weatherFilters', []).filter('raining',
    function(){
        return function(input){
            return input ? '\u2602' : '\u2600';
        }
    }
);