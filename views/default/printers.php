<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Printers</title>
    <!-- Bootstrap -->
    <link href="<?php echo TMPL; ?>css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo TMPL; ?>css/font-awesome.css">
    <link href="<?php echo TMPL; ?>css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo TMPL; ?>css/footer.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
	<header>
		<nav role="navigation" class="navbar navbar-default">
	  <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header">
			<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
			  <span class="sr-only">Toggle navigation</span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">Бренд</a>
		  </div>
		  <!-- Collection of nav links, forms, and other content for toggling -->
		  <div id="navbarCollapse" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
			  <li class="active"><a href="#">Главная</a></li>
			  <li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-paint-brush" aria-hidden="true"></i> Cartriges <b class="caret"></b></a>
				<ul role="menu" class="dropdown-menu">
				  <li><a href="#">add</a></li>
				  <li><a href="#">Remove</a></li>
				  <li><a href="#">order</a></li>
				  <li><a href="#">hestory</a></li>
				</ul>
			  </li>
			  <li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-print" aria-hidden="true"></i> Prints <b class="caret"></b></a>
				<ul role="menu" class="dropdown-menu">
				  <li><a href="#">search</a></li>
				  <li><a href="#">add</a></li>
				  <li><a href="#">edit</a></li>
				  <li class="divider"></li>
				  <li><a href="#">delete</a></li>
				</ul>
			  </li>
			  <li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-wrench" aria-hidden="true"></i> Unit <b class="caret"></b></a>
				<ul role="menu" class="dropdown-menu">
				  <li><a href="#">history requests</a></li>
				  <li><a href="#">history repairs</a></li>
				  <li><a href="#">create requests</a></li>
				  <li class="divider"></li>
				  <li><a href="#">doc stor</a></li>
				</ul>
			  </li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			  <li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Войти / <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
			</ul>
		  </div>
		</nav>

