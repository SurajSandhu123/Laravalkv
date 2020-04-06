 @extends('layouts.main')
 @section('content')

<div class="container">

<h1> Products List </h1> 

@if (session('successMsg'))

<div class="alert alert-success" role="alert">
 {{ session('successMsg') }}
</div>

@endif
 
 <table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category Name</th>
      <th scope="col">Company Name </th>
      <th scope="col">Product Name </th>
      <th scope="col">Price</th>
      <th scope="col">Action </th>
    </tr>
  </thead>


  <tbody>
   @foreach($products as $product)
    <tr>
      <th scope="row">{{ $product->id }}</th>
      <td>{{ $product->category_name }}</td>
      <td>{{ $product->company_name }}</td>
      <td>{{ $product->product_name }}</td>
      <td>{{ $product->price }}</td>
      <td> <a class="btn btn-raised btn-primary btn-sm" href="{{ route('edit', $product->id) }}"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
          
       || 
       
     <form method="POST" id="delete-form-{{ $product->id }}" action="{{ route('delete', $product->id) }}" style="display: none;">
    {{ csrf_field() }}
    {{ method_field('delete') }} 
    </form>   
 
   <button onclick="if (confirm('Are you sure to delete this data?')) {
   event.preventDefault();
   document.getElementById('delete-form-{{ $product->id }}').submit();

   }else{
    event.preventDefault();
   }

   "  class="btn btn-raised btn-danger btn-sm" href=" "><i class="fa fa-trash" aria-hidden="true"></i>  

       </button>

        </td>
    </tr>
   
   @endforeach
  </tbody>
</table>

 {{ $products->links()  }}

</div>

 @endsection
