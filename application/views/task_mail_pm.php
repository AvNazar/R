<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<base href="http://prototyping.local/">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Заглавная страница</title>
<link rel="icon" href="images/favicon.png">
<!-- базовые стили -->
<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap/bootstrap-theme.min.css" rel="stylesheet">
<link href="css/bootstrap/bootstrap-treeview.css" rel="stylesheet">
<!-- это кастомизация темы, изменения и докруты классов -- сюда -->
<link href="css/bootstrap/theme.css" rel="stylesheet">
 <link href="css/bootstrap/bootstrap-select.css" rel="stylesheet">


<script src="js/jquery.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/bootstrap/ie10-viewport-bug-workaround.js"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="js/bootstrap/html5shiv.min.js"></script>
<script src="js/bootstrap/respond.min.js"></script>
<![endif]-->
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/bootstrap/bootstrap-select.js"></script>
<script src="js/bootstrap/bootstrap-treeview.js"></script>
<script type="text/javascript">

		$(function() {
          

        var defaultData = [
          {
            text: 'Иванов',
            href: '#Иванов',
            tags: ['4'],
            color: "#555555",
  			    backColor: "#FFFFFF",
            nodes: [
              {
                text: 'Петров',
                href: '#Петров',
                tags: ['2'],
                nodes: [
                  {
                    text: 'Сидоров',
                    href: '#Сидоров',
                    tags: ['0']
                  },
                  {
                    text: 'Денисов',
                    href: '#Денисов',
                    tags: ['0']
                  }
                ]
              },
              {
                text: 'Васильев',
                href: '#Васильев',
                tags: ['0']
              }
            ]
          },
          {
            text: 'Васильков',
            href: '#Васильков',
            tags: ['0']
          }
        ];

        

        $('#treeview1').treeview({
          data: defaultData
        });
       
     


        });





</script>


</head>
<body role="document">
<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-collapse collapse">
			<div class="pull-left" style="margin-top: 5px;"><img src="images/favicon.png" style="height: 25px; margin-left: 3px;"><br>ЭДС</div>
				<ul class="nav navbar-nav navbar-left">
					<li><a href="#">Задачи</a></li>
					<li><a href="#">Корреспонденция</a></li>
				</ul>
			<div class="dropdown navbar-btn pull-left" style="margin-left: 10px;">
				<button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">Инструменты <span class="caret"></span></button>
				<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Хэш-суммы файлов (md5)</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Подсчет листов в PDF-файлах</a></li>
				</ul>
			</div>
			<a class="btn btn-default navbar-btn pull-right" href="#" title="Завершение сеанса пользователя">Выход</a>
		</div>
	</div>
</div>
<div class="container theme-showcase" role="main">
	<h2>ЗАДАЧА <small>(ПИСЬМО №101 от 22.06.17)</small> </h2>
	
	<h4>Поставленный мною</h4>

	<div class="row">
		<div class="col-md-4">
			<h3>Исполнители по задаче</h3>
			<div class="col-md-10">
			<div id="treeview1"></div>				
			</div>
		</div>

		<div class="col-md-5">
			<h3>Текст задачи</h3>
			<DIV id="text_task"></DIV>
		</div>

		<div class="col-md-3">
			<h3>Срок</h3>
      <h4>25.06.2010</h4>
      <h3>Дата фактическая</h3>
      <h4>25.09.2010</h4>
		</div>

	</div>

	

	

</div>
</body>
</html>