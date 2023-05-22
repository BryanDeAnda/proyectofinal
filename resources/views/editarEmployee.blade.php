<x-app-layout>
    <head>
      <meta charset="utf-8" />
      <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
      />

      <title>Editar empleado</title>

      <meta name="description" content="" />

      <!-- Favicon -->
      <link rel="icon" type="image/x-icon" href="/assets/img/favicon/favicon.ico" />

      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
      />

      <!-- Icons. Uncomment required icon fonts -->
      <link rel="stylesheet" href="/assets/vendor/fonts/boxicons.css" />

      <!-- Core CSS -->
      <link rel="stylesheet" href="/assets/vendor/css/core.css" class="template-customizer-core-css" />
      <link rel="stylesheet" href="/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
      <link rel="stylesheet" href="/assets/css/demo.css" />

      <!-- Vendors CSS -->
      <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

      <!-- Page CSS -->

      <!-- Helpers -->
      <script src="/assets/vendor/js/helpers.js"></script>

      <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
      <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
      <script src="/assets/js/config.js"></script>
    </head>

    <body>
      <!-- Layout wrapper -->
      <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
          <!-- Menu -->

          <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
              <!-- Forms & Tables -->
              <li class="menu-header small text-uppercase"><span class="menu-header-text">Editar Empleado</span></li>
              <!-- Forms -->
              <li class="menu-item active">
                <a href="javascript:void(0);" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-detail"></i>
                  <div data-i18n="Form Elements">Editar Empleado</div>
                </a>
              </li>
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
                <h4 class="fw-bold py-3 mb-4">Editar Empleado</h4>

                <div class="row">
                  <div class="col-md-6">
                    <div class="card mb-4">
                      <h5 class="card-header">Ingresa la información del producto</h5>
                      <form  action={{ route('employees.update', $employee) }} method="POST" autocomplete="off" class="card-body">
                        @csrf
                        @method('PATCH')
                        <div class="form-floating">
                          <input
                            type="text"
                            class="form-control"
                            id="nombre" 
                            name="nombre" 
                            value = "{{$employee->nombre}}"
                            placeholder="Nombre Apellido"
                            aria-describedby="floatingInputHelp"
                            required
                          />
                          <label for="floatingInput">Nombre</label>
                        </div>
                        @error('nombre')
                            <h6>{{$message}}</h6>
                        @enderror
                        </br>
                        <div class="form-floating">
                          <input
                            type="number" 
                            id="telefono" 
                            name="telefono" 
                            value = "{{$employee->telefono}}"
                            class="form-control"
                            placeholder="1234567890"
                            aria-describedby="floatingInputHelp"
                            required
                          />
                          <label for="floatingInput">Teléfono</label>
                        </div>
                        @error('telefono')
                            <h6>{{$message}}</h6>
                        @enderror
                        </br>
                        <div class="form-floating">
                          <input
                            type="number" 
                            id="sueldo" 
                            name="sueldo" 
                            value="{{$employee->sueldo}}"
                            class="form-control"
                            placeholder="0000.00"
                            aria-describedby="floatingInputHelp"
                            required
                          />
                          </br>
                          <label for="floatingInput">Sueldo</label>
                        </div>
                        @error('sueldo')
                            <h6>{{$message}}</h6>
                        @enderror
                        <div class="form-floating">
                            <select class="form-control" aria-describedby="floatingInputHelp" name="store" id="store">
                                @foreach ($stores as $store)
                                    <option value="{{ $store->id }}" {{ $employee->store_id == $store->id ? 'selected' : '' }}>{{ $store->nombre }}</option>
                                @endforeach
                            </select>
                            <label for="floatingInput">Sucursal</label>
                        </div>
                        <div class="mt-4">
                          <button type="submit" class="btn btn-primary me-2" href="/employees">Enviar</button>
                          <button type="reset" class="btn btn-outline-secondary" >Deshacer cambios</button>
                        </div>
                      </form>
                      <div class="buy-now card-body">
                        <a
                          href="/employees"
                          class="btn btn-primary me-2"
                          >Regresar</a>
                      </div>
                  </div>
                  <!--<form action="/employees" method="POST" autocomplete="off">
                      @csrf
                      <label for="nombre">Nombre:</label><br>
                      <input type="text" id="nombre" name="nombre" value = "{{old('nombre')}}"/><br>
                      @error('nombre')
                          <h4>{{$message}}</h4>
                      @enderror
                      <input type="number" id="cantidad" name="cantidad" value = "{{old('cantidad')}}"/><br>
                      <input type="number" id="precio" name="precio" value="{{ old('precio') }}" /><br>
                      <input type="submit" value="Enviar"/>
                  </form>-->
                </div>
              </div>
              <!-- / Content -->

              <!-- Footer
              <footer class="content-footer footer bg-footer-theme">
                <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                  <div class="mb-2 mb-md-0">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ by
                    <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                  </div>
                  <div>
                    <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                    <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                    <a
                      href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                      target="_blank"
                      class="footer-link me-4"
                      >Documentation</a
                    >

                    <a
                      href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                      target="_blank"
                      class="footer-link me-4"
                      >Support</a
                    >
                  </div>
                </div>
              </footer>
              / Footer -->

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
      <script src="/assets/vendor/libs/jquery/jquery.js"></script>
      <script src="/assets/vendor/libs/popper/popper.js"></script>
      <script src="/assets/vendor/js/bootstrap.js"></script>
      <script src="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

      <script src="/assets/vendor/js/menu.js"></script>
      <!-- endbuild -->

      <!-- Vendors JS -->

      <!-- Main JS -->
      <script src="/assets/js/main.js"></script>

      <!-- Page JS -->

      <script src="/assets/js/form-basic-inputs.js"></script>

      <!-- Place this tag in your head or just before your close body tag. -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
  </html>
</x-app-layout>