@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row whiteHome">
    <div class="col-lg-6">
      <img src="https://www.juventus.com/media/images/membership/J1897_Bottone_JStore.png" alt="logoJuve" class="logo">
    </div>
    <div class="col-lg-6">
      <img src="https://1.bp.blogspot.com/-1PlEW97asCQ/XMX0XakSKuI/AAAAAAAAOOY/rb562ptokpU5ECjJS02xLPTSz9v4sHaFQCLcBGAs/s1600/adidas%2B%252829%2529.png" alt="logoAdidas" class="logoSecondario">
      <img src="https://www.lcar.es/c/10847-category_default/jeep.jpg" alt="logoJeep" class="logoSecondario">
      <img src="https://www.hublot.com/magento/media/catalog/product/cache/1/thumbnail/505x640/9df78eab33525d08d6e5fb8d27136e95/4/0/402.qd.0123.nr-thumb-2.png" alt="logoHublot" class="logo">
    </div>
  </div>

  <div class="row navbarNews">
    <nav class="navbar navbar-expand-md text-secondary shadow-sm p-0">
      <div class="container">
        <ul class="navbar-nav colorList linkNews">
          <li class="active"><a class="nav-link" href="#">HOME</a></li>
          <li><a class="nav-link" href="#">@lang('home.news')</a></li>
          <li><a class="nav-link" href="#">@lang('home.matches')</a></li>
          <li><a class="nav-link" href="#">@lang('home.team')</a></li>
          <li><a class="nav-link" href="#">CLUB</a></li>
          <li><a class="nav-link" href="#">@lang('home.fans')</a></li>
          <li><a class="nav-link" href="#">ALLIANZ STADIUM & JUVENTUS MUSEUM</a></li>
          <li><a class="nav-link" href="#">@lang('home.membership')</a></li>
          <li><a class="nav-link" href="#">@lang('home.tickets')</a></li>
          <li><a class="nav-link" href="#">@lang('home.shop')</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="row news">
    <div class="col-lg-6 deLigt">

    </div>
    <div class="col-lg-6 store">

    </div>
  </div>
</div>
@endsection
