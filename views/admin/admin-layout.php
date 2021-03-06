<!DOCTYPE html>

<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Admin - SheekStore</title>
	<link rel="shortcut icon" href="/SheekStore/img/logo.png">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/SheekStore/css/admin.css">
  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css">
  <link rel="stylesheet" type="text/css" href="/SheekStore/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/SheekStore/css/core-style.css">
  <link rel="stylesheet" type="text/css" href="/SheekStore/css/animate.css">
  <link rel="stylesheet" type="text/css" href="/SheekStore/css/classy-nav.min.css">
  <link rel="stylesheet" type="text/css" href="/SheekStore/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/SheekStore/css/jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" href="/SheekStore/css/magnific-popup.css">
  <link rel="stylesheet" type="text/css" href="/SheekStore/css/nice-select.css">
  <link rel="stylesheet" type="text/css" href="/SheekStore/css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="/SheekStore/css/style.css">
</head>

<body>


	<?php

	require_once $content;

	?>

  <!-- Icons -->
  <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
  <script>
    feather.replace()
  </script>

  <!-- Graphs -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
  <script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        datasets: [{
          data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
          lineTension: 0,
          backgroundColor: 'transparent',
          borderColor: '#007bff',
          borderWidth: 4,
          pointBackgroundColor: '#007bff'
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: false
            }
          }]
        },
        legend: {
          display: false,
        }
      }
    });
  </script>
  <script src="/SheekStore/js/jquery-3.3.1.min.js"></script>
    <script src="/SheekStore/js/popper.min.js"></script>
    <script src="/SheekStore/js/bootstrap.min.js"></script>
    <script src="/SheekStore/js/active.js"></script>
    <script src="/SheekStore/js/classy-nav.min.js"></script>
    <script src="/SheekStore/js/map-active.js"></script>
    <script src="/SheekStore/js/plugins.js"></script>
    <script src="/SheekStore/js/main.js"></script>
    <script src="/SheekStore/js/main.js"></script>
</body>
</html>
