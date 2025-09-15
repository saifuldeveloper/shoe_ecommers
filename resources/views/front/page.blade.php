@extends('master.front')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="ps-page--simple">
            <div class="ps-breadcrumb">
                <div class="ps-container">
                    <div class="page-header text-center">
                        <h1 class="mb-4">{{ $page->title ?? "" }}</h1>
                        <div>
                            {!! $page->details ?? "" !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection