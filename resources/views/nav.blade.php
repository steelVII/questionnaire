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

            <div class="navbar-end navbar-menu">

                <div class="navbar-item is-right">

                    <div class="field is-grouped">
                        <p class="control">

                          <a class="button is-info is-outlined" href="{{ url('/') }}">Home</a>

                        </p>

                    @if (Auth::check() && Auth::user()->acc_type == '1')
                    <p class="control">
                      <a class="button is-info is-outlined" href="{{ route('questionnaires') }}">View Questionnaires</a>
                    </p>
                    <p class="control">
                      <a class="button is-info is-outlined" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                      </a>
                      
          
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                    </p>

                    @endif 
                  </div>
                </div>
            </div>

</nav>