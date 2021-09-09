@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Manage All Bogs</div>

                <div class="card-body">

                    <div class="form-group">
                        <form method="post">

                        <table class="table table-responsive table-bordered">
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Photo</th>
                                <th>Descriptions</th>
                                <th>Action</th>
                            </tr>
                        </table>
                            
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
