
@include('partial.header')
<div id="bg"></div>




           <form action="/login/process" method="POST">
               @csrf
    
               @error('email')
               <p>Invalid Account</p>
                     @enderror
        </div>

        
        <div class="form-field">
             <label for="exampleInputEmail1" class="form-label"></label>
                <input 
                type="email" 
                class="form-control" 
                id="exampleInputEmail1" 
               aria-describedby="emailHelp"
                name="email"
                placeholder="Email">

        
  </div>

 
    </div>

    <div class="form-field">
      <label for="exampleInputPassword1" class="form-label"></label>
      <input type="password" 
      class="form-control" 
      id="exampleInputPassword1"
      name="password" placeholder="Password">
    </div>
   
  
    <div class="form-field">
    <button class="btn" type="submit">Log in</button>
  </div>



    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>  
    <div class="login-register">


    <h6><a href={{"/register"}}>New User? Sign up here.</a></h6>
</div>
</div>
  </form>
<style>
  @import url("https://fonts.googleapis.com/css?family=Lato:400,700");
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

body {
  font-family: 'Lato', sans-serif;
  color: #4A4A4A;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  overflow: hidden;
  margin: 0;
  padding: 0;
}

form {
  width: 350px;
  position: relative;
}
form .form-field::before {
  font-size: 20px;
  position: absolute;
  left: 15px;
  top: 17px;
  color: #888888;
  content: " ";
  display: block;
  background-size: cover;
  background-repeat: no-repeat;
}
form .form-field:nth-child(2)::before {
  background-image: url(user-icon.png);
  width: 20px;
  height: 20px;
  top: 15px;
}
form .form-field:nth-child(3)::before {
  background-image: url(lock-icon.png);
  width: 16px;
  height: 16px;
  top: 15px;
}
form .form-field {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  margin-bottom: 1rem;
  position: relative;
}
form input {
  font-family: inherit;
  width: 100%;
  outline: none;
  background-color: #fff;
  border-radius: 4px;
  border: none;
  display: block;
  padding: 0.9rem 0.7rem;
  box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
  font-size: 17px;
  color: #4A4A4A;
  text-indent: 40px;
}
.btn {
  outline: none;
  border: none;
  cursor: pointer;
  display: inline-block;
  margin: 0 auto;
  padding: 0.9rem 2.5rem;
  text-align: center;
  background-color: #202020;
  color: #fff;
  border-radius: 4px;
  box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
  font-size: 17px;
}
  </style>
  
  @include('partial.footer')