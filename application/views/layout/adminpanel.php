<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.1
Version: 1.3
Purchase: http://wrapbootstrap.com
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title>لوحة القيادة</title>


</head>
<!-- /Head -->
<!-- Body -->
<body>
    
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/bootstrap-rtl.min.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/font-awesome.min.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/weather-icons.min.css');?>" rel="stylesheet" />

    <!--Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet" type="text/css" />

    <!--Beyond styles-->
    <link href="<?php echo base_url('assets/css/beyond-rtl.min.css');?> " rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/4095-rtl.min.css');?> " rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/demo.min.css');?> " rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/typicons.min.css');?> " rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/animate.min.css');?> " rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />

    
    <!-- Loading Container-->
    <div class="loading-container">
        <div class="loaderr"></div>
    </div>
    <!--  /Loading Container -->
    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="navbar-container">
                <!-- Navbar Barnd -->
                <div class="navbar-header pull-right">
                    <a href="#" class="navbar-brand">
                        <small>
                            <img src="<?php echo base_url('assets/img/logo-rtl.png');?>" alt="" />
                        </small>
                    </a>
                </div>
                <!-- /Navbar Barnd -->
                <!-- Sidebar Collapse -->
                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="collapse-icon fa fa-bars"></i>
                </div>
                <!-- /Sidebar Collapse -->
                <!-- Account Area and Settings --->
                <div class="navbar-header pull-left">
                    <div class="navbar-account">
                        <ul class="account-area">
                            <li>
                                <a class=" dropdown-toggle" data-toggle="dropdown" title="Help" href="#">
                                    <i class="icon fa fa-warning"></i>
                                </a>
                                <!--Notification Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-notifications">
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-phone bg-themeprimary white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">سكايب لقائه مع باتي </span>
                                                    <span class="description">01:00</span>
                                                </div>
                                                <div class="notification-extra">
                                                    <i class="fa fa-clock-o themeprimary"></i>
                                                    <span class="description">مكتب</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-check bg-darkorange white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">استراحة مجهولة </span>
                                                    <span class="description">15:30 حتي 05:15</span>
                                                </div>
                                                <div class="notification-extra">
                                                    <i class="fa fa-clock-o darkorange"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-gift bg-warning white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">كيت حفل عيد ميلاد </span>
                                                    <span class="description">08:30</span>
                                                </div>
                                                <div class="notification-extra">
                                                    <i class="fa fa-calendar warning"></i>
                                                    <i class="fa fa-clock-o warning"></i>
                                                    <span class="description">في المنزل</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <div class="notification-icon">
                                                    <i class="fa fa-glass bg-success white"></i>
                                                </div>
                                                <div class="notification-body">
                                                    <span class="title">عشاء مع الأصدقاء </span>
                                                    <span class="description">22:30</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown-footer ">
                                        <span>
                                            اليوم، 28 مارس
                                        </span>
                                        <span class="pull-left">
                                            10 درجة مئوية
                                            <i class="wi wi-cloudy"></i>
                                        </span>
                                    </li>
                                </ul>
                                <!--/Notification Dropdown-->
                            </li>
                            <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" title="Mails" href="#">
                                    <i class="icon fa fa-envelope"></i>
                                    <span class="badge">3</span>
                                </a>
                                <!--Messages Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-messages">
                                    <li>
                                        <a href="#">
                                            <img src="../../assets/img/avatars/divyia.jpg" class="message-avatar" alt="Divyia Austin">
                                            <div class="message">
                                                <span class="message-sender">
                                                    دیویا فیلیبس
                                                </span>
                                                <span class="message-time">
                                                    منذ 2 دقيقة
                                                </span>
                                                <span class="message-subject">
                                                    وإليك وصفة لفطيرة التفاح
                                                </span>
                                                <span class="message-body">
                                                    لتعريف التطبيق بإرسال عندما يتم عرض صورة للرمز المرسلين الرئيسي
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?php echo base_url('assets/img/avatars/bing.png'); ?>" class="message-avatar" alt="Microsoft Bing">
                                            <div class="message">
                                                <span class="message-sender">
                                                    Bing.com
                                                </span>
                                                <span class="message-time">
                                                    دیروز
                                                </span>
                                                <span class="message-subject">
                                                    Bing Newsletter: The January Issue‏
                                                </span>
                                                <span class="message-body">
                                                    Discover new music just in time for the Grammy® Awards.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?php echo base_url('assets/img/avatars/adam-jansen.jpg');?>" class="message-avatar" alt="Divyia Austin">
                                            <div class="message">
                                                <span class="message-sender">
                                                    نيكولا
                                                </span>
                                                <span class="message-time">
                                                    الجمعة، 22 سبتمبر
                                                </span>
                                                <span class="message-subject">
                                                    جديد 4K كاميرات
                                                </span>
                                                <span class="message-body">
                                                    لقد حان 4K ثورة في الأفق، والوصول إلى عدد السكان العام.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <!--/Messages Dropdown-->
                            </li>

                            <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" title="Tasks" href="#">
                                    <i class="icon fa fa-tasks"></i>
                                    <span class="badge">4</span>
                                </a>
                                <!--Tasks Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-tasks dropdown-arrow ">
                                    <li class="dropdown-header bordered-darkorange">
                                        <i class="fa fa-tasks"></i>
                                        4 مهام في التقدم
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-right">إنشاء حساب </span>
                                                <span class="pull-left">65%</span>
                                            </div>

                                            <div class="progress progress-xs">
                                                <div style="width:65%" class="progress-bar"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-right">ملف البيانات </span>
                                                <span class="pull-left">35%</span>
                                            </div>

                                            <div class="progress progress-xs">
                                                <div style="width:35%" class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-right">تحديث استئناف </span>
                                                <span class="pull-left">75%</span>
                                            </div>

                                            <div class="progress progress-xs">
                                                <div style="width:75%" class="progress-bar progress-bar-darkorange"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">مضيفا اتصالات </span>
                                                <span class="pull-right">10%</span>
                                            </div>

                                            <div class="progress progress-xs">
                                                <div style="width:10%" class="progress-bar progress-bar-warning"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="dropdown-footer">
                                        <a href="#">
                                            رؤية كافة المهام
                                        </a>
                                        <button class="btn btn-xs btn-default shiny darkorange icon-only pull-left"><i class="fa fa-check"></i></button>
                                    </li>
                                </ul>
                                <!--/Tasks Dropdown-->
                            </li>
                            <li>
                                <a class="wave in" id="chat-link" title="Chat" href="#">
                                    <i class="icon glyphicon glyphicon-comment"></i>
                                </a>
                            </li>
                            <li>
                                <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                    <div class="avatar" title="View your public profile">
                                        <img src=""<?php echo base_url('assets/img/avatars/adam-jansen.jpg'); ?>">
                                    </div>
                                    <section>
                                        <h2><span class="profile"><span>ديفيد ستيفنسون </span></span></h2>
                                    </section>
                                </a>
                                <!--Login Area Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                    <li class="username"><a>ديفيد ستيفنسون</a></li>
                                    <li class="email"><a>David.Stevenson@live.com</a></li>
                                    <!--Avatar Area-->
                                    <li>
                                        <div class="avatar-area">
                                            <img src="<?php echo base_url('assets/img/avatars/adam-jansen.jpg'); ?>" class="avatar">
                                            <span class="caption">تغيير الصورة</span>
                                        </div>
                                    </li>
                                    <!--Avatar Area-->
                                    <li class="edit">
                                        <a href="profile.html" class="pull-left">الملف الشخصي</a>
                                        <a href="#" class="pull-right">اعداد</a>
                                    </li>
                                    <!--Theme Selector Area-->
                                    <li class="theme-area">
                                        <ul class="colorpicker" id="skin-changer">
                                            <li><a class="colorpick-btn" href="#" style="background-color:#5DB2FF;" <?php echo base_url('assets/css/skins/blue.min.css'); ?>"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#2dc3e8;" <?php echo base_url('assets/css/skins/azure.min.css'); ?>"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#03B3B2;" <?php echo base_url('assets/css/skins/teal.min.css'); ?>"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#53a93f;" <?php echo base_url('assets/css/skins/green.min.css'); ?>"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#FF8F32;" <?php echo base_url('assets/css/skins/orange.min.css'); ?>"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#cc324b;" <?php echo base_url('assets/css/skins/pink.min.css'); ?>"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#AC193D;" <?php echo base_url('assets/css/skins/darkred.min.css'); ?>"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#8C0095;" <?php echo base_url('assets/css/skins/purple.min.css'); ?>"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#0072C6;" <?php echo base_url('assets/css/skins/darkblue.min.css'); ?>"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#585858;" <?php echo base_url('assets/css/skins/gray.min.css'); ?>"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#474544;" <?php echo base_url('assets/css/skins/black.min.css'); ?>"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#001940;" rel="<?php echo base_url('assets/css/skins/deepblue.min.css'); ?>"></a></li>
                                        </ul>
                                    </li>
                                    <!--/Theme Selector Area-->
                                    <li class="dropdown-footer">
                                        <a href="login.html">
                                            تسجيل الخروج
                                        </a>
                                    </li>
                                </ul>
                                <!--/Login Area Dropdown-->
                            </li>
                            <!-- /Account Area -->
                            <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                            <!-- Settings -->
                        </ul><div class="setting">
                            <a id="btn-setting" title="Setting" href="#">
                                <i class="icon glyphicon glyphicon-cog"></i>
                            </a>
                        </div><div class="setting-container">
                            <label>
                                <input type="checkbox" id="checkbox_fixednavbar">
                                <span class="text">نافبار الثابتة</span>
                            </label>
                            <label>
                                <input type="checkbox" id="checkbox_fixedsidebar">
                                <span class="text">الشريط الجانبي ثابت</span>
                            </label>
                            <label>
                                <input type="checkbox" id="checkbox_fixedbreadcrumbs">
                                <span class="text">بردکرامبز الثابتة</span>
                            </label>
                            <label>
                                <input type="checkbox" id="checkbox_fixedheader">
                                <span class="text">رأس ثابتة</span>
                            </label>
                        </div>
                        <!-- Settings -->
                    </div>
                </div>
                <!-- /Account Area and Settings -->
            </div>
        </div>
    </div>
    <!-- /Navbar -->
    <!-- Main Container -->
    <div class="main-container container-fluid">
        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input type="text" class="searchinput">
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">تقارير البحث، الرسوم البيانية، رسائل البريد الإلكتروني أو إشعارات</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li>
                        <a href="<?php echo base_url('/Users/'); ?>">
                            <i class="menu-icon glyphicon glyphicon-home"></i>
                            <span class="menu-text">الصفحة الرئيسية </span>
                        </a>
                    </li>
                    <!--Databoxes-->
                    
                    <!--Widgets-->
                    <li>
                        <a href="widgets.html">
                            <i class="menu-icon fa fa-th"></i>
                            <span class="menu-text"> الحاجيات </span>
                        </a>
                    </li>
                    <!--UI Elements-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-desktop"></i>
                            <span class="menu-text"> الأعضاء </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="<?php echo base_url('/Users/doctor'); ?>">
                                    <span class="menu-text">الأطباء</span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('/Users/newpatient'); ?>" id="patient">
                                    <span class="menu-text">المرضى</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?php echo base_url('/Users/lab'); ?>">
                                    <span class="menu-text">المختبرات</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('/Users/xray'); ?>">
                                    <span class="menu-text">مراكز الاشعة</span>
                                </a>
                            </li>
                            <li>
                                <a href="modals.html">
                                    <span class="menu-text">شرطية ويلز</span>
                                </a>
                            </li>
                            <li>
                                <a href="buttons.html">
                                    <span class="menu-text">أزرار</span>
                                </a>
                            </li>
                            <li>
                                <a href="nestable-list.html">
                                    <span class="menu-text"> قائمة Nestable</span>
                                </a>
                            </li>
                            <li>
                                <a href="treeview.html">
                                    <span class="menu-text">تريفيف</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Tables-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-table"></i>
                            <span class="menu-text"> الجداول </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="tables-simple.html">
                                    <span class="menu-text">بسيطة والمستجيبة</span>
                                </a>
                            </li>
                            <li>
                                <a href="tables-data.html">
                                    <span class="menu-text">جداول البيانات</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Forms-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-pencil-square-o"></i>
                            <span class="menu-text"> أشكال </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="form-layouts.html">
                                    <span class="menu-text">تخطيط نموذج</span>
                                </a>
                            </li>

                            <li>
                                <a href="form-inputs.html">
                                    <span class="menu-text">المدخلات شكل</span>
                                </a>
                            </li>

                            <li>
                                <a href="form-pickers.html">
                                    <span class="menu-text">جامعو البيانات</span>
                                </a>
                            </li>
                            <li>
                                <a href="form-wizard.html">
                                    <span class="menu-text">Wizard</span>
                                </a>
                            </li>
                            <li>
                                <a href="form-validation.html">
                                    <span class="menu-text">التحقق من صحة</span>
                                </a>
                            </li>
                            <li>
                                <a href="form-editors.html">
                                    <span class="menu-text">المحررين</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Charts-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-bar-chart-o"></i>
                            <span class="menu-text"> الرسوم البيانية </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="flot.html">
                                    <span class="menu-text">الرسوم البيانية فلوت</span>
                                </a>
                            </li>

                            <li>
                                <a href="morris.html">
                                    <span class="menu-text"> الرسوم البيانية موريس</span>
                                </a>
                            </li>
                            <li>
                                <a href="sparkline.html">
                                    <span class="menu-text">الرسوم البيانية اسبارکلاین</span>
                                </a>
                            </li>
                            <li>
                                <a href="easypiecharts.html">
                                    <span class="menu-text">رسوم بيانية ایزی پای</span>
                                </a>
                            </li>
                            <li>
                                <a href="chartjs.html">
                                    <span class="menu-text"> ChartJS</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Profile-->
                    <li>
                        <a href="profile.html">
                            <i class="menu-icon fa fa-picture-o"></i>
                            <span class="menu-text">ملف</span>
                        </a>
                    </li>
                    <!--Mail-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-envelope-o"></i>
                            <span class="menu-text"> بريد </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="inbox.html">
                                    <span class="menu-text">البريد الوارد</span>
                                </a>
                            </li>

                            <li>
                                <a href="message-view.html">
                                    <span class="menu-text">عرض رسالة</span>
                                </a>
                            </li>
                            <li>
                                <a href="message-compose.html">
                                    <span class="menu-text">يؤلف رسالة</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Calendar-->
                    <li>
                        <a href="calendar.html">
                            <i class="menu-icon fa fa-calendar"></i>
                            <span class="menu-text">
                                <font>
                                    <font>
                                        تقويم
                                    </font>
                                </font>
                            </span>
                        </a>
                    </li>
                    <!--Pages-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-paperclip"></i>
                            <span class="menu-text"> صفحات </span>

                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="timeline.html">
                                    <span class="menu-text">الجدول الزمني</span>
                                </a>
                            </li>
                            <li>
                                <a href="pricing.html">
                                    <span class="menu-text">جداول التسعير</span>
                                </a>
                            </li>

                            <li>
                                <a href="invoice.html">
                                    <span class="menu-text">فاتورة</span>
                                </a>
                            </li>

                            <li>
                                <a href="login.html">
                                    <span class="menu-text">دخول</span>
                                </a>
                            </li>
                            <li>
                                <a href="register.html">
                                    <span class="menu-text">تسجيل</span>
                                </a>
                            </li>
                            <li>
                                <a href="lock.html">
                                    <span class="menu-text">قفل الشاشة</span>
                                </a>
                            </li>
                            <li>
                                <a href="typography.html">
                                    <span class="menu-text"> أسلوب الطباعة </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--More Pages-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-link"></i>

                            <span class="menu-text">
                                <font>
                                    <font>
                                        أكثر الصفحات
                                    </font>
                                </font>
                            </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="error-404.html">
                                    <span class="menu-text">الخطأ 404</span>
                                </a>
                            </li>

                            <li>
                                <a href="error-500.html">
                                    <span class="menu-text"> الخطأ 500</span>
                                </a>
                            </li>
                            <li>
                                <a href="blank.html">
                                    <span class="menu-text">صفحة فارغة</span>
                                </a>
                            </li>
                            <li>
                                <a href="grid.html">
                                    <span class="menu-text"> شبكة</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="menu-dropdown">
                                    <span class="menu-text">
                                        <font>
                                            <font>
                                                القائمة متعددة المستوى
                                            </font>
                                        </font>
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>

                                <ul class="submenu">
                                    <li>
                                        <a href="#">
                                            <i class="menu-icon fa fa-camera"></i>
                                            <span class="menu-text">المستوى 3</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="menu-dropdown">
                                            <i class="menu-icon fa fa-asterisk"></i>

                                            <span class="menu-text">
                                                <font>
                                                    <font>
                                                        المستوى 4
                                                    </font>
                                                </font>
                                            </span>
                                            <i class="menu-expand"></i>
                                        </a>

                                        <ul class="submenu">
                                            <li>
                                                <a href="#">
                                                    <i class="menu-icon fa fa-bolt"></i>
                                                    <span class="menu-text">بعض تفاصيل</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="menu-icon fa fa-bug"></i>
                                                    <span class="menu-text">تفاصيل أخرى</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!--Right to Left-->
                    <li class="active open">
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-align-right"></i>
                            <span class="menu-text">  اليمين إلى اليسار </span>

                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="index.html">
                                    <span class="menu-text">Back To English</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="index-rtl-ar.html">
                                    <span class="menu-text">تخطيط عربية</span>
                                </a>
                            </li>

                            <li>
                                <a href="index-rtl-fa.html">
                                    <span class="menu-text">تخطيط الفارسية</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="versions.html">
                            <i class="menu-icon glyphicon glyphicon-fire themesecondary"></i>
                            <span class="menu-text">
                                BeyondAdmin Versions
                            </span>
                        </a>
                    </li>
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            <!-- Chat Bar -->
            <div id="chatbar" class="page-chatbar">
                <div class="chatbar-contacts">
                    <div class="contacts-search">
                        <input type="text" class="searchinput" placeholder="Search Contacts" />
                        <i class="searchicon fa fa-search"></i>
                        <div class="searchhelper">Search Your Contacts and Chat History</div>
                    </div>
                    <ul class="contacts-list">
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src=""<?php echo base_url('assets/img/avatars/divyia.jpg'); ?>" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Divyia Philips</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    last week
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="<?php echo base_url('assets/img/avatars/Nicolai-Larson.jpg'); ?>" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Adam Johnson</div>
                                <div class="contact-status">
                                    <div class="offline"></div>
                                    <div class="status">left 4 mins ago</div>
                                </div>
                                <div class="last-chat-time">
                                    today
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="<?php echo base_url('assets/img/avatars/John-Smith.jpg'); ?>" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">John Smith</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    1:57 am
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="<?php echo base_url('assets/img/avatars/Osvaldus-Valutis.jpg'); ?>" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Osvaldus Valutis</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    today
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="<?php echo base_url('assets/img/avatars/Javi-Jimenez.jpg'); ?>" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Javi Jimenez</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    today
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="<?php echo base_url('assets/img/avatars/Stephanie-Walter.jpg'); ?>" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Stephanie Walter</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    yesterday
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="<?php echo base_url('assets/img/avatars/Sergey-Azovskiy.jpg'); ?>" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Sergey Azovskiy</div>
                                <div class="contact-status">
                                    <div class="offline"></div>
                                    <div class="status">offline since oct 24</div>
                                </div>
                                <div class="last-chat-time">
                                    22 oct
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="<?php echo base_url('assets/img/avatars/Lee-Munroe.jpg'); ?>" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Lee Munroe</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    today
                                </div>
                            </div>
                        </li>
                        <li class="contact">
                            <div class="contact-avatar">
                                <img src="<?php echo base_url('assets/img/avatars/divyia.jpg'); ?>" />
                            </div>
                            <div class="contact-info">
                                <div class="contact-name">Divyia Philips</div>
                                <div class="contact-status">
                                    <div class="online"></div>
                                    <div class="status">online</div>
                                </div>
                                <div class="last-chat-time">
                                    last week
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="chatbar-messages" style="display: none;">
                    <div class="messages-contact">
                        <div class="contact-avatar">
                            <img src="<?php echo base_url('assets/img/avatars/divyia.jpg'); ?>" />
                        </div>
                        <div class="contact-info">
                            <div class="contact-name">Divyia Philips</div>
                            <div class="contact-status">
                                <div class="online"></div>
                                <div class="status">online</div>
                            </div>
                            <div class="last-chat-time">
                                a moment ago
                            </div>
                            <div class="back">
                                <i class="fa fa-arrow-circle-left"></i>
                            </div>
                        </div>
                    </div>
                    <ul class="messages-list">
                        <li class="message">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Me</div>
                                <div class="message-time">10:14 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message reply">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Divyia</div>
                                <div class="message-time">10:15 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Me</div>
                                <div class="message-time">10:14 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message reply">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Divyia</div>
                                <div class="message-time">10:15 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Me</div>
                                <div class="message-time">10:14 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                        <li class="message reply">
                            <div class="message-info">
                                <div class="bullet"></div>
                                <div class="contact-name">Divyia</div>
                                <div class="message-time">10:15 AM, Today</div>
                            </div>
                            <div class="message-body">
                                Hi, Hope all is good. Are we meeting today?
                            </div>
                        </li>
                    </ul>
                    <div class="send-message">
                        <span class="input-icon icon-right">
                            <textarea rows="4" class="form-control" placeholder="Type your message"></textarea>
                            <i class="fa fa-camera themeprimary"></i>
                        </span>
                    </div>
                </div>
            </div>
            <!-- /Chat Bar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="#">منزل</a>
                        </li>
                        <li class="active">لوحة القيادة</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                            لوحة القيادة
                        </h1>
                    </div>
                    <!--Header Buttons-->
                    <div class="header-buttons">
                        <a class="sidebar-toggler" href="#">
                            <i class="fa fa-arrows-h"></i>
                        </a>
                        <a class="refresh" id="refresh-toggler" href="">
                            <i class="glyphicon glyphicon-refresh"></i>
                        </a>
                        <a class="fullscreen" id="fullscreen-toggler" href="#">
                            <i class="glyphicon glyphicon-fullscreen"></i>
                        </a>
                    </div>
                    <!--Header Buttons End-->
                </div>
                <!-- /Page Header -->
                <!-- Page Body -->
                
                <div class="page-body">
                    <?php
                       $this->load->view($content);  
                   
                    ?>
                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>
        <!-- /Page Container -->
        <!-- Main Container -->

    </div>

    <script src="<?php echo base_url(); ?>assets/js/jquery-2.0.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/slimscroll/jquery.slimscroll.min.js"></script>

    <!--Beyond Scripts-->
    <script src="<?php echo base_url(); ?>assets/js/skins.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/beyond.min.js"></script>


    <!--Page Related Scripts-->
    <!--Sparkline Charts Needed Scripts-->
    <script src="<? echo base_url(); ?>assets/js/charts/sparkline/jquery.sparkline.js"></script>
    <script src="<? echo base_url(); ?>assets/js/charts/sparkline/sparkline-init.js"></script>

    <!--Easy Pie Charts Needed Scripts-->
    <script src="<? echo base_url(); ?>assets/js/charts/easypiechart/jquery.easypiechart.js"></script>
    <script src="<? echo  base_url(); ?>assets/js/charts/easypiechart/easypiechart-init.js"></script>

    <!--Flot Charts Needed Scripts-->
    <script src="<? echo base_url(); ?>assets/js/charts/flot/jquery.flot.js"></script>
    <script src="<? echo base_url(); ?>assets/js/charts/flot/jquery.flot.resize.js"></script>
    <script src="<? echo base_url(); ?>assets/js/charts/flot/jquery.flot.pie.js"></script>
    <script src="<? echo base_url(); ?>assets/js/charts/flot/jquery.flot.tooltip.js"></script>
    <script src="<? echo base_url(); ?>assets/js/charts/flot/jquery.flot.orderBars.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    
});


