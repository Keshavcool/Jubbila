

app.controller('vendour',function ($scope) { 
    $http.get('./fetch.php?msg=2')
    .then(function(response){
        $scope.data=response.data;
    })
    .catch(function(err){

    });

    $scope.delete=function(id){
        $http.get('./delete.php?msg=2&id='+id)
        .then(function(){
            location.reload();
        });
    }
});