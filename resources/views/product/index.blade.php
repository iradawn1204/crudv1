
@include('partial.header')

<x-nav/>

@if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif 
            
            
            <div id="bg">  </div>  
    <div class="divTable">

    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
      <thead class="bg-gray-50">
        <tr>
       
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Product Name</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Label</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Price</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Quantity</th>
          <th> <a class="btn btn-primary" title="create" href="{{ url('create-product/') }}"><i class="fa fa-trash-o" aria-hidden="true"></i><center>Create</center></a></th>

          
          
          

        </tr>
      </thead>
    
    
    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
     
      @foreach($products as $product)
     
      <tr class="hover:bg-gray-50">
          <td class="flex gap-3 px-6 py-4 font-normal text-gray-900">
            
            <div class="text-sm">
              
              <div class="font-medium text-gray-700">{{$product->productName}}</div>
              </div>
          </th>
  
          <td class="px-6 py-4">
          <div class="text-sm">
              <div class="font-medium text-gray-700">{{$product->label}}</div>
              </div>
          </td>
  
          <td class="px-6 py-4">
          <div class="text-sm">
              <div class="font-medium text-gray-700">{{$product->price}}</div>
              </div>
          </td>
  
          <td class="px-6 py-4">
          <div class="text-sm">
              <div class="font-medium text-gray-700">{{$product->quantity}}</div>
              </div>
          </td>

         
  
          <td>  
              <div class="text-sm">
                <a class="btn btn-primary" href="{{ url('edit-product/{id}'.$product->id) }}"><i class="fa fa-trash-o" aria-hidden="true"></i>Edit</a>
         
                                            
                          <form method="POST"  title="Edit" action= " {{ route('product.destroy', $product->id)}}  " accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('delete') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                              
                                              </form>
                                                    </div>
           </td>
          @endforeach
      </tr>
      </tbody>
     
     </table> 
  </div>
  <div id="bg"></div>

  <style>


@import url("https://fonts.googleapis.com/css?family=Lato:400,700");




    .text-sm{
      width: 100%;
    height: 80%; 




    }
    
   .divTable tr { 
    overflow: hidden;
    height: 14px;
    white-space: nowrap;


    margin-left: 100px;

  
   }

  

.divTable
    {
       background-color: #68739b;
 
        display:  table;
       
        width: 50%;
          height: 80%;
         
        border:2px solid  #666666;
        border-spacing:0px;/*cellspacing:poor IE support for  this*/
       /* border-collapse:separate;*/
       margin-top: 20px;
       margin-left: 370px;
    }
    .div-table-row {
  display: table-row;
  width: auto;
  clear: both;
}
.div-table-col {
  float: left; /* fix for  buggy browsers */
  display: table-column;         
  width: 200px;         
  background-color: #ccc;  
} 
body {

background:url('coffee-shop.jpg');

bottom: ;
background-repeat: no-repeat;
background-size: cover;
height: 100vh;
width: 100%;
}

tr:hover {background-color: #d6d6d6;}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
} 

th{
  font-size:18px;
  font-family:Franklin Gothic Medium;
  background-color: #C99E80;
  color: white;
  text-align: center;
}

td {
  background-color: #faf0e6;  
  text-align: center;
  font-family: Source Sans Pro; 
  font-weight: 600;

}


  </style>


@include('partial.footer') 

