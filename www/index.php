
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Личный кабинет Капитаны России</title>
    <meta name="Description" content="">
    <meta name="Keywords" content="">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <link href="themes/css/default.css" rel="stylesheet" type="text/css">
    <link href="themes/css/style.css" rel="stylesheet" type="text/css">
    <link href="themes/css/color.css" rel="stylesheet" type="text/css">
    <link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
</head>
<body>
<a name="top"></a>

<div id="left_menu">
    <div id="logo"><img src="themes/images/logo.png"></div>
    <ul>
        <li><a href="/?modules=zayavki&short_list=1" class="active"><i class="menu_info">79</i><span><i class="fa fa-bars"></i></span>Заявки</a></li>
        <li><a href="/?modules=folders" ><span><i class="fa fa-folder-open"></i></span>Папки</a></li>
        <li><a href="/?modules=groups" ><span><i class="fa fa-book"></i></span>Источники</a></li>
        <li><a href="/?modules=zadachi" ><span><i class="fa fa-calendar"></i></span>Задачи</a></li>
        <li><a href="/?modules=managers" ><span><i class="fa fa-user"></i></span>Менеджеры</a></li>
        <li><a href="/?modules=trash" ><span><i class="fa fa-trash"></i></span>Корзина</a></li>
    </ul>
    <a href="#top" id="go_top" class="b_radius_3"><i class="fa fa-angle-up"></i></a>
</div>

<div class="content_lk">
    <div class="box"><div class="box_vn">
            <h1>Список Заявок  (387)</h1>
            <div class="lk_plus">
                <a href="#" class="button button_green" id="filter"><i class="fa fa-filter"></i>Фильтр</a>
                <a href="/?modules=zayavki&ffun=add_form" class="button button_blue"><i class="fa fa-plus"></i>Добавить</a>
            </div>
        </div></div>





    <?php

    require_once __DIR__ .'/autoload.php';

    $ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'Zayavki';
    $act = isset($_GET['act']) ? $_GET['act'] : 'All';

    $controllerClassName = $ctrl.'Controller';
    $controller = new $controllerClassName;
    $method = 'action'.$act;
    $controller->$method();




    ?>









</div>

</body>
</html>
