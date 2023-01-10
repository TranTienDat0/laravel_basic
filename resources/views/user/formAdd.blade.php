<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('create') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email">Name: </label>
                            <input type="text" name="nam" class="form-control" placeholder="Enter name"
                                id="email">
                                
                                <span style="color: red;">
                                    @error('nam')
                                        {{ $message }}                                       
                                    @enderror
                                </span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email: </label>
                            <input type="email" name="mail_address" class="form-control" placeholder="Enter emali"
                                id="email">
                                
                                <span style="color: red;">
                                    @error('mail_address')
                                        {{ $message }}
                                    @enderror
                                </span>
                        </div>
                        <div class="form-group">
                            <label for="email">Password: </label>
                            <input type="password" name="password" class="form-control" placeholder="Enter password"
                                id="email">
                                <span style="color: red;">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                        </div>
                        <div class="form-group">
                            <label for="email">password_confirmation: </label>
                            <input type="password" name="password_confirmation" class="form-control"
                                placeholder="Confirm password" id="email">
                                <span style="color: red;">
                                    @error('password_confirmation')
                                        {{ $message }}
                                    @enderror
                                </span>
                        </div>
                        <div class="form-group">
                            <label for="email">Address: </label>
                            <input type="text" name="address" class="form-control" placeholder="Enter address"
                                id="email">
                                <span style="color: red;">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </span>
                        </div>
                        <div class="form-group">
                            <label for="email">Phone: </label>
                            <input type="text" name="phone" class="form-control" placeholder="Enter phone"
                                id="email">
                                <span style="color: red;">
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </span>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
