@extends('dashboard.parent')

@section('title','Create Education')

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
                            Create Education
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <label for="SkillsName">Expertise</label>

                        <input type="text" class="form-control" id="expertise" placeholder="Expertise">
                        <br>
                        <label for="SkillsName">Education Place</label>

                        <input type="text" class="form-control" id="educaName" placeholder="Education Place"><br>

                        <textarea id="summernote" name="summernote" placeholder="Place some text here"></textarea>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Create</button>
                        Create Education To CV
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
       formData.append('expertise', document.getElementById('expertise').value);
       formData.append('educaName', document.getElementById('educaName').value);
       formData.append('summernote', document.getElementById('summernote').value);
       axios.post('{{ route('education.store') }}', formData)
           .then(function(response) {
               toastr.success(response.data.message);
               console.log(response);
               document.getElementById('form').reset();
           })
           .catch(function(error) {
               toastr.error(error.response.data.message);
               console.log(error);
           });
   });
</script>

@endsection
