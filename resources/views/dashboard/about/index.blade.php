@extends('dashboard.parent')

@section('title' , 'Education Index')


@section('style')

@endsection



@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Education Index</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Expertise</th>
                            <th>Education Place</th>
                            <th>Year</th>
                            <th>Content</th>
                            <th>Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($education as $educat)

                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $educat->expertise }}</td>
                            <td>{{ $educat->educaName }}</td>
                            <td>{{ $educat->year }}</td>
                            <td>{{ $educat->summernote }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('education.edit', $educat->id) }}"
                                        class="btn btn-square btn-outline-success m-2 border-rad">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" onclick="performDestroy('{{ $educat->id }}', this)"
                                        class="btn btn-square btn-outline-danger m-2 border-rad">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection




@section('script')


{{-- Delete --}}
<script>
    function performDestroy(id, reference) {
        confirmDestroy('/education', id, reference);
    }
</script>


@endsection