</header>
<main>
		<form action="#" method="post">
			<div class="row">
				 <div class="col-xs-3">
					<input type="text" class="form-control" name="name" placeholder="Name print">
				</div>
				<div class="col-xs-3">
				  <select class="form-control input" name="floor">
					<option disabled selected>Выберите этаж </option>
					<option>Этаж 1</option>
					<option>Этаж 2</option>
					<option>Этаж 3</option>
					<option>Этаж 4</option>
					<option>Этаж 9</option>
				  </select>
				</div>
				<div class="col-xs-3">
					<select class="form-control input" name="cartrige">
					<option disabled selected>Выберите Картридж</option>
					<option>Картридж 2</option>
					<option>Картридж 7</option>
					<option>Картридж 3</option>
					<option>Картридж 8</option>
					<option>Картридж 4</option>
					<option>Картридж 5</option>
				  </select>
				</div>
			</div>
			<br>
			<div class="row">
				 <div class="col-xs-3">
					<input type="text" class="form-control" placeholder="# Unit" name="unit">
				</div>
				<div class="col-xs-3">
				  <select class="form-control input" name="department">
                                        <option disabled selected>Выберите Отдел</option>
					<option value="1">Отдел 1</option>
					<option value="2">Отдел 2</option>
				  </select>
				</div>
				<div class="col-xs-3">
				  <select class="form-control input" name="status">
                                        <option disabled selected>Выберите Статус</option>
					<option value="1">Статус 1</option>
					<option value="1">Статус 2</option>
				  </select>
				</div>
				<div class="col-xs-3">
					<button type="submit" name="submit" class="btn btn-primary">Выбрать</button>
				</div>
			</div>
		</form>
		<hr>
		<br>
                <p>Всего принтеров в работе: <?php echo count($printList);  ?> шт.</p>
		<div class="row">
		  <!-- 1 Изображение -->
                  <?php if($printList == 0) :  ?>
                  
                      <div class="panel panel-warning">
                        <div class="panel-heading">
                          <h3 class="panel-title">Warning!!!</h3>
                        </div>
                        <div class="panel-body text-center">
                            <h3>Принтеров с введенными параментрами не найдено, извините </h3>
                        </div>
                      </div>
                  <?php else : ?>
                  <?php foreach ($printList as $print): ?>
                    <div class="col-sm-6 col-md-4">
                          <div class="thumbnail">
                              <?php if($print['img'] != ""): ?>
                                    <img src="img/<?php echo $print['img']; ?>" alt="...">
                               <?php else: ?>
                                    <img src="img/print.png" alt="...">
                              <?php endif; ?>
                            <div class="caption">
                                  <h3><?php echo $print['name']; ?></h3>
                                  <p>Этаж <strong><?php echo $print['floor']; ?></strong></p>
                                  <p>Отдел <strong><?php echo $print['department']; ?></strong></p>
                                  <p>Юнит <strong><?php echo $print['unit']; ?></strong></p>
                                  <p>Модель <strong><?php echo $print['model']; ?></strong></p>
                                  <p><a href="/printer/<?php echo $print['id']; ?>" class="btn btn-primary" role="button">Подробнее</a> <a href="/print/edit/<?php echo $print['id']; ?>" class="btn btn-default" role="button">Редактировать</a></p>
                            </div>
                          </div>
                    </div>
                  <?php endforeach; ?>
                  <?php endif; ?>
                  <!--
		  <div class="col-sm-6 col-md-4">
			<div class="thumbnail">
			  <img src="img/3030.jpg" alt="...">
			  <div class="caption">
				<h3>Имя принтера</h3>
				<p>Этаж <strong>1</strong></p>
				<p>Отдел <strong>чвапвапыавпр</strong></p>
				<p>Юнит <strong>0000-0000</strong></p>
				<p>Картридж <strong>205</strong></p>
				<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			  </div>
			</div>
		  </div>
		  
		  <div class="col-sm-6 col-md-4">
			<div class="thumbnail">
			  <img src="img/Samsung SCX_ds_4824FN.jpg" alt="...">
			  <div class="caption">
				<h3>Имя принтера</h3>
				<p>Этаж <strong>1</strong></p>
				<p>Отдел <strong>чвапвапыавпр</strong></p>
				<p>Юнит <strong>0000-0000</strong></p>
				<p>Картридж <strong>205</strong></p>
				<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			  </div>
			</div>
		  </div>
		  
		  <div class="col-sm-6 col-md-4">
			<div class="thumbnail">
			  <img src="img/scx5637.jpeg" alt="...">
			  <div class="caption">
				<h3>Имя принтера</h3>
				<p>Этаж <strong>1</strong></p>
				<p>Отдел <strong>чвапвапыавпр</strong></p>
				<p>Юнит <strong>0000-0000</strong></p>
				<p>Картридж <strong>205</strong></p>
				<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			  </div>
			</div>
		  </div>
		  
		  <div class="col-sm-6 col-md-4">
			<div class="thumbnail">
			  <img src="img/Samsung SCX_ds_4824FN.jpg" alt="...">
			  <div class="caption">
				<h3>Имя принтера</h3>
				<p>Этаж <strong>1</strong></p>
				<p>Отдел <strong>чвапвапыавпр</strong></p>
				<p>Юнит <strong>0000-0000</strong></p>
				<p>Картридж <strong>205</strong></p>
				<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			  </div>
			</div>
		  </div>
		  
		  <!--...-->
		  
		  <!-- 12 Изображение 
		  <div class="col-sm-6 col-md-4">
			<div class="thumbnail">
			  <img src="img/print.png" alt="...">
			  <div class="caption">
				<h3>Имя принтера</h3>
				<p>Этаж <strong>1</strong></p>
				<p>Отдел <strong>чвапвапыавпр</strong></p>
				<p>Юнит <strong>0000-0000</strong></p>
				<p>Картридж <strong>205</strong></p>
				<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			  </div>
			</div>
		  </div>
		  <div class="col-sm-6 col-md-4">
			<div class="thumbnail">
			  <img src="img/print.png" alt="...">
			  <div class="caption">
				<h3>Имя принтера</h3>
				<p>Этаж <strong>1</strong></p>
				<p>Отдел <strong>чвапвапыавпр</strong></p>
				<p>Юнит <strong>0000-0000</strong></p>
				<p>Картридж <strong>205</strong></p>
				<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			  </div>
			</div>
		  </div>
		  <div class="col-sm-6 col-md-4">
			<div class="thumbnail">
			  <img src="img/print.png" alt="...">
			  <div class="caption">
				<h3>Имя принтера</h3>
				<p>Этаж <strong>1</strong></p>
				<p>Отдел <strong>чвапвапыавпр</strong></p>
				<p>Юнит <strong>0000-0000</strong></p>
				<p>Картридж <strong>205</strong></p>
				<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			  </div>
			</div>
		  </div> -->
  
		</div>
	</main>
	<!--Футер-->
	  <footer>
		<p >info by IT Kursk</p>
	  </footer>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>