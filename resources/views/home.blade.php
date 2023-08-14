<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <main role="main" class="container">

            <div class="col-md-4">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
                <div class="card mt-4">
                    <div class="card-body">
                        <form action="{{route('upload-file')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Upload</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-success mt-2">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </main>

    </body>
</html>
