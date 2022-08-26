@extends('admin.app')
@section('content')
<div class="card">
    <div class="card-header">
        Services
    </div>
    @include('admin.includes.flashmessage')

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-FaqQuestion">
                <thead>
                    <tr>
                        <th>
                            Tab Name
                        </th>
                        
                        <th>
                            Title
                        </th>
                        <th>
                            Description
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($images as $key => $image)
                        <tr data-entry-id="{{ $image->id }}">
                            <td>
                                {{ $image->name ?? '' }}
                            </td>
                            <td>
                                {{ $image->title ?? '' }}
                            </td>
                            <td>
                                {{ $image->description ?? '' }}
                            </td>
                            <td>
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.services.show', $image->id) }}">
                                        View
                                    </a>
                                
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.services.edit', $image->id) }}">
                                        Edit
                                    </a>                                

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
        </div>
@endsection
@section('scripts')

@endsection