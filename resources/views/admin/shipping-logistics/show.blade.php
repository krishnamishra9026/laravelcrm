@extends('admin.app')
@section('content')

<div class="card">
    <div class="card-header">
        Show Shipping Logistics
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            ID#
                        </th>
                        <td>
                            {{ $shipping_logistic->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Title
                        </th>
                        <td>
                            {!! $shipping_logistic->title !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Description
                        </th>
                        <td>
                            {!! $shipping_logistic->description !!}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Image
                        </th>
                        <td>

                            <img src="{{asset('uploads/shipping-logistics/'.$shipping_logistic->image)}}">
                        </td>
                    </tr>

                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                Back To List
            </a>
        </div>


    </div>
</div>
@endsection