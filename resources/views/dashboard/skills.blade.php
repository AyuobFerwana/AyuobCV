@extends('dashboard.parent')
@section('title', 'Skills')

@section('style')

@endsection

@section('content')
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
                        <label for="jsRange">Js Range (JavaScript)</label>
                        <div class="candidatos">
                            <div class="parcial">
                                <div class="info">
                                    <div class="percentagem-num" id="jsPercentage"></div>
                                    <div class="progressBar">
                                        <div class="percentagem" style="width: 0;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="range" class="custom-range" id="jsRange" min="0" max="100" required>
                    </div>

                    <div class="form-group">
                        <label for="htmlRange">Html Range</label>
                        <div class="candidatos">
                            <div class="parcial">
                                <div class="info">
                                    <div class="percentagem-num" id="htmlPercentage"></div>
                                    <div class="progressBar">
                                        <div class="percentagem" style="width: 0;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="range" class="custom-range custom-range-danger" id="htmlRange" min="0" max="100">
                    </div>
                    <div class="form-group">
                        <label for="cssRange">Css Range</label>
                        <div class="candidatos">
                            <div class="parcial">
                                <div class="info">
                                    <div class="percentagem-num" id="cssPercentage"></div>
                                    <div class="progressBar">
                                        <div class="percentagem" style="width: 0;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="range" class="custom-range custom-range-teal" id="cssRange" min="0" max="100">
                    </div>
                    <div class="form-group">
                        <label for="phpRange">PhP Range</label>
                        <div class="candidatos">
                            <div class="parcial">
                                <div class="info">
                                    <div class="percentagem-num" id="phpPercentage"></div>
                                    <div class="progressBar">
                                        <div class="percentagem" style="width: 0;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="range" class="custom-range custom-range-dark" id="phpRange" min="0" max="100">
                    </div>
                    <div class="form-group">
                        <label for="laravelRange">PhP Laravel Range</label>
                        <div class="candidatos">
                            <div class="parcial">
                                <div class="info">
                                    <div class="percentagem-num" id="laravelPercentage"></div>
                                    <div class="progressBar">
                                        <div class="percentagem" style="width: 0;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="range" class="custom-range custom-range-warning" id="laravelRange" min="0"
                            max="100">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    document.getElementById('form').addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(this);
        axios.post("{{ route('user.store') }}", formData)
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
    const jsPercentage = document.getElementById('jsPercentage');
    const htmlPercentage = document.getElementById('htmlPercentage');
    const cssPercentage = document.getElementById('cssPercentage');
    const phpPercentage = document.getElementById('phpPercentage');
    const laravelPercentage = document.getElementById('laravelPercentage');
    function updatePercentage(element, percentage) {
        element.textContent = `${percentage}%`;
        element.parentElement.nextElementSibling.firstElementChild.style.width = `${percentage}%`;
    }

    const jsRange = document.getElementById('jsRange');
    const htmlRange = document.getElementById('htmlRange');
    const cssRange = document.getElementById('cssRange');
    const phpRange = document.getElementById('phpRange');
    const laravelRange = document.getElementById('laravelRange');

    jsRange.addEventListener('input', function() {
        updatePercentage(jsPercentage, this.value);
    });

    htmlRange.addEventListener('input', function() {
        updatePercentage(htmlPercentage, this.value);
    });

    cssRange.addEventListener('input', function() {
        updatePercentage(cssPercentage, this.value);
    });

    phpRange.addEventListener('input', function() {
        updatePercentage(phpPercentage, this.value);
    });

    laravelRange.addEventListener('input', function() {
        updatePercentage(laravelPercentage, this.value);
    });
</script>
@endsection
