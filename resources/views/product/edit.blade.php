@include('partial.header')  


<x-nav/>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit Customer
                       
                    </h4>  
                </div>
                <div class="card-body">
                <form action="{{ url('/update-product/'.$product->id ) }}" method="POST" >
                        @csrf
                        @method('PATCH')

                        <div class="form-group mb-3">

                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="productName" value="{{$product->productName}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Age</label>
                            <input type="text" name="label" value="{{$product->label}}" class="form-control">
                        </div>
                        <div class="form-group mb-3"> 
                            <label for="">Price</label>
                            <input type="text" name="price" value="{{$product->price}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Address</label>
                            <input type="text" name="quantity" value="{{$product->quantity}}" class="form-control">
                        </div>
                        
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
<style>

    body {

background:url('coffee-shop.jpg');

bottom: ;
background-repeat: no-repeat;
background-size: cover;
height: 100vh;
width: 100%;
}
    </style>
@include('partial.footer')