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
                        <h3 class="card-title">Skills Range</h3>
                    </div>
                    <div class="card-body">
                        <form id="form">
                            @csrf
                            <div class="form-group">
                                <label for="SkillsName">Skills Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Skills Name">

                                <br>
                                <label for="jsRange">Skills Range</label>

                                <div class="candidatos">
                                    <div class="parcial">
                                        <div class="info">
                                            <div class="percentagem-num" id="SkillsRange"></div>
                                            <div class="progressBar">
                                                <div class="percentagem" style="width: 0;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="range" class="custom-range" id="skills" value="0" min="0" max="100"
                                    required>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- Index --}}
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-6" style="position: relative; top: -309px;">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Index Range Skills</h3>
                        <div class="card-tools">
                            {{-- <ul class="pagination pagination-sm float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul> --}}
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div style="display: flex; justify-content: center;">
                        <table class="table float-right">
                            <!-- Added 'float-right' class -->
                            <thead>
                                <tr>
                                    <th style="width: 10px">ID</th>
                                    <th>Skills</th>
                                    <th>Progress</th>
                                    <th style="width: 40px">Label</th>
                                    <th style="width: 91px">Setting</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($skills as $skill)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $skill->name }}</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            @if ($skill->skills < 50)
                                            <div class="progress-bar progress-bar-danger" style="width: {{ $skill->skills }}%"></div>
                                            @elseif($skill->skills >= 50 && $skill->skills < 70)
                                            <div class="progress-bar bg-warning" style="width: {{ $skill->skills }}%"></div>
                                            @else
                                            <div class="progress-bar bg-success" style="width: {{ $skill->skills }}%"></div>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        @if ($skill->skills < 50)
                                        <span class="badge bg-danger">%{{ $skill->skills }}</span>
                                        @elseif($skill->skills >= 50 && $skill->skills < 70)
                                        <span class="badge bg-warning">%{{ $skill->skills }}</span>
                                        @else
                                        <span class="badge bg-success">%{{ $skill->skills }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a  href="{{ route('user.edit', $skill->id) }}"
                                                class="btn btn-square btn-outline-success m-2 border-rad">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button type="button" onclick="performDestroy('{{ $skill->id }}', this)"
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
        </div>
    </div>
    </div>
    </div>
</section>


@endsection

@section('script')

{{-- Create --}}
<script>
 document.getElementById('form').addEventListener('submit', function(event) {
    event.preventDefault();
    let formData = new FormData();
    formData.append('name', document.getElementById('name').value);
    formData.append('skills', document.getElementById('skills').value);
    axios.post('{{ route('user.store') }}', formData)
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

const SkillsRange = document.getElementById('SkillsRange');
function updatePercentage(element, percentage) {
    element.textContent = `${percentage}%`;
    element.parentElement.nextElementSibling.firstElementChild.style.width = `${percentage}%`;
}
skills.addEventListener('input', function() {
    updatePercentage(SkillsRange, this.value);
});

</script>



{{-- Delete --}}
<script>
    function performDestroy(id, reference) {
        confirmDestroy('/user', id, reference);
    }
</script>


@endsection
