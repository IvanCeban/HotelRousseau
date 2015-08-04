var roomTypeApp = angular.module('reservationApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
roomTypeApp.controller('reservationController', function($scope, $http) {

    $scope.reservations = [];
    $scope.loading = false;

    $scope.init = function() {
        $scope.loading = true;
        $http.get('/admin/reservations').
            success(function(data, status, headers, config) {
                $scope.reservations = data;
                $scope.loading = false;
            });
    };


    $scope.updateRoomType = function(roomType) {
        $scope.loading = true;

        $http.put('/admin/roomtypes/' + roomType.id, {
            title: roomType.title
        }).success(function(data, status, headers, config) {
            roomType = data;
            $scope.loading = false;
        });
    };

    $scope.deleteRoomType = function(index) {
        $scope.loading = true;

        var roomType = $scope.roomTypes[index];

        $http.delete('/admin/roomtypes/' + roomType.id)
            .success(function() {
                $scope.roomTypes.splice(index, 1);
                $scope.loading = false;

            });
    };


    $scope.init();

});

/**
 * A generic confirmation for risky actions.
 * Usage: Add attributes: ng-really-message="Are you sure"? ng-really-click="takeAction()" function
 */
angular.module('reservationApp').directive('ngReallyClick', [function() {
    return {
        restrict: 'A',
        link: function(scope, element, attrs) {
            element.bind('click', function() {
                var message = attrs.ngReallyMessage;
                if (message && confirm(message)) {
                    scope.$apply(attrs.ngReallyClick);
                }
            });
        }
    }
}]);