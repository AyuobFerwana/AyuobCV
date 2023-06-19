@extends('dashboard.parent')

@section('title','Edit Education')

@section('style')


@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <form id="form">
                    @csrf
                    <div class="card-header">
                        <h3 class="card-title">
                            Edit Education
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <label for="Expertise">Expertise</label>

                        <input type="text" class="form-control" value="{{ $educat->expertise }}" id="expertise" placeholder="Expertise">
                        <br>
                        <label for="Education">Education Place</label>

                        <input type="text" class="form-control" value="{{ $educat->educaName }}" id="educaName" placeholder="Education Place"><br>

                        <label for="Year">Year</label>
                        <input type="text" class="form-control" value="{{ $educat->year }}" id="year" placeholder="Year"><br>


                        <textarea id="summernote" name="summernote" placeholder="Place some text here">
                            {{ $educat->summernote }}
                        </textarea>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Save</button>

                        Edit Education

                    </div>
                </form>
            </div>
        </div>
        <!-- /.col-->
    </div>
</section>

@endsection

@section('script')
<script src="{{ asset('dash/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
    $(function () {
        $('#summernote').summernote();
    });
</script>

<script>
    document.getElementById('form').addEventListener('submit', function(event) {
       event.preventDefault();
       let formData = new FormData();
       formData.append('_method' , 'PUT');
       formData.append('expertise', document.getElementById('expertise').value);
       formData.append('educaName', document.getElementById('educaName').value);
       formData.append('year', document.getElementById('year').value);
       formData.append('summernote', document.getElementById('summernote').value);
       axios.post('{{ route('education.update' , $educat->id) }}', formData)
           .then(function(response) {
               toastr.success(response.data.message);
               console.log(response);
               document.getElementById('form');
               setTimeout(function(){
                   window.location.href='{{ route('education.create') }}';
               }, 2000);
           })
           .catch(function(error) {
               toastr.error(error.response.data.message);
               console.log(error);
           });
   });
</script>

@endsection
