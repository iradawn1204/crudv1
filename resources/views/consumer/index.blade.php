@include('partial.header')
<x-nav/>
@if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

< <div class="divTable">
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
      <thead class="bg-gray-50">
        <tr>
       
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Age</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900"><center>Address</center></th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Email</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Contact Number</th>
          
         <th> <a class="btn btn-primary" title="create" href="{{ url('create-consumer/') }}"><i class="fa fa-trash-o" aria-hidden="true"></i><center>Create</center></a></th>

     

        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100 border-t border-gray-100">
      @foreach($consumers as $consumer)
     
      <tr class="hover:bg-gray-50">
          <td class="flex gap-3 px-6 py-4 font-normal text-gray-900">
            
            <div class="text-sm">
              
              <div class="font-medium text-gray-700">{{$consumer->name}}</div>
              </div>
          </td>
  
          <td class="px-6 py-4">
          <div class="text-sm">
              <div class="font-medium text-gray-700">{{$consumer->age}}</div>
              </div>
          </td>
  
          <td class="px-6 py-4">
          <div class="text-sm">
              <div class="font-medium text-gray-700">{{$consumer->address}}</div>
              </div>
          </td>
  
          <td class="px-6 py-4">
          <div class="text-sm">
              <div class="font-medium text-gray-700">{{$consumer->email}}</div>
              </div>
          </td>

          <td class="px-6 py-4">
          <div class="text-sm">
              <div class="font-medium text-gray-700">{{$consumer->contactNumber}}</div>
              </div>
          </td>
  
          <td>  
                <a class="btn btn-primary" href="{{ url('edit-consumer/'.$consumer->id) }}"><i class="fa fa-trash-o" aria-hidden="true"></i>Edit</a>
         
                                            
                          <form method="POST"  title="Edit" action= " {{ route('consumer.destroy', $consumer->id)}}  " accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('delete') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
          @endforeach
  </tr>
      </tbody>
     
     </table>
  </div>

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
       margin-left: 150px;
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

