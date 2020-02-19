@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="pb-3">Interest</h2>
        <a href="{{ route('formint') }}" class="btn btn-primary">Add Info</a>
        <table class="table table-bordered mt-3">
            <tr>
                <th>No</th>
                <th>Info</th>
                <th>Action</th>
            </tr>

            @foreach($interests as $index=>$interest)
                <tr>
                    <td>{{ $index + 1}}</td>
                    <td>{{ $interest->info }}</td>
                    <td>
                        <a href="{{ route('i.edit', $interest->id) }}" class="btn btn-warning">Edit</a>
                        <button onclick="handleDelete({{ $interest }})" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>


    <div class="modal" id="modalDelete" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form id="formDelete" action="" method="post">
                @csrf
                @method('delete')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Warning !</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Do you want to delete <span id="myinfo"></span> ?</p>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-danger" value="Delete">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>function handleDelete(interest) {
            var {id, info} = interest
            $('#modalDelete').modal('show');
            $('#formDelete').attr('action', 'deleteint/'+id);
            $('#myinfo').html(info)
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

@endsection
