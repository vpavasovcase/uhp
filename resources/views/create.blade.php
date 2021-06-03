@extends('app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create task</div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('tasks.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="priority" class="col-md-4 col-form-label text-md-right">task priority</label>

                                <div class="col-md-6">
                                    <input id="priority" type="text" class="form-control" name="priority"
                                        value="{{ old('priority') }}" autofocus>


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">task name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                        value="{{ old('name') }}" autofocus>


                                </div>
                            </div>





                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
