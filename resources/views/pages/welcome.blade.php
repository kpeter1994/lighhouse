@extends('layouts.Guest')

@section('content')
    <section class="bg-hero bg-cover">
        <div class="container mx-auto">
            <div class="flex justify-end p-3 lg:p-20">
                <div class="lg:w-2/3 2xl:w-1/2 relative min-h-[340px] p-12 md:20  lg:p-20 flex items-center justify-center bg-ellipse bg-contain bg-center bg-no-repeat ">
                    <div>
                        <p class="text-lg md:text-xl 2xl:text-4xl font-secondary text-center text-white">Zord tengeren, éjsötétben világítótornyom ragyog előttem
                            Majd partot ér, szép hajnalon, lehorgonyzik nálad tépázott hajóm.
                        </p>
                        <p class="text-center text-white font-bold mt-1.5">(Kiss Sámson Endre: Világítótornyom)</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="my-6 lg:my-12 p-3">
        <div class="container max-w-7xl mx-auto ">
            <h2 class="font-secondary text-2xl lg:text-4xl text-blue-500 text-center mb-6 lg:mb-12">Bemutatkozás</h2>

            <div class="flex justify-center">
                <div class="flex flex-col lg:flex-row text-lg text-center lg:text-left text-gray-900 gap-6">
                    <div class="max-w-xl">
                        <p>A LightHouse Center egy olyan hely, ahol a különböző szakemberek egy teamként (csapatként) állnak a gyermek és a család mögé. Célunk, hogy egészében ismerjük meg a gyermeket, a problémáját, és a mögötte álló családi és akár iskolai rendszert is, hogy ahhoz mérten, összefüggéseiben találjunk meg a megoldásokat az elakadásokra. (komplex megoldásokat találjunk az elakadásokra).</p>
                    </div>
                    <div class="max-w-xl">
                        <p>Hisszük, hogy az élet olyan, mint egy tenger, tele lehetőségekkel, ám tomboló viharokkal, ijesztő hullámokkal is. Mikor nehézségekkel áll szemben a gyermek és a szülő, akkor olyan, mint a vizen hánykolódó hajó: félelmetes lehet benne lenni annyira, hogy akár szem elől téveszthetik a partot. Szeretnénk mi lenni a világítótorony, amely biztos pontként az irányt mutatja, hogy mindenki kiérjen a szárazföldre, ahogyan mi is iránymutatást kapunk hitünk szerint egy nálunk hatalmasabb Gondviselőtől, Tanácsostól.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="my-6 lg:my-12 p-12">
        <div class="container max-w-7xl mx-auto flex flex-col items-center">
            <div class="max-w-4xl">
                <p class="font-secondary text-2xl lg:text-4xl text-blue-500 text-center mb-6">Te uralkodol a tengernek kevélységén; mikor az ő habjai felemelkednek, te csendesíted le azokat.</p>
                <p class="text-center text-blue-500 font-semibold">(Zsoltárok könyve:89:10)</p>
            </div>

            <div class="relative">
                <img class="bg-cover" src="{{asset('/img/problems.jpg')}}" alt="">
                <div class="hidden lg:block absolute bottom-0 right-16 h-[100px] 2xl:h-[200px] hover:rotate-12 transition-all">
                    <a href="">
                        <img class="bg-contain h-full" src="{{asset('/img/whale.png')}}" alt="">
                        <span class="absolute top-1/2 left-2 text-yellow-100 font-semibold uppercase text-xs  2xl:text-xl">További problámák</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="my-6 lg:my-12 p-3">
        <div class="container max-w-7xl mx-auto ">
            <h2 class="font-secondary text-2xl lg:text-4xl text-blue-500 text-center mb-6 lg:mb-12">Aktualitások</h2>

            <div class="flex justify-center p-6">
                <div class="flex flex-col lg:flex-row flex-wrap text-lg text-center lg:text-left justify-center">
                    <div class="lg:w-1/3 2xl:w-1/4 p-3">
                        <div class="relative aspect-[1/1]">
                            <img class="h-full object-cover" src="{{asset('/img/blog.jpg')}}" alt="">

                            <div class="absolute bottom-0 left-0 bg-white bg-opacity-80 backdrop-blur w-full h-1/3 flex items-center p-3">
                                <h3 class="text-xl text-blue-700 font-semibold">Családi dinamikák</h3>
                            </div>
                        </div>

                    </div>
                    <div class="lg:w-1/3 2xl:w-1/4 p-3">
                        <div class="relative aspect-[1/1]">
                            <img class="h-full object-cover" src="{{asset('/img/blog.jpg')}}" alt="">

                            <div class="absolute bottom-0 left-0 bg-white bg-opacity-80 backdrop-blur w-full h-1/3 flex items-center p-3">
                                <h3 class="text-xl text-blue-700 font-semibold">Családi dinamikák</h3>
                            </div>
                        </div>

                    </div>
                    <div class="lg:w-1/3 2xl:w-1/4 p-3">
                        <div class="relative aspect-[1/1]">
                            <img class="h-full object-cover" src="{{asset('/img/blog.jpg')}}" alt="">

                            <div class="absolute bottom-0 left-0 bg-white bg-opacity-80 backdrop-blur w-full h-1/3 flex items-center p-3">
                                <h3 class="text-xl text-blue-700 font-semibold">Családi dinamikák</h3>
                            </div>
                        </div>

                    </div>
                    <div class="lg:w-1/3 2xl:w-1/4 p-3">
                        <div class="relative aspect-[1/1]">
                            <img class="h-full object-cover" src="{{asset('/img/blog.jpg')}}" alt="">

                            <div class="absolute bottom-0 left-0 bg-white bg-opacity-80 backdrop-blur w-full h-1/3 flex items-center p-3">
                                <h3 class="text-xl text-blue-700 font-semibold">Családi dinamikák</h3>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
