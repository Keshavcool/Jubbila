var app = angular.module('app', ['ngRoute']);


app.controller('main', function ($scope) {


});
app.config(function ($routeProvider) {
    $routeProvider
        .when("/", {
            templateUrl: "event.html",
            controller: "event"
        })
        .when("/contact", {
            templateUrl: "contact.html",
            controller: "contact"
        })
        .when("/vendour", {
            templateUrl: "vendour.html",
            controller: "vendour"
        });
});