
<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> GIS PU </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="<?=base_url()?>assets/apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/vendor.css">
        <!-- Theme initialization -->
        <script>
            var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
            var themeName = themeSettings.themeName || '';
            if (themeName)
            {
                document.write('<link rel="stylesheet" id="theme-style" href="<?=base_url()?>assets/css/app-' + themeName + '.css">');
            }
            else
            {
                document.write('<link rel="stylesheet" id="theme-style" href="<?=base_url()?>assets/css/app.css">');
            }
        </script>
    </head>

    <body>
        <div class="auth">
            <div class="auth-container">
                <div class="card">
                    <header class="auth-header">
        <h1 class="auth-title">
        <div class=""> 
        	<span class="l l1"></span>
        	<span class="l l2"></span>
        	<span class="l l3"></span>
        	<span class="l l4"></span>
        	<span class="l l5"></span>
        </div>LOGIN ADMIN GIS
      </h1> </header>
                    <div class="auth-content">
                    	<div id="infoMessage"><?php echo $message;?></div>
                        <p class="text-xs-center">Isi untuk Login</p>
                        <?php echo form_open("auth/login");?>


                            <div class="form-group">
                            	 <label for="identity">Username</label> 
                            	 <input type="text" name="identity" value="" id="identity"  class="form-control underlined"  placeholder="Your email address" required> 
                            </div>
                            <div class="form-group"> 

                            	<label for="password">Password</label> 
                            	<input type="password" class="form-control underlined" value="" name="password" id="password" placeholder="Your password" required>
                            </div>
                            <div class="form-group">
                            <!--<label for="remember"><span>Remember me</span></label>
					            <input class="checkbox"  name="remember" value="1" id="remember" type="checkbox">--> 
					            
					          
           					</div>

                            <div class="form-group"> <button type="submit" name="submit" value="Login"  class="btn btn-block btn-primary">Login</button> </div>
                            <div class="form-group">
                               <!-- <p class="text-muted text-xs-center">Do not have an account? <a href="signup.html">Sign Up!</a></p>-->
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-xs-center">
                   <!-- <a href="index.html" class="btn btn-secondary rounded btn-sm"> <i class="fa fa-arrow-left"></i> Back to dashboard </a>-->
                </div>
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
 
        <script src="<?=base_url()?>assets/js/app.js"></script>
    </body>

</html>