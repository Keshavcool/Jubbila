

app.controller('contact',function ($scope,$http) { 

    $http.get('./fetch.php?msg=3')
        .then(function(response){
            $scope.data=response.data;
        })
        .catch(function(err){

        });

    $scope.delete=function(id){
        $http.get('./delete.php?msg=3&id='+id)
        .then(function(){
            location.reload();
        });
    }
});