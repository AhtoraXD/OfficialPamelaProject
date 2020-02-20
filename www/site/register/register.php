<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./www/css/master.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>

  <body>
    <div class="login-form">

      <form action="">
        <div class="textbox">
          <input type="text" placeholder="Nome">
          <span class="check-message hidden"></span>
        </div>

        <div class="textbox">
          <input type="text" placeholder="Cognome">
          <span class="check-message hidden"></span>
        </div>

        <div class="textbox">
          <input type="date" placeholder="Data di nascita">
          <span class="check-message hidden"></span>
        </div>

        <div class="options">
          <label class="remember-me">
            <span class="checkbox">
              <input type="checkbox">
              <span class="checked"></span>
            </span>
            Female
          </label>

          <label class="remember-me">
            <span class="checkbox" id="sexChecker">
              <input id = "sexChecker" type="checkbox" onclick="sexCheck()">
              <span class="checked"></span>
            </span>
            Male
          </label>

        </div>

        <br>

        <div class="textbox">
          <input type="password" placeholder="Password">
          <span class="check-message hidden"></span>
        </div>

        <div class="textbox">
          <input type="password" placeholder="Ripeti Password">
          <span class="check-message hidden"></span>
        </div>

        

        <input type="submit" value="Log In" class="login-btn" disabled>
      </form>

      <div class="dont-have-account">
        Have an account?
        <a href="../../../index.php">Login</a>
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
        if(inputs[0].value != "" && inputs[1].value && inputs[2].value && inputs[3].value && inputs[4].value ){
          $(".login-btn").attr("disabled",false);
          $(".login-btn").addClass("active");
        }else{
          $(".login-btn").attr("disabled",true);
          $(".login-btn").removeClass("active");
        }
      });

      function sexCheck(){

        // var $checked = false;

        // var el = document.getElementById('sexChecker');
        
        // if($checked == false){
        //     el.style.backgroundColor = '#037bee';
        // }else{
        //     el.style.backgroundColor = '#484848';
        // }
        
        
      }

    </script>
  </body>
</html>
