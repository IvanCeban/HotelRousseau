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

var rTApp = angular.module('roomTypeApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
rTApp.controller('roomTypeController', function($scope, $http) {

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

    //to do
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