</script>
    <script>

        //Sets The Hidden Chart Width
        $('#dashboard-bandwidth-chart')
            .data('width', $('.box-tabbs')
                .width() - 20);
        //Visitor Sources Pie Chart
        var data = [
            {
                data: [[1, 21]],
                color: '#fb6e52'
            },
            {
                data: [[1, 12]],
                color: '#e75b8d'
            },
            {
                data: [[1, 11]],
                color: '#a0d468'
            },
            {
                data: [[1, 10]],
                color: '#ffce55'
            },
            {
                data: [[1, 46]],
                color: '#5db2ff'
            }
        ];
        var placeholder = $("#dashboard-pie-chart-sources");
        placeholder.unbind();

        $.plot(placeholder, data, {
            series: {
                pie: {
                    innerRadius: 0.45,
                    show: true,
                    stroke: {
                        width: 4
                    }
                }
            }
        });

        //Visit Chart (Main Chart)
        var data2 = [{
            color: themesecondary,
            label: "الزیارات المباشره",
            data: [[3, 2], [4, 5], [5, 4], [6, 11], [7, 12], [8, 11], [9, 8], [10, 14], [11, 12], [12, 16], [13, 9],
            [14, 10], [15, 14], [16, 15], [17, 9]],

            lines: {
                show: true,
                fill: true,
                lineWidth: .1,
                fillColor: {
                    colors: [{
                        opacity: 0
                    }, {
                        opacity: 0.4
                    }]
                }
            },
            points: {
                show: false
            },
            shadowSize: 0
        },
            {
                color: themeprimary,
                label: "الاحاله الزیارات",
                data: [[3, 10], [4, 13], [5, 12], [6, 16], [7, 19], [8, 19], [9, 24], [10, 19], [11, 18], [12, 21], [13, 17],
                [14, 14], [15, 12], [16, 14], [17, 15]],
                bars: {
                    order: 1,
                    show: true,
                    borderWidth: 0,
                    barWidth: 0.4,
                    lineWidth: .5,
                    fillColor: {
                        colors: [{
                            opacity: 0.4
                        }, {
                            opacity: 1
                        }]
                    }
                }
            },
            {
                color: themethirdcolor,
                label: "محرکات البحث",
                data: [[3, 14], [4, 11], [5, 10], [6, 9], [7, 5], [8, 8], [9, 5], [10, 6], [11, 4], [12, 7], [13, 4],
                [14, 3], [15, 4], [16, 6], [17, 4]],
                lines: {
                    show: true,
                    fill: false,
                    fillColor: {
                        colors: [{
                            opacity: 0.3
                        }, {
                            opacity: 0
                        }]
                    }
                },
                points: {
                    show: true
                }
            }
        ];
        var options = {
            legend: {
                show: false
            },
            xaxis: {
                tickDecimals: 0,
                color: '#f3f3f3'
            },
            yaxis: {
                min: 0,
                color: '#f3f3f3',
                tickFormatter: function (val, axis) {
                    return "";
                },
            },
            grid: {
                hoverable: true,
                clickable: false,
                borderWidth: 0,
                aboveData: false,
                color: '#fbfbfb'

            },
            tooltip: true,
            tooltipOpts: {
                defaultTheme: false,
                content: " <b>%x جولای</b> , <b>%s</b> : <span>%y</span>",
            }
        };
        var placeholder = $("#dashboard-chart-visits");
        var plot = $.plot(placeholder, data2, options);

        //Real-Time Chart
        var realTimedata = [],
                  realTimedata2 = [],
                  totalPoints = 300;

        var getSeriesObj = function () {
            return [
            {
                data: getRandomData(),
                lines: {
                    show: true,
                    lineWidth: 1,
                    fill: true,
                    fillColor: {
                        colors: [
                            {
                                opacity: 0
                            }, {
                                opacity: 1
                            }
                        ]
                    },
                    steps: false
                },
                shadowSize: 0
            }, {
                data: getRandomData2(),
                lines: {
                    lineWidth: 0,
                    fill: true,
                    fillColor: {
                        colors: [
                            {
                                opacity: .5
                            }, {
                                opacity: 1
                            }
                        ]
                    },
                    steps: false
                },
                shadowSize: 0
            }
            ];
        };
        function getRandomData() {
            if (realTimedata.length > 0)
                realTimedata = realTimedata.slice(1);

            // Do a random walk

            while (realTimedata.length < totalPoints) {

                var prev = realTimedata.length > 0 ? realTimedata[realTimedata.length - 1] : 50,
                    y = prev + Math.random() * 10 - 5;

                if (y < 0) {
                    y = 0;
                } else if (y > 100) {
                    y = 100;
                }
                realTimedata.push(y);
            }

            // Zip the generated y values with the x values

            var res = [];
            for (var i = 0; i < realTimedata.length; ++i) {
                res.push([i, realTimedata[i]]);
            }

            return res;
        }
        function getRandomData2() {
            if (realTimedata2.length > 0)
                realTimedata2 = realTimedata2.slice(1);

            // Do a random walk

            while (realTimedata2.length < totalPoints) {

                var prev = realTimedata2.length > 0 ? realTimedata[realTimedata2.length] : 50,
                    y = prev - 25;

                if (y < 0) {
                    y = 0;
                } else if (y > 100) {
                    y = 100;
                }
                realTimedata2.push(y);
            }


            var res = [];
            for (var i = 0; i < realTimedata2.length; ++i) {
                res.push([i, realTimedata2[i]]);
            }

            return res;
        }
        // Set up the control widget
        var updateInterval = 500;
        var plot = $.plot("#dashboard-chart-realtime", getSeriesObj(), {
            yaxis: {
                color: '#f3f3f3',
                min: 0,
                max: 100,
                tickFormatter: function (val, axis) {
                    return "";
                }
            },
            xaxis: {
                color: '#f3f3f3',
                min: 0,
                max: 100,
                tickFormatter: function (val, axis) {
                    return "";
                }
            },
            grid: {
                hoverable: true,
                clickable: false,
                borderWidth: 0,
                aboveData: false
            },
            colors: ['#eee', themeprimary],
        });

        function update() {

            plot.setData(getSeriesObj());

            plot.draw();
            setTimeout(update, updateInterval);
        }
        update();


        //Initiates Easy Pie Chart instances in page
        InitiateEasyPieChart.init();

        //Initiates Sparkline Chart instances in page
        InitiateSparklineCharts.init();




    </script>
    
</body>
<!--  /Body -->
</html>
