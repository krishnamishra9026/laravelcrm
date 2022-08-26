@extends('admin.app')
@section('content')

<div class="card">
    <div class="card-header">
        Show Faq Question
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
                            {{ $faqQuestion->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Question
                        </th>
                        <td>
                            {!! $faqQuestion->question !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Answer
                        </th>
                        <td>
                            {!! $faqQuestion->answer !!}
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