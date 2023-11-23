@extends('layout.master')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Contact Form Submissions</h4>

            </div>
            <div id="error_placeholder" class="m-2"></div>
            <div class="card-content">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered stripe">
                            <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Fleet Size</th>
                                <th>Solution</th>
                                <th>Message</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($data))
                                @foreach($data as $row)
                                    <tr>
                                        <td> {{$row->first_name}}</td>
                                        <td> {{$row->last_name}}</td>
                                        <td> {{$row->phone}}</td>
                                        <td> {{$row->email}}</td>
                                        <td> {{$row->fleet_size}}</td>
                                        <td> {{$row->solution}}</td>
                                        <td> {{$row->message}}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    @include('company.add_edit_form')--}}
@endsection

@section('script')
    <script src="{{ URL::asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"/>
    <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
@endsection
