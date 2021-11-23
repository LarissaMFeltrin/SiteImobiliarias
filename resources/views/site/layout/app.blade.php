<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @include('site.layout.parts.description')
    <title>Sambura Imóveis</title>
    <!-- ======= styles ======= -->
    @include('site.layout.parts.styles')
    <!-- End styles -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('site.layout.parts.header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  @yield('hero-banner')
  <!-- End Hero -->

  @yield('busca')

  <main id="main">
        @yield('main')
  </main>
  <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('site.layout.parts.footer')
    <!-- End Footer -->

    <!-- ======= Scripts ======= -->
    @include('site.layout.parts.scripts')
    <!-- ======= End Scripts ======= -->

</body>

</html>
