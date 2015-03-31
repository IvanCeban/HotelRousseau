var app = angular.module('roomApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('roomController', function($scope, $http) {

    $scope.rooms = [];
    $scope.loading = false;

    $scope.init = function() {
        $scope.loading = true;
        $http.get('/admin/rooms').
            success(function(data, status, headers, config) {
                $scope.rooms = data;
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

    $scope.updateRoom = function(room) {
        $scope.loading = true;

        $http.put('/admin/rooms/' + room.id, {
            title: room.title,
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