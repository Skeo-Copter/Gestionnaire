'use strict';
/*******************/
/* CONTROLLERS USER */
/******************/
app.controller('taskCtrl', function ($scope, $http) {
    $scope.prenom = 'Jaroul';
       });
      
        
app.controller('chronoCtrl', function ($scope){
  
});        
    
//        app.controller('MyCtrl', function MyCtrl($scope, chronoService) {
//        $scope.time = Date.now();
//        chronoService.addTimer('myTimer', { interval: 500 });
//        chronoService.start();
//    });




/**********************/
/* CONTROLLERS MANAGER */
/*********************/
app.controller('taskListCtrl', function ($scope) {
    $scope.array = [
        {
            "titre" : "Acheter mouton",
            "description" : "Faut un mouton c'est important pour l'amusement",
            "user" : "LePen",
            "deadline" : "2015-02-04",
            "date de fin" : "2015-02-14"
        },
        {
            "titre" : "Vendre surplus de poneys",
            "description" : "Trop de poneys tue le poney",
            "user" : "PoneyMaster",
            "deadline" : "2015-12-19",
            "date de fin" : "2016-01-03"
        }
    ];
});


