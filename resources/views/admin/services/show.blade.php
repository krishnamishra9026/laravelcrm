@extends('admin.app')
@section('content')

<div class="card">
    <div class="card-header">
        Service
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            Tab Name
                        </th>
                        <td>
                            {{ $service->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Title
                        </th>
                        <td>
                            {!! $service->title !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Description
                        </th>
                        <td>
                            {!! $service->description !!}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Image
                        </th>
                        <td>
                            <img src="{{asset('uploads/services/'.$service->image)}}">
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