@extends('layouts.success')

@section('title')
    Up And Down Thrift | Success
@endsection

@section('content')
    <div class="page-content page-success">
        <div class="section-succes" data-aos="zoom-in">
            <div class="container">
                <div class="row align-items-center row-login justify-content-center">
                    <div class="col-lg-6 text-center">
                        <img src="images/success.svg" alt="" class="mb-4">
                        <h2>
                            Transaction Success
                        </h2>
                        <p>
                            Silahkan tunggu konfirmasi email dari kami dan kamu akan menginformasikan resi secepat mungkin!
                        </p>
                        <div>
                            <a href="/dashboard.html" class="btn btn-success w-50 mt-4">My Dashboard</a>
                            <a href="/index.html" class="btn btn-signup w-50 mt-2">Go to Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
