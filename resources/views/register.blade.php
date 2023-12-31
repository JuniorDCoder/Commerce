<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>



        <div class="row mt-5 justify-content-center">
            <div class="col-md-4">

                <h2 class="mb-4">Get Started</h2>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{$error}}
                        </div>
                    @endforeach
                @endif
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('register.submit')}}" method="post">
                            @csrf

                            <div class="mb-2">
                                <label for="" class="form-label">Username</label>
                                <input type="text" name="name" class="form-control">

                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">User Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">User Age</label>
                                <input type="number" name="age" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">User Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
