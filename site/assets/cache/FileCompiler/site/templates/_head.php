<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php echo $page->title; ?></title>
	<meta name="description" content="<?php echo $page->summary; ?>" />
	<link href='//fonts.googleapis.com/css?family=Lusitana:400,700|Quattrocento:400,700' rel='stylesheet' type='text/css' />
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>styles/main.css" /> -->
	<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->root?>site/bootswatch/dist/flatly/bootstrap.min.css" />
</head>
<body>
<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
      <div class="container">
        <a href="../" class="navbar-brand">Scribble</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/clients">Clients</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/notes">Notes</a>
            </li>
          </ul>
          <?php if($user->isLoggedin()) {?>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/logout">Logout</a>
            </li>
          </ul>
          <?php } ?>
        </div>
      </div>
    </div>


