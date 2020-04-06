 @extends('layouts.main')
 @section('content')
 
 <div class="container">

 @if($errors->any())
 @foreach ($errors->all() as $error)

<div class="alert alert-danger" role="alert">
  {{ $error }}
</div>

@endforeach

 @endif


<h1> Edit page </h1> 


<form class="text-center border border-light p-5" action="{{ route('update',$product->id) }}" method="POST">

  {{ csrf_field() }}

    <p class="h4 mb-4">Add Product </p>

    <div class="form-row mb-4">
        <div class="col">
           
            <input type="text" id="" class="form-control" value="{{ $product->category_name }}" name="category_name" placeholder="Category Name">
        </div>
       
    </div>

    <div class="form-row mb-4">
         <div class="col">
            
            <input type="text" id="" class="form-control" value="{{ $product->company_name }}" name="company_name" placeholder="Company Name">
        </div>
    </div>

    <div class="form-row mb-4">
        <div class="col">
         
            <input type="text" id="" class="form-control" value="{{ $product->product_name }}" name="product_name" placeholder="Product Name">
        </div>
    </div>


    
    <input type="text" id="" class="form-control"  value="{{ $product->price }}" name="price" placeholder="Price" aria-describedby="defaultRegisterFormPhoneHelpBlock">
     

 
    <button class="btn btn-info my-4 btn-block" type="submit">Update Product</button>

 
     

     

</form>


 </div>
 @endsection
