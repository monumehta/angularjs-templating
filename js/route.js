
/**
 * Configure the Routes
 */
app.config(['$routeProvider', function ($routeProvider) {
  $routeProvider
   
    // Pages
   
    .when("/", {templateUrl: "partials/home.html", controller: "HomeController"})

    .when("/contact", {templateUrl: "partials/contact.html", controller: "PageCtrl"})

    // else 404
    .otherwise("/404", {templateUrl: "partials/404.html", controller: "PageCtrl"});
}]);
    