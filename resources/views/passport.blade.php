@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-8">

            <div class="card text-white bg-info mb-3">
                <div class="card-header"></div>
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-info-circle mr-2"></i>
                        <small>This dashboard section is a laravel-boilerplate to easily get started with Laravel Passport
                            <br><a href="/home" class="text-warning float-right mt-2 text-decoration-none"><i class="fas fa-arrow-left mr-2"></i>  Back to Dashboard</a>
                        </small>
                    </h5>
                </div>
            </div>

            <passport-clients class="mb-3"></passport-clients>
            
            <passport-personal-access-tokens class="mb-3"></passport-personal-access-tokens>
            
            <passport-authorized-clients class="mb-3"></passport-authorized-clients>

        </div>
    </div>

</div>
@endsection
