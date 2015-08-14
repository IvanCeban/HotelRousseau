var orderApp = angular.module('orderApp', ['ui.bootstrap'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
orderApp.controller('orderCtrl', function($scope, $http) {

    $scope.order = {};
    $scope.cartNA = [];
    $scope.cartA = [];
    $scope.updateCart = function(){
        var nonAnnullableArray = $scope.order.nonAnnullable.split("-");
        $scope.cartNA[nonAnnullableArray[0]] = nonAnnullableArray[1];
        /*var annullableArray = $scope.order.annullable.split("-");
        $scope.cart['a'][annullableArray[0]] = annullableArray[1];*/
        console.log($scope.cartNA);
    };


        $scope.init = function() {
            $http.get('hotel-init').
                success(function(data, status, headers, config) {
                    $scope.rooms = data['rooms'];
                    $scope.roomTypes = data['roomTypes'];
                    $scope.sortedRooms = data['sortedRooms'];
                    $scope.indexedRoomTypes = data['indexedRoomTypes'];
                    $scope.order = data['order'];
                    //console.log($scope.rooms);
                });
        };

        $scope.init();

});