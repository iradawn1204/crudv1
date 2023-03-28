
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
                    <h4>Create Consumer
                       
                    </h4>  
                </div>
                <div class="card-body">
                <form action="{{ url('store-consumer/') }}" method="POST" >
                        @csrf
                        @method('PATCH')

                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name"  class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Age</label>
                            <input type="text" name="age"  class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email"  class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Address</label>
                            <input type="text" name="address"  class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Contact Number</label>
                            <input type="text" name="contactNumber" v class="form-control">
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
#bg {
  background-image: url('bg.jpg');
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