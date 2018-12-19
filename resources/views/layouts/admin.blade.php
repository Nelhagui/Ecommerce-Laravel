<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/home">Ver pagina</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Cerrar Sesión
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span class="sr-only">(current)</span>
                </a>
              </li>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Administrar</span>
            </h6>
            <ul class="nav flex-column mb-2">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/usuarios">
                        <span data-feather="users"></span>
                        Usuarios
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/servicios">
                        <span data-feather="briefcase"></span>
                        Servicios
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/categorias">
                        <span data-feather="tag"></span>
                        Categorías
                    </a>
                </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Panel de Administración</h1>
          </div>


          @yield('content')


          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <tbody>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <script>
    var botoneseliminar = document.getElementsByClassName('btn btn-danger')
    console.log(botoneseliminar)
    for (let i = 0; i < botoneseliminar.length; i++) {
    botoneseliminar[i].onclick = function (evento) {
        if (confirm("Seguro quieres borrar estos datos?") == false) {
          evento.preventDefault()
        }
      }
    }
    </script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

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
  </body>
</html>
