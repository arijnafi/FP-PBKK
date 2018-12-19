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
                        <h4 class="card-title">Edit Learning Material Form</h4>
                    </div>
                    <div class="card-body ">
                        <form role="form" method="POST" action="{{route('learning.update', $learning->id_learning)}}">
                            {{csrf_field()}}
                            {{ method_field('PUT')}}
                            <div class="form-group{{ $errors->has('id_learning') ? ' has-error' : '' }}">
                                <label>ID LEARNING</label>
                                <input type="" placeholder="Enter Id Learning" class="form-control" name="id_learning" value="{{$learning->id_learning}}">
                            </div>
                            <div class="form-group{{ $errors->has('subject_id') ? ' has-error' : '' }}">
                                <label>NAMA SUBJECT</label>
                                <select name="subject_id" class="selectpicker" data-title="Single Select" data-style="btn-default btn-outline" data-menu-style="dropdown-blue" value="{{$learning->subject_id}}">
                                    @foreach($subject as $s)
                                    <option value="{{$s->id_subject}}">{{$s->nama_subject}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group{{ $errors->has('material') ? ' has-error' : '' }}">
                                <label>MATERIAL</label>
                                <input type="" placeholder="Enter Material" class="form-control" name="material" value="{{$learning->material}}">
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

@section('script')

@endsection