<?php

       // Alerts for Signup functionality

    if(isset($_SESSION['signupSuccess']) && $_SESSION['signupSuccess'])
    {
        echo '
        <div class="alert alert-success my-0" role="alert" >
        <strong>Success!!! </strong> You have successfully signed up and can login now!!!
        </div>';

        unset($_SESSION['signupSuccess']);


    }

    if(isset($_SESSION['signupEmailExistsError']) && $_SESSION['signupEmailExistsError'])
    {
        echo '
        <div class="alert alert-danger my-0" role="alert" >
        <strong>Error!!!</strong>This email already exists in the database!!! Please try with different email!!!
        </div>';

        unset($_SESSION['signupEmailExistsError']);


    }


    if(isset($_SESSION['signupPasswordError']) && $_SESSION['signupPasswordError'])
    {
        echo '
        <div class="alert alert-warning my-0" role="alert" >
        <strong>Warning!!!</strong> Please type the same password in the confirm password field!!!
        </div>';

        unset($_SESSION['signupPasswordError']);

    }
    
    

    

       // Alerts for Login functionality
    
    if(isset($_SESSION['loginSuccess']) && $_SESSION['loginSuccess'])
    {
    echo '
    <div class="alert alert-success my-0" role="alert" >
    <strong> Email : ' . $_SESSION['loggedin_email']  . '</strong> has successfully logged in!!!
    </div>';

     unset($_SESSION['loginSuccess']);


    }
    

    if(isset($_SESSION['loginEmailError']) && $_SESSION['loginEmailError'])
    {
        echo '
        <div class="alert alert-danger my-0" role="alert" >
        <strong>Error!!! </strong> Incorrect login details!!!
    </div>';

    unset($_SESSION['loginEmailError']);

    }


    if(isset($_SESSION['loginPasswordError']) && $_SESSION['loginPasswordError'])
    {
        echo '
        <div class="alert alert-danger my-0" role="alert" >
        <strong>Error!!! </strong> Incorrect login password!!!
    </div>';

    unset($_SESSION['loginPasswordError']);

    }






        // Alerts for Logout functionality

    if(isset($_SESSION['logoutSuccess']) && $_SESSION['logoutSuccess'])
    {
    echo '
    <div class="alert alert-success my-0" role="alert" >
        You have successfully logged out!!!
    </div>';

    unset($_SESSION['logoutSuccess']);

    session_destroy();

    }

?>