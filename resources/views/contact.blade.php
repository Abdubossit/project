<!DOCTYPE html>
<html lang="en">
<html lang ="kz">
<html lang ="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="formBx">
            <!-- @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <button type="button" class="close"></button>
                </div>
            @endif -->

            <form method = 'post' action="{{ route('sendemail')}}">
            {{ csrf_field() }}
                <h2>{{__('lang.CONTACT US')}}</h2>
                <div class="inputBox">
                    <input type="text" name="name" required="required">
                    <span>{{__('lang.Full Name')}}</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="email" required="required">
                    <span>{{__('lang.Email Address')}}</span>
                </div>
                <div class="inputBox">
                    <textarea name="message" required="required"></textarea>
                    <span>{{__('lang.Type Your Message Here ...')}}</span>
                </div>
                <div class="inputBox">
                   
                    <input type="submit" name="" value="send">
                </div>
            </form>
        </div>
        <div class="imgBx">
            <img src="Abdu.png" alt="">
        </div>
        

    </div>
</body>
</html>