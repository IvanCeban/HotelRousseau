var roomTypeApp = angular.module('roomTypeApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
roomTypeApp.controller('roomTypeController', function($scope, $http) {

    $scope.roomTypes = [];
    $scope.loading = false;

    $scope.init = function() {
        $scope.loading = true;
        $http.get('/admin/roomtypes').
            success(function(data, status, headers, config) {
                $scope.roomTypes = data;
                $scope.loading = false;
            });
    };

    $scope.addRoomType = function() {
        $scope.loading = true;

        $http.post('/admin/roomtypes', {
            title: $scope.roomType.title
        }).success(function(data, status, headers, config) {
            $scope.roomTypes.push(data);
            $scope.roomType = '';
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
angular.module('roomTypeApp').directive('ngReallyClick', [function() {
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