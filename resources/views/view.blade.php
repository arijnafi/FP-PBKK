@extends('layouts.master')

@section('title')
    Dashboard 2
@endsection

@section('content')
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="card data-tables">
                                <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
                                    <h4 style="margin-top: 0px; margin-left: 10px;">SUBJECT</h4>
                                    <div class="toolbar">
                                    </div>
                                    <div class="fresh-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Id Subject</th>
                                                    <th>Nama Subject</th>
                                                    <th class="disabled-sorting text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Id Subject</th>
                                                    <th>Nama Subject</th>
                                                    <th class="disabled-sorting text-right">Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                @foreach($show_subject as $s => $value)
                                                  <tr>
                                                    <td>{{$value->id_subject}}</td>
                                                    <td>{{$value->nama_subject}}</td>
                                                    <td class="text-right">
                                                        <a href="{{ URL::to('/subject/'. $value->id_subject . '/edit') }}" class="btn btn-link btn-warning edit"><i class="fa fa-edit"></i></a>
                                                        <a href="{{ route('subject.delete', ['id' => $value->id_subject]) }}" class="btn btn-link btn-danger"><i class="fa fa-times"></i></a>
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="card data-tables">
                                <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
                                    <h4 style="margin-top: 0px; margin-left: 10px;">LEARNING MATERIAL</h4>
                                    <div class="toolbar">
                                    </div>
                                    <div class="fresh-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Id Learning</th>
                                                    <th>Subject</th>
                                                    <th>Material</th>
                                                    <th class="disabled-sorting text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Id Learning</th>
                                                    <th>Subject</th>
                                                    <th>Material</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                @foreach($show_learning as $s => $value)
                                                  <tr>
                                                    <td>{{$value->id_learning}}</td>
                                                    <td>{{$value->subject_id}}</td>
                                                    <td>{{$value->material}}</td>
                                                    <td class="text-right">
                                                        <a href="{{ URL::to('/learning/'. $value->id_learning . '/edit') }}" class="btn btn-link btn-warning edit"><i class="fa fa-edit"></i></a>
                                                        <a href="{{ route('learning.delete', ['id' => $value->id_learning]) }}" class="btn btn-link btn-danger"><i class="fa fa-times"></i></a>
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
            </div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }

        });


        var table = $('#datatables').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            if ($tr.hasClass('child')) {
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
           
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });

        //Like record
        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });
    });
</script>
@endsection