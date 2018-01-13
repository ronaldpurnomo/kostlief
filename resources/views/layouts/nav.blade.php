<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand" href="{{URL('/')}}">
        
        KostLief
    </a>
  @if(Auth::guest())
   
   
   <div class="kanan">
   	 <a class="nav-link navbar-brand" href="{{URL('/register')}}" aria-haspopup="true" aria-expanded="false">
                        Register
     </a>	



   </div>
    <div class="kanan">
   	 <a class="nav-link navbar-brand" href="/login"  aria-haspopup="true" aria-expanded="false">
                        LogIn

                    </a>	



   </div>

   @else
   
    <p  style="color:white;">Hello, {{ Auth::user()->name }} </p>
   <div class="kanan">
     <a class="nav-link navbar-brand" href="{{URL('/kos')}}" aria-haspopup="true" aria-expanded="false">
                        Display Kos
     </a> 



   </div>

   <div class="kanan">
     <a class="nav-link navbar-brand" href="/logout"  aria-haspopup="true" aria-expanded="false">
                        Logout

                    </a>  



   </div>
   @endif
</nav>
