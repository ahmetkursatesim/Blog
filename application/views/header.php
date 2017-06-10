<!DOCTYPE HTML>
<html>

<head>
    <title>My Blog:AHMET KURSAT ESİM</title>
    <meta name="description" content="website description" />
    <meta name="keywords" content="website keywords, website keywords" />
    <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/css/bootstrap.min.css" />
</head>

<body>
    <div id="main">
        <div id="header">
            <div id="logo">
                <h1><a style="color:silver;" href="<?=base_url()?>">My Blog</a></h1>
              
            </div>
            <div id="menubar">
                <ul id="menu">
               
                    <li class="<?=$home_class;?>" ><a style="color:red;"href="<?=base_url()?>index.php/">Home</a></li>
                    <?php if($this->session->userdata('user_id'))
                    {?>
                          <li class="<?=$login_class;?>" ><a style="color:blue;" href="<?=  base_url()?>index.php/users/logout">(<?=$this->session->userdata['username']?>)Logout</a></li>
                    <?php
                    } 
                    else{ ?>
                        <li class="<?=$login_class;?>" ><a style="color:orange;" href="<?=  base_url()?>index.php/users/login">Login</a></li>
                    <?php } ?>

                    <li class="<?=$register_class;?>" ><a style="color:silver;" href="<?=  base_url()?>index.php/users/register/">Register</a></li>

                    <li class="<?=$contact_class;?>" ><a style="color:gold;" href="<?=  base_url()?>index.php/pages/contact">Contact Us</a></li>
                </ul>
            </div>
        </div>