<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./www/css/masterFlex.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="login-form">
      <h6>Sign In</h6>

      <form action="">
        <div class="textbox">
          <input type="text" placeholder="Username Or Email">
          <span class="check-message hidden"></span>
        </div>

        <div class="textbox">
          <input type="password" placeholder="Password">
          <span class="check-message hidden"></span>
        </div>

        <div class="options">
          <label class="remember-me">
            <span class="checkbox">
              <input type="checkbox">
              <span class="checked"></span>
            </span>
            Remember me
          </label>

          <a href="#">Forgot Your Password</a>
        </div>

        <input type="submit" value="Log In" class="login-btn" disabled>
      </form>

      <div class="dont-have-account">
        Don't have an account?
        <a href="./www/site/register/register.php">Sign Up</a>
      </div>
    </div>

    <script type="text/javascript">
      $(".textbox input").focusout(function(){
        if($(this).val() == ""){
          $(this).siblings().removeClass("hidden");
          $(this).css("background");
        }else{
          $(this).siblings().addClass("hidden");
          $(this).css("background");
        }
      });

      $(".textbox input").keyup(function(){
        var inputs = $(".textbox input");
        if(inputs[0].value != "" && inputs[1].value){
          $(".login-btn").attr("disabled",false);
          $(".login-btn").addClass("active");
        }else{
          $(".login-btn").attr("disabled",true);
          $(".login-btn").removeClass("active");
        }
      });
    </script>
  </body>
</html>
