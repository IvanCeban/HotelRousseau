var registrationApp = angular.module('registrationApp', []);
registrationApp.controller('registrationCtrl', function($scope) {
    $scope.user = 'John Doe';
    $scope.emaill = 'john.doe@gmail.com';
});