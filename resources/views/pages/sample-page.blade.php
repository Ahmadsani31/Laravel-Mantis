@extends('layouts.app')

@section('content')
    <!-- [ breadcrumb ] start -->
    <x-breadcrumb title="{{ $pageTitle }}" :links="[
        'Dashboard' => route('dashboard'),
        $pageTitle => '#',
    ]" />

    <!-- [ breadcrumb ] end -->


    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Hello card</h5>
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere, accusantium. Eos, nostrum consequatur
                    modi cumque ut beatae nihil sint alias odit ducimus reiciendis ex, saepe omnis labore quis, voluptates
                    minus.
                </div>
            </div>
        </div>
        <!-- [ sample-page ] end -->
    </div>
    <!-- [ Main Content ] end -->
@endsection
