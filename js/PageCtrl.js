/**
 * Controls all other Pages
 */
app.controller('PageCtrl', function ($scope/* , $location, $http */) {

  $scope.get = {};


  // Activates the Carousel
  $('.carousel').carousel({
    interval: 5000
  });

  // Activates Tooltips for Social Links
  $('.tooltip-social').tooltip({
    selector: "a[data-toggle=tooltip]"
  })

  $scope.saveFrom = function() {
    console.log($scope.get);
  }




});