<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="RGV2ZWxvcGVkIGJ5OiBJc3JhZWwgUm9jaGEgfCBFbWFpbDogaXNyYWVsLnJvY2hhLnJvY2hhQGxpdmUuY29tIHwgUGhvbmU6ICs1OTE3MjIxMjMzMQ==" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>

    <div class="container">
        <h3>Welcome!</h3>
      
        <button data-placement="bottom" data-toggle="popover" data-title="" data-container="body" type="button" data-html="true" href="#" id="login">Login</button>
        <div id="popover-content" class="hide">
          <form class="form-inline" role="form">
            <div class="form-group">
              <input type="checkbox" id="signupCheckbox">
              <label > I am signing up for an account</label>
              <input placeholder="Email" class="form-control" type="email">
              <input placeholder="Password" class="form-control" minlength="6" type="password">
              <button type="submit" class="btn btn-primary" id="loginOrSignupButton">Login/Sign up » </button>
            </div>
          </form>
        </div>
        <!-- <input type="checkbox" id="d444"> -->
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

      <script>
$("[data-toggle=popover]").popover({
    html: true, 
	  content: function() {
          return $('#popover-content').html();
    }
});
$(document).ready(function(){
  $("input[type=checkbox]").click(function() {alert('gg8');
    if($(this).prop("checked")){
      $('#loginOrSignupButton').html('Sign up!');
    }else{
      $('#loginOrSignupButton').html('Log in!');
    }
   }); 
});
function btnQQd(){
   if( $('#signupCheckbox').is(':checked') ){alert('gg17');
      /*$('#loginOrSignupButton').html('Sign up!');*/
    }else{alert('gg19');
      /*$('#loginOrSignupButton').html('Log in!');*/
    }
}
      </script>
</body>
</html>