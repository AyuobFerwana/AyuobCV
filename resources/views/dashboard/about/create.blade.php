@extends('dashboard.parent')

@section('title','Create about')

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
                            About
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        {{-- Expertise --}}
                        <label for="Expertise">Expertise</label>

                        <input type="text" class="form-control" id="expertise" placeholder="Expertise">
                        <br>
                        {{-- Education --}}
                        <label for="Education">Education Place</label>

                        <input type="text" class="form-control" id="educaName" placeholder="Education Place"><br>
                        {{-- link --}}
                        <label for="Link">Link</label>
                        <input type="text" class="form-control" id="link" placeholder="Link"><br>

                        {{-- Year --}}
                        <label for="Year"> Year </label>
                        <input type="text" class="form-control" id="year" placeholder="Year"><br>

                        {{-- Content --}}
                        <textarea id="summernote" name="summernote" placeholder="Place some text here"></textarea>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Create</button>

                        Create Education To CV  || Go to The Index here
                        <a href="{{ route('education.index') }}" class="btn btn-warning">index</a>

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
       formData.append('year', document.getElementById('year').value);
       formData.append('link', document.getElementById('link').value);

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
