<?php
// Custom login page
add_action('login_enqueue_scripts', 'custom_login_page');

function custom_login_page()
{ ?>
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Epilogue&display=swap');

    body.login label,
    body.login a {
      font-family: 'Epilogue', sans-serif;
    }

    body.login input {
      border-color: #5f1617;
      outline: #5f1617;
    }

    body.login input:focus {
      border-color: #5f1617;
      outline: 1px solid #5f1617;
      box-shadow: none !important;
    }

    body.login div#login form#loginform p.submit input#wp-submit {
      background: #5f1617;
      border-color: #5f1617;
      transition: all 0.3s ease-in-out;
    }

    body.login div#login form#loginform p.submit input#wp-submit:hover {
      transform: scale(0.9);
    }

    body.login div#login form#loginform {
      background: #f9f9f9;
    }

    body.login #login_error {
      background-color: #f9f9f9;
      border-left-color: #a11d1f;
    }

    body.login .message {
      border-left: 4px solid #131313;
    }

    body.login div#login h1 a {
      background-image: url(<?php echo get_template_directory_uri() . '/assets/img/logo2_burgundy.svg'; ?>);
      background-repeat: no-repeat;
      background-size: contain;
      width: 250px;
      height: 100px;
      margin-bottom: 0;
    }

    body.login a {
      color: #131313 !important;
    }

    body.login a:hover {
      text-decoration: underline !important;
    }

    body.login div#login p#backtoblog {
      display: none;
    }

    body.login {
      background-color: #eae0d6;
    }
  </style>
<?php }



// Custom login header link

add_filter('login_headerurl', 'custom_loginlogo_url');

function custom_loginlogo_url($url)
{
  return home_url();
}