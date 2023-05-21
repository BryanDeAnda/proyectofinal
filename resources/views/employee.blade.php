<x-app-layout>
    <head>
      <meta charset="utf-8" />
      <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
      />

      <title>Empleados</title>

      <meta name="description" content="" />

      <!-- Favicon -->
      <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
      />

      <!-- Icons. Uncomment required icon fonts -->
      <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

      <!-- Core CSS -->
      <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
      <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
      <link rel="stylesheet" href="../assets/css/demo.css" />

      <!-- Vendors CSS -->
      <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

      <!-- Page CSS -->

      <!-- Helpers -->
      <script src="../assets/vendor/js/helpers.js"></script>

      <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
      <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
      <script src="../assets/js/config.js"></script>
    </head>

    <body>
      <!-- Layout wrapper -->
      <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
          <!-- Menu -->

        <div class="buy-now">
        <a href="/employees/create"
          class="btn btn-primary btn-buy-now"
          >Agregar Empleado</a
        >
        </div>

          <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
              
        

              <!-- Forms & Tables -->
              <li class="menu-header small text-uppercase"><span class="menu-header-text">Tablas</span></li>
              
              <!-- Tables -->
              <li class="menu-item">
                  <a href="/stocks" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-table"></i>
                    <div data-i18n="Tables">Productos</div>
                  </a>
                </li>
              <li class="menu-item active">
                <a href="tables-basic.html" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-table"></i>
                  <div data-i18n="Tables">Empleados</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="/stores" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-table"></i>
                  <div data-i18n="Tables">Sucursales</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="/storestocks" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-table"></i>
                  <div data-i18n="Tables">Productos en sucursales</div>
                </a>
              </li>
              <!-- Misc -->
              
              
              
            </ul>
          </aside>
          <!-- / Menu -->

          <!-- Layout container -->
          <div class="layout-page">
            <!-- Navbar -->

            

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
              <!-- Content -->

              <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4"><!--<span class="text-muted fw-light">Sucursal 1 |</span>--> Empleados</h4>

                <!-- Bootstrap Table with Header - Dark -->
                <div class="card">
                  <div class="table-responsive text-nowrap">
                    <table class="table">
                      <thead class="table-dark">
                        <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Teléfono</th>
                          <th>sucursal</th>
                          <th>sueldo</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        @foreach ($employees as $emp)
                          <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$emp->id}}</strong></td>
                            <td>{{$emp->nombre}}</td>
                            <td>{{$emp->telefono}}</td>
                            <td>{{$emp->sucursal}}</td>
                            <td>{{$emp->sueldo}}</td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="{{route('employees.edit', $emp)}}"
                                    ><i class="bx bx-edit-alt me-1"></i> Editar</a
                                  >
                                  <form class="dropdown-item" action="{{route('employees.destroy', $emp) }}" method = "POST">
                                      @csrf
                                      @method('DELETE')
                                      <i class="bx bx-trash me-1"></i>
                                      <input type="submit" value="Delete">
                                  </form>
                                </div>
                              </div>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                <!--/ Bootstrap Table with Header Dark -->

              <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
          </div>
          <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
      </div>
      <!-- / Layout wrapper -->

      <!-- Core JS -->
      <!-- build:js assets/vendor/js/core.js -->
      <script src="../assets/vendor/libs/jquery/jquery.js"></script>
      <script src="../assets/vendor/libs/popper/popper.js"></script>
      <script src="../assets/vendor/js/bootstrap.js"></script>
      <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

      <script src="../assets/vendor/js/menu.js"></script>
      <!-- endbuild -->

      <!-- Vendors JS -->

      <!-- Main JS -->
      <script src="../assets/js/main.js"></script>

      <!-- Page JS -->

      <!-- Place this tag in your head or just before your close body tag. -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
</x-app-layout>