<!DOCTYPE html>
<html lang="fr" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Espace Vendeur')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/tabler-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/cards-advance.css') }}" />

    <!-- Helpers and Config -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
  </head>

  <body>
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        {{-- Sidebar --}}
        @include('partials.vendor.sidebar')

        <div class="layout-page">
          {{-- Topbar --}}
          @include('partials.vendor.topbar')

          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              @php
                  $shop = Auth::user()->shop;
              @endphp

              @if (!$shop)
                <div class="alert alert-info d-flex align-items-center" role="alert">
                  <i class="ti ti-info-circle me-2"></i>
                  Vous n'avez pas encore créé votre boutique.
                  <a href="{{ route('vendor.shops.create') }}" class="ms-1 fw-bold">Créer maintenant</a>
                </div>
              @elseif ($shop->statut === 'en_attente')
                <div class="alert alert-warning d-flex align-items-center" role="alert">
                  <i class="ti ti-clock me-2"></i>
                  Votre boutique est en attente de validation par l’équipe admin.
                </div>
              @elseif ($shop->statut === 'refuse')
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                  <i class="ti ti-alert-triangle me-2"></i>
                  Votre boutique a été refusée.
                  <a href="{{ route('vendor.shops.index') }}" class="ms-1 fw-bold">Voir les détails</a>
                </div>
              @endif

              @yield('content')
            </div>

            {{-- Footer --}}
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex justify-content-between py-2">
                <div>
                  © {{ date('Y') }}, made with ❤️ by <a href="https://pixinvent.com" target="_blank">Pixinvent</a>
                </div>
                <div>
                  <a href="https://themeforest.net/licenses/standard" class="footer-link me-3">License</a>
                  <a href="https://1.envato.market/pixinvent_portfolio" class="footer-link me-3">More Themes</a>
                  <a href="https://pixinvent.ticksy.com/" class="footer-link">Support</a>
                </div>
              </div>
            </footer>
          </div>
        </div>

        <div class="layout-overlay layout-menu-toggle"></div>
      </div>
    </div>

    <!-- Core JS -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @yield('scripts')
  </body>
</html>
