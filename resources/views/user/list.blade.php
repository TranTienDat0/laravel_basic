<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
  table th{
    text-align: center;
  }
</style>
<div class="col-md-12">
  <a href="{{ asset('newUser') }}" class="btn btn-success float-right m-2">Add User</a>
</div>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">STT</th>
        <th scope="col">Địa chỉ email</th>
        <th scope="col">Tên</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Số điện thoại</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $item)
      <tr>
        <td scope="row">{{ $item->id }}</td>
        <td>{{ $item->mail_address }}</td>
        <td>{{ $item->nam }}</td>
        <td>{{ $item->address }}</td>
        <td>{{ $item->phone }}</td>
      </tr>
      @endforeach     
    </tbody>
  </table>
<div class="col-md-12">
    {{ $data->links('pagination::bootstrap-4') }}
</div>