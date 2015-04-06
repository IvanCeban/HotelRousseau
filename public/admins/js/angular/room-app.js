var roomApp = angular.module('roomApp', ['ui.bootstrap'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

roomApp.controller('roomController', function($scope, $http, $modal, $log) {

    $scope.rooms = [];
    $scope.room = {};
    $scope.loading = false;
    $scope.isEditing = false;
    $scope.editedRoom = null;
    $scope.alerts = [];

    $scope.addAlert = function(type, msg) {
        $scope.alerts.push({type: type, msg: msg});
    };
    $scope.closeAlert = function(index) {
        $scope.alerts.splice(index, 1);
    };

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
                $scope.totalItems = $scope.rooms.length;
                $scope.itemsPerPage = 30;
                $scope.currentPage = 1;
                $scope.maxSize = 5;
                $scope.roomTypes = data['roomTypes'];
                $scope.indexedRoomTypes = data['indexedRoomTypes'];
                $scope.roomTypeSelected = {title:'Select room Type'};
                $scope.loading = false;
            });
    };

    $scope.setRoomTypeSelected = function(roomTypeSelected){
        $scope.roomTypeSelected = roomTypeSelected;
    };

    $scope.addRoom = function() {
        if(angular.isUndefined($scope.room.title) || angular.isUndefined($scope.room.description) || angular.isUndefined($scope.roomTypeSelected.id)){
            $scope.addAlert('danger', 'Please complete all fields!!!');
        }else{
            $scope.loading = true;
            $http.post('/admin/rooms', {
                title: $scope.room.title,
                description: $scope.room.description,
                room_types_id: $scope.roomTypeSelected.id
            }).success(function(data, status, headers, config) {
                $scope.filteredRooms.unshift(data);
                $scope.rooms.unshift(data);
                $scope.room = '';
                $scope.loading = false;
                $scope.addAlert('success', 'Room saved successfully');
            });
        }
    };

    $scope.updateRoom = function(room){
        $scope.loading = true;
        var index = _.findIndex($scope.filteredRooms, function(r){
            return r.id == room.id;
        });
        $http.put('/admin/rooms/' + room.id, {
            title: room.title
        }).success(function(data, status, headers, config) {
            $scope.filteredRooms[index] = room;
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
        var room = $scope.filteredRooms[index];
        $http.delete('/admin/rooms/' + room.id)
            .success(function() {
                $scope.filteredRooms.splice(index, 1);
                $scope.loading = false;
            });
    };

    $scope.pageCount = function () {
        return Math.ceil($scope.rooms.length / $scope.itemsPerPage);
    };

    $scope.$watch('currentPage + itemsPerPage', function() {
        var begin = (($scope.currentPage - 1) * $scope.itemsPerPage),
            end = begin + $scope.itemsPerPage;
        $scope.filteredRooms = $scope.rooms.slice(begin, end);
    });

    $scope.open = function (index, size) {

        var modalInstance = $modal.open({
            templateUrl: 'myModalContent.html',
            controller: 'ModalInstanceCtrl',
            size: size,
            resolve: {
                index: function(){
                    return index
                }
            }
        });

        modalInstance.result.then(function (index) {
            $scope.deleteRoom(index);
        }, function () {
            $log.info('Modal dismissed at: ' + new Date());
        });
    };

    $scope.init();

});

// Please note that $modalInstance represents a modal window (instance) dependency.
// It is not the same as the $modal service used above.

roomApp.controller('ModalInstanceCtrl', function ($scope, $modalInstance, index) {

    $scope.ok = function () {
        $modalInstance.close(index);
    };

    $scope.cancel = function () {
        $modalInstance.dismiss('cancel');
    };
});