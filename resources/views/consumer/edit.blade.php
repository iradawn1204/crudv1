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
                <form action="{{ url('update-consumer/'.$consumer->id) }}" method="POST" >
                        @csrf
                        @method('PATCH')

                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{$consumer->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Age</label>
                            <input type="text" name="age" value="{{$consumer->age}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" value="{{$consumer->email}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Address</label>
                            <input type="text" name="address" value="{{$consumer->address}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Contact Number</label>
                            <input type="text" name="contactNumber" value="{{$consumer->contactNumber}}" class="form-control">
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