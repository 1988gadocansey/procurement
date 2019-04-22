@extends('layouts.app')

@section('content')
    <h3 class="heading_b uk-margin-bottom">Form Validation</h3>

    <div class="md-card">
        <div class="md-card-content large-padding">

        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 class="display-1">dds</h1>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>

@endsection
