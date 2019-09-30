@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('print.print')</div>

                <div class="card-body">
                    <div class="alert alert-info">
                        <strong>@lang('general.note'):</strong> @lang('print.available_money'): {{ 12 }} HUF
                    </div>
                    @include("print.print")
                    @include("print.modify")
                    @include("print.free")
                    @include("print.history")
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
