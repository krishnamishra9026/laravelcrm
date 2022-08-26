@extends('admin.app')
@section('content')
<div class="card">
    <div class="card-header">
        Create Testimonial
    </div>

    <div class="card-body">
                <form class="needs-validation clearfix" method="POST" action="{{route('admin.shipping-logistics.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">

                        <div class="col-md-12">
                            <label for="title">Title</label>
                            <div class="input-group">
                                <input type="text" id="title" name="title" class="form-control" placeholder="Title" required>
                                <div class="invalid-feedback">
                                    Please Enter a Title.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="description">Description</label>
                            <div class="input-group">
                                <textarea rows="8" id="description" name="description" class="form-control" placeholder="Description" required></textarea>
                                <div class="invalid-feedback">
                                    Please Write Description 
                                </div>
                            </div>
                        </div> 

                        
                        <div class="col-md-12">
                            <label for="validationCustom12">Upload Image</label>
                            <div class="input-group avat">
                                <div class="kv-avatar">
                                    <div class="file-loading">
                                        <input id="avatar-2" name="image" type="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="kv-avatar-hint">
                                <small>Note: File-size should be less than 3.5 MB</small>
                            </div>
                            <div id="kv-avatar-errors-2" class="center-block mt-3" style="width:336px;display:none"></div>
                        </div>                 
                    </div>
                    <button class="btn btn-primary float-right" type="submit">Save</button>
                </form>

            </div>
        </div>
@endsection
@section('scripts')
    <script type="text/javascript">
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2({
            tags: true,
            tokenSeparators: [',', ' ']
        });
    });
</script>
    @endsection