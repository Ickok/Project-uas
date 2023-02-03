<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS PAB WEB</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&family=Raleway:ital@0;1&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/tailwind.config.js"></script>
    <style type="text/tailwindcss">
        @layer utilities {
                    div a {
                        @apply text-nav hover:text-black font-raleway;
                    }
            
                    div a.active {
                        @apply text-black;
                    }
                    
                    .button-primary {
                        @apply bg-primary py-[12px] px-[30px] text-white rounded-full hover:bg-secondary;
                    }
                    .button-download{
                        @apply w-[170px] h-[50px] py-[12px] px-[30px] text-cyan-500 rounded-full border-2 border-cyan-500 hover:bg-cyan-500 hover:text-white;
                    }
                    nav a {
                        @apply text-white text-2xl lg:text-base font-bold lg:font-normal lg:text-nav hover:text-black font-raleway;
                    }

                    nav a.active {
                        @apply text-black;
                    }

                    nav > ul > li {
                        @apply p-5;
                    }

                    .button-primary {
                        @apply bg-primary py-[12px] px-[30px] text-white rounded-full hover:bg-secondary;
                    }

                    .text-gradient {
                        background: linear-gradient(90.01deg, #E18700 35.24%, #FF32AD 66.21%, #0EC5D7 97.18%);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        background-clip: text;
                        text-fill-color: transparent;
                    }

                    .mobile-btn .close {
                        @apply hidden;
                    }
                    .mobile-btn.active .bar {
                        @apply hidden;
                    }
                    .mobile-btn.active .close {
                        @apply block;
                    }
                    }
                    
                    .mobile-btn svg {
                        width: 32px;
                        height: 32px;
                    }

                    .submenu {
                        @apply absolute m-0 py-1 bg-primary invisible opacity-0 transition-all ease-in-out;
                    }

                    .submenu a {
                        @apply text-white min-w-[135px] w-full block py-1 px-4 hover:bg-secondary hover:text-white;
                    }

                    .has-child:hover .submenu {
                        @apply visible opacity-100;
                    }

                    .has-child {
                        @apply relative cursor-pointer;
                    }
                    .has-child > span.caret {
                        @apply invert absolute h-[26px] w-[12px] -right-0 top-1/2 transform -translate-y-1/2;
                        content: url('data:image/svg+xml;charset=UTF-8, <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.666992 0.666748L4.33366 4.66675L8.00033 0.666748" stroke="white"/></svg>');
                    }
                    
                    @media screen and (max-width:1023px) {
                        nav {
                            left: -100%;
                            transition: all .3s ease-in-out;
                        }
                        nav > ul > li {
                            @apply w-full p-0;
                        }
                        .has-child  {
                            @apply overflow-hidden;
                        }
                        .has-child > span.caret {
                            @apply invert-0 top-4;
                        }
                        .has-child.active .submenu {
                            @apply visible opacity-100 max-h-[1000px];
                        }
                        nav .submenu {
                            @apply visible opacity-100 relative w-full max-h-0;
                        }
                        nav.active {
                            left: 0;
                        }
                    }
    </style>
</head>
<body class="container mx-auto border-2">
    <header class="bg-header">
        <section class="px-40 relative">
            <section id="topbar" class="flex justify-between gap 10 py-5">
                <div id="left-side" class="flex gap-20 items-center">
                    <div class="flex items-center text-4xl">
                        <h1 class="text-amber-300 font-sans font-bold text-5xl">$</h1>
                        <h1 class="text-cyan-500 font- font-bold">eduiten</h1>
                    </div>
                    <nav class="fixed w-full h-full top-0 p-10 lg:p-0 lg:relative bg-primary lg:bg-transparent">
                        <ul class="flex flex-col lg:flex-row gap-y-5 gap-x-2 items-center font-sans text-slate-400">
                            <li><a href="#" class="active text-black font-bold">Home</a></li> 
                            <li class="has-child">
                                <a href="#">
                                <span class="caret"></span>
                                About</a>
                                <ul class="submenu">
                                    <li><a href="#">Visi</a></li>
                                    <li><a href="#">Misi</a></li>
                                    <li><a href="#">Profil</a></li>
                                    <li><a href="#">Our Team</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Service</a></li> 
                            <li><a href="#">Download</a></li>
                        </ul>
                    </nav>
                </div>
                <div id="right-side" class="flex gap-10 items-center">
                    <a href="#" class="underline">login</a>
                    <a href="#" class="button-primary flex items-center">Get Started <img class="w-7" src="img/Arrow.svg" alt="arrow"></a>
                </div>
                <button class="mobile-btn fixed right-6 top-6 lg:static lg:hidden">
                    <svg class="bar" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 17H19M5 12H19M5 7H19" stroke="black" stroke-width="2.01562" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <svg class="close" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.6439 11.9998L18.657 6.99835C18.8765 6.77882 18.9998 6.48107 18.9998 6.17061C18.9998 5.86014 18.8765 5.5624 18.657 5.34286C18.4374 5.12333 18.1397 5 17.8292 5C17.5187 5 17.221 5.12333 17.0015 5.34286L12 10.356L6.99857 5.34286C6.77904 5.12333 6.48129 5 6.17083 5C5.86036 5 5.56261 5.12333 5.34308 5.34286C5.12355 5.5624 5.00022 5.86014 5.00022 6.17061C5.00022 6.48107 5.12355 6.77882 5.34308 6.99835L10.3562 11.9998L5.34308 17.0012C5.23381 17.1096 5.14708 17.2386 5.08789 17.3806C5.0287 17.5227 4.99823 17.6751 4.99823 17.829C4.99823 17.9829 5.0287 18.1353 5.08789 18.2773C5.14708 18.4194 5.23381 18.5484 5.34308 18.6567C5.45146 18.766 5.58041 18.8527 5.72247 18.9119C5.86454 18.9711 6.01692 19.0016 6.17083 19.0016C6.32473 19.0016 6.47711 18.9711 6.61918 18.9119C6.76125 18.8527 6.89019 18.766 6.99857 18.6567L12 13.6436L17.0015 18.6567C17.1098 18.766 17.2388 18.8527 17.3809 18.9119C17.5229 18.9711 17.6753 19.0016 17.8292 19.0016C17.9831 19.0016 18.1355 18.9711 18.2776 18.9119C18.4196 18.8527 18.5486 18.766 18.657 18.6567C18.7662 18.5484 18.853 18.4194 18.9121 18.2773C18.9713 18.1353 19.0018 17.9829 19.0018 17.829C19.0018 17.6751 18.9713 17.5227 18.9121 17.3806C18.853 17.2386 18.7662 17.1096 18.657 17.0012L13.6439 11.9998Z"
                            fill="#000" />
                    </svg>
                </button>
            </section>
            <section id="dashbord" class=" relative py-20">
                <div class="relative">
                    <div><img class="absolute w-[36px] top-[0px] left-[550px]" src="img/star2.svg" alt=""></div>
                    <div><img class="absolute w-[18px] top-[400px] left-[400px]" src="img/star1.svg" alt=""></div>
                    <p class="text-amber-300 font-sans text-[14px]">Dashboard Admin Manager</p>
                    <h1 class="font-bold font-sans text-[64px] w-[655px] h-[264px]"><span class="text-cyan-500">Managing Finances</span> Well will make you
                        Live rich</h1>
                    <p class="text-[14px] text-slate-400 w-[500px] pt-10">Seduten will help you to manage your finances, starting from your monthly expenses and
                        income, ensuring that your
                        account and money are safe with our professional system.</p>
                        <div class="flex gap-10 align-center py-10">
                            <a href="#" class="button-primary flex items-center">Get Started <img class="w-7" src="img/Arrow.svg" alt="arrow"></a>
                            <a href="#" class="button-download flex items-center">Download <img src="img/Download.svg" alt=""></a>
                        </div>
                    
                </div>
                <div><img class="absolute w-[20px] top-[35px] right-[0px]" src="img/star3.svg" alt=""></div>
            </section>
            <a href="#" class="absolute right-[250px] top-[120px] bg-black bg-opacity-25 text-white rounded-full p-4">Manage your expenditure 📊</a>
            
            <div class="absolute w-[747px] top-[160px] right-0">
                <img src="img/gambarr.png" class="" alt="">
            </div>
            <div class="absolute w-[1022px] drop-shadow-xl -right-[260px] top-[600px]">
                <img src="img/dashbord.png" alt="">
            </div>
            <a href="#" class="absolute right-[500px] top-[300px] bg-black bg-opacity-25 text-white rounded-full p-4">Make you rich 💰</a>
            <a href="#" class="absolute right-[250px] top-[450px] bg-black bg-opacity-25 text-white rounded-full p-4">Awesome experience 💻</a>
        </section>
        <div class="flex items-center w-[800px] py-10 px-40 gap-20 bg-amber-300">
            <div class=" text-white">
                <h1 class="text-center"><span class="text-5xl">500+</span><br>Partner<br> Word Wide</h1>
            </div>
            <div class=" text-white">
                <h1 class="text-center"><span class="text-5xl">100k+</span><br>user<br> Word Wide</h1>
            </div>
            <div class=" text-white">
                <h1 class="text-center"><span class="text-5xl">3,23M+</span><br>Download<br> Word Wide</h1>
            </div>
        </div>
    </header>
    <script src="app.js"></script>
    <div class="px-40 py-10">
        <p class="py-10 font-[16px] text-slate-400">Partner</p>
        <div class="grid grid-cols-3 gap-5 pb-5 w-[600px]">
            <img class="w-[157px]" src="img/MS.svg" alt="">
            <img class="w-[157px]" src="img/Google.svg" alt="">
            <img class="w-[157px]" src="img/tesla.svg" alt="">
            <img class="w-[157px]" src="img/payooner.svg" alt="">
            <img class="w-[157px]" src="img/Paypal.svg" alt="">
        </div>
    </div>
    <div class="px-40 py-28 relative">
        <p class="text-amber-300 font-sans text-sm">Dashboard Admin Manager</p>
        <h1 class="font-semibold font-sans text-[40px] w-[700px]">very professional <span class="text-cyan-500">protection</span></h1>
        <p class="text-slate-300 font-[14px] w-[600px] py-2">Seduten will help you to manage your finances, starting from your monthly expenses and income, ensuring that your
        account and money are safe with our professional system.</p>
        <p class="font-bold font-[14px] normal-case py-2">For protect your date</p>
        <div class="flex gap-10">
            <img class="w-[128px]" src="img/security.svg" alt="">
            <img class="w-[142px]" src="img/wordpress.svg" alt="">
        </div>
        <img class="absolute top-28 right-40 w-[600px]" src="img/dashbord2.png" alt="">
    </div>
    <div class="grid grid-cols-2 items-center py-20 px-40 bg-header">
        <div>
            <img class="w-[500px] ml-20" src="img/image..png" alt="">
        </div>
        <div class="">
            <p class="text-amber-300 font-sans text-sm">Money Saved</p>
            <h1 class="font-semibold font-sans text-[40px] w-[600px]">Want to know how much You can<span class="text-cyan-500"> save money </span>on $eduiten ?</h1>
            <img src="img/imagerate.png" class="w-[300]" alt="">
            <p class="text-slate-300 font-[14px] w-[600px] py-2">Lörem ipsum sagt dilig av anasa hemigon, blåbrun. Vanat lobel och bertad. Traktigt suprabon ett jeling.</p>
        </div>
    </div>
    <div class="grid grid-cols-4 gap-5 px-40 py-20">
        <div class="col-span-2 row-span-2 pt-20">
            <p class="text-amber-300 font-sans text-sm">Available Features</p>
            <h1 class="font-semibold font-sans text-[40px] w-[500px]">We come with some<span class="text-cyan-500"> Amazing features </span></h1>
            <p class="text-slate-300 font-[14px] w-[600px] py-2">Seduten will help you to manage your finances, starting from your monthly expenses and income, ensuring that your account and money are safe with our professional system.</p>
            <a href="#" class="py-2 button-primary flex items-center w-[220px] ">Browse Features <img class="w-7" src="img/Arrow.svg" alt="arrow"></a>
        </div>
        <div class="bg-slate-100 rounded-lg">
            <img class="w-[54px] bg-white" src="img/faster.svg" alt="faster">
            <h1 class="font-bold text-[24px] px-2 pt-4">Fast Transfer</h1>
            <p class="text-[14px] p-2 text-slate-300">We work with providers who are very fast in currency transfer</p>
            <a class="font-bold text-[14px] p-2 text-cyan-500" href="#">Read More</a>
        </div>
        <div class="bg-slate-100 rounded-lg">
            <img class="w-[54px] bg-white" src="img/emoji.svg" alt="">
            <h1 class="font-bold text-[24px] px-2 pt-4">User Experience</h1>
            <p class="text-[14px] p-2 text-slate-300">We work with providers who are very fast in currency transfer</p>
            <a class="font-bold text-[14px] p-2 text-cyan-500" href="#">Read More</a>
        </div>
        <div class="bg-slate-100 rounded-lg">
            <img class="w-[54px] bg-white" src="img/money.svg" alt="faster">
            <h1 class="font-bold text-[24px] px-2 pt-4">Easy Transfer</h1>
            <p class="text-[14px] p-2 text-slate-300">We work with providers who are very fast in currency transfer</p>
            <a class="font-bold text-[14px] p-2 text-cyan-500" href="#">Read More</a>
        </div>
        <div class="bg-slate-100 rounded-lg">
            <img class="w-[54px] bg-white" src="img/tools.svg" alt="">
            <h1 class="font-bold text-[24px] px-2 pt-4">Maintanance</h1>
            <p class="text-[14px] p-2 text-slate-300">We work with providers who are very fast in currency transfer</p>
            <a class="font-bold text-[14px] p-2 text-cyan-500" href="#">Read More</a>
        </div>
    </div>
    <div class="flex items-center bg-header px-40 py-20 bg-auto bg-no-repeat bg-center" style="background-image:url(bg-cyan.svg)">
        <div class="flex-none w-14 h-14">
            <a href="#"><img src="img/arrowleft.svg" alt=""></a>
        </div>
        <div class="grow text-center relative">
            <div><img class="absolute w-[23px] top-[200px] left-[283px]" src="img/star1.svg" alt=""></div>
            <div><img class="absolute w-[36px] top-[500px] left-[270px]" src="img/star3.svg" alt=""></div>
            <div><img class="absolute w-[18px] top-[550px] right-[200px]" src="img/star1.svg" alt=""></div>
            <div><img class="absolute w-[36px] top-[300px] right-[370px]" src="img/star3.svg" alt=""></div>
            <p class="text-amber-300 text-center font-sans text-sm">View From Our Dashboard</p>
            <p class="font-bold font-sans text-cyan-500 text-[64px]">Dashboard Profesional for<br> Your E-Wallet</p>
            <div class="flex justify-center">
                <img class="w-[718px]" src="img/laptop.png" alt="">
            </div>
            <p class="text-[14px] p-2 text-slate-300">Lörem ipsum sagt dilig av anasa hemigon, blåbrun. Vanat lobel och bertad. Traktigt<br> suprabon ett jeling.</p>
            <div class="flex gap-10 py-5 justify-center">
                <a href="#" class="button-primary flex items-center">Get Started <img class="w-7" src="img/Arrow.svg" alt="arrow"></a>
                <a href="#" class="button-download flex items-center">Download <img src="img/Download.svg" alt=""></a>
            </div>
        </div>
        <div class="flex-none w-14 h-14 ">
            <a href="#"><img src="img/arrowright.svg" alt=""></a>
        </div>
    </div>
    <div class="py-20 px-40 ">
        <div class="">
            <p class="text-amber-300 font-sans text-sm">Testimonial</p>
            <p class="text-[40px] font-bold font-sans">Our clients say</p>
            <p class="text-[14px] p-2 text-slate-300">Lörem ipsum sagt dilig av anasa hemigon, blåbrun. Vanat lobel och bertad. Traktigt <br> suprabon ett jeling.</p>
        </div>
        <div class="grid grid-cols-2 gap-5 pt-8">
            <div class="bg-header ">
                <img class="w-[157px] py-4 px-8 bg-white" src="img/logoMS.svg" alt="">
                <p class="text-[14px] py-2 px-8 text-slate-300">Great experience with Seduten, with easy-to-understand features and guaranteed safety</p>
                <div class="flex px-8 py-8">
                    <img class="rounded-full w-[40px]" src="img/Billgates.png" alt="">
                    <div class="px-2 ">
                        <h3 class="text-[14px] font-bold font-sans ">Bill Gates</h3>
                        <p class="text-[14px] text-slate-300">Owner</p>
                    </div>
                </div>
            </div>
            <div class="bg-header ">
                <img class="w-[157px] py-4 px-8 bg-white" src="img/logotesla.svg" alt="">
                <p class="text-[14px] py-2 px-8 text-slate-300">Great Great money storage with very large limits for saving money, safe and very reliable</p>
                <div class="flex px-8 py-8">
                    <img class="rounded-full w-[40px] h-[40px]" src="img/elon.png" alt="">
                    <div class="px-2 ">
                        <h3 class="text-[14px] font-bold font-sans ">Elon Reeve Musk FRS</h3>
                        <p class="text-[14px] text-slate-300">Owner</p>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <div class="px-40 pt-20 bg-buttom grid grid-cols-">
        <div class="flex items-center text-4xl">
            <h1 class="text-white font-sans font-bold text-5xl">$</h1>
            <h1 class="text-white font- font-bold">eduiten</h1>
        </div>
        <div class="flex gap-20 pt-10">
            <div>
                <p class="text-slate-400 w-[360px] pb-5 font-sans text-[14px] ">Lörem ipsum sagt dilig av anasa hemigon, blåbrun. Vanat lobel och bertad. Traktigt suprabon ett jeling.</p>
                <div class="py-3 flex gap-5">
                    <a href="#"><img class="w-[7px]" src="img/fb.svg" alt=""></a>
                    <a href="#"><img class="w-[18px]" src="img/twet.svg" alt=""></a>
                    <a href="#"><img class="w-[16px]" src="img/In.svg" alt=""></a>
                    <a href="#"><img class="w-[16px]" src="img/ig.svg" alt=""></a>
                </div>
                <div class="pt-12">
                    <a href="#" class="w-[180px] h-[50px] pt-[12px] px-[30px] text-[14px] text-cyan-500 rounded-full border-2 bg-white hover:bg-cyan-500 hover:text-white flex items-center py-5">Download App<img class="w-[20px]" src="Download.svg" alt=""></a>
                </div>
            </div>
            <div class="text-sans text-slate-400 text-[14px] ">
                <h3 class="text-sans text-white font-bold text-[14px] ">Navigation</h3>
                <p class="pt-5">Home</p>
                <p class="pt-3">About Us</p>
                <p class="pt-3">Shop</p>
                <p class="pt-3">Our Clients</p>
                <p class="pt-3">Login</p>
                <p class="pt-3">Register</p>
            </div>
            <div class="text-sans text-slate-400 text-[14px] ">
                <h3 class="text-sans text-white font-bold text-[14px] ">Featured</h3>
                <p class="pt-5">Dasbord</p>
                <p class="pt-3">Message</p>
                <p class="pt-3">Invesment</p>
            </div>
            <div class="text-sans text-slate-400 text-[14px] ">
                <h3 class="text-sans text-white font-bold text-[14px] ">From Member</h3>
                <p class="pt-5">privacy Policy</p>
                <p class="pt-3">Support</p>
            </div>
            <div class="text-sans text-slate-400 text-[14px] ">
                <h3 class="text-sans text-white font-bold text-[14px] ">Contact</h3>
                <div class="flex pt-5 gap-2">
                    <img class="w-[20px] h-[14px]" src="img/Mail.svg" alt="">
                    <p class="">hallo@seduitenID.com</p>
                </div>
                <div class="flex pt-5 gap-2">
                    <img class="w-[20px] h-[14px]" src="img/Mail.svg" alt="">
                    <p class="">(702) 555-0122</p>
                </div>
            </div>
        </div>
        <div>
            <p class="text-sans text-slate-400 text-[14px] py-10 text-right">Mancoding. All Rights Reserved</p>
        </div>
    </div>
</body>
</html>