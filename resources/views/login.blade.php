<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <title>Whise Smile Dental Clinic</title>
</head>
<body>
    <div class="form-container">
        <form method="post" action="{{ route('login.action') }}">
            @csrf
            @if (count($errors)> 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- FIRST PAGE --}}
            <div class="form-section active" id="step1">
                <div class="marker">LOGIN</div>
                {{-- USERNAME --}}
                <div class=""> <label for="username">Username</label> </div>
                <div class=""> <input type="text" placeholder="jcdelacruz" name="username"> </div>
                {{-- PASSWORD --}}
                <div class=""> <label for="password">Password</label> </div>
                <div class=""> <input type="text" placeholder="hello123" name="password"> </div>
                <div class=""> <label for="forgot_password">Forgot Password?</label> </div>
                <div class=""> <button type="submit" class="">LOG IN</button> </div>
                <div class=""> <label for="no_account">No Account yet? <a href = "{{ route('registration')}}">Register</a></label> </div>
            </div>
        </form>
    </div>
</body>
</html>