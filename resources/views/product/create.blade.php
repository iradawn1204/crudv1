
    @include('partial.header')


    <div id="bg"></div>
    <x-nav/>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Create Product
                        
                        </h4>  
                    </div>
                    <div class="card-body">
                    <form action="{{ url('store-product/') }}" method="POST" >
                            @csrf
                            @method('PATCH')

                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="productName"  class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Label</label>
                                <input type="text" name="label"  class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Price</label>
                                <input type="text" name="price"  class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Quantity</label>
                                <input type="text" name="quantity"  class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>


.card-header .text{
   text-align: center;

}   
        .container{
            margin-top: 100px;

            width:50%;

        }



        
    #bg {

    background-image: url('coffee-shop.jpg');
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    filter: blur(5px);
    }
        </style>


    @include('partial.footer')