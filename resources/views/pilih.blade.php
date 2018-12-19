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
                        <h4 class="card-title">Pilih Subject</h4>
                    </div>
                    <div class="card-body ">
                        <form role="form" method="POST" action="pilihAction">
                            {{csrf_field()}}
                            <div class="form-group{{ $errors->has('id_subject') ? ' has-error' : '' }}">
                                <label>NAMA SUBJECT</label>
                                <input type="hidden" name="userid" value="">
                                <select name="id_subject" class="selectpicker" data-title="Single Select" data-style="btn-default btn-outline" data-menu-style="dropdown-blue">
                                    @foreach($subject as $s)
                                    <option value="{{$s->id_subject}}">{{$s->nama_subject}}</option>
                                    @endforeach
                                </select>
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