@extends('dashboard.parent')
@section('title', 'Skills')

@section('style')

@endsection

@section('content')

{{-- Create --}}
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Skills Range</h3>
                    </div>
                    <div class="card-body">
                        <form id="form">
                            @csrf
                            <div class="form-group">
                                <label for="SkillsName">Skills Name</label>
                                <input type="text" class="form-control" value="{{ $skill->name }}" id="name"
                                    placeholder="Enter Skills Name">

                                <br>
                                <label for="jsRange">Skills Range</label>

                                <div class="candidatos">
                                    <div class="parcial">
                                        <div class="info">
                                            <div class="percentagem-num" id="SkillsRange"></div>
                                            <div class="progressBar">
                                                <div class="percentagem" style="width: {{ $skill->skills }};"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="range" class="custom-range" value="{{ $skill->skills }}" id="skills"
                                    min="0" max="100" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')

{{-- Edit --}}
<script>
    document.getElementById('form').addEventListener('submit', function(event) {
    event.preventDefault();
    const formData = new FormData();
    formData.append('_method','PUT');
        formData.append('name', document.getElementById('name').value);
        formData.append('skills', document.getElementById('skills').value);
        axios.post('{{ route('user.update',$skill)}}', formData)

        .then(function(response) {
            toastr.success(response.data.message);
            console.log(response);
            document.getElementById('form');
        })
        .catch(function(error) {
            toastr.error(error.response.data.message);
            console.log(error);
        });
});
const SkillsRange = document.getElementById('SkillsRange');
function updatePercentage(element, percentage) {
    element.textContent = `${percentage}%`;
    element.parentElement.nextElementSibling.firstElementChild.style.width = `${percentage}%`;
}
skills.addEventListener('input', function() {
    updatePercentage(SkillsRange, this.value);
});
</script>
@endsection