'use strict';
/*******************/
/* CONTROLLERS USER */
/******************/


      
        
app.controller('chronoCtrl', function (){


  
});    


app.controller('taskUserCtrl', function ($scope){
   
   
    $scope.tableau = [
        {
            "user_id" : "001",
            "task_id" : "1235474533245Y",
            "title" : "Premiere Tache",
            "description" : "Faire un tableau",
            "deadline" : "2015-02-14",
            "estimated_time" : "2015-02-14",
            "satus_id" : "1"
        },
        {
            "user_id" : "002",
            "task_id" : "4567879876543Y",
            "title" : "Deuxieme Tache",
            "description" : "ROULER DES BAAAAATS",
            "deadline" : "2015-02-14",
            "estimated_time" : "2015-02-14",
            "satus_id" : "0"
        }
    ];
    
    
//  $scope.userid ='001';
//  $scope.task_id ='123';
//  $scope.title ='Premiere Tache';
//  $scope.description ='Faire un tableau';
//  $scope.deadline ='30/01/2015';
//  $scope.estimated_time ='2h00';
//  $scope.status_id ='1';
//  
  
}); 


app.controller('tableUserCtrl', function ($scope){
  
}); 




app.controller('tableUserCtrl', function ($scope){
  
}); 
    
//        app.controller('MyCtrl', function MyCtrl($scope, chronoService) {
//        $scope.time = Date.now();
//        chronoService.addTimer('myTimer', { interval: 500 });
//        chronoService.start();
//    });











/**********************/
/* CONTROLLERS MANAGER */
/*********************/
app.controller('allTasksCtrl', function ($scope, $http) {
    $http.get('/TimeTracking/application/back/back/todos').
            success(function (data) {
                console.log(data);
                $scope.tasks = data.data;
            }).
            error(function (data) {
                // called asynchronously if an error occurs
                // or server returns response with an error status.
            });
});

app.controller('taskListCtrl', function ($scope) {
    $scope.array = [
        {
            "titre": "Acheter mouton",
            "description": "Faut un mouton c'est important pour l'amusement",
            "user": "LePen",
            "deadline": "2015-02-04",
            "date de fin": "2015-02-14"
        },
        {
            "titre": "Vendre surplus de poneys",
            "description": "Trop de poneys tue le poney",
            "user": "PoneyMaster",
            "deadline": "2015-12-19",
            "date de fin": "2016-01-03"
        }
    ];
});


