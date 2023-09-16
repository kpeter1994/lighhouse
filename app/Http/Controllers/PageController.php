<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('pages.welcome');
    }

    public function team()
    {
        $teams = [
            [
                'name' => 'Standovár Sára',
                'introductions' => [
                    'Már óvodásként pszichológusnak készültem, bár ez akkor még csak a családi minta miatt merülhetett fel bennem, mivel édesanyám is pszichológus. Az évek alatt sokszor érdekelt más terület (zene, építészet), de a pályaválasztás idejére újból visszataláltam a pszichológiához. Tudtam, hogy gyerekekkel, családokkal szeretnék foglalkozni, és megérteni, kísérni szeretném őket abban a folyamatban, ahol a személyek és a köztük lévő kapcsolat is formálódik.',
                    '2009-ben végeztem az ELTE-n alkalmazott fejlődéslélektan és életvezetési- és pályatanácsadás szakirányon. Ezután a gyakorlat megszerzése mellett a módszerspecifikus képzések irányába indultam el, és végeztem el az Integratív Gyermekterapeuta képzést (2011.) és a pszichodráma asszisztensi képzést (2014.) a hozzá tartozó önismereti kurzusokkal. Közben az aktuális munkahelyemen házon belüli képzésen autogén tréning, meditáció, resztoratív konfliktuskezelés területén fejlődtem. Ezután a Pécsi Tudományi Egyetemen szereztem meg gyermek- és ifjúsági mentálhigiénés- és klinikai szakpszichológusi végzettségemet, amit csak úgy emlegetnek a köztudatban, hogy gyerek klinikus. Ezzel eldőlt, hogy életem végéig (vagyis 75 éves koromig, ha megérem) képzéseimet folytatnom kell, ami valójában jó is, mert még sok minden a terveim közt szerepel: művészetterápia, relaxáció, meditáció, KIP, rajzelemzés, zeneterápia,',
                    'Szakmai tapasztalataimat már az egyetemi éveim alatt elkezdtem. Eleinte gyermekotthonokban önkénteskedtem, majd egy speciális iskolában dolgoztam iskolapszichológusként, ahol egyéni és csoportos foglalkozásokat tartottam, tartottunk ADHD-s, tanulási zavarokkal küzdő, viselkedészavaros tiniknek. Ezután Pest megyén belül több helyen dolgoztam nevelési tanácsadóban, amit később pedagógiai szakszolgálattá egyesítettek. Így onnantól (2011.) nem csak a terápiás területen, hanem diagnosztikában is fejlődnöm kellett: BTMN vizsgálatokat végeztünk, illetve időszakosan az iskolaérettségi vizsgálat illetve esetenként pszichodiagnosztika is előfordult.',
                    'Magánrendelésben 2010 óta dolgozom. Gyermekeim születésénél (2017., 2018., 2020.) pár hónapig szünetelt, de azóta már csak ezen a területen tevékenykedek. Mindenféle korosztály mindenféle problémával szokott hozzám kerülni, így szívesen dolgozom serdülőkkel, kisiskolásokkal, óvodásokkal, vagy fiatal felnőttekkel is. A legkisebbeket (3 éves korig) szülővel együtt, inkább anyával szoktam fogadni. Sok esetben a konzultáció, szülői tanácsadás is elegendő ilyenkor, és velük indul el egy együttműködés. Előfordulnak szomatizációs tünetek (hasfájás, fejfájás, hányinger), vagy alvási, evési nehézségek, figyelem és aktivitás zavara (ADHD), beilleszkedési nehézségek, szorongások, félelmek, dühkitörések, indulatkezelési problémák, pánik(szerű) tünetek, autizmus gyanúja, hangulati problémák, öngyilkossági gondolatok.',
                    'Leginkább a terápiás működésben érzem otthon magam, ahol a gyerekek, fiatalok és a szülők bizalmába kerülve igyekszem egy biztos pont lenni, hogy előbb hozzám, majd egymáshoz találjanak. Hiszem, hogy a nagy viharok, nehézségek hullámaiból ki lehet kerülni, ha van egy viszonyítási pont, egy kapaszkodó. Keresztényként úgy hiszem, ez jóval nagyobb történet nálunk, de személyesen igyekszem segítő kezet nyújtani, nem csak azért, hogy ne egyedül legyenek a gyerekek és családok a nehézségekben, hanem azért is, hogy a körön kívül állva segítsek lendületet találni a saját megoldások megtalálásához. ',
                    ],
                'image' => 'sara.jpg',
                'schools' => [
                    'ELTE - Alkalmazott fejlődéslélektan és életvezetési- és pályatanácsadás szakirány (2009).',
                    'Integratív Gyermekterapeuta képzés (2011).',
                    'Pszichodráma asszisztensi képzés (2014).',
                    'Pécsi Tudományi Egyetem - Gyermek- és ifjúsági mentálhigiénés- és klinikai szakpszichológusi végzettség.'
                ],
                'works' => [
                    'Gyermekotthonokban önkénteskedtem az egyetemi éveim alatt.',
                    'Speciális iskolában dolgoztam iskolapszichológusként. Itt egyéni és csoportos foglalkozásokat vezettem ADHD-s, tanulási zavarokkal és viselkedészavarral küzdő tinédzsereknek.',
                    'Több nevelési tanácsadóban is dolgoztam Pest megyében, amelyeket később pedagógiai szakszolgálattá alakítottak át. Ezen helyeken BTMN vizsgálatokat, iskolaérettségi vizsgálatokat és pszichodiagnosztikai felméréseket is végeztem. 2010 óta magánrendelésben dolgozom.',
                ],
            ],
            [
                'name' => 'Szűcs Réka',
                'introductions' => [
                    '2018-ban végeztem a Károli Gáspár Református Egyetem -akkor még- Tanító Pedagógiai Főiskolai kar óvodapedagógia szakán. Tanulmányaim alatt megfogalmazódott bennem, hogy az óvoda-iskola átmenet egyre nehezebb a gyermekek számára, így párhuzamos képzés keretein belül elvégeztem a matematika műveltségterületes tanító képzést. Ez alatt már elkezdtem gyakorlati munkámat egy óvodában, ami egyre jobban megerősített hogy az átmentet jobban kell segíteni, és ekkor kezdtem el iskola előkészítőt tartani a gyermekek számára. Ez alatt pedig azt éreztem hogy bizonyos területeket egyre nehezebb fejleszteni,erősíteni így idén diplomáztam Fejlesztőpedagógusként. Fő célom az, hogy a gyermekeket akar prevenciós vizsgálat keretein belül, vagy már meglévő szakértői bizottság által írt vélemény alapján a megfelelő fejlesztésben részesíthessem, hiszen nagyon sok készség alakítható óvodás illetve kisiskolás korban. Fontosnak tartom hogy a megfelelő odafigyeléssel, a gyermek megismerésével megkönnyíthessük a tanulmányi éveket. Úgy gondolom a legjobb fejlesztés a játék során lehetséges így ez alapozza meg az iskolaelőkészítő fejlesztést. Szeretném ha mindenki rá jönne a csoport illetve az egyéni foglalkozások alatt, hogy mi az erőssége, hogy érezzék a támogatást. ',

                    ],
                'image' => 'reka.jpg',
                'schools' => [
                    '2018-ban végeztem a Károli Gáspár Református Egyetem -akkor még- Tanító Pedagógiai Főiskolai kar óvodapedagógia szakán.',
                    'Tanulmányaim alatt párhuzamos képzés keretein belül elvégeztem a matematika műveltségterületes tanító képzést.',
                    'Idén diplomáztam Fejlesztőpedagógusként.',

                ],
                'works' => [
                    'Tanulmányaim alatt már elkezdtem gyakorlati munkámat egy óvodában.',
                    'Iskolai előkészítőt tartottam a gyermekek számára.',
                ],
            ],
            [
                'name' => 'Varga Lídia-szakvizsgázott gyógypedagógus',
                'introductions' => [
                    '17 éves korom óta foglalkozok rendszeresen gyerekekkel. Tanulmányaimat az ELTE- Bárczi Gusztáv Gyógypedagógiai Főiskolai Karán végeztem 2006-ban tanulásban akadályozottak és pszichopedagógia szakokon. Szakmai tapasztalataimat Pedagógiai Szakszolgálatban szereztem és bővítettem különböző képzésekkel az évek során. A BTMN vizsgálatok és a terápiák terén egyaránt sok éves munka áll mögöttem. 3-18 éves korig minden korosztállyal volt dolgom. Szakvizsgázott gyógypedagógus 2011-ben lettem. A családterápiás elméleti és módszertani alapképzés, valamint az önismereti képzés elvégzése (2018-2019) tágították szemléletemet. Jelenleg utazó gyógypedagógusként SNI-s gyerekeket fejlesztek. ',
                    'Fontos számomra a csapatmunka akár kollégákról, akár a gyermekről/tanulóról és családjáról legyen szó. A gyerekeknek igyekszem közvetíteni, hogy az értékük elsősorban önmagukban van a gyengeségeikkel és az erősségeikkel együtt, nem pedig a teljesítményükben. A fejlesztéseken hangsúlyt kap a játék. Játékos feladatokkal, gyakorlatokkal segítem a gyerekeket. Ehhez kapcsolom a feladatlapokat és az otthon elvégezhető gyakorlatokat is.',
                    'kulcsszavaim: kölcsönösség, megbízhatóság, kapcsolódás, Hajrá! Értékes vagy. ',
                    'Óvodás és kisiskolás gyerekeket várok BTMN diagnózissal vagy anélkül 5-6. osztályig egyéni vagy csoportos formában. Az ovisoknak iskolaelőkészítő foglalkozásokat és a részképességek fejlesztését célzó órákat tartok. Az iskolás korosztályban a különböző tanulási nehézségek (pl. olvasás, írás-helyesírás, szövegértés, számolás, figyelem, beszédészlelés) kerülnek előtérbe a részképességek fejlesztése mellett.',
                ],
                'image' => 'lidia.jpg',
                'schools' => [
                    '2006: ELTE- Bárczi Gusztáv Gyógypedagógiai Főiskolai Kar, Tanulásban akadályozottak és pszichopedagógia szakok.',
                    '2011: Szakvizsgázott gyógypedagógus.',
                    '2018-2019-ben elvégeztem a családterápiás elméleti és módszertani alapképzést, valamint az önismereti képzést.',
                ],
                'works' => [
                    '17 éves korom óta foglalkozom rendszeresen gyerekekkel.',
                    'Pedagógiai Szakszolgálatban szereztem és bővítettem szakmai tapasztalataimat különböző képzésekkel az évek során.',
                    'Sok éves munkatapasztalatom van a BTMN vizsgálatok és terápiák terén.',
                    '3-tól 18 éves korig minden korosztállyal dolgoztam.',
                    'Jelenleg utazó gyógypedagógusként fejlesztek SNI-s gyerekeket.',
                    'Óvodásoknak tartok iskolaelőkészítő foglalkozásokat és célzottan fejlesztem a részképességeiket.',
                    'Az iskolás korosztályban a különböző tanulási nehézségek (pl. olvasás, írás-helyesírás, szövegértés, számolás, figyelem, beszédészlelés) kerülnek előtérbe a részképességek fejlesztése mellett.',
                ],
            ],
            [
                'name' => 'Marton Judit klinikai gyermek szakpszichológus',
                'introductions' => [
                    'Marton Judit klinikai gyermek szakpszichológus vagyok, a Bedestan Bt munkatársa jelenleg.',
                    '1980 – ban végeztem Debrecenben, a Kossuth Lajos Tudományegyetem Bölcsészettudományi Karán, s szereztem pszichológus diplomát (Oklevél száma: 2829/1980.B.).',
                    'Szakképesítésemet Budapesten, az Orvostovábbképző Egyetemen kaptam kézhez, 1989-ben (Szakoklevél száma: 51/1989)',
                    'Aktuális Működési Nyilvántartási Igazolványomat az Országos Kórházi Főigazgatóság adta ki 2021 - ben, mely 2026.06.09.-ig érvényes.',
                    'A MOK tagja vagyok.',
                    '2000 óta folyamatosan veszek részt szakmai továbbképzéseken, melyeknek nagy része a működési nyilvántartáshoz kapcsolódik, s az elvégzett képzéseket a Semmelweis Egyetemen tartják nyílván.',
                    'Képzéseim során, a kötelező szinten tartó elméleti képzések mellett, többféle diagnosztikus és terápiás eljárást tanultam meg. Pl. teljesítményteszteket, projektív teszteket, ill. családterápiát, gyermekek részére játékterápiát, gyermek – pszichodrámát, szenzorosintegrációs terápiát, autogéntréninget.',
                    'Korábban, főállásban 12 éven át dolgoztam az egészségügyben, gyermek-, és ifjúságpszichiátriai ambulancián, majd 18 éven keresztül az oktatás – nevelés területén, nevelési tanácsadóban, ill. pedagógiai szakszolgálatnál, itt is diagnosztikus és terápiás tevékenységet végezve alapvetően. Gyermekekkel, serdülőkkel, fiatalokkal, szülőkkel folytatott munkám során sokrétű tapasztalatot szereztem, szolgálva előrehaladásukat, érdekeiket. A teamben való együttműködést – szakorvosokkal, pedagógusokkal, szociálismunkásokkal, más megközelítéssel is dolgozó pszichológusokkal - alapvető fontosságúnak tartom a több szempontú megközelítés, beavatkozás, holisztikus szemlélet hatékonysága miatt. A közös munka, a kölcsönhatások, az együttes alkotás közben mindig is aktív, a történéseket alapvetően formáló résztvevőknek láttam, látom a hozzám, a hozzánk forduló egyéneket, családokat is. Az évek során – nem utolsó sorban - tőlük is igen sokat tanultam magamról, a szakmámról, az emberi lélekről, az élet kihívásairól.',
                    'Érzelmi, hangulati (pl. félelmek, kedvetlenség, nyomottság, zaklatottság), kötődési, szomatizációs, ill. pszichoszomatikus (pl. alvási-, étkezési-, emésztési-, légzéshez-, ürítéshez kapcsolódó nehézségek, fájdalmak, más diszfunkciók), tanulási, magatartási, beilleszkedési problémákkal fordultak hozzám eddig elsősorban. Továbbá megterhelő élethelyzetek (pl. testvér születés, veszteségek, egzisztenciális problémák, distressz – kezelés), nevelési nehézségek (pl. düh, hiszti jelentkezése) kapcsán.',
                    'Alapvetően humanisztikus (a segítséget kérő szükségleteire, igényeire, testi-, lelki-, kapcsolati állapotára elsődlegesen figyelő), dinamikus (a tünetek hátterében meghúzódó, részben tudattalan, kialakító, fenntartó hatótényezők, belső konfliktusok feltárásának segítségével, a jelen lévő terapeuta – kliens kapcsolatával dolgozó), ill. rendszerszemléletű (közvetlenebb, kisebb, távolabbi, nagyobb társas kölcsönhatásokra figyelő, elemző munka, pl. család, mint rendszer) megközelítés ötvöződik terápiáimban.',
                    'Igen közel állnak hozzám K.K. Novick és J. Novick kiképző gyermekanalitikusok gondolatai, akik arról írnak többek között - elmondva a szülőknek is -, hogy a közös, terápiás munka célja: „együtt kideríteni a nehézségek okait, és azt, hogyan segíthetnek a gyerekeknek maguk a szülők. Addig fognak együtt dolgozni, míg tisztábban nem látják, mi segíthet. Ha aztán végül, közösen úgy döntenek, hogy a szülők megtettek mindent, csak ezután kezd a terapeuta a gyermekkel foglalkozni, a szülők további segítségével.”',
                    'Fontos szerintük, hogy a szülőkkel kialakított munkaszövetség eléggé tartóssá váljon ahhoz, hogy a gyermekkel folytatott terápia megkezdődhessen létrehozva vele egy privát teret. További szövetségek is lehetségesek, így a házastársak, a szülők és a gyermek/serdülő, testvérek (más jelentős személyek) között. „A terapeuta feladata valamennyit gondozni, észrevenni feszültségeiket, gyakorlati és érzelmi akadályaikat, és mindenkit bátorítani szövetségeik fenntartására.” Az eredmények közösen kovácsolódnak.',
                    'Tehát – tartalmilag összegezve - a gyermek/serdülő terápiájának kettős célja van szerintük: részben a gyermek előre mutató fejlődésének helyreállítása (lehetőségeinek megfelelően), részben a problémák, tünetek által szétrombolt szülő – gyermek kapcsolat helyreállítása úgy, hogy az mindkettőjük számára pozitív, életre szóló erőforrás legyen. Ezen belül a szülők segítése abban, hogy visszaálljanak a felnőttkori fejlődés progresszív útjára, amiben a szülőség egy szakasz.',
                    'Fontos szempont a terápiában résztvevők számára, beleértve a terapeutát is, hogy a folyamatot fejlődési tapasztalatként élhessék meg, foghassák fel.',
                    '/Idézetek, parafrázisok a K. K. Novick és J. Novick: Munka szülőkkel gyermekterápiában c. könyvből valók, melynek magyar fordítását 2014-ben adta ki az Animula Kiadó /',

                    ],
                'image' => 'judit.jpg',
                'schools' => [
                    '1980-ban végeztem Debrecenben, a Kossuth Lajos Tudományegyetem Bölcsészettudományi Karán, ahol pszichológus diplomát szereztem (Oklevél száma: 2829/1980.B.).',
                    'Szakképesítésemet Budapesten, az Orvostovábbképző Egyetemen szereztem 1989-ben (Szakoklevél száma: 51/1989).',
                ],
                'works' => [
                    '2000 óta veszek részt folyamatosan szakmai továbbképzéseken. A képzéseim során többféle diagnosztikus és terápiás eljárást tanultam meg, mint például teljesítményteszteket, projektív teszteket, családterápiát, gyermekek részére játékterápiát, gyermek-pszichodrámát, szenzorosintegrációs terápiát és autogéntréninget.',
                    'Korábban, főállásban 12 éven át dolgoztam az egészségügyben, gyermek- és ifjúságpszichiátriai ambulancián. Ezt követően 18 évet töltöttem az oktatás-nevelés területén, nevelési tanácsadóban és pedagógiai szakszolgálatnál. Itt is főként diagnosztikus és terápiás tevékenységet végeztem. Sokrétű tapasztalatot szereztem gyermekekkel, serdülőkkel, fiatalokkal és szülőkkel való munka során.',
                ],
            ],
            [
                'name' => 'Melkvi Anita',
                'introductions' => [
                    '2008-ban végeztem Dr. Antalfai Márta PhD. ECP kiképző pszichoterapeutánál művészetterapeutaként. Az oktatásfejlesztésben és tehetséggondozás területén vezettem be Dr. Antalfai Mártánál tanult „Művészeti terápia a személyiség komplex fejlesztésére” c. programot. Több szakemberrel létrehoztunk egy otthonoktatásra épülő pilot projektet Magyarországon, melynek része volt ez a fejlesztés is. A pedagógusok sajátos képzése mellett részt vettem tanuló- és szülőcsoportok támogatásában is, mely során művészeti terápiás elemeket alkalmaztunk a gyermekek személyiségének komplex fejlesztése céljából.',
                    'Privát életemben egy tehetséggondozott és évekig otthon oktatott fiatalember édesanyja vagyok. A fiam mellett több gyermeket is tudtunk rehabilitálni, majd integrálni az oktatási rendszerbe. A többi szülővel egymást segítve megtapasztaltuk ennek minden aspektusát. Mára tudom, hogy mekkora segítség lehet már az is, ha szülők a gyermekeik életébe csupán néhány művészetterápiás eszközt bevezetnek. Nem csupán szakemberként, hanem szülőként is alkalmam volt megtapasztalni azt, hogy milyen az, amikor segítségre van szükségünk. Fiam jelenleg 19 éves, kiegyensúlyozott, boldog fiatalember, BME Villamosmérnök szakon tanul. Azt gondolom, hogy ez mutatja számomra leginkább, hogy megéri szülőként a gyermekeink személyiségének komplex fejlesztésébe fektetni.',
                    '2021-ben Okleveles Rajzvizsgálati Szakértőként végeztem a Károli Gáspár Református Egyetem Rajzelemzési Intézeténél. Majd 2023-ban felsőfokú szakképzésen pszichológus végzettséget szereztem az angliai The Open University-nél.',
                    'A Lighthouse csapat tagjaként Standovár Sára mellett rajzvizsgálati szakértőként elkötelezett híve vagyok annak, hogy a gyermekek rehabilitációja során komplex módon közelítsünk meg egy adott problémát. Ennek érdekében a szolgáltatásaim az alábbiak:',
                    ' gyermek rajzvizsgálat. Ez egy 3 alkalmas szolgáltatás, mely során az első alkalommal a szülőkkel felveszem a kapcsolatot, átbeszéljük a problémát. Második alkalommal a gyermek rajzolásának folyamatát rögzítjük és magát a rajzot megkapom. Ezt követően elemzem a kapott információk alapján a gyermek rajzát és szakvéleményt állítok ki. Elérhetőségem / ár stb..',
                    'szülői támogatás:',
                    'o   szülőakadémia, mely során megmutatom, hogy milyen egyszerű művészetterápiás elemeket  vezethetnek be gyermekeik rajzolási szokásaikba. Megértik, hogy ezek az egyszerű lépések milyen jelentőségteliek lehetnek, ha a mindennapos rajzok során a gyermekek életének a része lesz.  Elérhetőségem / ár stb.',
                    'o   szülői coaching: a gyermekpszichológussal egyeztetve a probléma ismerete mellett szülői támogató beszélgetések. Elérhetőségem / ár stb.',
                    'A rajzvizsgálati ismeretek hasznosíthatók gyerekeknél primer, illetve szekunder prevenciós és szűrővizsgálati céllal magatartási és beilleszkedési problémák (megváltozott viselkedés, túlzott visszahúzódás, közösségi szabályok figyelmen kívül hagyása, kapcsolati nehézségek stb.) esetében, az érzelmi-indulati élet zavarai esetében (fokozott érzékenység, nyugtalanság, agresszivitás, ideges eredetű beszédzavar, neurotikus tünetek stb.), tanulási és teljesítményzavarok esetén, ha a gyermek teljesítménye képességei alatt marad (írás- és olvasászavar, figyelemzavar, tanulási kedv hiánya stb.), valamint az iskolaérettség megállapításával kapcsolatos kérdésekben.',
                    ],
                'image' => 'anita.jpg',
                'schools' => [
                    '2008: Végzés Dr. Antalfai Márta PhD. ECP kiképző pszichoterapeutánál művészetterapeutaként.',
                    '2021: Okleveles Rajzvizsgálati Szakértőként végzés a Károli Gáspár Református Egyetem Rajzelemzési Intézeténél.',
                    '2023: Pszichológus végzettség az angliai The Open University-nél.',
                ],
                'works' => [
                    'Oktatásfejlesztés és tehetséggondozás: Bevezettem a „Művészeti terápia a személyiség komplex fejlesztésére” programot.',
                    'Otthonoktatás: Több szakemberrel pilot projektet hoztam létre Magyarországon.',
                    'Pedagógusok képzése: Részt vettem tanuló- és szülőcsoportok támogatásában művészeti terápiás elemekkel.',
                    'Lighthouse csapat: Rajzvizsgálati szakértőként dolgozom Standovár Sára mellett.',
                    'Szolgáltatások: Gyermek rajzvizsgálat, szülői támogatás (szülőakadémia és szülői coaching).',
                    'Rajzvizsgálati ismeretek alkalmazása: Gyerekeknél különböző problémák esetén.',
                ],
            ],
            /*[
                'name' => '',
                'introductions' => [
                    '',
                    '',
                    '',
                ],
                'image' => '.jpg',
                'schools' => [
                    '',
                    '',
                    '',
                ],
                'works' => [
                    '',
                    '',
                    '',
                ],
            ],*/


        ];
        return view('pages.team',compact('teams'));
    }
}
