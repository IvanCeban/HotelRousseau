var orderApp = angular.module('orderApp', ['ui.bootstrap'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
orderApp.controller('orderCtrl', function($scope, $http) {

    $scope.order = {};
    $scope.cartNA = [];
    $scope.cartA = [];
    $scope.cart=[];
    $scope.cartSum = 0;

    $scope.updateCart = function(){
        var nonAnnullableArray = $scope.order.nonAnnullable.split("-");
        if(nonAnnullableArray[1] == 0){
            delete $scope.cartNA[nonAnnullableArray[0]];
        }else{
            $scope.cartNA[nonAnnullableArray[0]] = nonAnnullableArray[1];
        }
        $scope.cart[nonAnnullableArray[0]] = nonAnnullableArray[1] * $scope.order.nights * 185;
        $scope.cartSum = $scope.cart.reduce(function(pv, cv) { return pv + cv; }, 0);
        console.log($scope.cart);
        $http.post('update-cart', {cart:$scope.cart}).success(function(data, status, headers, config) {
            //console.log(data);
        });
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