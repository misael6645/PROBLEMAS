<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
    .form-group .form-control2 {
    width: 40%;
    height: auto;
    box-shadow: none;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0;
    padding-left: 0;
   }
   .form-group .form-control3 {
    width: 40%;
    height: auto;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0;
    padding-left: 0;
   }
   .form-control2:focus {
    border-color: #66afe9;
    outline: 0;
    border:none;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgb(27, 44, 106);
   }
   .form-control2 {
    display: inline-block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
   }
   .form-control3 {
    display: inline-block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    
   }
   .aux {
      display:inline-block !important;
       text-align:center !important;
       width: 7% !important;
   }
       .two-fields {
      width:100%;
    }
    .two-fields .input-group {
      width:100%;
    }
    .two-fields input {
      width:50% !important;
    }
    .encender{
        
        border-color: #66afe9;
        outline: 0;
        border:none;
        width: 40%;
        height: auto;
        transition: box-shadow 0.8s;
       -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
       box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 40px rgb(27, 44, 106);
    }
    .color2, .h2{
        color:#fff !important;
        background-color: rgb(27, 44, 106) !important;
    }

</style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Problemas A2O Dev</title>
    <link rel="icon" href="resources/icono.ico" type="image/x-icon">
    <link href="resources/css/iconfont/material-icons.css" rel="stylesheet">
    <link href="resources/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="resources/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="resources/plugins/fileinput/css/fileinput.min.css" rel="stylesheet" />
    <link href="resources/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="resources/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <link href="resources/plugins/sweetalert2/sweetalert2.min.css" rel="stylesheet" />
    <link href="resources/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet">
    <link href="resources/css/style.css" rel="stylesheet">
    <link href="resources/css/themes/all-themes.css" rel="stylesheet" />
    <link href="resources/plugins/nestable/jquery-nestable.css" rel="stylesheet">
    <link href="resources/css/main.css" rel="stylesheet" />
    <link href="resources/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <style>
        .buttons-print {
            background-color: #2962FF;
            color: white;
        }
        .buttons-excel {
            background-color: #4CAF50;
            color: white;
        }
    </style>
   <!-- {%block style%}{%end %}!-->
</head>
<body class="theme-indigo">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-indigo">
                    <div class="circle-clipper left"><div class="circle"></div></div>
                    <div class="circle-clipper right"><div class="circle"></div></div>
                </div>
            </div>
            <p>Por favor espere...</p>
        </div>
    </div>
    <div class="overlay"></div>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a href="/" class="navbar-brand"><center>Problemas de A2O DEV</center></a>
            </div>
            <!--<div id="right-options" class="more-options">
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" alt="Cerrar Sesion" onclick="Salir()">
                            <i class="material-icons">power_settings_new</i>
                        </a>
                    </li>
                </ul>
            </div>-->
        </div>
    </nav>
<section>
        <aside id="leftsidebar" class="sidebar">
            <div class="menu">
                <ul class="list">
                   <li><a href="#" class="menu-toggle"><i class="material-icons">dvr</i><span>Problemas</span></a>
                                    <ul class="ml-menu">
                   <li ><a href="/parrafos" class=""><i class="material-icons">extension</i><span>Estrofa Redondeada</span></a></li>
                   <li><a  href="/rimas"class=""><i class="material-icons">reorder</i><span>Rimas</span></a></li></ul>
                    
                </ul>
            </div>
        </aside>
    </section>
    <section id="content" class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="card" id="render_content">
                   <!-- {%block content%}{%end%}-->
                   @yield('content')
                </div>
            </div>
        </div>
    </section>
    <script src="resources/plugins/jquery/jquery.min.js"></script>
    <script src="resources/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="resources/plugins/bootstrap/js/bootstrap.js"></script>
    <script src="resources/plugins/node-waves/waves.js"></script>
    <script src="resources/js/admin.js"></script>
    <script src="resources/plugins/momentjs/moment.js"></script>
    <script src="resources/plugins/bootstrap-notify/bootstrap-notify.js"></script>
    <script src="resources/plugins/fileinput/js/fileinput.min.js"></script>
    <script src="resources/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="resources/plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <script src="resources/plugins/jquery-validation/jquery.validate.js"></script>
    <script src="resources/plugins/nestable/jquery.nestable.js"></script>
    <script src="resources/js/jquery.toast.js"></script>
    <!-- Jquery DataTable Plugin Js -->
    <script src="resources/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="resources/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="resources/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="resources/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="resources/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.34/pdfmake.min.js"></script>
    <script src="resources/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="resources/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="resources/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
    <script src="resources/js/pages/tables/jquery-datatable.js"></script>
    <script src="resources/js/scripts.js"></script>
    <script src="resources/js/Problemas.js"></script>
    <script src="resources/js/validations.js"></script>
    <script src="resources/plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <script src="resources/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="resources/plugins/bootstrap-material-datetimepicker/js/moment-with-locales.min.js"></script>
    <script src="resources/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="resources/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="resources/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="resources/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="resources/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="resources/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="resources/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="resources/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="resources/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     
    <script>
        
    </script>
   <!-- {%block script%}{%end%}-->
</body>
</html>