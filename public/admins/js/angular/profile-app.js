var profileApp = angular.module('profileApp', ['ui.bootstrap', 'angularFileUpload'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

profileApp.controller('profileController', function($scope, $http, $modal, $log, $upload) {
    $scope.isViewing = true;
    $scope.isEditing = false;
    $scope.alerts = [];

    $scope.addAlert = function(type, msg) {
        $scope.alerts = [];
        $scope.alerts.push({type: type, msg: msg});
    };
    $scope.closeAlert = function(index) {
        $scope.alerts.splice(index, 1);
    };

    $scope.init = function(){
        $http.get('/admin/profile').
            success(function(data, status, headers, config) {
                $scope.user = data.user;
            });
    };

    $scope.shouldShowViewing = function(){
        return !$scope.isEditing;
    };

    $scope.startViewing = function(){
        $scope.isViewing = true;
        $scope.isEditing = false;
    };

    $scope.shouldShowEditing = function(){
        return $scope.isEditing && !$scope.isViewing;
    };

    $scope.startEditing = function(){
        $scope.isViewing = false;
        $scope.isEditing = true;
    };

    $scope.updateProfile = function(){
        $http.put('/admin/profile/'+$scope.user.id, $scope.user).
            success(function(data, status, headers, config){
                if(data['status'] == 'error'){
                    var messages = '';
                    angular.forEach(data['messages'], function(value, key) {
                        angular.forEach(value, function(v, k) {
                            messages += v + '\n';
                        });
                    });
                    $scope.addAlert('danger', messages);
                }else if(data['status'] == 'success'){
                    $scope.addAlert('success', 'Profile updated successfully');
                    $scope.startViewing();
                }

            });
    };

    $scope.$watch('files', function () {
        $scope.upload($scope.files);
    });

    $scope.upload = function (files) {
        if (files && files.length) {
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                $upload.upload({
                    url: '/admin/profile/photo',
                    fields: {'userId': $scope.user.id},
                    file: file
                }).progress(function (evt) {
                    //var progressPercentage = parseInt(100.0 * evt.loaded / evt.total);
                    //console.log('progress: ' + progressPercentage + '% ' + evt.config.file.name);
                }).success(function (data, status, headers, config) {
                    $scope.user = data;
                    $scope.addAlert('success', 'Profile image uploaded successfully');
                    //$scope.newFiles.push(data);
                    //console.log($scope.newFiles);
                    //console.log('file ' + config.file.name + ' uploaded. Response: ' + data);
                });
            }
        }
    };

    $scope.init();

});