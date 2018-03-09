<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
        <div class="navbar-brand text-left">
          <a class="navbar-item" href="https://www.naxpansion.com">
            <img src="{{ asset('storage/naxpansion-logo.png') }}" alt="Naxpansion">
          </a>
      
          <div class="navbar-burger">
            <span></span>
            <span></span>
            <span></span>
          </div>
          
        </div>

            <div class="navbar-end">

                <div class="navbar-item is-right">

                   <a class="navbar-item" href="{{ url('/') }}">Home</a>

                    @if (Auth::check() && Auth::user()->acc_type == '1')

                      <a class="navbar-item" href="{{ route('questionnaires') }}">View Questionnaires</a>

                      <a class="navbar-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                      </a>
          
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>

                    @endif 
        
                </div>
            </div>

</nav>