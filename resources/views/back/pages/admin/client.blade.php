@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle :'Client');
@section('content')

<div class="page-header">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4>Client</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Client
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

@livewire('admin-clients')
        
@endsection




