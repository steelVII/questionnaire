@extends ('layouts.login_layout')

@section('header-scripts')

<link rel="stylesheet" href="/css/login.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

@endsection

@section('content')

<div class="container">
        <div class="login-body">
    
                <form action="{{ route('login') }}" method="POST" class="form login">
    
                        @csrf
    
                        <a class="logo" href="https://www.naxpansion.com">
                            <img src="{{ asset('storage/naxpansion-logo.png') }}" alt="Naxpansion">
                        </a>
                        
                    <div class="form_section email">
                        <input type="email" name="email" id="email" autocomplete="off" required>
                        <label for="email" class="label email">Email</label>
                    </div>
    
                    <div class="form_section">
                        <input type="password" name="password" id="password" required>
                        <label for="password" class="label">Password</label>
                    </div>
    
                    <div class="form_section">
                        <input type="submit" value="Sign In">
                    </div>
                    
              
                </form>
            
        </div>
    </div>
    
@endsection

@section('bottom-scripts')

<script src="/js/login.js"></script>
    
@endsection
