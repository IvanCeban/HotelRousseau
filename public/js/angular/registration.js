var registrationApp = angular.module('registrationApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
registrationApp.controller('registrationCtrl', function($scope) {
    $scope.user = 'John Doe';
    $scope.emaill = 'john.doe@gmail.com';
    $scope.kids = 2;

    $scope.getNumber = function(num) {
        return new Array(num);
    }

    $scope.update = function(kids){

        $scope.kids = kids;
    }

});