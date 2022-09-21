<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="{{ asset('layout/styles/layout.css') }}" rel="stylesheet" type="text/css" media="all">
</head>
<div class="bgded overlay" style="background-image:url('{{ asset('layout/images/demo/backgrounds/01.png') }}');">
    <!-- ################################################################################################ -->
    <div class="wrapper row1">
        <header id="header" class="hoc clear">
            <!-- ################################################################################################ -->
            <div id="logo" class="fl_left">
                <h1><a href="{{ url('/') }}">Goltsev</a></h1>
            </div>
            <nav id="mainav" class="fl_right">
                <ul class="clear">
                    <li class="active"><a href="{{ url('/') }}">Блог</a></li>
                    <li><a class="drop" href="#">Проекты</a>
                        <ul>
                            <li><a href="pages/gallery.html">Редактор Резюме</a></li>
                            <li><a href="pages/full-width.html">Task Manager</a></li>
                            <li><a href="pages/sidebar-left.html">Money Manager</a></li>
                        </ul>
                    </li>
{{--                    <li><a class="drop" href="#">Проекты</a>--}}
{{--                        <ul>--}}
{{--                            <li><a href="#">Level 2</a></li>--}}
{{--                            <li><a class="drop" href="#">Level 2 + Drop</a>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#">Level 3</a></li>--}}
{{--                                    <li><a href="#">Level 3</a></li>--}}
{{--                                    <li><a href="#">Level 3</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a href="#">Level 2</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                    <li><a href="#">Портфолио</a></li>
                    <li><a href="{{ url('/contacts') }}">Контакты</a></li>
                    <li><a href="{{ url('/login') }}">Войти</a></li>
                </ul>
            </nav>
            <!-- ################################################################################################ -->
        </header>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <section id="pageintro" class="hoc clear">
        <div>
            <!-- ################################################################################################ -->
            <h2 class="heading">Ultricies nisl</h2>
            <p>Morbi lacus sapien venenatis id cursus in bibendum eget ligula nunc vitae lacus sit amet sem consequat ullamcorper.</p>
            <footer><a class="btn" href="#">Vulputate</a></footer>
            <!-- ################################################################################################ -->
        </div>
    </section>
    <!-- ################################################################################################ -->
</div>

@yield('content')

<div class="wrapper row4 bgded overlay" style="background-image:url('{{ asset('layout/images/demo/backgrounds/02.png') }}');">
    <footer id="footer" class="hoc clear">
        <!-- ################################################################################################ -->
        <div class="one_third first">
            <h6 class="heading">Basend</h6>
            <p>Nullam quis ligula elementum lectus varius aliquet vivamus odio donec metus libero semper quis suscipit ut aliquam a metus integer.</p>
            <p class="btmspace-50">Pretium curabitur magna odio laoreet eu accumsan vitae gravida quis odio.</p>
            <nav>
                <ul class="nospace">
                    <li><a href="index.html"><i class="fa fa-lg fa-home"></i></a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Cookies</a></li>
                    <li><a href="#">Disclaimer</a></li>
                    <li><a href="#">Online Shop</a></li>
                    <li><a href="#">Sitemap</a></li>
                </ul>
            </nav>
        </div>
        <div class="one_third">
            <h6 class="heading">Aliquam non fermentum</h6>
            <ul class="nospace btmspace-30 linklist contact">
                <li><i class="fa fa-map-marker"></i>
                    <address>
                        Street Name &amp; Number, Town, Postcode/Zip
                    </address>
                </li>
                <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
                <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
                <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
            </ul>
            <ul class="faico clear">
                <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
            </ul>
        </div>
        <div class="one_third">
            <h6 class="heading">Sapien lobortis nec</h6>
            <article><a href="#"><img class="btmspace-15" src="{{ asset('layout/images/demo/320x140.png') }}" alt=""></a>
                <h6 class="nospace font-x1"><a href="#">Velit pellentesque</a></h6>
                <time class="font-xs block btmspace-10" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
                <p class="nospace">Eget nisl mauris placerat mauris a semper posuere sem arcu cursus felis non cursus enim odio in maecenas ut justo [&hellip;]</p>
            </article>
        </div>
        <!-- ################################################################################################ -->
    </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
    <div id="copyright" class="hoc clear">
        <!-- ################################################################################################ -->
        <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
        <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
        <!-- ################################################################################################ -->
    </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="{{ asset('layout/scripts/jquery.min.js') }}"></script>
<script src="{{ asset('layout/scripts/jquery.backtotop.js') }}"></script>
<script src="{{ asset('layout/scripts/jquery.mobilemenu.js') }}"></script>
</body>
</html>
