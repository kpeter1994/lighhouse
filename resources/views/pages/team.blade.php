@extends('layouts.Guest')

@section('content')


    <section class="my-6 lg:my-12 p-3">
        <div class="container max-w-7xl mx-auto ">
            <h1 class="font-secondary text-2xl lg:text-4xl text-blue-500 text-center mb-6 lg:mb-12">Csapatunk</h1>

            <div class="grid grid-cols-2 gap-20">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-secondary text-blue-500 mb-6">Standovár Sára</h2>
                    <p class="mb-6">Már óvodásként pszichológusnak készültem, bár ez akkor még csak a családi minta miatt merülhetett fel bennem, mivel édesanyám is pszichológus. Az évek alatt sokszor érdekelt más terület (zene, építészet), de a pályaválasztás idejére újból visszataláltam a pszichológiához. Tudtam, hogy gyerekekkel, családokkal szeretnék foglalkozni, és megérteni, kísérni szeretném őket abban a folyamatban, ahol a személyek és a köztük lévő kapcsolat is formálódik.</p>
                    <p class="mb-6">2009-ben végeztem az ELTE-n alkalmazott fejlődéslélektan és életvezetési- és pályatanácsadás szakirányon. Ezután a gyakorlat megszerzése mellett a módszerspecifikus képzések irányába indultam el, és végeztem el az Integratív Gyermekterapeuta képzést (2011.) és a pszichodráma asszisztensi képzést (2014.) a hozzá tartozó önismereti kurzusokkal. Közben az aktuális munkahelyemen házon belüli képzésen autogén tréning, meditáció, resztoratív konfliktuskezelés területén fejlődtem. Ezután a Pécsi Tudományi Egyetemen szereztem meg gyermek- és ifjúsági mentálhigiénés- és klinikai szakpszichológusi végzettségemet, amit csak úgy emlegetnek a köztudatban, hogy gyerek klinikus. Ezzel eldőlt, hogy életem végéig (vagyis 75 éves koromig, ha megérem) képzéseimet folytatnom kell, ami valójában jó is, mert még sok minden a terveim közt szerepel: művészetterápia, relaxáció, meditáció, KIP, rajzelemzés, zeneterápia,</p>
                    <p class="mb-6">Szakmai tapasztalataimat már az egyetemi éveim alatt elkezdtem. Eleinte gyermekotthonokban önkénteskedtem, majd egy speciális iskolában dolgoztam iskolapszichológusként, ahol egyéni és csoportos foglalkozásokat tartottam, tartottunk ADHD-s, tanulási zavarokkal küzdő, viselkedészavaros tiniknek. Ezután Pest megyén belül több helyen dolgoztam nevelési tanácsadóban, amit később pedagógiai szakszolgálattá egyesítettek. Így onnantól (2011.) nem csak a terápiás területen, hanem diagnosztikában is fejlődnöm kellett: BTMN vizsgálatokat végeztünk, illetve időszakosan az iskolaérettségi vizsgálat illetve esetenként pszichodiagnosztika is előfordult.</p>
                    <p class="mb-6">Magánrendelésben 2010 óta dolgozom. Gyermekeim születésénél (2017., 2018., 2020.) pár hónapig szünetelt, de azóta már csak ezen a területen tevékenykedek. Mindenféle korosztály mindenféle problémával szokott hozzám kerülni, így szívesen dolgozom serdülőkkel, kisiskolásokkal, óvodásokkal, vagy fiatal felnőttekkel is. A legkisebbeket (3 éves korig) szülővel együtt, inkább anyával szoktam fogadni. Sok esetben a konzultáció, szülői tanácsadás is elegendő ilyenkor, és velük indul el egy együttműködés. Előfordulnak szomatizációs tünetek (hasfájás, fejfájás, hányinger), vagy alvási, evési nehézségek, figyelem és aktivitás zavara (ADHD), beilleszkedési nehézségek, szorongások, félelmek, dühkitörések, indulatkezelési problémák, pánik(szerű) tünetek, autizmus gyanúja, hangulati problémák, öngyilkossági gondolatok.</p>
                    <p class="mb-6">Leginkább a terápiás működésben érzem otthon magam, ahol a gyerekek, fiatalok és a szülők bizalmába kerülve igyekszem egy biztos pont lenni, hogy előbb hozzám, majd egymáshoz találjanak. Hiszem, hogy a nagy viharok, nehézségek hullámaiból ki lehet kerülni, ha van egy viszonyítási pont, egy kapaszkodó. Keresztényként úgy hiszem, ez jóval nagyobb történet nálunk, de személyesen igyekszem segítő kezet nyújtani, nem csak azért, hogy ne egyedül legyenek a gyerekek és családok a nehézségekben, hanem azért is, hogy a körön kívül állva segítsek lendületet találni a saját megoldások megtalálásához.</p>
                </div>
                <div class="p-6">
                    <div class="rounded-2xl rotate-3 max-w-md overflow-hidden shadow-2xl">
                        <img class="max-w-md " src="{{asset('/img/sara.jpg')}}" alt="">
                    </div>
                    <div class="mt-6 max-w-md text-gray-500 font-semibold pb-3 border-b border-gray-200">
                        <h3 class="mb-3 font-bold text-blue-500"><i class="fa-solid fa-graduation-cap opacity-70 mr-1.5"></i>Iskolai Végzettségek:</h3>
                        <ul class="list-disc list-inside">
                            <li class="mb-3">ELTE - Alkalmazott fejlődéslélektan és életvezetési- és pályatanácsadás szakirány (2009).</li>
                            <li class="mb-3">Integratív Gyermekterapeuta képzés (2011).</li>
                            <li class="mb-3">Pszichodráma asszisztensi képzés (2014).</li>
                            <li class="mb-3">Pécsi Tudományi Egyetem - Gyermek- és ifjúsági mentálhigiénés- és klinikai szakpszichológusi végzettség.</li>
                        </ul>
                    </div>

                    <div class="mt-6 max-w-md text-gray-500 font-semibold pb-3 border-b border-gray-200">
                        <h3 class="mb-3 font-bold text-blue-500"><i class="fa-solid fa-briefcase opacity-70 mr-1.5"></i>Szakmai Tapasztalatok:</h3>
                        <ul class="list-disc list-inside">

                            <li class="mb-3">Gyermekotthonokban önkénteskedtem az egyetemi éveim alatt.</li>
                            <li class="mb-3">Speciális iskolában dolgoztam iskolapszichológusként. Itt egyéni és csoportos foglalkozásokat vezettem ADHD-s, tanulási zavarokkal és viselkedészavarral küzdő tinédzsereknek.</li>
                            <li class="mb-3">Több nevelési tanácsadóban is dolgoztam Pest megyében, amelyeket később pedagógiai szakszolgálattá alakítottak át. Ezen helyeken BTMN vizsgálatokat, iskolaérettségi vizsgálatokat és pszichodiagnosztikai felméréseket is végeztem.
                                2010 óta magánrendelésben dolgozom.</li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </section>


@endsection
