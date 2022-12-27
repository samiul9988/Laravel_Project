@extends('welcome')
@section('content')
<center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-danger fw-bold fs-4 rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Record
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="insertData" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <input type="text" name="pname" placeholder="Product Name" class="form-control" id="">
            </div>
            <div class="mb-2">
                <input type="text" name="pprice" placeholder="Product Price" class="form-control" id="">
            </div>
            <div class="mb-2">
                <input type="file" name="image" class="form-control" id="">
            </div>
            <button type="submit" class="btn btn-outline-danger fw-bold fs-4 rounded-pill">Add Record</button>
        </form>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</center>

<div class="container">
 
<table class="table mt-5">
  <thead class="bg-danger font-white fw-bold">
    <th>Id</th>
    <th>Product Name</th>
    <th>Pruduct Price</th>
    <th>Product Images</th>
  </thead>
  <tbody class="text-danger bg-light fs-5">
  @foreach($data as $item)
    <tr>
      <td>{{$item['Id']}}</td>
      <td>{{$item['PName']}}</td>
      <td>{{$item['PPrice']}}</td>
      <td><img src="images/{{$item['PImage']}}" width="100px" height="100px" alt=""></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection