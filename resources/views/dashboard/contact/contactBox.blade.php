@extends('dashboard.parent')

@section('title' , 'Contact Box')


@section('style')

@endsection



@section('content')

<section class="content">
    <div class="row">
        <div class="col-md-3">
            <a href="compose.html" class="btn btn-primary btn-block mb-3">Compose</a>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Folders</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item active">
                            <a href="{{ route('contactBox') }}" class="nav-link">
                                <i class="fas fa-inbox"></i> Inbox
                                <span class="badge bg-primary float-right">{{ $messages->count() }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-envelope"></i> Sent
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-trash-alt"></i> Trash
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Labels</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle text-danger"></i>
                                Important
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle text-warning"></i> Promotions
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle text-primary"></i>
                                Social
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Inbox</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" placeholder="Search Mail">
                            <div class="input-group-append">
                                <div class="btn btn-primary">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="mailbox-controls">
                        <!-- Check all button -->
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i
                                class="far fa-square"></i>
                        </button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm" onclick="deleteSelectedRows()">
                                <i class="far fa-trash-alt"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-reply"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-share"></i>
                            </button>
                        </div>
                        <!-- /.btn-group -->
                        <button type="button" class="btn btn-default btn-sm">
                            <i class="fas fa-sync-alt"></i>
                        </button>
                        <div class="float-right">
                            1-50/200
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                            <!-- /.btn-group -->
                        </div>
                        <!-- /.float-right -->
                    </div>
                    <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                            <tbody>
                                @foreach ($messages->reverse() as $mess )

                                <tr>
                                    <td>
                                        <div class="icheck-primary">
                                            <input type="checkbox" value="{{ $mess->id }}" id="check" class="checkbox">
                                            <label for="check"></label>
                                        </div>
                                    </td>

                                    <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a>
                                    </td>
                                    <td class="mailbox-name"><a href="read-mail.html">{{ $mess->first_name . ' ' .
                                            $mess->last_name }}</a></td>
                                    <td class="mailbox-subject"><b>{{ $mess->email }}</b> {{substr($mess->message, 0 ,
                                        40)."..."}}
                                    </td>
                                    <td class="mailbox-attachment"></td>
                                    <td class="mailbox-date">{{ $mess->created_at }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <!-- /.table -->
                    </div>
                    <!-- /.mail-box-messages -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer p-0">
                    <div class="mailbox-controls">
                        <!-- Check all button -->
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                            <i class="far fa-square"></i>
                        </button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </div>
                        <!-- /.btn-group -->
                        <button type="button" onclick="window.location.href='{{ route('contactBox') }}'"
                            class="btn btn-default btn-sm">
                            <i class="fas fa-sync-alt"></i>
                        </button>
                        <div class="float-right">
                            <div class="btn-group">
                                @if ($messages->previousPageUrl())
                                <a href="{{ $messages->previousPageUrl() }}" class="btn btn-default btn-sm">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                @endif

                                @if ($messages->nextPageUrl())
                                <a href="{{ $messages->nextPageUrl() }}" class="btn btn-default btn-sm">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                                @endif

                                <span class="btn btn-default btn-sm disabled">
                                    Page {{ $messages->currentPage() }} of {{ $messages->lastPage() }}
                                </span>
                            </div>
                            <!-- /.btn-group -->
                        </div>



                        <!-- /.float-right -->
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endsection




@section('script')


<script>
    function deleteSelectedRows() {
        const checkboxes = document.querySelectorAll('.checkbox:checked');
        const messageIds = Array.from(checkboxes).map((checkbox) => checkbox.value);
        document.getElementById('message_ids').value = messageIds.join(',');

        // Submit the form using Axios
        axios.post('{{ route('content.destroy', 'delete') }}')
            .then((response) => {
                // Handle successful deletion
                console.log(response.data);
                // Refresh or update the table as needed
            })
            .catch((error) => {
                // Handle error
                console.error(error);
            });
    }
</script>



@endsection
