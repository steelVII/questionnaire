<link rel="stylesheet" href="/css/login.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>


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

<script>

    $('input').each(function() {

        $(this).focus(function() {

            $(this).siblings().addClass('stay').removeClass('original');

        });

        $(this).focusout(function() {

            if( !$(this).val() ) {

            $(this).siblings().removeClass('stay').addClass('original');

            }

        });

    });


</script>
