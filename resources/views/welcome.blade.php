<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>geekspace</title>
        <script src="https://use.fontawesome.com/6a0219d677.js"></script>
        <link rel="shortcut icon" href="/img/gs.png" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">        
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>

    <body>
        <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-fixed-top">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> <span class="menuTextColor"><i class="fa fa-bars"></i></span>
                </button> 
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right nav-pills">
                    <li><a href="#login" data-toggle="modal">Login</a></li>
                    <li><a href="#signup" data-toggle="modal" id="sign">Sign Up</a></li>
                </ul>
            </div>
        </nav>

        <!-- First Landing Page Section -->
        <section id="landing">
            <div class="landing-container">
                <div class="content">
                    <div class="title">
                        <a class="logoName">g</a>
                        <a><img class="logoImage" src="img/green-nerdy-glasses.png" onContextMenu="return false;"></a>
                        <a class="logoName">kspace</a>
                    </div>
                    <div id="greenArrow">
                        <a class="greenArrow" href="#summary"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Summary of Us Section -->
        <section id="summary">
            <div class="landing-container">
                <div class="content">
                    <div class="title">
                        <h1>Summary of Us</h1>
                    </div>
                </div>
            </div>
        </section>
        




<!-- Login Modal -->
    <div id="login" class="modal fade loginModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title text-center">Log In</h2>
                </div>
                <div class="modal-body">
                    <form  method="POST" action=""> 
                        {!! csrf_field() !!}
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <div class="col-xs-12">
                                    <input class="form-control form-group" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="col-xs-12">
                                    <input class="form-control form-group" type="password" name="password" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn pull-left modalBtns" type="submit">Log In</button>
                            <p>Not a member yet? <a href="#signup" data-toggle="modal" data-dismiss="modal">Sign Up</a></p>
                        </div>
                    </form>
                </div><!-- modal-body -->
            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->



    <!-- Signup Modal -->
    <div id="signup" class="modal fade signupModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title text-center">Sign Up</h2>
                </div>
                <div class="modal-body">
                    <form  method="POST" action=""> 
                        {!! csrf_field() !!}
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <div class="col-xs-6">
                                    <input class="form-control form-group" type="text" name="first_name" placeholder="First Name">
                                </div>
                                <div class="col-xs-6">
                                    <input class="form-control form-group" type="text" name="last_name" placeholder="Last Name">
                                </div>
                                <div class="col-xs-12">
                                    <input class="form-control form-group" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="col-xs-12">
                                    <input class="form-control form-group" type="password" name="password" placeholder="Create Password">
                                </div>
                                <div class="col-xs-12">
                                    <input class="form-control form-group" type="password" name="password_confirm" placeholder="Confirm Password">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn pull-left modalBtns" type="submit">Sign Up</button>
                            <p>Already a member? <a href="#login" data-toggle="modal" data-dismiss="modal">Log In</a></p> 
                        </div>
                    </form>
                </div><!-- modal-body -->
            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->




    <!-- JQUERY -->
    <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
    <!-- BOOTSTRAP -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>