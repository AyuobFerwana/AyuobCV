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
                        {{-- About --}}
                        <label for="About">About me</label>

                        <div class="js-tag-editor tag-editor multi-line s-input"
                            style="padding: 0px 9.1px; box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; width: 100%;">
                            <span></span><input type="text" autocomplete="off" tabindex="0" aria-autocomplete="list"
                                aria-haspopup="listbox" role="combobox" aria-expanded="false"
                                placeholder="javascript, java, c#, php, jquery, python, android, ios"
                                id="tageditor-replacing-fav-tags--input" class="s-input js-tageditor-replacing"
                                style="width: 19px;"><span></span></div>
                        <br>

                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Create</button>

                        Create Education To CV || Go to The Index here
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
