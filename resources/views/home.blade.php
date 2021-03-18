@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form enctype="multipart/form-data" action="{{ url('/bulkMail') }}" method="POST">
                        @csrf
                        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                            <div><input name="excelFile" type="file"></div></br>
                            <div><input type="submit" value="Send Mail"></div>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
