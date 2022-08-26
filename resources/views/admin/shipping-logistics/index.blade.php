@extends('admin.app')
@section('content')
   {{--  <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.shipping-logistics.create') }}">
                Add Testimonial
            </a>
        </div>
    </div> --}}
<div class="card">
    <div class="card-header">
        Shipping Logistics
    </div>
    @include('admin.includes.flashmessage')

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-FaqQuestion">
                <thead>
                    <tr>    
                        
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
                                {{ $image->title ?? '' }}
                            </td>
                            <td>
                                {{ $image->description ?? '' }}
                            </td>
                            <td>
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.shipping-logistics.show', $image->id) }}">
                                        View
                                    </a>
                                
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.shipping-logistics.edit', $image->id) }}">
                                        Edit
                                    </a>
                                
                                    {{-- <form action="{{ route('admin.shipping-logistics.destroy', $image->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                    </form> --}}
                                

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
<script>
    var dataSet18 = [

    @foreach($images as $image)
    [ "{{ @$no++ }}" ,"{{ $image->name }}","{{ $image->title }}", "<a href='{{route('admin.shipping-logistics.edit',$image)}}'><i class='fas fa-pencil-alt ms-text-primary'></i></a> <a href='javascript:' onclick='submitform({{ $no }});'><i class='far fa-trash-alt ms-text-danger'></i></a><form id='delete-form{{$no}}' action='{{route('admin.shipping-logistics.destroy',$image)}}' method='POST'><input type='hidden' name='_token' value='{{ csrf_token()}}'><input type='hidden' name='_method' value='DELETE'></form>"],
    @endforeach
    ];
    var tablepackage = $('#data-table-18').DataTable( {
        data: dataSet18,
        columns: [
        { title: "Id" },
        { title: "Name" },
        { title: "Tagline" },
        { title: "Action" },
        ],

    });

</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    $( document ).ready(function() {
        setTimeout(function() {
            $('.alert-success').fadeOut('fast');
        }, 2200);
    });
</script>
<script type="text/javascript">
    function submitform(no){
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this Package!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                document.getElementById('delete-form'+no).submit();
            }
        });
    }
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>
@endsection