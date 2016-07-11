var myApp = angular.module('myApp',[]);

myApp.controller('FormController', function($scope, $http) {

    $scope.Send = function(){
      //   var data = JSON.stringify($scope.form);
        $http.post('mail.php', $scope.form, {headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}
    }).
        success(function(data, status, headers, config) {
            $scope.result = data;
            console.log(data);
        }).
        error(function(data, status, headers, config) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
        });

    }

});
