<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?=URL?>/assets/img/logo.png" type="image/icon">
    <title><?=SITE_NAME?></title>

    <!-- Bootstrap, fontawesome, CSS -->
    <link rel="stylesheet" href="<?=URL?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=URL?>/assets/vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?=URL?>/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>

<header>

 <nav class="bg-primary py-1">
<div class="container   justify-content-between">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index.html"><img src="img/logo.png" /></a>
                    <a href="<?=URL?>" class="btn btn-primary "><i class="fas fa-home"></i> HOME</a>
                </div>
                <nav id="nav-menu-container left">
                    <ul class="nav-menu">
                        
                        <li><a href="<?=URL?>/support">Contacts</a></li>                      
                        <li><a href="<?=URL?>/register">Registration</a></li>
                        <li><a href="<?=URL?>/login">Login</a></li>
						<li><a href="<?=URL?>/megjelenites">Megjelenites</a></li>  						
                        
                    </ul>
                </nav>                    
                </div>
            </div>
 </nav>
</header>
