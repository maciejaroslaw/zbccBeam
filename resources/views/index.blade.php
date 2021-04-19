
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/x.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <script src="{{ asset('js/rellax.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <title>Xtreme Fitness Franchise</title>
</head>
<body>
    <div>
        <div class="fixed z-40 w-full bg-white TopBar gstuff">
            <div class="flex TopBar flex-row mx-auto pl-4 pr-4">
                <div class="flex items-center">
                    <div style="width: 52px" class="menuBurger menuTrig cursor-pointer">
                        <span class="bg-dark"></span>
                        <span class="bg-dark"></span>
                        <span class="bg-dark"></span>
                    </div>
                </div>
                <img class="mx-auto logo" src="{{ asset('img/Logo_XFG_FRANCHISE.png')}}" alt="">
                <div class="flex justify-center items-center">
                    <a href=""><img style="width: 22px; height: 22px;" src="{{ asset('img/facebook.svg')}}" alt=""></a>
                    <a href=""><img style="width: 22px; height: 22px;" class="ml-2" src="{{ asset('img/ig.png')}}" alt=""></a>
                </div>
            </div>
        </div>
        <div class="menuMobile pt-8 p-6">
            <div>
                <img class="w-6 menuTrig cursor-pointer" src="{{ asset('img/close.svg')}}" alt="">
            </div>
            <div style="max-width: 400px" class="METROPOLISBLACK py-4 w-3/4 text-white mt-10 gg">
                <div class=" md:mt-2 h-8 text-2xl pl-2 border-l md:border-none border-white"><span class="d">DLACZEGOXFG</span></div>
                <div class="mt-6 md:mt-2 h-8 text-2xl pl-2 border-l md:border-none border-white md:text-right"><span class="d">LOKAZLIZACJE</span></div>
                <div class="mt-6 md:mt-2 h-8 text-2xl pl-2 border-l md:border-none border-white"><span class="d">KRYTERIA</span></div>
                <div class="mt-6 md:mt-2 h-8 text-2xl pl-2 border-l md:border-none border-white md:text-right"><span class="d">FRANCZYZOBIORCY</span></div>
            </div>
        </div>
        <script>
            let topBar = document.querySelector('.TopBar');

            window.addEventListener('scroll', function(e){
                if(window.scrollY === 0){
                    topBar.classList.remove('scrolled')
                }
                else{
                    if(!topBar.classList.contains('scrolled')){
                        topBar.classList.add('scrolled');
                        topBar.style.boxShadow = ``;
                    }
                    let value = window.scrollY / 3500;
                    topBar.style.boxShadow = `rgba(0,0,0,${value}) 0 1px 10px 0`;
                }
            })

            let trigs = document.querySelectorAll('.menuTrig');
            let menuMobile = document.querySelector('.menuMobile');
            trigs.forEach(t=>{
                t.addEventListener('click', function(){
                    menuMobile.classList.toggle('open');
                })
            })
        </script>
        <div class="paddingHead rounded-lg md:border bg-white relative z-30 rellax" data-rellax-speed="-4">
            <div class="mb-6 gstuff">
                <div class="METROPOLISBOLD text-center text-xl font-bold text-dark ">
                    Franczyza Xtreme Fitness Gyms
                </div>
                <div class="bg-blue shadow-a md:shadow-none overflow-hidden w-8/12 md:w-10/12 md:bg-white mx-auto text-white text-center METROPOLISBOLD mt-4 subMenu relative duration-300 md:flex md:justify-center">
                    <div class="md:bg-blue py-1 px-4 cursor-pointer g">DLACZEGOXFG?</div>
                    <div class="md:bg-blue py-1 px-4 cursor-pointer md:ml-4 g">LOKAZLIZACJE</div>
                    <div class="md:bg-blue py-1 px-4 cursor-pointer md:ml-4 g">KRYTERIA</div>
                    <div class="md:bg-blue py-1 px-4 cursor-pointer md:ml-4 g">FRANCZYZOBIORCY</div>
                    <div class="md:bg-blue py-1 px-4 cursor-pointer md:ml-4 g">APLIKUJ</div>
                    <div style="top: 8px; right: 4%;" class="absolute subMenuArrow duration-300 transform md:hidden">
                        <img class="w-4" src="/assets/sort-down.svg" alt="">
                    </div>
                </div>
                <script>
                    let menu = document.querySelector('.subMenu');
                    let button = document.querySelector('.subMenuArrow');
    
                    button.addEventListener('click', function(){
                        menu.classList.toggle('active');
                        button.classList.toggle('rotate-180');
                    });
                </script>
            </div>
        </div>
        <div class="md:-mt-4">
            <div class="background-1 gstuff_2 py-16 md:py-40 METROPOLISBOLD text-2xl relative z-20 text-center rellax" data-rellax-speed="-4">
                <div class="text-white w-11/12 mx-auto md:text-3xl font-bold gstuff_2">Zostań franczyzobiorcą Xtreme Fitness Gyms</div>
            </div>
            <div class="rounded-lg relative z-20 -mt-2 bg-white pt-4 pb-6 md:pt-16 md:pb-16">
                <div class="gstuff">
                    <div class="text-center text-blue text-xl METROPOLISBOLD mb-2">20 lutego 2021, godz. 20:00</div>
                    <div class="METROPOLIS text-lg text-dark text-center">
                        Do najbliższej prezentacji franczyzowej online pozostało:
                    </div>
                    <div class="flex justify-center mt-2 md:mt-12 text-xs">
                        <div class="flex flex-col items-center text-red">
                            <div class="METROPOLISBOLD text-2xl md:text-3xl font-black days">
                                
                            </div>
                            DNI
                        </div>
                        <div class="hidden md:block">
                            <img class="w-12 ml-16 mr-16" src="{{ asset('img/Sygnet.png')}}" alt="">
                        </div>
                        <div class="flex flex-col items-center text-red ml-6 md:ml-0">
                            <div class="METROPOLISBOLD text-2xl md:text-3xl font-black hours">
                                
                            </div>
                            GODZIN
                        </div>
                        <div class="hidden md:block">
                            <img class="w-12 ml-16 mr-16" src="{{ asset('img/Sygnet.png')}}" alt="">
                        </div>
                        <div class="flex flex-col items-center text-red ml-6 md:ml-0">
                            <div class="METROPOLISBOLD text-2xl md:text-3xl font-black minutes">
                                
                            </div>
                            MINUT
                        </div>
                        <div class="hidden md:block">
                            <img class="w-12 ml-16 mr-16 sygnetS transform" src="{{ asset('img/Sygnet.png')}}" alt="">
                        </div>
                        <div class="flex flex-col items-center text-red ml-6 md:ml-0">
                            <div class="METROPOLISBOLD text-2xl md:text-3xl font-black seconds"></div>
                            SEKUND
                        </div>
                    </div>
                    <div class="mt-8 md:mt-12">
                        <div class="mx-auto bg-blue shadow-a w-8/12 md:w-3/12 text-white text-center METROPOLISBOLD py-1 cursor-pointer btn">
                            ZAPISZ SIĘ!
                        </div>
                    </div>
                </div>
            </div>
            <script>
                let days = document.querySelector('.days');
                let hours = document.querySelector('.hours');
                let minutes = document.querySelector('.minutes');
                let seconds = document.querySelector('.seconds');

                let deadLine = '2021-03-12 16:00';

                function getTimeRem(endtime){
                    let total = Date.parse(endtime) - Date.parse(new Date());
                    let seconds_ = Math.floor((total/1000)%60);
                    let minutes_ = Math.floor((total/1000/60)%60);
                    let hours_ = Math.floor((total/(1000*60*60)) % 24);
                    let days_ = Math.floor(total/(1000*60*60*24));

                    days.innerHTML = days_;
                    hours.innerHTML = hours_;
                    minutes.innerHTML = minutes_;
                    seconds.innerHTML = seconds_;
                };

                getTimeRem(deadLine);

                const int = setInterval(()=>{
                    getTimeRem(deadLine);
                }, 1000);
            </script>
        </div>
        <div class="bg-blue text-white -mt-2 pt-12 pb-14 md:grid md:grid-cols-2 gstuff">
            <div class="flex flex-col">
                <div class="METROPOLIS text-center text-xl md:text-2xl mx-auto w-8/12 md:w-full mb-2">
                    MAMY JUŻ <span class="METROPOLISBOLD font-black">56 KLUBÓW</span> W <span class="METROPOLISBOLD font-black">54 MIASTACH</span>
                </div>
                <div class="w-8/12 mx-auto relative">
                    <img src="{{ asset('img/mapa.png')}}" alt="">
                    <div class="marker absolute top-1/2 left-1/2 heartbeat"></div>
                    <div class="marker absolute top-1/2 left-1/4 heartbeat"></div>
                    <div class="marker absolute top-1/4 left-1/4 heartbeat"></div>
                    <div class="marker absolute top-1/4 left-1/2 heartbeat"></div>
                </div>
                <script>
                    let markers = document.querySelectorAll('.marker');
                </script>
            </div>
            <div class="md:9/12 mx-auto">
                <div class="uppercase METROPOLISBOLD font-black text-center text-xl md:text-2xl my-6 md:my-0 md:mb-8">
                    7 LOkalizacji <br class="md:hidden"> czeka na twój wybór:
                </div>
                <div class="w-1/2 mx-auto text-xl METROPOLIS relative">
                    <div class="fadeTop">
                        
                    </div>
                    <div class="lokList">
                        <div class="METROPOLISBOLD font-black">KRZEPICE</div>
                        <div>LUBLIN</div>
                        <div>NOWY TARG</div>
                        <div class="METROPOLISBOLD font-black">PŁOŃSK</div>
                        <div>LUBLIN</div>
                        <div class="METROPOLISBOLD font-black">NOWY TARG</div>
                        <div>PŁOŃSK</div>
                        <div>LUBLIN</div>
                        <div>LUBLIN</div>
                        <div class="METROPOLISBOLD font-black">NOWY TARG</div>
                        <div>PŁOŃSK</div>
                        <div>LUBLIN</div>
                        <div>NOWY TARG</div>
                        <div class="METROPOLISBOLD font-black">PŁOŃSK</div>
                        <div>KRZEPICE</div>
                        <div class="METROPOLISBOLD font-black">NOWY TARG</div>
                        <div>PŁOŃSK</div>
                        <div>LUBLIN</div>
                        <div>NOWY TARG</div>
                        <div class="METROPOLISBOLD font-black">PŁOŃSK</div>
                        <div>KRZEPICE</div>
                        <div class="METROPOLISBOLD font-black">NOWY TARG</div>
                        <div>PŁOŃSK</div>
                        <div>LUBLIN</div>
                        <div>NOWY TARG</div>
                        <div class="METROPOLISBOLD font-black">PŁOŃSK</div>
                        <div>KRZEPICE</div>
                    </div>
                    <div class="fadeBottom">
    
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-lg -mt-2 bg-white pt-6 pb-6 md:pt-0 md:pb-0 md:grid md:grid-cols-2 relative z-30 pin gstuff">
            <div>
                <div class="METROPOLISBOLD font-black text-xl text-center text-dark md:hidden">
                    Czy mogę zostać franczyzobiorcą Xtreme Fitness?
                </div>
                <div class="mt-4 md:mt-0">
                    <img src="{{ asset('img/IMG_20190325_181302_2.png')}}" alt="">
                </div>
            </div>
            <div class="METROPOLIS px-4 mt-4 self-center md:w-3/5 mx-auto">
                <div class="METROPOLISBOLD hidden md:block font-black text-xl text-dark">
                    Czy mogę zostać franczyzobiorcą Xtreme Fitness?
                </div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis nostrum non reprehenderit ipsa praesentium ipsum expedita, quidem adipisci incidunt molestias ratione alias nemo sit eos esse autem architecto quos illo.
            </div>
        </div>
        <div class="bg-blue -mt-2 text-white pt-16 METROPOLIS pinMobile gstuff">
            <div class="md:w-9/12 mx-auto">
                <div class="METROPOLISBOLD font-black text-xl text-center md:text-left md:text-2xl">Jak wygląda droga do franczyzy?</div>
                <div class="px-4 mt-4 md:px-0 md:text-sm">
                    Czas trwania procesu rekrutacji i przygotowania do wejścia do systemu McDonald’s zależy od dostępności i zaangażowania kandydata. Przeciętnie zajmuje dwanaście miesięcy, z czego przez około dziewięć miesięcy kandydat szkoli się w restauracji.
                </div>
                <div class="px-4 mt-4 md:px-0 md:text-sm">
                    Spotkania z przedstawicielami McDonald’s odbywają się w Warszawie. Podobnie trzydniowa praktyka w restauracji, dzięki której poznasz specyfikę jej pracy. Późniejsze dziewięciomiesięczne szkolenie odbędzie się już jednak możliwie jak najbliżej miejsca Twojego zamieszkania. Obie strony mają prawo w dowolnym momencie przerwać ten proces. Zarówno McDonald’s, jak i kandydat mogą to uczynić bez konieczności podania przyczyny. Tak to wygląda w wielkim skrócie. Poniżej prezentujemy przebieg tego procesu w bardziej szczegółowy sposób.
                </div>
                <!-- <div class="mt-12">
                    <div class="">
                        <div class="w-10/12 relative mx-auto md:text-xl"><span class="METROPOLISBOLD font-black">Krok 1:</span> Prezentacja online
                            <div data-k="1" class="absolute krokArrow transform duration-300 top-0.5 right-3 cursor-pointer">
                                <img class="w-4 md:w-6" src="/assets/sort-down.svg" alt="">
                            </div>
                        </div>
                        <div class="px-2 bg-white border-t text-dark krok krok-1 duration-300">
                            Zapoznaj się z naszym modelem biznesowym, szczegółami dotyczącymi działania sieci i klubów. W krótkim czasie zdradzimy Ci nasz sekret skuteczności i sposób działania. Wystarczy dowolne urządzenie z dostępem do internetu. Zapisz się już teraz bez zobowiązań -> ZAPIS
                        </div>
                    </div>
                    <div class="mt-6">
                        <div class="w-10/12 relative mx-auto md:text-xl"><span class="METROPOLISBOLD font-black">Krok 2:</span> Prezentacja stacjonarna
                            <div data-k="2" class="absolute krokArrow transform duration-300 top-0.5 right-3 cursor-pointer">
                                <img class="w-4 md:w-6" src="/assets/sort-down.svg" alt="">
                            </div>
                        </div>
                        <div class="px-2 bg-white border-t text-dark krok krok-2 duration-300">
                            Po prezentacji online, zaprosimy Cię do naszej siedziby w Tarnowie (80 km od Krakowa). Zabierzemy Cię na spacer po jednym z naszym klubów. Założyciel i właściciel sieci opowie o procesach, procedurach, naszych autorskich narzędziach, sposobie finansowania otwarcia Twojego klubu.
                        </div>
                    </div>
                    <div class="mt-6">
                        <div class="w-10/12 relative mx-auto md:text-xl"><span class="METROPOLISBOLD font-black">Krok 3:</span> Indywidualne spotkanie
                            <div data-k="3" class="absolute krokArrow transform duration-300 top-0.5 right-3 cursor-pointer">
                                <img class="w-4 md:w-6" src="/assets/sort-down.svg" alt="">
                            </div>
                        </div>
                        <div class="px-2 bg-white border-t text-dark krok krok-3 duration-300">
                            Czas poznać wszystkie szczegóły dotyczące współpracy
                            indywiudalne spotkanie - jeszcze więcej szczegółów
                            analiza finansowa, prognoza pod wymarzony klub
                            decyzja odnośnie współracy wspólna.
                        </div>
                    </div>
                </div> -->
                <!-- <div class="mt-12 grid gap-4">
                    <div class="relative">
                        <div class="flex">
                            <div data-k="1" class="stepIcon flex items-center justify-center text-xl">1</div>
                            <div class="flex items-center justify-center ml-2">Prezentacja online</div>
                            <div data-k="1" class="krokArrow flex items-center justify-center ml-2 transform duration-300">
                                <img class="w-4 md:w-6" src="/assets/sort-down.svg" alt="">
                            </div>
                        </div>
                        <div class="pl-12 krok krok-1">
                            Zapoznaj się z naszym modelem biznesowym, szczegółami dotyczącymi działania sieci i klubów. W krótkim czasie zdradzimy Ci nasz sekret skuteczności i sposób działania. Wystarczy dowolne urządzenie z dostępem do internetu. Zapisz się już teraz bez zobowiązań -> ZAPIS
                        </div>
                    </div>
                    <div class="relative">
                        <div class="flex">
                            <div data-k="2" class="stepIcon flex items-center justify-center text-xl">2</div>
                            <div class="flex items-center justify-center ml-2">Prezentacja stacjonarna</div>
                            <div data-k="2" class="krokArrow flex items-center justify-center ml-2 transform duration-300">
                                <img class="w-4 md:w-6" src="/assets/sort-down.svg" alt="">
                            </div>
                        </div>
                        <div class="pl-12 krok krok-2">
                            Po prezentacji online, zaprosimy Cię do naszej siedziby w Tarnowie (80 km od Krakowa). Zabierzemy Cię na spacer po jednym z naszym klubów. Założyciel i właściciel sieci opowie o procesach, procedurach, naszych autorskich narzędziach, sposobie finansowania otwarcia Twojego klubu.
                        </div>
                    </div>
                    <div class="relative">
                        <div class="flex">
                            <div data-k="3" class="stepIcon flex items-center justify-center text-xl">3</div>
                            <div class="flex items-center justify-center ml-2">Indywidualne spotkanie</div>
                            <div data-k="3" class="krokArrow flex items-center justify-center ml-2 transform duration-300">
                                <img class="w-4 md:w-6" src="/assets/sort-down.svg" alt="">
                            </div>
                        </div>
                        <div class="pl-12 krok krok-3">
                            Czas poznać wszystkie szczegóły dotyczące współpracy
                            indywiudalne spotkanie - jeszcze więcej szczegółów
                            analiza finansowa, prognoza pod wymarzony klub
                            decyzja odnośnie współracy wspólna
                        </div>
                    </div>
                    <div style="margin-top: 2px" class="relative">
                        <div class="flex">
                            <div data-k="4" class="stepIcon last flex items-center justify-center text-xl">4</div>
                            <div class="flex items-center justify-center ml-2">Podpisanie umowy franczyzowej</div>
                            <div data-k="4" class="krokArrow flex items-center justify-center ml-2 transform duration-300">
                                <img class="w-4 md:w-6" src="/assets/sort-down.svg" alt="">
                            </div>
                        </div>
                        <div class="pl-12 krok krok-4">
                            Czas poznać wszystkie szczegóły dotyczące współpracy
                            indywiudalne spotkanie - jeszcze więcej szczegółów
                            analiza finansowa, prognoza pod wymarzony klub
                            decyzja odnośnie współracy wspólna
                        </div>
                    </div>
                </div> -->
                <div class="-mt-20 md:-mt-12 relative">
                    <div class="">
                        <div class="">
                            <div class="md:hidden">
                                <svg id="Warstwa_1" data-name="Warstwa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 306.14 544.25">
                                    <defs><style>.cls-1{fill:url(#Gradient_bez_nazwy_41);}.cls-2{fill:url(#Gradient_bez_nazwy_41-2);}.cls-3{fill:#1d71b8;}.cls-4{fill:url(#Gradient_bez_nazwy_41-3);}.cls-5{font-size:37.97px;fill:#fff;font-family:Metropolis-Black, Metropolis;font-weight:800;}.cls-6{fill:#1d71b8;}.ractive{fill:#c80000}</style><linearGradient id="Gradient_bez_nazwy_41" x1="-1001.36" y1="-901.88" x2="-866.17" y2="-766.68" gradientTransform="matrix(0.31, -0.71, 0.31, 0.71, 703.01, 215.02)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#1d71b8"/><stop offset="1" stop-color="#1d71b8" stop-opacity="0.2"/></linearGradient><linearGradient id="Gradient_bez_nazwy_41-2" x1="-116.66" y1="-944.52" x2="18.54" y2="-1079.72" gradientTransform="matrix(0.31, 0.71, -0.31, 0.71, -147.27, 938.88)" xlink:href="#Gradient_bez_nazwy_41"/><linearGradient id="Gradient_bez_nazwy_41-3" x1="109.83" y1="-976.98" x2="245.03" y2="-1112.17" gradientTransform="matrix(0.31, 0.71, -0.31, 0.71, -224.39, 995.81)" xlink:href="#Gradient_bez_nazwy_41"/></defs><rect class="cls-1" x="111.27" y="258.47" width="84.07" height="53.78" transform="translate(463.49 378.75) rotate(135)"/><rect class="cls-2" x="110.86" y="161.62" width="84.31" height="53.78" transform="translate(178.12 -52.98) rotate(45)"/><rect data-k="4" class="cls-3" x="174.69" y="404.38" width="53.78" height="53.78" transform="translate(363.99 -16.23) rotate(45)"/><rect class="cls-4" x="111.35" y="355.76" width="83.53" height="53.78" transform="translate(315.42 3.81) rotate(45)"/><text data-k="4" class="cls-5" transform="translate(187.01 443.39)">4</text><rect data-k="2" class="cls-3" x="174.69" y="210.19" width="53.78" height="53.78" transform="translate(226.68 -73.1) rotate(45)"/><rect data-k="3" class="cls-3" x="77.67" y="307.21" width="53.78" height="53.78" transform="translate(266.87 23.92) rotate(45)"/><rect data-k="1" class="cls-6 ractive" x="77.53" y="113.03" width="53.78" height="53.78" transform="translate(129.52 -32.85) rotate(45)"/><text data-k="1" class="cls-5" transform="translate(93.89 151.02)">1</text><text data-k="2" class="cls-5" transform="translate(190.49 249.04)">2</text><text class="cls-5" data-k="3" transform="translate(93.83 346.62)">3</text>
                                </svg>
                            </div>
                            <div class="hidden md:block">
                                <svg style="max-height: 630px"  version="1.1" id="Warstwa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 425.2 283.46" style="enable-background:new 0 0 425.2 283.46;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:url(#SVGID_1_);}
                                    .st1{fill:url(#SVGID_2_);}
                                    .st2{fill:#09496E;}
                                    .st3{fill:#1D71B8;}
                                    .st4{fill:url(#SVGID_3_);}
                                    .st5{fill:url(#SVGID_4_);}
                                    .st6{fill:url(#SVGID_5_);}
                                    .st7{fill:#C80000;}
                                    .st8{opacity:0.5;fill:#1D1D1D;}
                                    .st9{fill:url(#SVGID_6_);}
                                    .st10{fill:url(#SVGID_7_);}
                                    .st11{fill:url(#SVGID_8_);}
                                    .st12{fill:#FFFFFF;}
                                    .st13{fill:url(#SVGID_9_);}
                                    .st14{fill:url(#SVGID_10_);}
                                    .st15{fill:url(#SVGID_11_);}
                                    .st16{fill:url(#SVGID_12_);}
                                    .st17{fill:url(#SVGID_13_);}
                                    .st18{fill:url(#SVGID_14_);}
                                    .st19{fill:url(#SVGID_15_);}
                                    .ractive{fill: #c80000;}
                                </style>
                                <rect data-k="2" x="130.55" y="68.75" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -21.5122 139.3398)" class="st3" width="53.78" height="53.78"/>
                                <rect data-k="1" x="33.39" y="165.91" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -118.6784 99.0923)" class="st3 ractive" width="53.78" height="53.78"/>
                                <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="887.1144" y1="825.3099" x2="1022.3093" y2="960.5048" gradientTransform="matrix(0.7182 -0.2818 -0.2818 0.7182 -228.1245 -228.1245)">
                                    <stop  offset="0" style="stop-color:#1D71B8"/>
                                    <stop  offset="1" style="stop-color:#1D71B8;stop-opacity:0.2"/>
                                </linearGradient>
                                <polygon class="st0" points="216.43,192.66 157.43,133.65 195.46,95.63 254.46,154.63 "/>
                                <rect data-k="3" x="227.57" y="165.77" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -61.6985 236.3582)" class="st3" width="53.78" height="53.78"/>
                                <rect data-k="4" x="324.74" y="68.75" transform="matrix(0.7071 -0.7071 0.7071 0.7071 35.3631 276.649)" class="st3" width="53.78" height="53.78"/>
                                <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="928.3904" y1="-675.311" x2="1063.5852" y2="-810.5059" gradientTransform="matrix(0.7212 0.2788 0.2788 0.7212 -402.1498 402.1498)">
                                    <stop  offset="0" style="stop-color:#1D71B8"/>
                                    <stop  offset="1" style="stop-color:#1D71B8;stop-opacity:0.2"/>
                                </linearGradient>
                                <polygon class="st1" points="157.88,133.23 98.08,193.03 60.05,155 119.85,95.2 "/>
                                <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="1152.8479" y1="-705.7318" x2="1288.0427" y2="-840.9266" gradientTransform="matrix(0.7199 0.2801 0.2801 0.7199 -359.2646 359.2646)">
                                    <stop  offset="0" style="stop-color:#1D71B8"/>
                                    <stop  offset="1" style="stop-color:#1D71B8;stop-opacity:0.2"/>
                                </linearGradient>
                                <polygon class="st4" points="351.55,133.59 292.08,193.06 254.05,155.03 313.52,95.56 "/>
                                <g>
                                    <g>
                                        <path class="st12" d="M57.36,187.96L53,190.62l-2.89-5.09l8.74-5.85h5.89v26.09h-7.37V187.96z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path class="st12" d="M148.25,101.67l9.69-6.99c2.73-1.98,3.38-3.15,3.38-4.52c0-1.44-1.25-2.39-2.96-2.39
                                            c-2.24,0-3.99,1.06-6,3.08l-4.56-4.6c2.89-3.42,6.42-5.17,10.75-5.17c6.19,0,10.37,3.72,10.37,8.77c0,3.42-1.37,6.08-6,9.04
                                            l-3.38,2.17h9.61v6.57h-20.89V101.67z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path class="st12" d="M350.59,103.27h-12.57l-0.61-5.54l11.51-15.88h9.04V97.2h3.15v6.08h-3.15v4.63h-7.37V103.27z M350.59,97.2
                                            v-7.82l-5.62,7.82H350.59z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path class="st12" d="M243.54,201.55l4.14-4.9c1.94,1.82,4.37,2.66,6.61,2.66c2.35,0,3.53-0.87,3.53-2.05
                                            c0-1.25-0.87-1.94-3.99-1.9l-3.15,0.04v-6.15h3.11c2.43,0,3.53-0.65,3.53-1.82c0-1.29-1.33-2.01-3.46-2.01
                                            c-2.17,0-4.03,1.03-5.7,2.58l-4.06-4.52c2.28-2.62,5.54-4.63,10.56-4.63c6.46,0,10.18,3.08,10.18,7.18c0,2.81-1.82,5.05-4.79,5.92
                                            c2.96,0.68,5.36,2.77,5.36,6c0,4.63-4.18,7.94-10.71,7.94C249.73,205.88,245.97,204.13,243.54,201.55z"/>
                                    </g>
                                </g>
                                </svg>

                            </div>
                            <div data-k="1" class="krokOpis text-xs md:text-base p-4 duration-300">
                                <div class="duration-300 textarget">
                                    Zapoznaj się z naszym modelem biznesowym, szczegółami dotyczącymi działania sieci i klubów. W krótkim czasie zdradzimy Ci nasz sekret skuteczności i sposób działania. Wystarczy dowolne urządzenie z dostępem do internetu. Zapisz się już teraz bez zobowiązań -> ZAPIS
                                </div>
                                <div class="flex justify-between mt-4">
                                    <div class="prev invisible cursor-pointer">Poprzedni</div>
                                    <div class="next cursor-pointer">Następny</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        let prev = document.querySelector('.prev');
                        let next = document.querySelector('.next');
                        let textarget = document.querySelector('.textarget');
                        let rects = document.querySelectorAll('rect[data-k]');
                        console.log(rects);

                        let datarr = [];

                        if(window.screen.width > 760){
                            datarr = [
                                {
                                    bottom: 39,
                                    left: -4,
                                    text: 'Zapoznaj się z naszym modelem biznesowym, szczegółami dotyczącymi działania sieci i klubów. W krótkim czasie zdradzimy Ci nasz sekret skuteczności i sposób działania. Wystarczy dowolne urządzenie z dostępem do internetu. Zapisz się już teraz bez zobowiązań -> ZAPIS',
                                },
                                {
                                    bottom: 22,
                                    left: 17,
                                    text: 'Po prezentacji online, zaprosimy Cię do naszej siedziby w Tarnowie (80 km od Krakowa). Zabierzemy Cię na spacer po jednym z naszym klubów. Założyciel i właściciel sieci opowie o procesach, procedurach, naszych autorskich narzędziach, sposobie finansowania otwarcia Twojego klubu.',
                                },
                                {
                                    bottom: 39,
                                    left: 39,
                                    text: 'Czas poznać wszystkie szczegóły dotyczące współpracy indywiudalne spotkanie - jeszcze więcej szczegółów analiza finansowa, prognoza pod wymarzony klub decyzja odnośnie współracy wspólna',
                                },
                                {
                                    bottom: 22,
                                    left: 61,
                                    text: 'Podpisanie Umowy'
                                }
                            ]
                        }
                        else{
                            datarr = [
                                {
                                    top: 29,
                                    left: 3,
                                    text: 'Zapoznaj się z naszym modelem biznesowym, szczegółami dotyczącymi działania sieci i klubów. W krótkim czasie zdradzimy Ci nasz sekret skuteczności i sposób działania. Wystarczy dowolne urządzenie z dostępem do internetu. Zapisz się już teraz bez zobowiązań -> ZAPIS',
                                },
                                {
                                    top: 47,
                                    left: 22,
                                    text: 'Po prezentacji online, zaprosimy Cię do naszej siedziby w Tarnowie (80 km od Krakowa). Zabierzemy Cię na spacer po jednym z naszym klubów. Założyciel i właściciel sieci opowie o procesach, procedurach, naszych autorskich narzędziach, sposobie finansowania otwarcia Twojego klubu.',
                                },
                                {
                                    top: 65,
                                    left: 3,
                                    text: 'Czas poznać wszystkie szczegóły dotyczące współpracy indywiudalne spotkanie - jeszcze więcej szczegółów analiza finansowa, prognoza pod wymarzony klub decyzja odnośnie współracy wspólna',
                                },
                                {
                                    top: 56,
                                    left: 22,
                                    text: 'Podpisanie Umowy'
                                }
                            ];
                        };
                        
                        if(window.screen.width > 760){
                            document.querySelector('.krokOpis').style.bottom = `${datarr[0].bottom}%`;
                        }
                        else{
                            document.querySelector('.krokOpis').style.top = `${datarr[0].top}%`;
                        }

                        document.querySelector('.krokOpis').style.left = `${datarr[0].left}%`;
                        document.querySelector('.krokOpis').classList.add('active');

                        next.addEventListener('click', function(){
                            if(prev.classList.contains('invisible')){
                                prev.classList.remove('invisible')
                            }
                            if(this.classList.contains('invisible')){
                                this.classList.remove('invisible');
                            }
                            let box = this.parentNode.parentNode;
                            let step = parseInt(box.dataset.k) + 1;
                            box.dataset.k = step;

                            if(step === 4){
                                this.classList.add('invisible');
                            }

                            textarget.classList.add('opacity-0');
                            textarget.innerHTML = datarr[step-1].text;
                            textarget.classList.remove('opacity-0');

                            if(window.screen.width > 760){
                                box.style.bottom = `${datarr[step-1].bottom}%`;
                            }
                            else{
                                box.style.top = `${datarr[step-1].top}%`;
                            }
                            
                            box.style.left = `${datarr[step-1].left}%`;

                            rects.forEach(r=>{
                                if(r.classList.contains('ractive')){
                                    r.classList.remove('ractive');
                                }
                                if(r.dataset.k == step){
                                    r.classList.add('ractive');
                                    console.log(r.clientX);
                                }
                            });
                        });
                        prev.addEventListener('click', function(){
                            let box = this.parentNode.parentNode;
                            let step = parseInt(box.dataset.k) - 1;
                            box.dataset.k = step;

                            if(step === 1){
                                this.classList.add('invisible');
                            }
                            if(next.classList.contains('invisible')){
                                next.classList.remove('invisible');
                            }

                            textarget.classList.add('opacity-0');
                            textarget.innerHTML = datarr[step-1].text;
                            textarget.classList.remove('opacity-0');

                            if(window.screen.width > 760){
                                box.style.bottom = `${datarr[step-1].bottom}%`;
                            }
                            else{
                                box.style.top = `${datarr[step-1].top}%`;
                            }
                            box.style.left = `${datarr[step-1].left}%`;

                            rects.forEach(r=>{
                                if(r.classList.contains('ractive')){
                                    r.classList.remove('ractive');
                                }
                                if(r.dataset.k == step){
                                    r.classList.add('ractive');
                                }
                            });
                        })
                    </script>
                </div>
            </div>
            <script>
                let buttons = document.querySelectorAll('.krokArrow');
                buttons.forEach(b=>{
                    b.addEventListener('click', function(){
                        let k = this.dataset.k;
                        let target = document.querySelector(`.krok-${k}`);
                        let icon = document.querySelector(`.stepIcon[data-k="${k}"]`);

                        icon.classList.toggle('active');
                        target.classList.toggle('active');
                        // target.classList.toggle('py-2');
                        // target.classList.toggle('md:p-10')
                        // target.classList.toggle('outline');
                        this.classList.toggle('rotate-180');
                    })
                });


                // if(window.screen.width > 760){
                //     let pin = document.querySelector('.pin');
                //     let clicked = false;
                //     window.addEventListener('scroll', function(e){
                //         let target = pin.offsetTop + (pin.clientHeight / 1.7);
                //         if((window.scrollY > target) && !clicked){
                //             let krok = document.querySelector('.krok-1');
                //             if(krok.classList.contains('active')){

                //             }
                //             else{
                //                 // krok.classList.add('py-2');
                //                 // krok.classList.add('md:p-10')
                //                 krok.classList.add('active');
                //                 // krok.classList.toggle('outline');
                //                 document.querySelector('.krokArrow[data-k="1"]').classList.toggle('rotate-180');
                //                 document.querySelector('.stepIcon').classList.toggle('active');
                //                 clicked = true;
                //             }
                //         }
                //     })
                // }
                // else{
                //     let pin = document.querySelector('.pinMobile');
                //     let clicked = false;
                //     window.addEventListener('scroll', function(e){
                //         let target = pin.offsetTop + 80;
                //         if((window.scrollY > target) && !clicked){
                //             let krok = document.querySelector('.krok-1');
                //             if(krok.classList.contains('active')){

                //             }
                //             else{
                //                 krok.classList.add('py-2');
                //                 krok.classList.add('md:p-10')
                //                 krok.classList.add('active');
                //                 document.querySelector('.krokArrow[data-k="1"]').classList.toggle('rotate-180');
                //                 clicked = true;
                //             }
                //         }
                //     })
                // }
            </script>
        </div>
        <div class="rounded-lg md:rounded-none -mt-2 relative z-30 bg-white METROPOLISBOLD font-black pt-8 pb-6 md:py-0 gstuff">
            <div class="text-dark text-center text-xl md:grid md:grid-cols-2 fader">
                <div class="md:self-center md:text-3xl md:text-blue">
                    Nasi franczyzobiorcy
                </div>
                <img class="mt-4 md:mt-0" src="{{ asset('img/MPA07487.png')}}" alt="">
                
            </div>
            <div class="text-dark text-center text-xl mt-10 md:mt-0 md:grid md:grid-cols-2 fader">
                <div class="md:hidden">
                    Nasze kluby
                </div>
                <img class="mt-4 md:mt-0" src="{{ asset('img/DSC_3115.png')}}" alt="">
                <div class="hidden md:block md:self-center md:text-3xl md:text-blue">
                    Nasze kluby
                </div>
            </div>
            <div class="text-dark text-center text-xl mt-10 md:mt-0 md:grid md:grid-cols-2 fader">
                <div class="md:self-center md:text-blue md:text-3xl md:text-left md:w-3/5 md:mx-auto">
                    Nasz produkt
                    <div class="hidden md:block METROPOLIS text-dark text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero eaque perferendis vitae nobis alias consectetur deleniti, accusamus, suscipit reiciendis optio commodi nam doloribus, saepe laudantium placeat. In culpa provident optio.</div>
                </div>
                <img class="mt-4 md:mt-0" src="{{ asset('img/MPA07434.png')}}" alt="">
            </div>
            <div class="px-4 py-4 METROPOLIS font-normal md:hidden">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero eaque perferendis vitae nobis alias consectetur deleniti, accusamus, suscipit reiciendis optio commodi nam doloribus, saepe laudantium placeat. In culpa provident optio.
            </div>
        </div>
        <script>
            let faders = document.querySelectorAll('.fader');

            let options = {
                threshold: 1,
                rootMargin: "0px 0px -120px 0px",
            };

            const ob = new IntersectionObserver(function(
                entries,
                ob
            )   {
                entries.forEach(e=>{
                    if(!e.isIntersecting){
                        return;
                    }
                    else{
                        console.log(e.target.classList.add('factive'));
                        ob.unobserve(e.target);
                    }
                })

            },options);

            faders.forEach(f=>{
                ob.observe(f);
            })
        </script>
        <div class="bg-blue -mt-2 pt-12 pb-12 md:pt-32 md:pb-32 METROPOLISBOLD font-black">
            <div class="text-center text-xl text-white">
                ZAPISZ SIĘ DO NEWSLETTERA I BĄDŹ NA BIEŻĄCO
            </div>
            <div class="w-8/12 md:w-3/12 bg-white text-blue text-center mx-auto mt-8 cursor-pointer btn">
                ZAPISZ SIĘ
            </div>
        </div>
        <div class="pb-12">
            <form action="">
                <div class="background-2 py-16 md:py-28 METROPOLISBOLD text-2xl text-center">
                    <div class="text-white w-11/12 mx-auto font-bold">Wyślij wiadomość</div>
                </div>
                <div class="mt-8 md:mt-20">
                    <div class="w-full md:w-7/12 mx-auto relative">
                        <input required name="imie" class="text-center text-blue METROPOLISBOLD border-b border-blue w-full focus:outline-none md:text-left md:border-b-2 mx-auto block coolInput" type="text">
                        <label for="imie" class="coolabel w-full text-center md:text-left">
                            <span class="METROPOLISBOLD text-blue md:text-dark">Imię i nazwisko</span>
                        </label>
                    </div>
                    <div class="w-full md:w-7/12 mx-auto relative mt-6">
                        <input required name="email" class="text-center text-blue METROPOLISBOLD border-b border-blue w-full focus:outline-none md:text-left md:border-b-2 mx-auto block coolInput" type="text">
                        <label for="email" class="coolabel w-full text-center md:text-left">
                            <span class="METROPOLISBOLD text-blue md:text-dark">Email</span>
                        </label>
                    </div>
                    <div class="w-full md:w-7/12 mx-auto relative mt-6">
                        <input required name="numer" class="text-center text-blue METROPOLISBOLD border-b border-blue w-full focus:outline-none md:text-left md:border-b-2 mx-auto block coolInput" type="text">
                        <label for="numer" class="coolabel w-full text-center md:text-left">
                            <span class="METROPOLISBOLD text-blue md:text-dark">Numer Telefonu</span>
                        </label>
                    </div>
                </div>
                <div class="mt-6 md:mt-12">
                    <form action="/api/login" method="post">
                        <div class="md:w-7/12 mx-auto">
                            <div class="text-center text-blue md:text-dark METROPOLISBOLD md:text-left">Mój dostępny kapitał to:</div>
                            <div class="mt-2 w-1/2 flex mx-auto md:mx-0">
                                <input class="justif-self-end hidden check" value="250 tys. - 500 tys. zł" type="radio" name="c" id="check1">
                                <label for="check1" class="newCheck"></label>
                                <span class="ml-4 text-dark" for="">250 tys. - 500 tys. zł</span>
                            </div>
                            <div class="mt-1 w-1/2 flex mx-auto md:mx-0">
                                <input class="hidden check" value="500 tys. - 750 tys. zł" type="radio" name="c" id="check2">
                                <label for="check2" class="newCheck"></label>
                                <span class="ml-4 text-dark" for="">500 tys. - 750 tys. zł</span>
                            </div>
                            <div class="mt-1 w-1/2 flex mx-auto md:mx-0">
                                <input class="hidden check" value="750 tys. - 1 mln zł" type="radio" name="c" id="check3">
                                <label for="check3" class="newCheck"></label>
                                <span for="" class="ml-4 text-dark">750 tys. - 1 mln zł</span>
                            </div>
                            <div class="mt-1 w-1/2 flex mx-auto md:mx-0">
                                <input class="hidden check" value="powyżej 1 mln zł" type="radio" name="c" id="check4">
                                <label for="check4" class="newCheck"></label>
                                <span for="" class="ml-4 text-dark">powyżej 1 mln zł</span>
                            </div>
                            <div class="text-dark">
                                <div class="text-xs px-4 md:px-0 METROPOLIS mt-4">
                                    Administratorem Pani/Pana danych osobowych jest XF FRANCHISE sp. z o.o. z siedzibą w Dąbrowie Tarnowskiej (adres siedziby: ul. Ks. Popiełuszki nr 12, 33-200 Dąbrowa Tarnowska), KRS: 0000594556, NIP: 8711771836. Posiada Pani/Pan prawo dostępu do treści swoich danych oraz ich poprawiania, jak również wniesienia żądania o zaprzestaniu przetwarzania. Podanie danych osobowych jest dobrowolne. *
                                    
                                    <div class="mt-4 flex items-center md:px-0 relative">
                                        <input required class="check absolute transform translate-x-1/2" value="zgoda1" type="checkbox" name="" id="check5">
                                        <label for="check5" class="newCheck"></label>
                                        <span class="ml-2" for="">Wyrażam zgodę na przetwarzanie moich danych osobowych.</span>
                                    </div>
                                </div>
                                <div class="text-xs px-4 md:px-0 METROPOLIS mt-4">
                                    Wyrażam zgodę na przetwarzanie moich danych osobowych przez XF FRANCHISE sp. z o.o. z siedzibą w Dąbrowie Tarnowskiej (adres siedziby: ul. Ks. Popiełuszki nr 12, 33-200 Dąbrowa Tarnowska), KRS: 0000594556, NIP: 8711771836 - w celach marketingowych. Zgodnie z ustawą z dnia 18.07.2002 r. o świadczeniu usług drogą elektroniczną (Dz.U. Nr 144, poz.1204 z późn. zm.), wyrażam zgodę na otrzymywanie informacji handlowej na wskazany adres poczty elektronicznej oraz drogą telefoniczną. Jestem świadom/świadoma prawa dostępu do treści moich danych i możliwości ich poprawiania, oraz iż moja zgoda może być odwołana w każdym czasie poprzez pisemne wniesienie umotywowanego żądania zaprzestania przetwarzania danych osobowych.
                                    
                                    <div class="mt-4 flex items-center md:px-0 relative">
                                        <input required class="check absolute" value="zgoda2" type="checkbox" name="" id="check6">
                                        <label for="check6" class="newCheck"></label>
                                        <span class="ml-2" for="">Wyrażam zgodę na przetwarzanie moich danych osobowych.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8">
                            <button type="submit" class="w-8/12 bg-blue text-center text-white mx-auto METROPOLISBOLD font-black block py-1 cursor-pointer btn">ZAPISZ SIĘ</button>
                        </div>
                    </form>
                </div>
            </form>
        </div>
        <div class="flex justify-between md:justify-end py-4 px-2 bg-blue text-white METROPOLIS text-sm">
            <div class="md:ml-2">Regulamin</div>
            <div class="md:ml-2">Franczyza</div>
            <div class="md:ml-2">Kontakt</div>
        </div>
    </div>
    <script>
        var rellax = new Rellax('.rellax');
    </script>
    <script>
        gsap.from('.background-1', {
            paddingTop: 0, 
            duration: .5, 
            delay: .5, 
            ease: 'Power4.easeOut'
        });
        gsap.from('.background-1', {
            paddingBottom: 0, 
            duration: .5, 
            delay: .5, 
            ease: 'Power4.easeOut'
        });
        gsap.from('.gstuff_2', {
            opacity: 0,
            duration: .5,
            delay: .5,
            ease: 'Power4.easeOut',
        })
        gsap.from('.gstuff', {
            opacity: 0, 
            duration: .9, 
            delay: 1.2
        });
    </script>
</body>
</html>