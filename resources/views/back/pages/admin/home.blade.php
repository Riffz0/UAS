@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle :'Home');
@section('content')

<div class="page-header">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4>Home</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Dashboard
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="gallery-wrap">
    <ul class="row">
        <li class="col-lg-4 col-md-6 col-sm-12">
            <div class="da-card box-shadow">
                <div class="da-card-photo">
                    <img src="/back/vendors/images/product-img1.jpg" alt="">
                    <div class="da-overlay">
                        <div class="da-social">
                            <a href="" class="mb-10 color-white pd-20">
                               Kursus belajar Pemrograman
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-lg-4 col-md-6 col-sm-12">
            <div class="da-card box-shadow">
                <div class="da-card-photo">
                    <img src="/back/vendors/images/product-img3.jpg" alt="">
                    <div class="da-overlay">
                        <div class="da-social">
                            <a href="" class="mb-10 color-white pd-20">
                                Kursus belajar bahasa Arab
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-lg-4 col-md-6 col-sm-12">
            <div class="da-card box-shadow">
                <div class="da-card-photo">
                    <img src="/back/vendors/images/product-img3.jpg" alt="">
                    <div class="da-overlay">
                        <div class="da-social">
                            <a href="" class="mb-10 color-white pd-20">
                                Kursus belajar bahasa Inggris
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </li>      
    </ul>
</div>

@endsection