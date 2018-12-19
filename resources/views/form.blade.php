@extends('layouts.master')

@section('title')
    Dashboard 1
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                
            </div>
            <div class="col-md-6">
                <div class="card stacked-form">
                    <div class="card-header ">
                        <h4 class="card-title">Subject Form</h4>
                    </div>
                    <div class="card-body ">
                        <form role="form" method="POST" action="{{route('subject.store')}}">
                            {{csrf_field()}}
                            <div class="form-group{{ $errors->has('id_subject') ? ' has-error' : '' }}">
                                <label>ID SUBJECT</label>
                                <input type="" placeholder="Enter Id Subject" class="form-control" name="id_subject">
                            </div>
                            <div class="form-group{{ $errors->has('nama_subject') ? ' has-error' : '' }}">
                                <label>NAMA SUBJECT</label>
                                <input type="" placeholder="Enter Nama Subject" class="form-control" name="nama_subject">
                            </div>
                            <div class="card-footer ">
                                <button type="submit" class="btn btn-fill btn-info">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection