

app.controller('event',function ($scope) { 
    $http.get('./fetch.php?msg=1')
    .then(function(response){
        $scope.data=response.data;
    })
    .catch(function(err){

    });

    $scope.delete=function(id){
        $http.get('./delete.php?msg=1&id='+id)
        .then(function(){
            location.reload();
        });
    }
});