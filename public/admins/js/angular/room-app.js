var roomApp = angular.module('roomApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

roomApp.controller('roomController', function($scope, $http) {

    $scope.rooms = [];
    $scope.loading = false;
    $scope.isEditing = false;
    $scope.editedRoom = null;

    $scope.setEditedRoom = function setEditedRoom(room){
        $scope.editedRoom = angular.copy(room);
    };
    $scope.startEditing = function startEditing() {
        $scope.isEditing = true;
    };
    $scope.cancelEditing = function cancelEditing() {
        $scope.isEditing = false;
    };
    $scope.shouldShowEditing = function shouldShowEditing() {
        return $scope.isEditing;
    };

    $scope.init = function() {
        $scope.loading = true;
        $http.get('/admin/rooms').
            success(function(data, status, headers, config) {
                $scope.rooms = data['rooms'];
                //console.log(data['roomTypes']);
                $scope.roomTypes = data['roomTypes'];
                $scope.roomSelected = $scope.roomTypes[0];
                $scope.loading = false;
            });
    };

    $scope.addRoom = function() {
        $scope.loading = true;
        $http.post('/admin/rooms', {
            title: $scope.room.title,
            description: $scope.room.description,
            reserved: $scope.room.reserved
        }).success(function(data, status, headers, config) {
            $scope.rooms.push(data);
            $scope.room = '';
            $scope.loading = false;
        });
    };

    $scope.updateRoom = function(room){
        $scope.loading = true;
        var index = _.findIndex($scope.rooms, function(r){
            return r.id == room.id;
        });
        $http.put('/admin/rooms/' + room.id, {
            title: room.title
        }).success(function(data, status, headers, config) {
            $scope.rooms[index] = room;
            $scope.editedRoom = null;
            $scope.isEditing = false;
            $scope.loading = false;
        });
    };

    $scope.updateReservedRoom = function(room) {
        $scope.loading = true;
        $http.put('/admin/rooms/' + room.id, {
            reserved: room.reserved
        }).success(function(data, status, headers, config) {
            room = data;
            $scope.loading = false;
        });
    };

    $scope.deleteRoom = function(index) {
        $scope.loading = true;
        var room = $scope.rooms[index];
        $http.delete('/admin/rooms/' + room.id)
            .success(function() {
                $scope.rooms.splice(index, 1);
                $scope.loading = false;
            });
    };

    $scope.init();

});

/**
 * A generic confirmation for risky actions.
 * Usage: Add attributes: ng-really-message="Are you sure"? ng-really-click="takeAction()" function
 */
angular.module('roomApp').directive('ngReallyClick', [function() {
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