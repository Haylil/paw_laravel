@extends('Inputan.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Contacts</div>
                    <div class="card-body">
                    <form action="{{route('store')}}" method="post" enctype="multipart/form-data">>
                        {!! csrf_field() !!}
                        <label>Name</label></br>
                        <input type="text" name="name" id="name" class="form-control"></br>
                        <label>Address</label></br>
                        <input type="text" name="address" id="address" class="form-control"></br>
                        <label>Mobile</label></br>
                        <input type="text" name="mobile" id="mobile" class="form-control"></br>
                        <input class="form-control" name="photo" type="file" id="photo">

                        
                        <input type="submit" value="Save" class="btn btn-success"></br>
                    </form>
                        <!-- <a href="{{route('create')}}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a> -->
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Telephone</th> 
                                        <th>Photo</th> 
                                </thead>
                                </thead>
                                <tbody>
                                @foreach($inputan as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        <td>
                                            <img src="{{ asset($item->photo) }}" width= '50' height='50' class="img img-responsive" />


                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection