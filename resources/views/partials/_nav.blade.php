<header class="relative">
    <div class="bg-header-bg bg-cover hidden lg:block">
        <div class="container mx-auto">
            <a href="{{route('welcome')}}" class="p-3 inline-block" >
                <img class="h-16 lg:h-28 2xl:h-40 backdrop-blur-xl rounded-full" src="{{asset('/img/logo.svg')}}" alt="lighthouse">
            </a>

        </div>
    </div>


    <div class="sticky top-0 z-20 bg-yellow-500 ">
        <div class="container mx-auto">
            <div class="flex items-center justify-between">
                <a href="{{route('welcome')}}" class="p-1.5 inline-block lg:hidden" >
                    <img class="h-14 lg:h-28 2xl:h-40 backdrop-blur-xl rounded-full" src="{{asset('/img/logo.svg')}}" alt="lighthouse">
                </a>
                <div class="p-1.5 lg:hidden">
                    <mobil-nav></mobil-nav>
                </div>


                <ul class="font-secondary text-xl text-white hidden lg:flex gap-6 p-3 ">
                    <li class="hover:text-blue-100 transition-colors"><a href="">Rólunk <span class="ml-1.5">&#x2022</span></a></li>
                    <li class="hover:text-blue-100 transition-colors"><a href="{{route('team')}}">Csapatunk <span class="ml-1.5">&#x2022</span></a></li>
                    <li class="hover:text-blue-100 transition-colors"><a href="">Szolgáltatások <span class="ml-1.5">&#x2022</span></a></li>
                    <li class="hover:text-blue-100 transition-colors"><a href="">Miben segíthetünk <span class="ml-1.5">&#x2022</span></a></li>
                    <li class="hover:text-blue-100 transition-colors"><a href="">Magazin <span class="ml-1.5">&#x2022</span></a></li>
                    <li class="hover:text-blue-100 transition-colors"><a href="">Kapcsolat <span class="ml-1.5">&#x2022</span></a></li>
                    <li class="hover:text-blue-100 transition-colors"><a href="">Időpont</a></li>
                </ul>
            </div>

        </div>
    </div>


</header>
