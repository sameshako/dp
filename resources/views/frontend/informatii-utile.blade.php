@extends('layouts.front.app')

@section('content')
<style>
    .sticky-header:not(.header-shrink) {
        background: #2339d6;
    }
</style>

<div class="infoutil-title">
    <h1>Informatii utile</h1>
</div>

<div class="informatii-utile" style="padding-top:200px">
    <div class="container">
        <div class="row">
            <!-- <div class="breadcrumb-search cf">
                <div class="breadcrumb">
                    <ul class="cf" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="https://www.blitz.ro/" title="Home">
                                <p itemprop="name">Home</p>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="https://www.blitz.ro/informatii-utile" title="Informatii utile">
                                <p itemprop="name">Informatii utile</p>
                            </a>
                            <meta itemprop="position" content="2">
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="https://www.blitz.ro/ghid/asigurarea-obligatorie" title="Asigurarea obligatorie">
                                <p itemprop="name">Asigurarea obligatorie</p>
                            </a>
                            <meta itemprop="position" content="3">
                        </li>
                    </ul>
                </div>
            </div> -->

            <div class="col-md-4 col-lg-3 d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3 sticky-info" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Asigurarea obligatorie</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Ghidul vanzatorului</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Ghidul cumparatorului</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Ghid juridic</a>
                    <a class="nav-link" id="v-pills-bank-tab" data-bs-toggle="pill" href="#v-pills-bank" role="tab" aria-controls="v-pills-bank" aria-selected="false">Ghid bancar</a>
                    <a class="nav-link" id="v-pills-faq-tab" data-bs-toggle="pill" href="#v-pills-faq" role="tab" aria-controls="v-pills-faq" aria-selected="false">Intrebari frecvente</a>
                </div>
            </div>
            <div class="col-md-8 col-lg-9 tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="ghid-page-content">
                        <h1><span class="guide-insurance-icon"></span>Asigurarea obligatorie</h1>
                        <nav class="guide-page-nav">
                            <ul>
                                <li><a href="#question-1">1. Ce este asigurarea obligatorie a locuințelor și care sunt evenimentele de care ne protejează?</a></li>
                                <li><a href="#question-2">2. Care este valoarea primelor de asigurare și care este termenul de valabilitate al polițelor?</a></li>
                                <li><a href="#question-3">3. Asigurare obligatorie sau asigurare facultativă?</a></li>
                            </ul>
                        </nav>
                        <article class="question-article cf" id="question-1">
                            <h3>1. Ce este asigurarea obligatorie a locuințelor și care sunt evenimentele de care ne protejează?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Asigurarea obligatorie a locuințelor este cea mai simplă și ieftină modalitate de a-ți proteja locuința în fața dezastrelor naturale. Obligativitatea asigurării locuințelor a demarat din 15 iulie 2010, iar până în prezent legea a suferit mai multe modificări care însă nu se referă la elementele principale ale asigurării obligatorii, respectiv obligativitatea, riscurile acoperite, valoarea polițelor și a despăgubirilor în caz de daună.<br><br>Asigurarea obligatorie a locuințelor funcționează după principiul solidarității, valoarea primelor de asigurare fiind aceeași indiferent de zona în care sunt plasate locuințele și deci de riscul mai mare sau mai mic de produce a daunelor.<br><span><br>Cele 3 riscuri acoperite de asigurarea obligatorie a locuințelor sunt: cutremure, inundații și alunecări de teren.</span></div>
                        </article>
                        <article class="question-article cf" id="question-2">
                            <h3>2. Care este valoarea primelor de asigurare și care este termenul de valabilitate al polițelor?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">Există două tipuri de locuințe, în funcție de materialele din care au fost construite:<ul>
                                    <li><b>locuința de tip A</b>&nbsp;- cu structură de rezistență din beton armat, metal sau lemn, ori cu pereți exteriori din piatră, cărămidă arsă sau din orice alte materiale rezultate în urma unui tratament termic și/sau chimic;</li>
                                    <li><b>locuința de tip B</b>&nbsp;- cu pereți exteriori din cărămidă nearsa sau din orice alte materiale nesupuse unui tratament termic și/sau chimic.</li>
                                </ul><b>Valoarea primei de asigurare pentru locuințele de tip A este de 20 EUR pentru 20.000 EUR sumă asigurată, iar pentru locuințele de tip B de 10 EUR pentru 10.000 EUR sumă asigurată.<br></b><span><br>Polița de asigurare obligatorie a locuințelor se încheie pentru o perioadă de 12 luni.</span></div>
                        </article>
                        <article class="question-article cf" id="question-3">
                            <h3>3. Asigurare obligatorie sau asigurare facultativă?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                În prezent legea oferă posibilitatea proprietarilor de a alege între cele două tipuri de asigurări, cu mențiunea că, în cazul asigurării facultative, aceasta trebuie să acopere obligatoriu și cele 3 riscuri majore: cutremure, inundații și asigurări de teren.<br><br>Diferența între cele două tipuri de asigurări constă în faptul că asigurarea facultativă oferă mai multe posibilități asiguratului, acesta putând să-și asigure locuința și împotriva producerii altor riscuri neacoperite de asigurarea obligatorie, cum ar fi: incediile, riscurile atmosferice (grindină, avalanșă, furtună, viitură), distrugeri provocate de animale, distrugeri provocate de mijloacele de transport, distrugeri profocate de instalațiile electrice sau termice etc.<br><span><br>Cea mai importantă și totodată cea mai vândută poliță facultativă se referă la "răspunderea civilă față de terți". Astfel, în cazul în care are loc un eveniment care va produce daune vecinilor (incendiu, inundație), aceștia vor fi despăgubiți, în limita prevăzută de poliță, de către societățile de asigurări.</span></div>
                        </article>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="ghid-page-content">
                        <h1><span class="guide-seller-icon"></span>Ghidul vanzatorului de apartamente</h1>
                        <nav class="guide-page-nav">
                            <ul>
                                <li><a href="#question-1">1. Ce etape trebuie sa parcurg pentru vanzarea apartamentului meu?</a></li>
                                <li><a href="#question-2">2. De ce trebuie sa-mi pregatesc apartamentul pentru vanzare?</a></li>
                                <li><a href="#question-3">3. Care este pretul corect pentru apartamentul meu?</a></li>
                                <li><a href="#question-4">4. Care sunt formele de publicitate cele mai eficiente atunci cand vreau sa-mi vand apartamentul?</a></li>
                                <li><a href="#question-5">5. Ce informatii trebuie sa contina un anunt imobiliar perfect?</a></li>
                                <li><a href="#question-6">6. Care sunt tipurile de agenti imobiliari de pe piata imobiliara romaneasca?</a></li>
                                <li><a href="#question-7">7. De ce sa aleg consilierea de specialitate si nu vanzarea pe cont propriu?</a></li>
                                <li><a href="#question-8">8. Cum stiu care este cel mai potrivit agent pentru mine?</a></li>
                                <li><a href="#question-9">9. Cum sa-mi conving vizitatorii sa cumpere?</a></li>
                                <li><a href="#question-10">10. Eu vreau sa obtin cel mai mare pret, de ce sa negociez?</a></li>
                                <li><a href="#question-11">11. Ce variante de plata sa accept pentru vanzarea apartamentului meu?</a></li>
                                <li><a href="#question-12">12. Ce documente imi sunt necesare atunci cand imi vand apartamentul?</a></li>
                                <li><a href="#question-13">13. Ce taxe trebuie sa platesc atunci cand imi vand apartamentul?</a></li>
                            </ul>
                        </nav>
                        <article class="question-article cf" id="question-1">
                            <h3>1. Ce etape trebuie sa parcurg pentru vanzarea apartamentului meu?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Pentru a incheia cu succes o tranzactie imobiliara de vanzare, este necesar sa parcurgi sase etape. Ce inseamna succes in acest caz? inseamna vanzarea apartamentului tau respectand toate procedurile si normele prevazute de lege, la cel mai bun pret si in cel mai scurt timp posibil.<br><br><b>Specialistii Blitz iti recomanda pentru vanzarea apartamentului tau urmatorii pasi:<br><br></b>
                                <ul>
                                    <li>etapa de pregatire a apartamentului, de stabilire a pretului de vanzare si a conditiilor in care se va realiza vanzarea acestuia;</li>
                                    <li>publicitatea imobiliara;</li>
                                    <li>consilierea de specialitate;</li>
                                    <li>etapa de prezentare a apartamentului posibililor cumparatori (vizionare);</li>
                                    <li>etapa de negociere;</li>
                                    <li>etapa de finalizare efectiva a vanzarii apartamentului.</li>
                                </ul>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-2">
                            <h3>2. De ce trebuie sa-mi pregatesc apartamentul pentru vanzare?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Ai dreptate sa iti pui aceasta intrebare. Pentru ca fiecare cumparator isi va personaliza apartamentul dupa propriile gusturi si nevoi, aducand imbunatatiri acestuia in functie de gradul de finisare dorit si de bugetul pe care l-a alocat pentru acest proiect.<br><br>Insa, un apartament nu se poate afisa posibililor cumparatori in stare bruta, fara o igienizare generala. Pregateste-ti apartamentul astfel incat el sa raspunda cerintelor cumparatorilor si, de asemenea, sa le ofere acestora acea stare de bine care sa-i motiveze sa ia o decizie favorabila.<br><br>Atentie! Pregatirea apartamentului nu inseamna ascunderea murdariei sub pres. Un specialist, reprezentant al cumparatorului, va demasca toate viciile tehnice ale apartamentului tau, indiferent daca acestea se gasesc sau nu in spatele unui strat de var proaspat.<br><br>Pe scurt, specialistii Blitz iti recomanda ca atunci cand iti pregatesti apartamentul pentru vanzare sa faci o curatenie generala, sa aerisesti camerele, sa stergi praful, sa aranjezi cartile in biblioteca. De asemenea, bucataria trebuie sa fie impecabila iar un buchet de flori pe masa din living va face o impresie deosebita.<br><br>Nu investi sume importante pentru amenajari sofisticate, pentru ca nu-ti vei recupera banii investiti in urma vanzarii. Igienizare nu inseamna reamenajare. Foloseste ceea ce ai, nu cumpara lucruri noi decat daca este neaparat nevoie! Este obligatoriu sa inlocuiesti un robinet stricat sau o teava care prezinta fisuri, insa piesele de mobilier, parchetul sau usa de la intrare nu trebuie schimbate decat daca sunt intr-o stare avansata de degradare.<br><span><br>Toate cele prezentate mai sus vor fi dublate obligatoriu si de pregatirea ta pentru procesul de vanzare, ceea ce inseamna organizarea programului personal astfel incat sa poti primi vizitele cumparatorilor intr-un interval de timp rezonabil. De asemenea atitudinea ta in cadrul intregului proces de vanzare trebuie sa fie indreptata spre un singur scop, acela de a vinde si trebuie sa dai astfel dovada de punctualitate, deschidere, rabdare, ospitalitate chiar si sa oferi clientilor acea stare de siguranta si de bine.</span></div>
                        </article>
                        <article class="question-article cf" id="question-3">
                            <h3>3. Care este pretul corect pentru apartamentul meu?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Pentru stabilirea pretului corect al apartamentului tau iti recomandam sa apelezi la serviciile specialistilor Blitz. Orice metoda alternativa vei folosi iti va oferi un rezultat nerealist pentru ca un specialist, datorita experientei, a prezentei zi de zi in piata, folosind mijloace specifice, poate emite o opinie obiectiva, concretizata intr-o evaluare corecta a apartamentului tau.<br><br><b>Daca alegi totusi varianta "pe cont propriu" este bine sa tii cont de urmatoarele sfaturi:<br><br></b>
                                <ul>
                                    <li>detaseaza-te de statutul de proprietar, abandoneaza-ti emotiile si trateaza totul ca pe o afacere. Apartamentul tau nu va fi niciodata mai valoros decat altele similare de pe piata doar pentru ca tu ai locuit acolo;</li>
                                    <li>studiaza piata transformandu-te daca este nevoie in cumparator. Vei putea astfel sa faci o estimare aproximativa asupra pretului mediu din zona ta. Atentie! Pretul public nu este acelasi cu pretul de vanzare, deci ia in calcul si marja de negociere;</li>
                                    <li>stabileste un deadline. Vrei sa-ti vinzi apartamentul cat mai repede sau vrei sa astepti vremuri mai bune? Raspunsul la aceasta intrebare se va reflecta in pretul apartamentului tau si in facilitatile de plata pe care le vei oferi cumparatorilor.</li>
                                </ul><br>Esti constient ca toti acesti pasi te vor costa foarte mult timp, foarte multa munca de cercetare si de informare, iar rezultatul final este posibil sa nu te satisfaca pe deplin. Poti beneficia de toate acestea apeland la specialistii Blitz, care-ti vor oferi un pachet complet de servicii adaptat cerintelor tale.<br>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-4">
                            <h3>4. Care sunt formele de publicitate cele mai eficiente atunci cand vreau sa-mi vand apartamentul?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Am trecut deja la a doua etapa din procesul de vanzare al apartamentului tau, etapa in care decizia ta de a vinde va deveni publica. Modalitatile prin care poti face public anuntul de vanzare sunt multiple, de la varianta cea mai la indemana- anuntarea familiei, prietenilor, vecinilor, pana la anunturi imobiliare, filme de prezentare, campanii social media, bannere etc. Fiecare dintre aceste forme de publicitate isi pot dovedi eficienta intr-o masura mai mica sau mai mare, astfel incat niciuna dintre ele nu trebuie exclusa.<br><span><br>Iti recomandam sa apelezi la serviciile profesionistilor Blitz pentru a beneficia de un pachet complet de servicii imobiliare, care include si un pachet de promovare personalizat si adaptat ofertei tale. Astfel, sansele ca apartamentul tau sa iasa din anonimat, ba mai mult, sa atraga atentia cumparatorilor, vor creste considerabil.</span></div>
                        </article>
                        <article class="question-article cf" id="question-5">
                            <h3>5. Ce informatii trebuie sa contina un anunt imobiliar perfect?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span>Un anunt imobiliar, cea mai simpla si mai accesibila forma de publicitate imobiliara, indiferent daca este publicat in presa scrisa sau on-line, trebuie sa fie concis, sa prezinte informatii valoroase, corecte si concrete. In cadrul anuntului imobiliar trebuie sa prezinti exclusiv realitatea pentru ca orice viciu descoperit ulterior iti va indeparta clientii pentru totdeauna, iar dobandirea unui astfel de renume pe piata nu-ti va fi deloc favorabil.<br><br></span>Elementele obligatorii pe care trebuie sa le contina anuntul tau imobiliar sunt: zona in care se afla apartamentul si cateva caracteristici generale ale acesteia, tipul imobilului, tipul apartamentului, numarul de incaperi si dispunerea acestora, finisajele si imbunatatirile de care dispune, pretul public si facilitatile de plata oferite.<span><br><br></span>De asemenea, trebuie sa acorzi o importanta deosebita fotografiilor care insotesc anuntul imobiliar. Imaginile interioare trebuie sa fie luminoase, cu spatii cat mai largi, iar cele exterioare (vecinatati, panorame) trebuie sa fie reimprospatate in functie de anotimpul de afara. Imagineaza-ti un set de fotografii de iarna care insoteste o oferta de vanzare prezentata in mijlocul verii.<br></div>
                        </article>
                        <article class="question-article cf" id="question-6">
                            <h3>6. Care sunt tipurile de agenti imobiliari de pe piata imobiliara romaneasca?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span>Piata imobiliara romaneasca ofera posibilitati multiple de reprezentare a partilor implicate in procesul de vanzare-cumparare a unui apartament. Unii sunt de parere ca agentii imobiliari intermediari, cei care domina in proportie covarsitoare peisajul imobiliar romanesc, se afla in situatie de conflict de interese, reprezentand ambele parti implicate in tranzactia imobiliara. Altii, sunt de parere ca starea de conflict apare, din contra, atunci cand cele doua parti sunt reprezentate de agenti imobiliari diferiti, fiecare dintre ei aparand interesele partilor pe care le reprezinta.<br><br></span><b>Putem identifica astfel 3 tipuri de agenti imobiliari:<br><br></b>
                                <ul>
                                    <li>Agentul imobiliar al vanzatorului. Reprezinta si apara exclusiv interesele acestuia in cadrul tranzactiei imobiliare, oferind totodata cu onestitate si profesionalism toate informatiile pe care cumparatorul le solicita, in limita confidentialitatii datelor personale ale vanzatorului.</li>
                                    <li>Agentul imobiliar al cumparatorului. Reprezinta si apara exclusiv interesele acestuia in cadrul tranzactiei imobiliare. Spre deosebire de tipul anterior, agentul cumparatorului este o persoana foarte dinamica, un foarte bun negociator, dispus sa "hartuiasca" vanzatorul sau agentul acestuia pentru a-si indeplini misiunea.</li>
                                    <li>Agentul imobiliar intermediar, reprezinta ambele parti in mod egal in cadrul procesului imobiliar, datorandu-le in aceeasi masura onestitate si confidentialitate. Agentul imobiliar intermediar joaca rolul de mediator intre cele doua parti, nu favorizeaza niciuna dintre ele, este un foarte bun psiholog si negociator, scopul final al acestuia fiind incheierea tranzactiei de vanzare-cumparare in conditii echitabile pentru ambele parti.</li>
                                </ul><br>Noi va recomandam a treia varianta, specialistii Blitz fiind agenti imobiliari intermediari, efectuand stagii de pregatire teoretica si practica adecvate acestui tip de activitate, reprezentarea bilaterala necesitand cunostinte imobiliare complete, net superioare celorlalte doua tipuri prezentate anterior.<span><br><br><br></span>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-7">
                            <h3>7. De ce sa aleg consilierea de specialitate si nu vanzarea pe cont propriu?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Ti-am enumerat deja cateva din motivele pentru care apelarea la serviciile specialistilor Blitz ar trebui sa insemne o obligatie si nu o optiune pentru tine. Cu siguranta ai inca intrebari privind acest lucru si vom puncta mai jos, pe scurt, avantajele de care beneficiezi atunci cand alegi serviciile specialistilor nostri.<br><b>Alege vanzarea pe cont propriu atunci cand:<br><br></b>
                                <ul>
                                    <li>ai incredere excesiva in cunostintele tale imobiliare;</li>
                                    <li>stii sa stabilesti pretul corect pentru apartamentul tau, bazandu-te numai pe inspiratie si pe datele din piata actuala;</li>
                                    <li>stapanesti la perfectie tehnicile de negociere;ai cunostinte financiar-bancare si juridice dezvoltate;</li>
                                    <li>experientele imobiliare cu neprofesionisti te-au coplesit intr-atat incat nu vrei sa mai apelezi la serviciile unei agentii profesioniste, indiferent daca astfel iti diminuezi sansele de a-ti vinde apartamentul.</li>
                                </ul><b>Alege consilierea specialistilor Blitz:<br><br></b>
                                <ul>
                                    <li>pentru a avea acces la informatii;</li>
                                    <li>pentru stabilirea unui pret corect de vanzare a proprietatii tale tinand cont atat de piata imobiliara actuala cat si de cea anterioara si cea viitoare (estimata);</li>
                                    <li>pentru sfaturi imobiliare valoroase si asistenta pe intreaga desfasurare a procesului de vanzare;</li>
                                    <li>pentru a beneficia de un pachet de promovare personalizat si adaptat cerintelor tale;</li>
                                    <li>pentru clienti de calitate;</li>
                                    <li>pentru a castiga timp vanzarea realizandu-se in cel mai scurt timp posibil;</li>
                                    <li>pentru a castiga bani, obtinand cel mai bun pret pentru apartamentul tau;</li>
                                    <li>pentru consiliere post-vanzare cu privire la posibilitatile pe care le ai de a investi tot in domeniul imobiliar;</li>
                                    <li>pentru siguranta tranzactiei imobiliare.</li>
                                </ul>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-8">
                            <h3>8. Cum stiu care este cel mai potrivit agent pentru mine?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Din pacate, piata imobiliara de azi nu are o legislatie specifica in ceea ce priveste activitatea de intermediere imobiliara, meseria de agent imobiliar putand fi practicata fara restrictii de catre orice persoana. Astfel, profesionistii si neprofesionistii coabiteaza in cadrul unui sector inca tanar al economiei romanesti. Specializarea continua,&nbsp;presiunea concurentei&nbsp;care a scuturat puternic piata, au adancit prapastia intre cele doua categorii, diferentele dintre acestea fiind evidente. Este mult mai usor astazi sa deosebesti un agent imobiliar profesionist de un neprofesionist si in acest sens iti prezentam mai jos cateva linii clare care delimiteaza cele doua categorii:<br><br>
                                <ul>
                                    <li>un profesionist lucreaza pentru tine, nu pentru comision;</li>
                                    <li>un profesionist te va sfatui ce este cel mai bine sa faci, nu iti va impune ce trebuie sa faci;</li>
                                    <li>un profesionist are prestanta si standarde de lucru;</li>
                                    <li>un profesionist are abilitati de comunicare si stapaneste la perfectie tehnicile de negociere;</li>
                                    <li>un profesionist iti va oferi un pachet de servicii complet si personalizat;</li>
                                    <li>un profesionist are intotdeauna o echipa de specialisti in spatele lui care ii sustin activitatea;</li>
                                    <li>un profesionist este reprezentantul unui brand de succes nu este un anonim.</li>
                                </ul>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-9">
                            <h3>9. Cum sa-mi conving vizitatorii sa cumpere?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Ai urmat toti pasii prezentati mai sus si ai ajuns la etapa de vizionare. Este momentul sa lasi apartamentul sa vorbeasca in locul tau. Evident, acest lucru nu inseamna ca poti sta comod pe canapea, total dezinteresat de ceea ce se intampla in jurul tau. Trebuie sa fii parte activa a procesului de vizionare, iar pentru ca vizitatorii tai trebuie sa inceapa sa se simta ca acasa in apartamentul tau si sa fie sedusi iremediabil de acesta, trebuie sa ai un comportament ireprosabil.<br><span><br>Sa castigi "batalia emotionala” este mult mai important decat oricare element al vanzarii unui apartament. Suntem oameni, suntem condusi de emotii si actionam in directia satisfacerii dorintelor. Pe de alta parte, rationalul intervine pentru a echilibra balanta fiecaruia, insa de atunci cand emotionalul depaseste o anumita bariera, individul reuseste sa gaseasca resurse suplimentare pentru a-si indeplini dorinta. La fel se intampla si in cazul apartamentului tau. Lasa-l pe cumparator sa se indragosteasca si va cumpara.</span></div>
                        </article>
                        <article class="question-article cf" id="question-10">
                            <h3>10. Eu vreau sa obtin cel mai mare pret, de ce sa negociez?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Hai sa pornim de la pretul apartamentului tau. Stii ca exista mai multe tipuri de pret.<span><br><br>In primul rand vorbim despre pretul solicitat de tine, vanzatorule, care reflecta intr-un mod subiectiv suma de bani pe care o doresti pentru proprietatea ta si care este in general mai mare decat valoarea de piata a apartamentului tau. <br><br>Eroarea este scuzabila tinand cont de toate evenimentele, toate emotiile pe care le-ai adunat de-a lungul vietii si care te fac acum sa consideri ca apartamentul tau valoreaza mai mult decat altele, numai pentru motivul ca tu ai locuit acolo.<br><br></span><b>Pretul evaluat</b>&nbsp;al apartamentului tau, care releva valoarea estimata a acestuia, stabilita de un specialist Blitz&nbsp; sau de catre un evaluator autorizat, folosind procedee si mijloace specifice.<span><br><br></span><b>Pretul public</b><span>&nbsp;reprezinta valoarea la care va fi listat pe piata apartamentul tau. Aceasta valoare este de obicei cu 5-10% mai mare decat valoarea de tranzactionare.<br><br></span><b>Pretul de vanzare</b><span><b>&nbsp;</b>reprezinta pretul la care se va tranzactiona apartamentul tau si care va fi consemnat in contractul de vanzare-cumparare.<br></span><br><b>Pretul conform grilei</b>,<span>&nbsp;reprezinta o valoare estimata pentru anumite zone ale fiecarei localitati si pentru fiecare tip de proprietate in parte, valoare ce se regaseste in “grila notariala”, un document elaborat la nivel central, care stabileste preturi orientative pentru proprietatile imobiliare.<br><br></span>Analizand cele expuse mai sus, pretul evaluat de specialistii nostri sau de catre un expert evaluator imobiliar este cel mai apropiat de pretul la care apartamentul se va tranzactiona. Acesta va fi tinta ta in cadrul etapei de negociere.<br><br><b>Atentie!</b>&nbsp;Negocierea nu inseamna exclusiv negocierea pretului de vanzare. Conditiile vanzarii sunt la fel de importante si ele fac parte din procesul de negociere: facilitatile de plata (prin credit bancar, plata in rate, sau plata la termen), timpul de eliberare a apartamentului (o luna petrecuta in plus in apartamentul pe care l-ai vandut te scuteste de la plata unei chirii) etc.<br></div>
                        </article>
                        <article class="question-article cf" id="question-11">
                            <h3>11. Ce variante de plata sa accept pentru vanzarea apartamentului meu?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span>Pentru vanzarea apartamentului tau variantele de plata sunt multiple fiecare dezavantaj aparent pe care il prezinta oricare dintre acestea, putandu-se transforma intr-un avantaj daca tii cont de recomandarile specialistilor Blitz. Variantele de plata sunt:<br><br>
                                    <ul>
                                        <li>plata integrala;</li>
                                        <li>plata prin credit bancar;</li>
                                        <li>plata esalonata, numarul de rate putand sa difere de la un caz la altul.</li>
                                    </ul><span>Avantajul&nbsp;<b>platii integrale</b>, il reprezinta eliminarea riscului unor intarzieri ulterioare. Beneficiind de intreaga suma, poti investi in orice moment intr-o afacere sau intr-o alta proprietate imobiliara, fara nicio constrangere financiara. Varianta de plata integrala poate fi cash, caz in care vei primi intreaga suma de bani la notar, in momentul semnarii contractului de vanzare-cumparare sau prin transfer bancar, ceea ce poate insemna o intarziere de 2-3 zile.<br></span><span><br><b>Plata prin credit bancar</b>,&nbsp;poate duce de exemplu, la intarzieri de peste o luna pana la primirea sumei de bani, ca in cazul creditului Prima Casa, intarzieri datorate procesului de aprobare a creditului si de acordare a finantarii.<br></span><span><br><b>Plata esalonata</b>, un plus decisiv pe care-l poti acorda cumparatorilor in cadrul procesului de negociere, nu trebuie privita neaparat ca pe un dezavantaj. Atat plata esalonata cat si plata prin credit bancar iti ofera o perioada de timp suplimentara pentru a identifica cea mai buna varianta pentru a-ti investi banii. in cazul in care suma obtinuta o vei reinvesti in achizitia unei alte proprietati imobiliare, timpul va juca in favoarea ta, pentru ca o investitie imobiliara necesita in primul rand, timp si echilibru.</span>
                                    <div><br></div>
                                </span></div>
                        </article>
                        <article class="question-article cf" id="question-12">
                            <h3>12. Ce documente imi sunt necesare atunci cand imi vand apartamentul?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                La vanzarea apartamentului tu, in calitate de vanzator trebuie sa prezinti urmatoarele documente:<br><b>Alege vanzarea pe cont propriu atunci cand:<br><br></b>
                                <ul>
                                    <li>actul de proprietate asupra apartamentului, care poate fi dupa caz: contract de vanzare-cumparare, certificate de mostenitor, contract de donatie, sentinta civila definitiva si irevocabila etc;</li>
                                    <li>extrasul de carte funciara, care se obtine de catre biroul notarial de la Oficiul de Carte Funciara din cadrul Agentiei Nationale de Cadastru si Publicitate Imobiliara si este valabil 10 zile de la data depunerii cererii. Extrasul de carte funciara este documentul care certifica datele de identificare ale unei proprietati, precum si situatia juridica a acesteia (daca este sau nu ipotecata, daca exista sau nu interdictii de instrainare, etc.);</li>
                                    <li>certificatul fiscal, care se obtine de la Administratia Financiara si care certifica faptul ca proprietarul este la zi cu darile fata de stat (impozite, taxe, amenzi, etc.);</li>
                                    <li>adeverinta de la asociatia de proprietari, care sa arate ca proprietarul este la zi cu plata cheltuielilor de intretinere, de reparatii sau alte cheltuieli comune;</li>
                                    <li>certificatul energetic, document care atesta performanta energetic a cladirii;</li>
                                    <li>adeverinta de la Electrica, care sa arate ca proprietarul este cu platile la zi;</li>
                                    <li>actele de identitate ale proprietarilor;</li>
                                    <li>certicatul de casatorie (dupa caz);</li>
                                    <li>declaratie de la primarie (dupa caz) cu specificarea ca imobilul nu este revendicat sau notate procese in circuitul civil, in situatia in care imobilul a fost dobandit in baza Legii 10 sau 112.</li>
                                </ul>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-13">
                            <h3>13. Ce taxe trebuie sa platesc atunci cand imi vand apartamentul?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span>Atunci cand iti vinzi apartamentul trebuie sa platesti:&nbsp;<b>impozitul pe tranzactii imobiliare, comisionul agentiei imobiliare si taxa pentru certificatul de energetic.</b><br></span><br>In functie de
                                pretul de vanzare al imobilului, in calitate de vanzator,
                                trebuie sa platesti impozitul pe venituri din tranzactii
                                imobiliare, care se calculeaza astfel:
                                <br><span><br>- 3% din ceea
                                    ce depaseste suma de 450.000 Lei. <br><br>Astfel, pentru tranzactiile a
                                    caror valoarea se situeaza sub pragul de 450000 lei nu se achita
                                    impozit pentru vanzarea acestora. <br><br></span>
                                De exemplu,
                                daca pretul de vanzare al unui imobil este de 500.000 lei,
                                impozitul pe care trebuie sa il achiti se va calcula astfel:
                                <br><span><br>3% din
                                    (500.000 lei - 450.000 lei) = 3% din 50.0000 lei = 1500 lei.&nbsp;</span>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <div class="ghid-page-content">
                        <h1><span class="guide-buyer-icon"></span>Ghidul Cumparatorului de Apartamente</h1>
                        <nav class="guide-page-nav">
                            <ul>
                                <li><a href="#question-1">1. Ce etape trebuie să parcurg pentru a cumpăra un apartament?</a></li>
                                <li><a href="#question-2">2. De ce să colaborez cu un agent imobiliar?</a></li>
                                <li><a href="#question-3">3. Cum aleg cel mai bun agent imobiliar?</a></li>
                                <li><a href="#question-4">4. Cum aflu ce apartament imi trebuie?</a></li>
                                <li><a href="#question-5">5. Ce surse de finanțare pot accesa și care sunt modalitățile mele de plată atunci când cumpăr un apartament?</a></li>
                                <li><a href="#question-6">6. Ce înseamnă cu adevărat o zonă bună pentru mine?</a></li>
                                <li><a href="#question-7">7. Ce să aleg, un apartament vechi sau un apartament nou?</a></li>
                                <li><a href="#question-8">8. La ce trebuie să mă uit atunci când vizionez un apartament?</a></li>
                                <li><a href="#question-9">9. Să fac o ofertă scrisă sau una verbală?</a></li>
                                <li><a href="#question-10">10. Cum pot negocia prețul apartamentului?</a></li>
                                <li><a href="#question-11">11. Ce documente trebuie să solicit vânzătorului înainte de a semna contractul de vânzare-cumpărare?</a></li>
                                <li><a href="#question-12">12. Ce alte costuri presupune cumpărarea unui apartament?</a></li>
                            </ul>
                        </nav>
                        <article class="question-article cf" id="question-1">
                            <h3>1. Ce etape trebuie să parcurg pentru a cumpăra un apartament?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Atunci când cumperi un apartament, pentru tine și familia ta, este important să parcurgi câțiva pași astfel încât procesul de cumpărare să se desfășoare într-un mod organizat. Etapele pe care specialiștii noștri ți le vor prezenta pe parcursul acestui ghid sunt orientative (nu neapărat în ordine cronologică) și urmându-le ca atare, vei putea cu siguranță să faci cea mai bună alegere, conform nevoilor tale locative și bugetului de care dispui.<br><br><b>Specialiștii Blitz îți recomandă să parcurgi 8 etape:<br><br></b>
                                <ul>
                                    <li>Identificarea nevoilor locative;</li>
                                    <li>Conturarea bugetului, stabilirea surselor de finanțare;</li>
                                    <li>Alegerea echipei cu care urmează să colaborezi: agentul imobiliar, brokerul de credite, consilierul juridic, specialistul în amenajări interioare;</li>
                                    <li>Etapa de selecție- stabilirea criteriilor generale pe care trebuie să le îndeplinească apartamentul căutat: zonă, preț, număr de camere și dispunerea acestora, gradul de finisare, etc;</li>
                                    <li>Vizionarea ofertelor selectate;</li>
                                    <li>Elaborarea și prezentarea ofertei de cumpărare (oferta de preț, modalități de plată facilități);</li>
                                    <li>Negocierea;</li>
                                    <li>Finalizarea tranzacției de vânzare-cumpărare.</li>
                                </ul>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-2">
                            <h3>2. De ce să colaborez cu un agent imobiliar?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Am ales să demarăm procesul de cumpărare a apartamentului tău cu acest aspect, al colaborării cu un agent imobiliar, pentru că un profesionist îți va oferi cele mai bune sfaturi încă din fazele incipiente ale cumpărării. Specialiștii Blitz îți vor oferi un pachet personalizat de servicii, adaptat cerințelor tale, începând cu identificarea nevoilor tale locative și continuând cu celelalte etape prezentate mai sus.<br><br>De ce să colaborezi cu un specialist Blitz?&nbsp; Îți vom oferi mai jos câteva din argumentele care te vor ajuta sa gasesti răspunsul la această întrebare:<br><br>
                                <ul>
                                    <li><span><b>Pentru a avea acces la informații</b>.&nbsp;</span>Specialiștii noștri îți vor oferi informații prețioase legate de prețurile la care s-au tranzacționat alte oferte în zona selectată de tine, perioada cea mai potrivită pentru a face o achiziție, timpul de când o anumită ofertă este listată pe piață, precum și de istoricul și caracteristicile zonei unde dorești să cumperi un apartament;</li>
                                    <li><b>Pentru a avea acces la oferte</b>.&nbsp;Specialiștii noștri îți vor deschide ușile. Astfel tu vei avea posibilitatea de a viziona într-un interval de timp rezonabil mai multe apartamente, fiecare dintre ele răspunzând solicitărilor tale într-o mare măsură;</li>
                                    <li><span><b>Pentru a câștiga timp.</b>&nbsp;</span>Timpul este foarte prețios atât pentru tine cât și pentru specialiștii noștri. De aceea ei vor identifica pentru tine cele mai bune variante în cel mai scurt posibil și vei putea astfel alege dintre acestea apartamentul perfect pentru tine și familia ta;</li>
                                    <li><span><b>Pentru a câștiga încredere.</b>&nbsp;</span>Apelând la serviciile specialiștilor noștri nu vei călca pe un teren minat, apartamentele prezentate fiind vizionate inițial de către aceștia. Este foarte important să nu intri într-un apartament legat la ochi, specialiștii noștri punându-ți la dispoziție prezentări explicite ale acestuia, în format text, foto și video;</li>
                                    <li><span><b>Pentru a câștiga bani,</b>&nbsp;</span>specialiștii noștri negociind pentru tine cel mai bun preț pentru apartamentul selectat;</li>
                                    <li><span><b>Pentru a câștiga siguranță,</b>&nbsp;</span>tranzacția de vânzare-cumpărare desfășurându-se conform normelor legale în vigoare. În acest sens, specialiștii noștri vor verifica toate documentele apartamentului selectat (poți studia lista acestor documente mai jos, în cadrul ghidului. Vezi secțiunea "Ce documente trebuie să solicit vânzătorului înainte de a semna contractul de vânzare-cumpărare?").</li>
                                </ul>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-3">
                            <h3>3. Cum aleg cel mai bun agent imobiliar?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Alegerea agentului imobiliar care să te reprezinte este unul din momentele cheie ale procesului tranzacțional, pentru că de el depinde desfășurarea ulterioară a evenimentelor. Poți face o alegere proastă sau una inspirată, iar apartamentul pe care-l vei cumpăra va fi un eșec total sau un adevărat succes. Depinde numai de tine și de modul în care tratezi acest aspect.<br><br>Hai să facem o primă selecție, între un profesionist și un oportunist, pentru că piața imobiliară românească din păcate este foarte permisivă, oferind posibilități nelimitate de acțiune atât agenților imobiliari profesioniști, cât și celor de ocazie. Modalitățile de selecție sunt multiple, de la contactul direct, până la cel telefonic, recomandări, prezența în mediul online și offline, apartenența la un brand etc. Este mult mai ușor astăzi să deosebești un profesionist de un agent de ocazie, pentru că numărul celor din urmă s-a redus semnificativ în anii de criză imobiliară pe care i-am traversat. Din acest punct de vedere putem afirma cu tărie că, pentru piața imobiliară românească a fost benefică perioada de criză imobiliară, pentru că au rezistat doar companiile mari, cu serioase resurse financiare și umane.<br><br>Va fi mult mai greu să alegi cel mai bun agent imobiliar care să te reprezinte dintre adevărații profesioniști și cei care-și spun profesioniști.<br><br><b>Un auto-intitulat profesionist:<br><br></b>
                                <ul>
                                    <li>Își va negocia comisionul doar pentru a încheia tranzacția, făcând astfel o concurență neloială pe piață;</li>
                                    <li>Va apela la forme de publicitate falsă, pentru a-și atrage clienții;</li>
                                    <li>Te va abandona dacă nu te vei decide asupra apartamentului încă de la prima întâlnire;</li>
                                    <li>Pentru că nu va ști să identifice care sunt nevoile tale locative, îți va oferi variante atât de diferite încât nu vei mai ști ce vrei să cumperi. În plus te va convinge să-ți schimbi opțiunile doar pentru a selecta una din ofertele din lista sa;</li>
                                    <li>Nu va fi interesat de parteneriate de durată.</li>
                                </ul><b>Un specialist Blitz:<br><br></b>
                                <ul>
                                    <li>Va lucra pentru tine, nu pentru comision, în direcția satisfacerii nevoilor tale locative. Comisionul va veni ca o consecință a activității bine-prestate, în spiritul relației de câștig-câștig;</li>
                                    <li>Te va asista pe parcursul întregului proces de cumpărare a apartamentului tău;</li>
                                    <li>Îți va oferi un număr limitat de oferte, care reprezintă soluții pentru tine, nu oferte brute, numeroase și deviante de la solicitările tale;</li>
                                    <li>Va stabili cu tine un program organizat de vizionare și va comprima la maxim intervalul de timp necesar acestei etape;</li>
                                    <li>Te va ajuta să pregătești o ofertă de preț cu care să nu dai greș;</li>
                                    <li>Va negocia pentru tine cel mai bun preț și cele mai bune condiții de plată;</li>
                                    <li>Îți va oferi servicii complementare: asistență financiar-bancară și consiliere juridică;</li>
                                    <li>Împreună cu tine, va pune bazele unui parteneriat pe termen lung.</li>
                                </ul>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-4">
                            <h3>4. Cum aflu ce apartament imi trebuie?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Identificarea nevoii locative reprezintă o problemă pe cât de sensibilă, pe atât de tehnică și de solicitantă, pentru că acesta este punctul de plecare în procesul de cumpărare a apartamentului tău. În momentul în care te-ai hotărât să cumperi un apartament, de multe ori nici tu nu știi exact ce tip de apartament ți se potrivește și în ce zonă. Cel mai simplu răspuns la problema ta imobiliară este un apartament spațios, finisat, bine-poziționat și ieftin.<br><br>Pornind de la acest clișeu îți prezentăm mai jos motivele pentru care poți renunța oricând la una sau mai multe din cele 4 pretenții, iar rezultatul final va fi un apartament potrivit atât pentru nevoile tale actuale cât și pentru cele viitoare.<br><br>
                                <ul>
                                    <li>Uneori un apartament prea mare reprezintă un inconvenient major, spațiul pe care ulterior îl vei descoperi ca fiind excedentar necesitând eforturi financiare considerabile, atât în faza de achiziție cât și pentru întreținere. De ce să plătești pentru un spațiu pe care nu-l folosești, aceasta ar trebui să fie una din întrebările la care să ai răspunsul pregătit înainte de a-l cumpăra.&nbsp;<span><b>Sfat: atenție la dimensiunile apartamentului cumpărat!</b>&nbsp;</span>Oare chiar ai nevoie de o suprafață atât de generoasă? Gândește-te și la costurile pe care acest lucru le presupune.</li>
                                    <li>Fiecare cumpărător, mai devreme sau mai târziu, în funcție de bugetul de care dispune, își va personaliza apartamentul conform propriilor gusturi. La fel vei face și tu, și de aceea nu trebuie să plătești pentru finisaje pe care la un moment dat le vei îndepărta.&nbsp;<span><b>Sfat: nu cumpăra un apartament doar pentru că este frumos ambalat!</b>&nbsp;</span>În viitor vei folosi și ambalajul sau numai produsul?</li>
                                    <li>Un apartament bine-poziționat este prioritatea ta numărul unu. Trebuie să știi că, la fel de bună ca o zonă deja consacrată, poate fi și o zonă aflată în plină dezvoltare. Diferențele de preț între cele două zone astăzi sunt mari, dar peste o perioadă de timp, atunci când tu vei dori să vinzi, probabil aceste diferențe se vor diminua.&nbsp;<b>Sfat: cumpără un apartament situat într-o zonă bună!</b></li>
                                    <li>Cine nu-și dorește un apartament ieftin? Însă, în spatele unui preț mic se pot ascunde vicii pe care singur nu le vei putea descoperi.&nbsp;<b>Sfat: un profesionist cunoaște toate problemele unui apartament; nu ezita să apelezi la serviciile specialiștilor noștri!</b></li>
                                </ul>Specialiștii Blitz te vor ajuta să cumperi cel mai bun apartament, identificând atât nevoile tale actuale de locuire, cât și pe cele din viitorul apropiat. Astfel nu vei fi nevoit să îți schimbi apartamentul mai devreme decât ți-ai propus, doar pentru că planurile tale s-au modificat între timp. Un specialist știe ce întrebări să-ți adreseze, în ce situații să te pună, astfel încât să descopere inclusiv acele nevoi ascunse pe care nici măcar tu nu le știai.
                            </div>
                        </article>
                        <article class="question-article cf" id="question-5">
                            <h3>5. Ce surse de finanțare pot accesa și care sunt modalitățile mele de plată atunci când cumpăr un apartament?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Cele mai întâlnite modalități de plată în tranzacțiile de vânzare-cumpărare de pe piața imobiliară românească sunt: plata integrală și creditul ipotecar. Există și alte modalități prin care îți poți îndeplini visul, acela de a cumpăra un apartament, și ți le vom prezenta pe toate în cele ce urmează:<br><br>
                                <ul>
                                    <li><span><b>Plata integrală.</b>&nbsp;</span>Este cea mai fericită situație, în care beneficiezi de întreaga sumă de bani și pe care o vei înmâna vânzătorului la notar, în momentul semnării contractului de vânzare-cumpărare. Dacă plata se face prin transfer bancar, diferența este că vânzătorul își va primi banii cu o întârziere de câteva zile;</li>
                                    <li><b>Plata în rate.&nbsp;</b>Există situații în care vânzătorul, persoană fizică sau juridică, acceptă varianta de plată în rate, bazându-se pe bonitatea financiară a cumpărătorilor. Este și o modalitate "eleganta" de a evita comisioanele și dobânzile bancare;</li>
                                    <li><b>Creditul Prima Casă.&nbsp;</b>A fost aproape singura soluție financiară acceptabilă pentru cumpărarea unei locuințe în perioada de criză imobiliară. Avantajele creditului Prima Casă față de un credit ipotecar obișnuit constau în faptul că avansul minim este de numai 5%, iar statul preia o parte din riscurile bancare. De asemenea, nivelul dobânzilor este limitat iar creditarea se face doar în lei (conform ultimilor modificări ale normelor programului);</li>
                                    <li><span><b>Creditul ipotecar clasic.</b>&nbsp;</span>A devenit în ultima perioadă mult mai interesant, în condițiile în care costurile de creditare pentru un credit ipotecar clasic în euro sunt mai reduse decât costurile unui credit Prima Casă în lei. Acest lucru înseamnă o rată lunară mai mică și o sumă totală de rambursat inferioară decât în cazul unui credit garantat de stat. Singurul dezavantaj al acestui tip de credit este avansul solicitat, de minim 25% din valoarea apartamentului achiziționat.</li>
                                    <li><b>Economisire-creditare.&nbsp;</b>Este o variantă interesantă pentru acei cumpărători care privesc achiziționarea locuinței ca pe un proces de durată. Acest produs bancar, oferit de bancile pentru locuinte, presupune o perioadă de economisire, în care clientul acumulează capital în contul său, și o perioadă de creditare, în care clientul primește dublul sumei acumulate, ratele la creditul din perioada a doua fiind egale cu sumele lunare depuse în perioada de economisire.</li>
                                    <li><span><b>Rent-to-buy.</b>&nbsp;</span>Este o varianta recent introdusă pe piața imobiliară românească și care, așa cum o arată și termenul "rent-to-buy” (închiriază pentru a cumpăra), presupune o perioadă inițială de închiriere, limitată la 1-2 ani, după care chiriașul devine cumpărător, iar chiriile lunare deja plătite constituie avansul pentru cumpărarea respectivului apartament.</li>
                                </ul>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-6">
                            <h3>6. Ce înseamnă cu adevărat o zonă bună pentru mine?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Piața imobiliară americană, poate cea mai dezvoltată dintre piețele imobiliare ale lumii, este guvernată de principiul conform căruia, cele mai importante trei aspecte pe care trebuie să le urmărească un cumpărător atunci când își caută o locuință sunt: "location, location, location" (locație, locație, locație). Și este și normal să fie așa, dacă luăm în considerare faptul că, atunci când cumperi un apartament, el trebuie să corespundă cerințelor tale actuale și, în același timp, să constituie și o investiție pe termen lung.<br><br>Pentru a-ți răspunde la întrebarea de mai sus, într-un mod corect și complet, vom analiza cele două dimensiuni:<br><br>
                                <ul>
                                    <li><b>Care sunt cerințele tale actuale în ceea ce privește zona unde îți dorești să cumperi?</b></li>
                                </ul>Consilierii Blitz, datorită experienței și pregătirii specifice, vor identifica cu ușurință care sunt cerințele tale cu privire la zona preferată. Este posibil, de exemplu, să ai o viață activă și să ți se potrivească zona centrală a orașului. Sau, poate ești un familist convins și o zonă cu facilități multiple, grădinițe, școli, centre comerciale, parcuri, spații de joacă etc, este exact ceea ce îți dorești. În fine, poate vrei să te retragi într-o zonă liniștită, să scapi de agitația orașului, și atunci îți vom recomanda un cartier mai liniștit sau chiar unul nou, situat la marginea pădurii sau într-una din localitățile vecine.<br><br>Pentru oricare dintre variante, avem soluții reale pentru tine.<br><br>
                                <ul>
                                    <li><b>Cum să investești deștept în cumpărarea unui apartament din punct de vedere locativ?</b></li>
                                </ul>În ceea ce privește latura investițională, ea nu este deloc de neglijat, mai ales în condițiile în care, în viitor, nevoile tale locative se vor schimba. În momentul în care vei dori altceva, un apartament mai spațios sau, de ce nu, unul mai mic și cochet, va trebui să vinzi. De aceea este foarte important să alegi inteligent. Specialiștii Blitz îți vor oferi cea mai bună soluție pentru nevoile tale curente și, în același timp, apartamentul tău va fi plasat într-o zonă cu potențial de creștere în viitor, în condiții normale de piață.<br><span><br>Apartamentul cumpărat azi reprezintă o investiție în viitor.</span>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-7">
                            <h3>7. Ce să aleg, un apartament vechi sau un apartament nou?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Îți vom prezenta în cele ce urmează o analiză comparată între apartamentele vechi și cele noi, cu plusurile și minusurile pe care le au unele față de celelalte, astfel încât să faci cea mai bună alegere pentru tine și familia ta:<br><br><b>De ce sunt mai bune apartamentele vechi?<br><br></b>
                                <ul>
                                    <li>pentru că sunt situate în zone rezidențiale bune, în cartierele clasice din interiorul orașului;</li>
                                    <li>pentru că te poți muta imediat;</li>
                                    <li>pentru că accesul la facilitățile zonei este ușor; magazine, școli, grădinițe, mijloace de transport în comun, drumuri modernizate, parcuri, locuri de joacă, terenuri de sport, etc;</li>
                                    <li>pentru că în zonele clasice, de regulă, nu se dezvoltă alte proiecte imobiliare, deci ești scutit de disconfortul creat de activitățile de șantier;</li>
                                    <li>pentru că suprafețele locuințelor sunt mai reduse, deci prețurile/unitate sunt mai mici; astfel locuințele din blocurile vechi sunt mai accesibile din punct de vedere financiar, iar mărturie în acest sens stă faptul că marea majoritate a locuințelor cumpărate prin programul Prima Casă sunt în blocurile construite în perioada comunistă.</li>
                                </ul><b>De ce sunt mai bune apartamentele noi?<br><br></b>
                                <ul>
                                    <li>pentru că dispun de suprafețe generoase satisfăcând astfel cerințele legate de confortul personal;</li>
                                    <li>pentru că sunt situate la marginea orașelor și în zone verzi, împădurite, oferind liniște celor care s-au săturat de zgomotul și agitația orașului;</li>
                                    <li>pentru că există posibilități mai mari de parcare decât în cazul blocurilor vechi;</li>
                                    <li>pentru că materialele folosite atât la construcția propriu-zisă, cât și la finisajele interioare sunt de o calitate superioară;</li>
                                    <li>pentru că normele de construcție impun structuri rezistente la calamitățile naturale, cum ar fi cutremurele și astfel vei fi mai ferit de astfel de riscuri;</li>
                                    <li>pentru că zonele noi sunt în creștere și astfel vei face și o investiție bună în viitor.</li>
                                </ul>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-8">
                            <h3>8. La ce trebuie să mă uit atunci când vizionez un apartament?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Atunci când vizionezi un apartament, în primul rând trebuie să fii atent la detaliile tehnice generale ale acestuia, respectiv, la numărul de camere și dispunerea acestora, numărul de băi, orientarea în funcție de punctele cardinale, starea instalațiilor termice și electrice, starea pereților, starea generală a blocului, vecinătățile, etc.<br><br>Sunt mici șansele ca și unui ochi neavizat să-i scape aceste elemente încă de la prima vizionare. Există în schimb o altă serie de lucruri pe care n-ar trebui să le ignori atunci când vizionezi un apartament, lucruri aparent minore, dar care pot face diferența între o achiziție bună și una mai puțin bună.<br><br>De exemplu, încă înainte de intrarea în bloc, poți observa dacă există sau nu locuri de parcare suficiente în zonă, dacă spațiul verde din fața blocului este sau nu îngrijit, dacă aleea principală este proaspăt măturată, dacă imaginea de ansamblu a blocului unde este situat apartamentul tău și a blocurilor din jur este cea a unei zone în care ți-ai dori să locuiești. Pătrundem apoi în casa scării, care ar trebui să fie curată, bine iluminată și fără mirosuri neplăcute. Atenție la panoul de afișaj! Câți dintre viitorii tăi vecini au centrale proprii de apartament? Câți au restanțe la întreținere? Nu vrei să locuiești într-un bloc ce riscă în orice moment să fie decuplat de la utilități pentru neplata facturilor.<br><span><br>Am ajuns și în viitorul tău apartament. Ce aspecte minore nu trebuie să ratezi? Vezi dacă ai posibilitatea de a efectua modificări ale spațiului interior, dacă există unele camere mai luminoase decât altele, dacă baia are sau nu geam, dacă balconul îți oferă o priveliște plăcută, dacă elementele de finisaj și de amenajări interioare care îți vor rămâne ție sunt de bună calitate și merită să plătești pentru ele.</span></div>
                        </article>
                        <article class="question-article cf" id="question-9">
                            <h3>9. Să fac o ofertă scrisă sau una verbală?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Unii cumpărători își prezintă oferta de cumpărare verbal, la câteva minute după ce abia au intrat în apartamentul ofertat. Este o modalitate ieftină și neprofesionistă prin care încearcă să “ia pulsul” vânzătorului. Suntem de acord însă că în etapa de negociere cumpărătorul este partea mai activă a procesului de vânzare, dar nu este nevoie să “harțuiesti” vânzătorul cu orice preț pentru a-ți îndeplini misiunea, pentru că vei avea surpriza ca acesta să reacționeze negativ și să te elimine de pe lista posibililor cumpărători.<br><br>Specialiștii Blitz&nbsp; îți recomandă să prezinți vânzătorului o ofertă elaborată, completă și corectă, dar nu înainte de a viziona apartamentul împreună cu toți membrii familiei, astfel încât decizia de cumpărare să fie unanimă. De asemenea, nu este indicat să prezinți o ofertă de preț înainte de a te consulta cu agentul tău imobiliar.<br><br>Nu trebuie să ofertezi fiecare apartament vizionat, ci trebuie să identifici acea ofertă care ți se potrivește cel mai bine și care corespunde nevoilor tale și ale familiei și să te concentrezi strict asupra ei.<br><br>O ofertă verbală, are avantajul de a fi dezbătută de cele două părți chiar în momentul prezentării, putându-se rezolva unele obiecții apărute, într-un timp foarte scurt. Dezavantajul unei astfel de oferte este că timpul de reacție al vânzătorului este redus la limită și răspunsul acestuia s-ar putea să nu-ți fie favorabil.<br><span><br>În schimb, o ofertă scrisă beneficiază de avantajul că răspunsul vânzătorului va veni după analiza atentă a acesteia. Vânzătorul are posibilitatea de a citi și reciti oferta ta și de a lua cea mai bună decizie fără presiunea momentului, în deplină cunoștință și înțelegere a tuturor elementelor pe care le conține oferta de cumpărare. O ofertă scrisă este, de asemenea, o variantă mult mai profesională și astfel vânzătorul va trage concluzii care-ți vor fi favorabile, cum ar fi: intenția reală de cumpărare, seriozitatea, siguranță, etc.</span></div>
                        </article>
                        <article class="question-article cf" id="question-10">
                            <h3>10. Cum pot negocia prețul apartamentului?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Etapa de negociere a prețului este etapa de maximă încărcătură emoțională și nervoasă în cadrul procesului de cumpărare a unui apartament. Specialiștii Blitz vor negocia pentru tine cel mai bun preț posibil, ținând cont de mai multe aspecte, beneficiind de informații valoroase despre apartamentele pe care le au în portofoliu și folosind tehnici de negociere specifice:<br><br>
                                <ul>
                                    <li>vom negocia un preț cu atât mai bun cu cât perioada de timp de când respectivul apartament este listat pe piață este mai mare;</li>
                                    <li>vom negocia un preț mai bun cu cât dorința de a vinde a vânzătorului este mai mare;</li>
                                    <li>vom negocia un preț mai bun cu cât nevoia de lichidități a vânzătorului este mai ridicată;</li>
                                    <li>vom negocia un preț mai bun dacă varianta de plată oferită corespunde solicitărilor vânzătorului;</li>
                                    <li>vom negocia un preț mai bun dacă vânzătorul, atașat emoțional de apartamentul său, va citi în atitudinea cumpărătorului același atașament;</li>
                                    <li>vom negocia un preț mai bun dacă vom da dovadă în cadrul acestei etape de flexibilitate și deschidere.</li>
                                </ul>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-11">
                            <h3>11. Ce documente trebuie să solicit vânzătorului înainte de a semna contractul de vânzare-cumpărare?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Este obligatoriu ca tranzacția de vânzare-cumpărare să se desfășoare respectând toate normele și procedurile legale, în condiții de maximă siguranță pentru părți. În acest sens, verificarea documentelor devine o sarcină pe cât de importantă, pe atât de complicată pentru un cumpărător neavizat. Apelând la serviciile Blitz, vei beneficia și de această facilitate în cadrul pachetului personalizat pe care ți-l vom oferi. Specialiștii noștri sunt în măsură să-ți prezinte, sau să solicite în numele tău, lista de documente necesare pentru identificarea apartamentului, a proprietarilor, a viciilor juridice (dacă acestea există) și a oricăror alte aspecte pe care tu, cu siguranță ai dificultăți în a le descoperi.<br><br>
                                <ul>
                                    <li><span><b>Actul de proprietate asupra apartamentului</b>,&nbsp;</span>care poate fi după caz: contract de vânzare-cumpărare, certificate de moștenitor, contract de donație, sentință civilă definitivă și irevocabilă, etc;</li>
                                    <li><span><b>Extrasul de carte funciară</b>,&nbsp;</span>care se obține de către biroul notarial de la Oficiul de Carte Funciară din cadrul Agenției Naționale de Cadastru și Publicitate Imobiliară și este valabil 10 zile de la data depunerii cererii. Extrasul de carte funciară este documentul care certifică datele de identificare ale unei proprietăți, precum și situația juridică a acesteia (dacă este sau nu ipotecată, dacă există sau nu interdicții de înstrăinare, etc.);</li>
                                    <li><span><b>Documente care certifică faptul că vânzătorul nu are datorii</b>&nbsp;</span>în legătură cu apartamentul vândut (certificatul fiscal, care se obține de la Administrația Financiară și care confirmă faptul că proprietarul este la zi cu dările față de stat; adeverință de la asociația de proprietari, care să arate că proprietarul este la zi cu plata cheltuielilor de întreținere, de reparații sau alte cheltuieli comune; adeverință de la Electrica, care să arate că proprietarul este cu plățile la zi;</li>
                                    <li><b>Certificatul energetic</b>,&nbsp;document care atestă performanța energetică a clădirii, prezentarea acestuia devenind o obligație legală a vânzătorului începând cu 2013;</li>
                                    <li><b>Declarație de la primărie&nbsp;</b>(după caz) cu specificarea că imobilul nu este revendicat sau notate procese în circuitul civil, in situația în care imobilul a fost dobândit în baza Legii 10 sau 112.</li>
                                    <li><b>Actele de identitate ale vânzătorilor</b></li>
                                </ul>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-12">
                            <h3>12. Ce alte costuri presupune cumpărarea unui apartament?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Cumpărarea unui apartament presupune, în afara costului de achiziție stabilit împreună cu vânzătorul și evidențiat în contractul de vânzare-cumpărare, câteva costuri suplimentare pe care nu trebuie să le ignori atunci când îți stabilești bugetul.<br><br>
                                <ul>
                                    <li><b>Comisionul agenției imobiliare;</b></li>
                                    <li><b>Comisionul și alte taxe bancare</b>, în cazul în care îți cumperi apartamentul accesând un credit ipotecar;</li>
                                    <li><span><b>Taxele notariale</b>&nbsp;</span>(taxele de intăbulare, onorariul notarului);</li>
                                    <li><b>Costuri post-vânzare</b>, pe care trebuie să le iei în calcul pentru că va trebui să le achiți începând cu prima lună: rata lunară, cheltuieli de reparații și reamenajare, cheltuieli de întreținere, impozitul pe bunuri imobile, asigurarea obligatorie a locuinței.</li>
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

                    <div class="ghid-page-content">
                        <h1><span class="guide-juridic-icon"></span>Ghid juridic</h1>
                        <nav class="guide-page-nav">
                            <ul>
                                <li><a href="#question-1">1. Ce este piata imobiliara?</a></li>
                                <li><a href="#question-2">2. Care sunt etapele pietei imobiliare in Romania?</a></li>
                                <li><a href="#question-3">3. Cum s-a dezvoltat piata imobiliara Clujeana?</a></li>
                                <li><a href="#question-4">4. Care sunt cartierele orasului Cluj-Napoca?</a></li>
                                <li><a href="#question-5">5. Ce sunt bunurile imobile si de cate feluri sunt?</a></li>
                                <li><a href="#question-6">6. Care sunt elementele caracteristice ale apartamentelor?</a></li>
                                <li><a href="#question-7">7. Cum se clasifica imobilele de tip apartament?</a></li>
                                <li><a href="#question-8">8. Cum se caracterizeaza imobilele de tip casa sau vila?</a></li>
                                <li><a href="#question-9">9. Care sunt caracteristicile terenurilor?</a></li>
                                <li><a href="#question-10">10. Cum se caracterizeaza spatiile de birouri?</a></li>
                                <li><a href="#question-11">11. Care sunt caracteristicile spatiilor comerciale?</a></li>
                                <li><a href="#question-12">12. Prin ce se caracterizeaza spatiile industriale?</a></li>
                                <li><a href="#question-13">13. Care este regimul de TVA la vanzarea constructiilor?</a></li>
                                <li><a href="#question-14">14. Ce este cota redusa de TVA si cand se aplica?</a></li>
                                <li><a href="#question-15">15. Ce este taxarea inversa si cand se aplica?</a></li>
                                <li><a href="#question-16">16. Cand devine o persoana fizica platitoare de TVA in urma vanzarii de bunuri imobile?</a></li>
                                <li><a href="#question-17">17. Care este valoarea impozitului datorat in urma vanzarii unui imobil?</a></li>
                                <li><a href="#question-18">18. Cum se pot vinde imobilele achizitionate sub incidenta legii 10/2001?</a></li>
                                <li><a href="#question-19">19. Cum se pot vinde imobilele monumente istorice?</a></li>
                                <li><a href="#question-20">20. Se poate Cesiona un antecontract de vanzare-cumparare?</a></li>
                                <li><a href="#question-21">21. Cum vindem un imobil ipotecat ca urmare a unui credit Prima Casa?</a></li>
                                <li><a href="#question-22">22. Cum vindem un imobil ipotecat ca urmare a unui credit ipotecar?</a></li>
                                <li><a href="#question-23">23. Ce demersuri trebuie sa fac daca vreau sa cumpar un imobil ipotecat?</a></li>
                                <li><a href="#question-24">24. Ce este contractul de intermediere?</a></li>
                                <li><a href="#question-25">25. Ce este contractul de inchiriere si cand se incheie?</a></li>
                                <li><a href="#question-26">26. Ce reprezinta antecontractul de vanzare-cumparare sau promisiunea de vanzare-cumparare?</a></li>
                                <li><a href="#question-27">27. Ce este contractul autentic de vanzare-cumparare si cand se incheie?</a></li>
                                <li><a href="#question-28">28. Care sunt demersurile post tranzactionale ale vanzatorilor, cumparatorilor si locatorilor?</a></li>
                                <li><a href="#question-29">29. Ce este PUG-ul?</a></li>
                                <li><a href="#question-30">30. Ce este PUZ-ul?</a></li>
                                <li><a href="#question-31">31. Ce este PUD-ul?</a></li>
                                <li><a href="#question-32">32. Ce este CUT-ul?</a></li>
                                <li><a href="#question-33">33. Ce reprezinta POT-ul?</a></li>
                                <li><a href="#question-34">34. Ce este RI-ul?</a></li>
                                <li><a href="#question-35">35. Ce reprezinta PAC-ul?</a></li>
                                <li><a href="#question-36">36. Ce este suprafata utila?</a></li>
                                <li><a href="#question-37">37. Ce reprezinta suprafata construita desfasurata?</a></li>
                                <li><a href="#question-38">38. Care este diferenta dintre un imobil decomandat si unul semidecomandat?</a></li>
                                <li><a href="#question-39">39. Ce sunt Cartea Funciara si extrasul de carte funciara?</a></li>
                                <li><a href="#question-40">40. Ce este creditul ipotecar si care sunt conditiile generale ale acestuia?</a></li>
                                <li><a href="#question-41">41. Ce este creditul Prima Casa si care sunt conditiile specifice ale acestuia?</a></li>
                            </ul>
                        </nav>
                        <article class="question-article cf" id="question-1">
                            <h3>1. Ce este piata imobiliara?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span>
                                    În România
                                    sectorul imobiliar reprezintă unul din principalele motoare ale
                                    economiei post-revoluţionare, sectorul cel mai dinamic şi mai
                                    atractiv, cu creşteri spectaculoase, dar prăbuşiri răsunătoare.<br></span><span><br>Piaţa imobiliară,
                                    ca parte a economiei de piaţă, cuprinde totalitatea tranzacţiilor
                                    cu bunuri imobile, tranzacţii care presupun transferuri de
                                    proprietate sau drepturi de folosinţă asupra bunurilor imobile în
                                    schimbul unor sume de bani. De asemenea, cuprinde bunurile imobile
                                    tranzacţionate, agenţii economici care funcţionează în cadrul
                                    pieţei şi activităţilor pe care le desfăşoară.</span><br><span><span>&nbsp;<br>Piaţa imobiliară
                                        românească a început să se dezvolte imediat după Revoluţia din
                                        1989 când primele două guverne democrate au adoptat două legi de
                                        importanţă majoră: Legea 18/1991 a Fondului Funciar care a
                                        transformat 82% din terenul agricol aflat în proprietatea statului
                                        în proprietate privată şi Legea 85/1992 privind vânzarea de
                                        locuinţe şi spaţii cu altă destinaţie, construite din fondurile
                                        statului şi din fondurile unităţilor economice sau bugetare de
                                        stat, lege care prevedea vânzarea locuinţelor din fondul de stat
                                        către cei care le ocupau <i>de facto</i>, lucru care a transformat
                                        peste 80% din chiriaşii ţării în proprietari.</span></span></div>
                        </article>
                        <article class="question-article cf" id="question-2">
                            <h3>2. Care sunt etapele pietei imobiliare in Romania?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">De-a lungul
                                timpului, piaţa imobiliară a cunoscut mai multe etape, după cum
                                urmează:<ol>
                                    <li><span><b>Etapa de început</b>
                                            (preistoria) care corespunde primilor ani de după revoluţie, când
                                            imobiliarele erau necunoscute atât pentru vânzătorii şi pentru
                                            cumpărătorii de pe piaţă, cât şi pentru practicanţii acestei
                                            profesii. În această etapă a pieţei imobiliare au luat naştere
                                            primele agenţii imobiliare care, la rândul lor, au determinat
                                            apariţia primelor elemente primitive de promovare imobiliară.</span></li>
                                    <li><span><b>Etapa de creştere</b>
                                            este reprezentată de acea perioadă în care tot mai multe persoane
                                            se implică ca agent economic în piaţa imobiliară. În această
                                            perioadă numărul agenţiilor imobiliare creşte, apare concurenţa
                                            la nivelul acestora şi se dezvoltă publicitatea imobiliară.</span></li>
                                    <li><span><b>Etapa de vârf
                                            </b> corespunde boom-ului imobiliar din anii 2006-2008, perioadă în
                                            care se încheiau tranzacţii imobiliare „la secundă”, ajutate
                                            de un sistem bancar inconştient şi „darnic”. Preţurile
                                            imobilelor au atins maxime absolute în comparaţie cu perioada
                                            anterioară, atât la vânzare, cât şi la închiriere. În această
                                            perioadă numarul agenţiilor imobiliare a explodat, ajungând, de
                                            exemplu la nivelul Clujului la un număr de aproximativ 400 de
                                            agenţii imobiliare.</span></li>
                                    <li><span><b>Etapa de declin</b>
                                            este perioada în care criza imobiliară a tăiat semnificativ
                                            numărul agenţiilor imobiliare. În această etapă s-a restabilit
                                            raportul de forţe pe piaţa imobiliară. Datorită diversificării
                                            ofertei, perfecţionării personalului, superspecializarea,
                                            specialiştii câştigă tot mai mult din cota de piaţă, iar
                                            diletanţii sunt înlăturaţi.</span></li>
                                    <li><span><span><b>Etapa de relansare</b>
                                                este o etapă care începe să prindă contur şi este aceea a
                                                specialiştilor, a agenţiilor imobiliare acreditate prin lege, a
                                                agenţilor imobiliari specializaţi, a unei pieţe imobiliare
                                                condusă de principii corecte bazate pe câştig reciproc faţă de
                                                toţi clienţii, partenerii şi colaboratorii.</span></span></li>
                                </ol>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-3">
                            <h3>3. Cum s-a dezvoltat piata imobiliara Clujeana?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span><span>Piaţa imobiliară
                                        din Cluj-Napoca are particularităţile ei bazate pe realităţi
                                        geografice şi istorice. Astfel, facem cunoscut faptul că oraşul
                                        Cluj-Napoca este cel mai mare oraş din Ardeal, populaţia acestuia
                                        depăşind 320000 de locuitori în mod obişnuit, iar pe parcursul
                                        anului universitar, populaţia oraşului ajunge la aproximativ 400000
                                        de locuitori. Oraşul Cluj-Napoca este situat pe valea râului Someş,
                                        are o înfăţişare compactă, structură radial-concentrică,
                                        cartierele oraşului gravitând în jurul centrului, centru din care
                                        pleacă arterele importante ale oraşului.<br><br>&nbsp;</span></span><span>Aşezarea geografică
                                    şi aspectul au oferit posibilităţi limitate de dezvoltare
                                    imobiliară, Clujul fiind practic mărginit de dealuri la nord şi la
                                    sud, iar la est şi vest sunt prezente zonele industriale şi ale
                                    comunelor vecine (Apahida şi Floreşti) care au restrâns aria de
                                    urbanizare. Drept urmare, cartierele noi care s-au dezvoltat sunt mai
                                    degrabă prelungiri ale cartierelor deja existente şi nu structuri
                                    cu funcţiuni administrativ-teritoriale proprii. Un alt criteriu care
                                    a determinat limitarea anterior precizată este existenţa unui
                                    centru istoric, cu clădiri vechi, având importanţă istorică,
                                    culturală şi arhitecturală, centru care în astfel de condiţii
                                    beneficiază de politică de protejare şi conservare, determinând
                                    astfel limitări în ceea ce priveşte dezvoltarea de construcţii
                                    noi în cadrul ariei protejate. Un alt factor important este prezenţa
                                    aeroportului în interiorul oraşului, fapt ce a determinat
                                    diminuarea interesului dezvoltatorilor imobiliari pentru zona
                                    Someşeni. Diminuarea interesului pentru această zonă este
                                    determinată de imposibilitatea ridicării imobilelor cu mai multe
                                    etaje.<br><br></span><span><span>Piaţa imobiliară
                                        clujeană prezintă înafara zonei centrale o zonă culturală prin
                                        excelenţă determinată de prezenţa principalelor instituţii de
                                        învăţământ şi de cultură locale (universităţi, teatre,
                                        muzee, biblioteci etc). În Cluj-Napoca există cartiere sau zone din
                                        cadrul acestora care sunt percepute de conştiinţa locală ca
                                        aparţinând unor anumite comunităţi sociale sau culturale. De
                                        exemplu, cartierul Andrei Mureşanu este perceput ca fiind un cartier
                                        exclusivist al Clujului. Este considerat astfel, atât de
                                        specialiștii imobiliari, cât şi de oamenii de rând, fiind astfel
                                        perceput ca cel mai bun cartier al Clujului şi un cartier al
                                        intelectualităţii clujene unde vecinătatea unor oameni importanţi
                                        a adus un plus de valoare şi locuinţelor, materializat în
                                        preţurile cele mai ridicate de pe piaţa imobiliară clujeană. La
                                        polul opus se situează cartierele muncitoreşti, cu imobile din
                                        perioada comunistă cum sunt: Mănăştur, Mărăşti, Grigorescu,
                                        Gheorgheni şi cartierele industriale Bulgaria şi Iris.<br><br></span></span>
                                Piaţa imobiliară
                                clujeană a fost influenţată şi de realităţile
                                economico-sociale. Există la nivel local o particularitate care a
                                atins standardul de fenomen naţional, cu implicaţii economice şi
                                sociale majore, respectiv fenomenul CARITAS. Acesta a determinat
                                accelerarea ritmului pe piaţa imobiliară, Clujul fiind pentru o
                                bună perioadă de timp cel mai scump oraş al ţării în ceea ce
                                priveşte preţul imobilelor, dar şi costul impus de nivelul de
                                trai. Preţurile din Cluj-Napoca şi Bucureşti s-au aliniat târziu,
                                în etapa de boom imobiliar, atunci când capitala a preluat
                                supremaţia şi de atunci nu a mai cedat-o. Astfel, Cluj-Napoca a
                                rămas cel mai scump oraş din ţară în ceea ce priveşte preţurile
                                imobilelor, însă după capitala României. </div>
                        </article>
                        <article class="question-article cf" id="question-4">
                            <h3>4. Care sunt cartierele orasului Cluj-Napoca?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span><span>Oraşul Cluj-Napoca
                                        se întinde pe o suprafaţă de aproximativ 179,5 km² şi în
                                        prezent este structurat în 20 de cartiere. Cartierele Clujului sunt
                                        următoarele:&nbsp;<br></span></span>
                                <ul>
                                    <li>Andrei Mureșanu</li>
                                    <li>Becaș</li>
                                    <li>Borhanci</li>
                                    <li>Bună Ziua</li>
                                    <li>Bulgaria</li>
                                    <li>Central</li>
                                    <li>Dâmbul Rotund</li>
                                    <li>Europa</li>
                                    <li>Făget</li>
                                    <li>Gheorgheni</li>
                                    <li>Grigorescu</li>
                                    <li>Gruia</li>
                                    <li>Între Lacuri</li>
                                    <li>Iris</li>
                                    <li>Mărăști</li>
                                    <li>Mânăștur</li>
                                    <li>Plopilor</li>
                                    <li>Sopor</li>
                                    <li>Someșeni</li>
                                    <li>Zorilor</li>
                                </ul>În
                                vecinătatea Clujului sunt câteva comune care s-au dezvoltat foarte
                                bine din punct de vedere imobiliar şi care, cu siguranţă, în
                                perioada ce va urma vor deveni cartiere ale oraşului Cluj-Napoca.
                                Aceste comune sunt: Floreşti, Baciu, Apahida. Ele au fost urbanizate
                                ca urmare a construţíei masive de ansambluri rezidențíale, fapt
                                ce a determinat deschiderea de centre comerciale, sanitare, etc.
                            </div>
                        </article>
                        <article class="question-article cf" id="question-5">
                            <h3>5. Ce sunt bunurile imobile si de cate feluri sunt?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span>Bunurile
                                    imobile sunt
                                    lucruri care au o aşezare fixă, stabilă şi care, aşadar, nu pot
                                    fi mutate dintr-un loc în altul, fără să-şi piardă destinaţia
                                    iniţială sau identitatea<span>.
                                        Aceasta este definiţia juridică generală a bunurilor imobile.
                                        Bunurile imobile sunt clasificate astfel: bunuri imobile prin natura
                                        lor, prin destinaţia lor sau prin obiectul lor.<br><br></span></span><span><span>Bunurile
                                        imobile la care ne vom referi si care sunt obiectul raportului
                                        juridic de consiliere imobiliară sunt cele imobile prin natura lor.
                                        Acestea sunt:<br></span></span>
                                <ul>
                                    <li>apartamente
                                        de locuit (garsoniere sau apartamente cu una sau mai multe camere);</li>
                                    <li>case
                                        şi vile;</li>
                                    <li>cabane
                                        şi alte construcţii de utilizare provizorie;</li>
                                    <li>terenuri;</li>
                                    <li>spaţii
                                        de birouri;</li>
                                    <li>spaţii
                                        de funcţiune comercială;</li>
                                    <li>spaţii
                                        de producţie şi de depozitare.</li>
                                </ul>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-6">
                            <h3>6. Care sunt elementele caracteristice ale apartamentelor?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span><b>Elementele
                                        caracteristice ale apartamentelor:<br></b></span><span><span>Poziţionarea
                                        pe hartă este unul din elementele caracteristice ale apartamentelor
                                        şi este reprezentat în princiupal de cartierul, zona, strada în
                                        care este situat imobilul. Poziţionarea pe hartă determină primul
                                        criteriu de selecţie al apartamentelor. Un apartament care
                                        beneficiază de avantajul poziţionării este mai apreciat, mai
                                        căutat şi mai scump faţă de un apartament identic ca şi
                                        construcţie, însă care nu beneficiază de o poziţionare
                                        favorabilă. Când ne referim la avantajele poziţionării facem
                                        referire la faima zonei respective, la accesul la şcoli, biserici,
                                        mijloace de transport, magazine, parcuri, terenuri de sport, etc.<br><br></span></span><span><span>Ca
                                        şi elemente caracteristice importante ale bunurilor imobile sunt şi
                                        suprafaţa şi numărul de încăperi. Suprafaţa unui imobil este de
                                        două tipuri: suprafaţa utilă şi suprafaţa construită. Diferenţa
                                        dintre suprafaţa utilă şi cea construită a unui apartament este
                                        cuprinsă între 10 şi 15%. Astfel, suprafaţa construită este mai
                                        mare faţă de cea utilă.<br><br></span></span><span><span>Un
                                        alt element caracteristic al imobilelor este compartimentarea
                                        interioară. Astfel, în ceea ce priveşte apartamentele, ele pot fi
                                        decomandate ceea ce inseamnă că accesul către oricare din camerele
                                        imobilului nu se face traversănd o altă cameră, sau
                                        semidecomandate ceea ce înseamnă opusul, respectiv accesul la una
                                        sau mai multe camere se face traversând una din camere.<br><br></span></span><span><span>Poziţionarea
                                        unui apartament într-un imobil este un alt element caracteristic
                                        care constă în poziţionarea pe etaj sau pe etaje a apartamentului.
                                        De regulă, apartamentele situate la parter sau la ultimul etaj au un
                                        uşor dezavantaj faţă de cele situate la etajele intermediare. Pe
                                        de altă parte, apartamentele situate la etajele superioare pot
                                        beneficia de privelişti deosebite, fapt care poate deveni un atuu al
                                        imobilului.<br><br>&nbsp;</span></span>Starea
                                tehnică a imobilului, respectiv starea imobilului la interior şi
                                exterior, starea instalaţiilor electrice şi sanitare, starea
                                finisajelor, alte îmbunătăţiri aduse imobilului sunt şi ele
                                elemente caracteristice ale apartamentelor.
                                <br><span><span>&nbsp;<br>Alte
                                        elemente caracteristice sunt amplasarea apartamentului în funcţie
                                        de punctele cardinale şi amplasarea faţă de stradă.</span></span>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-7">
                            <h3>7. Cum se clasifica imobilele de tip apartament?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                <ol>
                                    <li>Garsoniere<ul>
                                            <li>confort 3: au
                                                suprafaţa de 11 mp, baie comună pe nivel, bucătărie de tip
                                                oficiu, fără balcon;</li>
                                            <li>cameră de cămin:
                                                are suprafaţa de 18 mp, baie proprie, bucătărie comună, fără
                                                balcon.</li>
                                            <li>Confort 2: au
                                                suprafaţa de 22 mp, baie proprie, bucatarie proprie, fără balcon.</li>
                                            <li>Confort 1: au
                                                suprafaţa de 24-28 mp, baie proprie, bucătărie proprie, cu
                                                balcon.</li>
                                        </ul>
                                    </li>
                                    <li>Apartamente cu 2 camere:<ul>
                                            <li>Confort 2: au
                                                suprafaţa între 28-35 mp, camerele sunt semidecomandate, nu au
                                                balcon. Acest tip de apartamente se întâlneşte în cartierele
                                                vechi ale Clujului, în blocuri de 4 etaje.</li>
                                            <li>Confort 1: au
                                                suprafaţa de 44-52 mp, camere decomandate sau semidecomandate, au
                                                balcon şi se întâlnesc atât în blocuri cu 4 etaje, cât şi în
                                                cele cu 8 sau 10 etaje;</li>
                                        </ul>
                                    </li>
                                    <li>Apartamente cu 3 camere:<ul>
                                            <li>Confort 2:
                                                suprafaţa 40-50 mp, camere semidecomandate, cu sau fără balcon,
                                                cu o singură baie;</li>
                                            <li>Confort 1:
                                                suprafaţa de 65-70 mp, camere decomandate sau semidecomandate, cu 1
                                                sau 2 balcoane, cu 1 sau 2 băi;</li>
                                        </ul>
                                    </li>
                                    <li>Apartamente cu 4 sau mai multe camere:<ul>
                                            <li>au suprafeţe de
                                                peste 80 mp, 1 sau mai multe balcoane, cel puţin 2 băi.</li>
                                        </ul>
                                    </li>
                                    <li>Penthouse-uri:<br>Sunt locuinţe de
                                        lux, nou apărute pe piaţa imobiliară românească, situate la
                                        ultimul etaj al construcţiilor noi, cu sau fără scară interioară,
                                        cu suprafeţe generoase (asemănătoare caselor);</li>
                                </ol><br>&nbsp;Această
                                clasificare este aplicabilă doar locuinţelor vechi, clasificare
                                diferită faţă de cea a imobilelor noi.&nbsp;
                            </div>
                        </article>
                        <article class="question-article cf" id="question-8">
                            <h3>8. Cum se caracterizeaza imobilele de tip casa sau vila?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span>În
                                    limbaj imobiliar o vilă este o casă mai specială, cu un grad mai
                                    ridicat de confort, dar care, conform definiţiei din Dicţionarul
                                    Explicativ al Limbii Române este o casă care beneficiază de
                                    grădină şi este plasată în mediul rural sau în zona staţiunilor
                                    turistice fiind astfel imposibil de găsit în oraşul Cluj-Napoca.<br><br></span>Elementele
                                caracteristice ale caselor şi vilelor sunt poziţionarea pe hartă,
                                suprafaţa utilă şi cea construită, suprafaţa terenului şi
                                amprenta la sol, frontul stradal (deschiderea la drumul de acces al
                                parcelei de teren pe care este construită casa), vecinătăţi
                                (construcţii în zonă şi starea acestora, panorama, zonă
                                împădurită, lacuri etc), numărul de niveluri, starea tehnică
                                (starea acoperişului şi al construcţiilor anexe etc), alte
                                elemente (distanţa faţă de construcţiile vecine, grad de
                                intimitate, trafic, zgomot, etc). </div>
                        </article>
                        <article class="question-article cf" id="question-9">
                            <h3>9. Care sunt caracteristicile terenurilor?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span>După
                                    destinaţia lor terenurile pot fi terenuri de construcţii sau
                                    terenuri agricole (arabil, păduri, păşuni, fâneţe). După
                                    destinaţia terenurilor de construcţii, acestea se împart în
                                    terenuri pentru construcţii de locuinţe, pentru construcţii
                                    industriale, pentru construcţii comerciale sau birouri, terenuri de
                                    sport, parcuri, construcţii de cult, monumente istorice, etc.<br><br></span><span>După
                                    starea generală, terenurile de construcţii pot fi amenajate
                                    (nivelate, cu utilităţi trase la marginea parcelei, cu acces la un
                                    drum practicabil stradă sau drum de servitute) sau neamenajate
                                    (terenuri situate în pantă, fără utilităţi trase, care necesită
                                    lucrări de terasare, consolidare, şi nivelare ce se traduc în
                                    costuri suplimentare).<br><br></span><span>Elementele
                                    caracteristice ale terenurilor sunt poziţionarea pe hartă (foarte
                                    importantă pentru că, în funcţie de poziţia parcelei şi de
                                    reglementările PUG<a target="" rel="">¹</a>
                                    putem afla ce tip de construcţie se poate dezvolta pe parcela
                                    respectivă), suprafaţa şi forma parcelei, frontul stradal (cu cât
                                    frontul stradal este mai mare, cu atât creşte valoarea parcelei
                                    respective), utilităţile şi preţul.<br><br></span>
                                <div><i><a target="" rel="">¹</a><b>PUG</b>
                                        = Planul Urbanistic
                                        General este documentul elaborat de către autorităţile publice
                                        locale şi cuprinde reglementări legate de suprafaţa de teren
                                        cuprinsă în intravilanul localităţii respective, tipurile de
                                        terenuri şi modul de utilizare al acestora, delimitarea zonelor
                                        construibile şi zonelor protejate, etc.</i></div>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-10">
                            <h3>10. Cum se caracterizeaza spatiile de birouri?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span><span>Spaţiile de birouri
                                        folosesc desfăşurării de activităţi diverse, altele decât cele
                                        comerciale sau de producţie. Spaţiile de birouri cuprind clădirile
                                        dedicate, de tip business center, dar şi bunuri imobile cu alte
                                        funcţiuni (imobile de locuit) transformate în spaţii de birouri,
                                        de tip apartament sau casă.<br><br></span></span><span><b>Clasificarea
                                        clădirilor de birouri:</b></span><br><span><span>&nbsp;În lipsa unui
                                        sistem propriu de clasificare, în practică se foloseşte sistemul
                                        american BOMA (Building Owners and Managers Association) de
                                        clasificare a clădirilor de birouri. În funcţie de
                                        caracteristicile acestora, clădirile de birouri pot fi de clasa A, B
                                        sau C.<br><br></span></span><span><b>Clădirile de
                                        birouri Clasa A trebuie să îndeplinească următoarele criterii:</b></span>
                                <ul>
                                    <li>poziţionare
                                        centrală sau în cadrul unui centru de afaceri;</li>
                                    <li>suprafaţa totală
                                        de cel puţin 10000 de metri pătraţi, respectiv cel puţin 1000 de
                                        metri pătraţi utili pe nivel;</li>
                                    <li>raportul între
                                        suprafaţa utilă şi cea construită de cel puţin 85%;</li>
                                    <li>compartimentare
                                        uşoară (flexibilă) care să permită recompartimentări la
                                        cerere;</li>
                                    <li>finisaje de cea mai
                                        înaltă clasă, inclusiv cablaje;</li>
                                    <li>servicii de
                                        supraveghere şi pază;</li>
                                    <li>servicii de
                                        curăţenie;</li>
                                    <li>locuri de parcare
                                        (cel puţin un loc de parcare la 100-150 de metri pătraţi);</li>
                                    <li>restaurant;</li>
                                    <li>sistem automat de
                                        administrare care comandă încălzirea, aerul condiţionat,
                                        iluminarea, securitatea, etc;</li>
                                </ul><br><span>Clădirile de
                                    birouri clasa B pot avea cel mult 2 elemente lipsă din cele
                                    caracteristice clădirilor clasa A, iar clădirile de birouri clasa C
                                    pot avea mai mult de 2 elemente lipsă din cele caracteristice
                                    clădirilor clasa A.<br><br></span>
                                Elementele
                                caracteristice ale spaţiilor de birouri sunt poziţionarea (spaţii
                                individuale sau în cadrul clădirilor de birouri), suprafaţa,
                                compartimentările interioare, utilităţi (faţă de cele obişnuite
                                sunt reţelele, climatizarea etc) şi preţul.
                            </div>
                        </article>
                        <article class="question-article cf" id="question-11">
                            <h3>11. Care sunt caracteristicile spatiilor comerciale?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span><span>Spaţiile comerciale
                                        se definesc ca fiind acele bunuri imobiliare, exploatabile din punct
                                        de vedere comercial, în cadrul cărora se prestează activităţi
                                        comerciale.<br><br>&nbsp;</span></span><span>În funcţie de
                                    activitatea prestată în cadrul spaţiului respectiv, spaţiile
                                    comerciale pot fi: spaţii comerciale de tip magazin (cu mărfuri
                                    alimentare sau nealimentare), spaţii comerciale de prezentare (de
                                    tip showroom), spaţii comerciale pentru prestarea unor servicii
                                    (sedii de bănci, agenţii de turism, farmacii, clinici medicale,
                                    case de schimb valutar, etc), spaţii comerciale de alimentaţie
                                    publică şi distracţii (restaurant, baruri, cluburi, săli de
                                    fitness, bowling, biliard, etc) şi centre comerciale (construcţie
                                    sau ansamblu de construcţii cu funcţiuni în special comerciale,
                                    dar şi oferirea de servicii complete clienţilor).<br><br></span><span><b>Elementele
                                        caracteristice ale spaţiilor comerciale sunt:</b></span><b></b><br>
                                <ul>
                                    <li>poziţionarea
                                        (în zone comerciale din centre ale oraşelor sau din centrele de
                                        cartier ale marilor oraşe, de-a lungul arterelor principale din
                                        oraş, în zone restrânse ale cartierelor servind un număr limitat
                                        de clienţi - magazine alimentare de cartier);</li>
                                    <li>&nbsp;suprafaţa
                                        totală şi suprafaţa sălii de vânzare (un spaţiu comercial, în
                                        afara spaţiului destinat vânzării efective, cuprinde şi alte
                                        birouri, depozite şi anexe care au funcţiune comercială, dar care
                                        sunt necesare desfăşurării în cele mai bune condiţii a
                                        activităţilor din cadrul magazinului respectiv);</li>
                                    <li>deschiderea
                                        stradală se măsoară asemeni frontului stradal al caselor şi
                                        terenurilor în metru liniar;</li>
                                    <li>vadul comercial
                                        (generat de poziţia spaţiului respectiv într-o anumită zonă sau
                                        în cadrul unui centru comercial; tot aici întâlnim un alt element
                                        specific spaţiilor comerciale: traficul pietonal sau auto).</li>
                                </ul>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-12">
                            <h3>12. Prin ce se caracterizeaza spatiile industriale?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span><span>Spaţiile
                                        industriale sunt spaţiile în care se realizează activităţi
                                        productive sau de depozitare, fiind situate în zonele industriale
                                        ale oraşelor, sau la marginea oraşelor, de-a lungul arterelor
                                        principale care conferă posibilitate de acces pentru traficul greu.<br><br></span></span><span>Spaţiile
                                    industriale pot fi clădiri de producţie (dispuse pe unul sau mai
                                    multe etaje), hale industriale (pe structură uşoară sau grea),
                                    ferme, platforme industriale, etc.<br><br></span>
                                Elementele
                                caracteristice ale spaţiilor industriale sunt: poziţionarea,
                                suprafaţa totală şi utilă, suprafaţa de teren de manevră,
                                depozitare sau parcare, înălţimea utilă, acces trafic greu şi
                                CFR, facilităţi (rampă, pod rulant, lift de marfă, curent
                                trifazic). </div>
                        </article>
                        <article class="question-article cf" id="question-13">
                            <h3>13. Care este regimul de TVA la vanzarea constructiilor?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span>Conform
                                    Codului Fiscal vânzarea constructiilor (apartamente, garsoniere,
                                    duplexuri, case) și a terenurilor pe care acestea sunt construite
                                    reprezintă o operațiune scutită de TVA, însa scutirea
                                    nu se aplică in cazul vânzarii<u></u><span>construcțiilor
                                        noi și terenurilor construibile.<br><br></span></span><span>Vânzarea
                                    unei construcții
                                    noi<span>
                                        este acea vânzare care are loc cel târziu pâna la data de 31
                                        decembrie a anului următor anului primei ocupări sau utilizări a
                                        construcției. Astfel, dacă un constructor a terminat lucrările
                                        unui bloc în cursul anului 2016, vânzările apartamentelor din acel
                                        bloc în anii 2016 și 2017 intră în sfera de impozitare a TVA,
                                        deoarece construcția este considerată nouă, iar pentru vânzările
                                        acelorași imobile în anul 2018 se poate aplica scutirea de TVA.<br><br></span></span>Terenul
                                construibil este
                                definit ca fiind orice teren amenajat sau neamenajat, pe care se pot
                                executa construcții, potrivit legislației în vigoare.
                                Calificarea
                                unui teren drept teren construibil sau teren cu altă destinație, la
                                momentul vânzării sale de către proprietar, este oferită de
                                certificatul de urbanism. </div>
                        </article>
                        <article class="question-article cf" id="question-14">
                            <h3>14. Ce este cota redusa de TVA si cand se aplica?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span><span>Cetățenii români sau străini care cumpără proprietăți
                                        imobiliare pe teritoriul României a căror valoare nu depășește
                                        450.000 de lei (aproximativ 100.000 de Euro), beneficiază de o&nbsp;<span>cotă de TVA redusă de 5%.<br><br>
                                            &nbsp;</span></span>În cazul persoanelor fizice, cota
                                    redusă de TVA se aplică pentru locuințele care au o suprafața
                                    utilă de maximum de 120 mp, exclusiv anexele gospodărești, a
                                    căror valoare, inclusiv a terenului pe care sunt construite, nu
                                    depășește valoarea de 450.000 lei, exclusiv taxa pe valoare
                                    adaugată.<span><br><br></span>Anexele
                                    gospodăreşti la care face referire legiuitorul sunt:&nbsp;<span>Construcţiile cu caracter definitiv sau provizoriu,
                                        menite să adăpostească activităţi specifice, complementare
                                        funcţiunii de locuire, care, prin amplasarea în vecinătatea
                                        locuinţei, alcătuiesc împreună cu aceasta o unitate funcţională
                                        distinctă.<br><br></span><span>În categoria anexelor gospodăreşti,
                                        de regulă în mediul rural, sunt cuprinse: bucătării de vară,
                                        grajduri pentru animale mari, pătule, magazii, depozite şi
                                        altele asemenea. În mod similar, sunt asimilabile noţiunii de
                                        anexe gospodăreşti şi garajele, serele, piscinele şi altele
                                        asemenea.<br><br></span><u></u>În ceea ce priveşte
                                    locurile de parcare, pentru a putea aplica asupra preţului cota
                                    redusă de TVA de 5% trebuie să reprezinte operaţiuni
                                    unitare cu vânzarea-cumpărarea apartamentelor, caselor, adică să
                                    fie achiziţionate împreună şi concomitent.</span></div>
                        </article>
                        <article class="question-article cf" id="question-15">
                            <h3>15. Ce este taxarea inversa si cand se aplica?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span>Începând
                                    cu data de 1 ianuarie 2016, pentru vânzarea clădirilor, părților
                                    de clădiri și terenuri de orice fel
                                    de către o persoană juridică plătitoare de TVA către o altă
                                    persoană juridică plătitoare de TVA
                                    se aplică regimul de taxare
                                    inversă. Prin taxarea inversă se întelege că vânzarea va avea
                                    loc fără plata TVA. <br><br>Astfel, când vânzarea are loc între
                                    două persoane înregistrate ca plătitori de TVA, factura fiscală
                                    se va emite fară TVA cu mențiunea pe factură că se aplică
                                    regimul de taxare inversă. Măsura de taxare inversă se poate
                                    aplica doar daca valoarea facturii este mai mare de 22500 lei.</span></div>
                        </article>
                        <article class="question-article cf" id="question-16">
                            <h3>16. Cand devine o persoana fizica platitoare de TVA in urma vanzarii de bunuri imobile?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span><span>Persoanele fizice
                                        care realizează venituri cu caracter de continuitate din vânzarea
                                        construcțiilor și/sau terenurilor, venituri ce depășesc plafonul
                                        de 65000 Euro, adică 220000 lei, au obligația înregistrării la
                                        Administrația Financiară în categoria persoanelor plătitoare de
                                        TVA, dacă persoana fizică realizează mai mult de o tranzacție în
                                        cursul unui an calendaristic. Deși prima tranzacție este
                                        considerată ocazională, dacă va avea loc și a doua tranzacție în
                                        cursul aceluiași an, prima tranzacție nu va fi impozitată, dar va
                                        fi luată în considerare la calculul plafonului de TVA de 65000
                                        Euro.<br><br></span></span><span><b>Situaţie
                                        excepţională: </b><br></span>

                                &nbsp;Dacă o persoană
                                fizică vinde în acelaşi an mai multe proprietăţi personale
                                dobândite prin mijloace diferite, de exemplu una este locuinţă
                                personală şi alta moştenită, nu are obligaţia să se
                                înregistreze la Administraţia Financiară ca persoană fizică
                                plătitoare de TVA. Motivul pentru care legiuitorul scuteste această
                                operaţiune de la plata TVA este faptul că la baza acestuia nu
                                există o operaţiune comercială cu caracter de continuitate,
                                respectiv persoana fizică nu a achiziţionat imobilele special în
                                scopul revânzării pentru obţinere de profit. &nbsp; </div>
                        </article>
                        <article class="question-article cf" id="question-17">
                            <h3>17. Care este valoarea impozitului datorat in urma vanzarii unui imobil?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span><span>Orice persoană fizică sau juridică care deţine în
                                        proprietate un imobil şi doreşte înstrăinarea acestuia trebuie să
                                        achite un impozit provenit din transferul proprietăţilor imobiliare
                                        de 3% din valoare ce depăşeşte 450000 lei, adică 100000 euro.
                                        Aceasta dispoziţie legislativă este aplicabilă începând cu data
                                        de 01.02.2017.<br><br></span></span><span><b>Dispoziţia legală ce reglementează cele precizate mai
                                        sus este următoarea:</b></span><br><span>Ordonanţa de Urgenţă pentru modificarea şi
                                    completarea Legii 227/2015 privind Codul Fiscal, art. 9 „La
                                    transferul dreptului de proprietate şi al dezmembrămintelor
                                    acestuia, prin acte juridice între vii asupra construcţiilor de
                                    orice fel şi a terenurilor aferente acestora, precum şi asupra
                                    terenurilor de orice fel fără construcţii, contribuabilii
                                    datorează un impozit care se calculează prin aplicarea cotei de 3%
                                    asupra venitului impozabil. Venitul impozabil se stabileşte prin
                                    deducerea din valoarea tranzacţiei a sumei neimpozabile de 450000
                                    lei.”<br><br></span>
                                Astfel, începând cu data de 01.02.2017 vânzătorii au
                                obligaţia achitării impozitului provenit din transferul
                                proprietăţilor imobiliare de 3% din valoare ce depăşeşte 450000
                                lei, adică 100000 euro. </div>
                        </article>
                        <article class="question-article cf" id="question-18">
                            <h3>18. Cum se pot vinde imobilele achizitionate sub incidenta legii 10/2001?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span><span>Aceste
                                        imobile pot fi înstrăinate dacă a trecut un termen de 10 ani de la
                                        data dobândirii lor și dacă se obține de la Primărie o
                                        adeverință care să indice acest aspect.<br><br>&nbsp;</span></span><span>Adeverința
                                    este solicitată doar de către anumite birouri notariale, fapt
                                    pentru care, clientul poate solicita departamentului juridic să
                                    contacteze notarul public și să afle dacă este necesară sau nu
                                    această adeverință pentru încheierea contractului autentic de
                                    vânzare-cumpărare. Dacă este necesară, vânzătorul va trebui să
                                    pună la dispoziția notarului public, la data semnării contractului
                                    autentic de vânzare-cumpărare, adeverinta în original.<br><br></span>
                                Adeverința
                                se eliberează de către Primăria din circumscripția teritorială a
                                imobilului pentru care se solicită, în termen de maxim 45 de zile
                                de la data înregistrării cererii. </div>
                        </article>
                        <article class="question-article cf" id="question-19">
                            <h3>19. Cum se pot vinde imobilele monumente istorice?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span><span>Proprietarii
                                        care dețin în proprietate imobile monumente istorice și
                                        intenționează să le înstrăineze, trebuie să se adreseze
                                        serviciilor publice deconcentrate ale Ministerului Culturii și
                                        Cultelor cu o cerere însoțită de acte anexe. Această instituție
                                        are drept de preempțiune (întâietate la cumpărarea monumentelor
                                        istorice). În acest sens, va elibera o adeverință privind
                                        exercitarea dreptului de preempțiune.<br><br></span></span><span><span>În
                                        cazul în care Ministerul Culturii și Cultelor sau serviciile
                                        publice deconcentrate ale Ministerului Culturii și Cultelor nu își
                                        exercită dreptul de preempțiune, vor emite în termen de 30 de zile
                                        câte o adeverință privind refuzul de cumpărare al imobilului. În
                                        acest caz, dreptul se transferă autoritaților publice locale care
                                        il pot exercita in maximum 15 zile (Consiliul Județean și
                                        Primaria). Și aceste două instituții vor elibera, la rândul lor,
                                        adeverințe privind poziția lor în vederea exercitării dreptului
                                        de preempțiune.<br><br></span></span><span><span>Doar
                                        după obţinerea celor 3 înscrisuri părțile se pot prezenta la
                                        notar în vederea semnării contractului autentic de
                                        vânzare-cumpărare.<br><br></span></span>
                                Cele
                                3 adeverințe trebuie prezentate în original notarului public la
                                data stabilită pentru semnarea contractului autentic de
                                vânzare-cumpărare. Adeverințele au valabilitate doar pentru
                                tranzacția imobiliară pentru care au fost solicitate. Nu sunt
                                valabile adeverințele eliberate pentru o tranzacție imobiliară
                                anterioară. </div>
                        </article>
                        <article class="question-article cf" id="question-20">
                            <h3>20. Se poate Cesiona un antecontract de vanzare-cumparare?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">În
                                această situație există două variante:<ol>
                                    <li>Se
                                        cesionează o promisiune bilaterală de vânzare-cumpărare sub
                                        semnatură privată</li>
                                    <li>Se
                                        cesionează o promisiune bilaterală de vânzare-cumpărare în
                                        formă autentică</li>
                                </ol><span>Întotdeauna,
                                    cesiunea antecontractului autentic de vanzare-cumpărare se face în
                                    aceeași formă în care a fost încheiat antecontractul, respectiv
                                    în formă autentică. Astfel, dacă promisiunea de vânzare-cumpărare
                                    a fost încheiată sub semnătura privată, cesiunea acesteia se face
                                    sub semnatură privată sau în formă autentică, iar dacă a fost
                                    încheiată în formă autentică, aceasta este forma obligatorie pe
                                    care trebuie să o îmbrace și cesiunea.&nbsp;<br><br></span><span><span>Cesiunea
                                        unei promisiuni de vânzare-cumpărare reprezintă acea convenție
                                        prin care promitentul-cumparator cedează drepturile și obligațiile
                                        dobândite prin promisiunea de vânzare-cumpărare către o altă
                                        persoană denumită cesionar, în schimbul unui preț al cesiunii și
                                        doar cu acordul expres al promitentului-vânzător cedat.<br><br></span></span><span><span>Dacă
                                        cesiunea antecontractului autentic de vânzare-cumpărare nu se face
                                        în forma în care a fost incheiat, sau dacă nu este obţinut
                                        acordul scris al promitentului-vânzător, cesiunea nu este
                                        productivă de efecte.<br><br></span></span>
                                Acordul
                                promitentului-vânzător cu privire la cesiune poate rezulta din
                                însăși promisiunea de vânzare-cumpărare dacă există o clauză
                                care specifică faptul că promitentul-vânzător este de acord cu
                                cesiunea drepturilor și obligațiilor născute din promisiunea de
                                vânzare-cumpărare de către promitentul-cumpărător în favoarea
                                unei alte persoane fizice sau juridice, sau dacă
                                promitentul-vânzător va contrasemna actul de cesiune. </div>
                        </article>
                        <article class="question-article cf" id="question-21">
                            <h3>21. Cum vindem un imobil ipotecat ca urmare a unui credit Prima Casa?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span>Dacă
                                    imobilul este <b>ipotecat ca urmare a unui credit "Prima Casă"
                                        sunt necesare</b> următoarele documente:</span>
                                <ul>
                                    <li>Acord
                                        înstrăinare imobil de la banca creditoare si de la Fondul de
                                        Garantare;</li>
                                    <li>Dacă
                                        nu au trecut cei 5 ani de interdicție de înstrăinare conform
                                        creditului Prima Casă, de la Fondul de Garantare trebuie obținut
                                        un "Acord de înstrăinare" - termen de eliberare de 30
                                        zile;</li>
                                    <li>Acord
                                        radiere ipotecă după stingerea soldului de la banca creditoare;</li>
                                    <li>Sold
                                        rămas și Cod IBAN;</li>
                                    <li>de
                                        la Fondul de Garantare trebuie obținut un "Acord de radiere
                                        ipotecă" - termen de eliberare maxim 30 de zile.</li>
                                </ul>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-22">
                            <h3>22. Cum vindem un imobil ipotecat ca urmare a unui credit ipotecar?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span>Dacă
                                    imobilul este <b>ipotecat ca urmare a unui credit ipotecar</b>, sunt
                                    necesare următoarele documente:</span>
                                <ul>
                                    <li>Acord
                                        de înstrăinare imobil din partea băncii creditoare (termen de
                                        eliberare aprox 10 zile)</li>
                                    <li>Acord
                                        de radiere ipotecă după stingerea soldului</li>
                                    <li>Sold
                                        ramas și Cod IBAN&nbsp;</li>
                                </ul>Aceste
                                imobile ipotecate, asemenea celorlalte imobile libere de sarcini, pot
                                fi înstrăinate atât unor cumpărători care achită cu venituri
                                provenind din surse proprii, cât și unora care achită prin credit
                                bancar.
                            </div>
                        </article>
                        <article class="question-article cf" id="question-23">
                            <h3>23. Ce demersuri trebuie sa fac daca vreau sa cumpar un imobil ipotecat?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><b>Dacă
                                    imobilul ipotecat urmează să fie
                                    cumpărat cu venituri provenite din surse proprii:</b>
                                <ul>
                                    <li>vânzătorul
                                        trebuie să pună la dispoziția cumpărătorului și a notarului
                                        public documentele de la punctul 4.1., după caz (cele care privesc
                                        ipoteca prin credit Prima Casă sau ipotecar);</li>
                                    <li>dacă
                                        părțile au pus la dispoziția notarului public actele precizate,
                                        pot să încheie antecontract autentic de vânzare-cumpărare, sau
                                        direct contract autentic de vânzare-cumpărare</li>
                                    <li>banii
                                        ce reprezintă valoarea prețului se virează în contul precizat de
                                        banca care are instituită ipoteca. În acest cont poate fi virată
                                        întreaga sumă care acoperă stingerea creditului și diferența de
                                        preț în alt cont dacă este cazul, sau se virează în contul
                                        respectiv întreaga sumă și astfel se stinge creditul, iar
                                        diferența de preț rămâne în cont dacă este cazul.</li>
                                    <li>în
                                        maxim 5 zile de la intrarea banilor în contul băncii care are
                                        instituită ipoteca, se stinge creditul și se radiază ipoteca;</li>
                                    <li>în
                                        câteva zile se obține extrasul CF liber de sarcini pe numele
                                        noului proprietar.</li>
                                </ul><span><b>Dacă imobilul
                                        ipotecat urmează să fie cumpărat prin credit bancar de către
                                        cumpărător:</b></span>
                                <ul>
                                    <li>vânzătorul
                                        trebuie să pună la dispoziția cumpărătorului și a notarului
                                        public documentele de la punctul 4.1., după caz (cele care privesc
                                        ipoteca prin credit Prima Casă sau ipotecar);</li>
                                    <li>pe langă acestea,
                                        vânzătorul trebuie să solicite băncii care are instituită
                                        ipoteca asupra imobilului un "Acord de instituire a ipotecii de
                                        Rang II în favoarea băncii creditoare a clientului cumpărător";</li>
                                    <li>aceste
                                        documente puse la dispoziția cumpărătorului, împreună cu
                                        documentele privind proprietatea asupra imobilului și alte
                                        documente solicitate se depun la banca creditoare a cumpărătorului
                                        în vederea obținerii creditului bancar (ipotecar sau Prima Casă);</li>
                                    <li>în
                                        termen de maxim 5 zile banca creditoare primește opinia juridică
                                        cu privire la actele depuse.</li>
                                    <li>dacă
                                        opinia juridică este favorabilă, se poate programa la notar
                                        semnarea antecontractului autentic de vânzare-cumpărare</li>
                                    <li>antecontractul
                                        autentic de vânzare-cumpărare va cuprinde toate aspectele privind
                                        starea juridică a imobilului și se va institui asupra imobilului
                                        ipoteca de Rang II în favoarea băncii creditoare a cumparatorului.
                                        Avansul, dacă nu atinge valoarea sumei care trebuie restituită
                                        bancii creditoare în vederea stingerii creditului se va achita
                                        direct vânzătorului în numerar sau prin virament bancar, iar în
                                        caz contrar suma trebuie virată în contul băncii care are
                                        instituită ipoteca de Rang I.</li>
                                    <li>Dacă
                                        nu se semnează antecontract autentic de vânzare-cumpărare,
                                        părțile pot semna contract autentic de vânzare-cumpărare;</li>
                                    <li>Banii
                                        se virează în contul precizat de banca care are instituită
                                        ipoteca de Rang I. Poate fi virată în acest cont fie întreaga
                                        sumă care acoperă stingerea creditului iar diferența în alt
                                        cont, fie se virează în contul respectiv întreaga suma și astfel
                                        se stinge creditul, iar diferența rămâne în cont;</li>
                                    <li>după
                                        intrarea banilor în contul băncii care are instituită ipoteca de
                                        Rang I, în maxim 5 zile se stinge creditul și se radiază ipoteca;</li>
                                    <li>în
                                        câteva zile se obține extrasul CF liber de sarcini pe numele
                                        noului proprietar.</li>
                                </ul>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-24">
                            <h3>24. Ce este contractul de intermediere?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span>Intermedierea
                                    reprezintă contractul prin care intermediarul se obligă față de
                                    client să îl pună în legătură cu un terț, în vederea
                                    încheierii unui contract. Contractul de intermediere este
                                    reglementat expres de Codul Civil, în articolele 2096-2102.<br><br>&nbsp;</span><span>Contractul
                                    de intermediere se poate clasifica în funcție de tipul de contract
                                    care se va încheia la finalul intermedierii: de închiriere sau de
                                    vânzare-cumpărare.<br><br></span><span>Astfel,
                                    în situația în care părțile urmăresc ca finalitate încheierea
                                    unui contract de închiriere al unui imobil, contractele de
                                    intermediere sunt clasificate în: contracte de intermediere cu
                                    proprietarul (Locatorul) respectiv contracte de intermediere cu
                                    chiriașul (Locatarul).<br><br></span><span>În
                                    situația în care părțile urmăresc încheierea unui contract
                                    autentic de vânzare-cumpărare, contractul de intermediere se va
                                    încheia cu vânzătorul (proprietarul) respectiv cu cumpărătorul.&nbsp;<br><br></span><span>Contractele
                                    de intermediere, indiferent de tipul acestora, pot fi încheiate atât
                                    cu persoane fizice, cât și cu persoanele juridice.<br><br></span><span>Indiferent
                                    de felul contractului care se urmărește a se încheia, agentul
                                    imobiliar are obligația de a semna contractul de intermediere cu
                                    toate părțile, înainte de orice demersuri în vederea semnării
                                    contractelor de închiriere, respectiv contractelor de
                                    vânzare-cumpărare.&nbsp;
                                </span></div>
                        </article>
                        <article class="question-article cf" id="question-25">
                            <h3>25. Ce este contractul de inchiriere si cand se incheie?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span>Contractul
                                    de închiriere reprezintă contractul prin care o parte, numită
                                    locator, se obligă să asigure celeilalte părți, numite locatar,
                                    folosința unui bun pentru o anumită perioadă, în schimbul unui
                                    preț, denumit chirie. Contractul de închiriere este reglementat
                                    expres de articolele 1777-1823 Cod Civil, respectiv de articolele
                                    1824-1835 Cod Civil (care prevăd regulile speciale aplicabile în
                                    cazul închirierii locuințelor).<br><br></span>După
                                ce părțile contractante se pun de acord cu privire la toate datele
                                esențiale ale contractului, acestea se prezintă la sediul agenției
                                imobiliare, având asupra lor actele de identitate, în vederea
                                încheierii contractului de închiriere. Agenția imobiliară dispune
                                de un model de contract de închiriere însă părțile sunt libere,
                                în limita prevederilor dispozițiilor legale, să negocieze orice
                                clauze contractuale. </div>
                        </article>
                        <article class="question-article cf" id="question-26">
                            <h3>26. Ce reprezinta antecontractul de vanzare-cumparare sau promisiunea de vanzare-cumparare?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span>Acest
                                    tip de contract poartă denumirea de promisiune bilaterală de
                                    vânzare-cumpărare și este reglementat de art. 1279 și art. 1669
                                    Cod Civil. Antecontractul de vânzare-cumpărare se poate clasifica
                                    în: antecontract de vânzare-cumpărare sub semnătură privată și
                                    antecontract autentic de vânzare-cumpărare. Indiferent de tipul
                                    antecontractului, pentru a se putea încheia este nevoie ca părțile
                                    să aducă acte de identitate, actul de dobândire, precum și date
                                    esențiale privind tranzacția ce urmează a fi încheiată. <br><br>De
                                    asemenea, părțile trebuie să prezinte certificatele de căsătorie
                                    sau de divorț, după caz, precum și în situația divorțului
                                    vânzătorilor, actul de partaj pentru a verifica cui i-a fost
                                    atribuit bunul. În situația antecontractului autentic de
                                    vânzare-cumpărare este nevoie să existe un extras de Carte
                                    funciară de informare nu mai vechi de 30 de zile, extras care se
                                    poate comanda prin intermediul biroului notarial unde urmează să se
                                    încheie antecontractul, cu 4 zile lucrătoare anterior datei
                                    stabilite pentru semnarea antecontractului autentic de
                                    vânzare-cumpărare.<br></span></div>
                        </article>
                        <article class="question-article cf" id="question-27">
                            <h3>27. Ce este contractul autentic de vanzare-cumparare si cand se incheie?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span>Vânzarea
                                    este contractul prin care vânzătorul transmite sau, după caz, se
                                    obligă să transmită cumpărătorului proprietatea unui bun în
                                    schimbul unui preț pe care cumpărătorul se obligă să îl
                                    plătească. Contractul de vânzare-cumpărare a unui bun imobil se
                                    încheie obligatoriu în formă autentică, în fața notarului
                                    public. Contractul de vânzare-cumpărare este reglementat expres de
                                    art. 1650-1762 Cod Civil.<br><br></span><span>Pentru
                                    semnarea unui contract de vânzare-cumpărare este necesar să fie
                                    comandat un extras de Carte Funciara de autentificare, extras care
                                    este eliberat în termen de 4 zile lucrătoare. De asemenea, în plus
                                    față de actele necesare pentru semnarea unui antecontract de
                                    vânzare-cumpărare, este necesar ca părțile să aducă adeverință
                                    de la asociația de proprietari, adeverintă de la Electrica,
                                    adeverință de la E-on Gaz, certificat fiscal de la Primărie
                                    (valabil 30 de zile), certificat
                                    energetic,
                                    (valabil 10 ani), adeverintă de la Primărie dacă imobilul a fost
                                    cumpărat sub incidenta Legii 10/2001, dacă este cazul, adeverințe
                                    de la: Ministerul Culturii și Cultelor, Primărie si Consiliul
                                    Județean privind exercitarea dreptului de preempțiune (întâietate
                                    la cumpărare), dacă imobilul este monument istoric.</span></div>
                        </article>
                        <article class="question-article cf" id="question-28">
                            <h3>28. Care sunt demersurile post tranzactionale ale vanzatorilor, cumparatorilor si locatorilor?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">În
                                termen de maxim 30 de zile de la data încheierii contractului
                                autentic de vânzare-cumpărare, părțile trebuie să se prezinte la
                                primăria din circumscripția teritorială a imobilului în vederea:<ul>
                                    <li>scoaterii
                                        din evidență a imobilului, de către vânzător</li>
                                    <li>declararea
                                        intrării imobilului în proprietate, demers ce trebuie făcut de
                                        cumpărător</li>
                                </ul><br><span>Pentru
                                    declararea sau scoaterea din evidență a imobilului, părțile
                                    trebuie să completeze un model de declarație și să anexeze copia
                                    contractului autentic de vânzare-cumpărare, copia certificatului de
                                    performanță energetică și copia cărții de identitate. Modelul
                                    de declarație se poate descărca de pe site-ul primăriei sau se
                                    găsește la ghişeul primăriei.<br><br></span>
                                În
                                cazul contractelor de închiriere, în termen de 15 zile de la data
                                semnării contractului, proprietarul persoană fizică are obligaţia
                                de a se prezenta în faţa Administraţiei Finanţelor Publice locale
                                cu 3 exemplare originale ale contractelor de închiriere în vederea
                                înregistrării acestora. </div>
                        </article>
                        <article class="question-article cf" id="question-29">
                            <h3>29. Ce este PUG-ul?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span><span><b>PUG</b>
                                        – Planul Urbanistic General</span></span>
                                <ul>
                                    <li>este
                                        planul de amenajare a teritoriului şi de dezvoltare a
                                        localităţilor.</li>
                                </ul><span>PUG-urile
                                    cuprind analiza, reglementările şi Regulamentul Local de Urbanism
                                    pentru întreg teritoriul administrativ al unităţii de bază, atât
                                    din intravilan, cât şi din extravilan.<br><br></span><span><span>Reglement<span>ările
                                            pe termen scurt pe care le include PUG-ul se referă la stabilirea şi
                                            delimitarea teritoriului intravilan în relaţie cu teritoriul
                                            administrativ al localităţii, stabilirea modului de utilizare a
                                            terenurilor din intravilan, zonificarea funcţională, corelată cu
                                            organizarea reţelei de circulaţie, delimitarea zonelor afectate de
                                            servituţi publice; modernizarea şi dezvoltarea infrastructurii
                                            tehnico-edilitare, stabilirea zonelor istorice protejate şi de
                                            protecţie a monumentelor istorice, formele de proprietate şi
                                            circulaţia juridică a terenurilor, precum şi precizarea
                                            condiţiilor de amplasare şi conformitate a volumelor construite,
                                            amenajate şi plantate.<br><br></span></span></span><span>
                                    Reglementările
                                    pe termen mediu şi lung pe care le include PUG-ul se referă la
                                    evoluţia în perspectivă a localităţii, direcţiile de dezvoltare
                                    funcţională în teritoriu şi traseele coridoarelor de circulaţie
                                    şi de echipare prevăzute în planurile de amenajare ale
                                    teritoriului naţional, zonal şi judeţean.</span>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-30">
                            <h3>30. Ce este PUZ-ul?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span><span><b>PUZ
                                            –</b> Planul Urbanistic Zonal</span></span><br>
                                <ul>
                                    <li>este planul care are caracter de reglementare specifică detaliată a
                                        dezvoltării urbanistice a unei zone din localitate (acoperind toate
                                        funcţiunile: locuire, servicii, producţie, circulaţie, spaţii
                                        verzi, instituţii publice etc) şi asigură corelarea dezvoltării
                                        urbanistice complexe a zonei cu prevederile PUG-ului localităţii
                                        din care face parte.</li>
                                </ul><span>Prin
                                    PUZ se stabilesc obiectivele, acţiunile, priorităţile,
                                    reglementările de urbanism (permisiuni şi restricţii) necesare a
                                    fi aplicate în utilizarea terenurilor şi conformarea construcţiilor
                                    din zona studiată (PUZ-ul reprezintă o fază premergătoare
                                    realizării investiţiilor, prevederile acestuia realizându-se
                                    etapizat în funcţie de fondurile disponibile).<br><br></span>
                                Problemele
                                abordate în cadrul Planului Urbanistic Zonal sunt: organizarea
                                reţelei stradale, zonificarea funcţională a terenurilor,
                                organizarea urbanistic-arhitecturală în funcţie de
                                caracteristicile structurii urbane, indici şi indicatori urbanistici
                                (regim de aliniere, regim de înălţime, POT, CUT, etc), dezvoltarea
                                infrastructurii edilitare, statutul juridic şi circulaţia
                                terenurilor, delimitarea şi protejarea fondului
                                arhitectural-urbanistic de valoare deosebită, dacă acesta există
                                în zona studiată, măsuri de delimitare până la eliminare a
                                efectelor unor riscuri naturale şi antropice dacă acestea există
                                în zona studiată, menţionarea obiectivelor de utilitate publică,
                                măsuri de protecţie a mediului ca rezultat al programelor
                                specifice, reglementări specifice detaliate (permisiuni şi
                                restricţii) incluse în Regulamentul local de urbanism aferent
                                PUG-ului.
                            </div>
                        </article>
                        <article class="question-article cf" id="question-31">
                            <h3>31. Ce este PUD-ul?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span><span><b>PUD</b>
                                        – Plan Urbanistic de Detaliu<br></span></span>
                                <ul>
                                    <li>este acela care stabileşte normele la nivelul unui subteritoriu,
                                        unei străzi, unei pieţe sau a unui grup de terenuri, fiind
                                        documentul care specifică parametrii în care se poate realiza o
                                        construcţie.</li>
                                </ul><span>Certificatul
                                    de urbanism sau o autorizaţie de construire se acordă numai după
                                    consultarea prealabilă a PUD-ului. În cazul în care acesta nu
                                    există, instituţia Primăriei este cea care poate solicita
                                    întocmirea lui pe bază de PUG şi PUZ.<br><br></span><span><span>PUD-ul
                                        se întocmeşte, fie când acest lucru este prevăzut în
                                        Regulamentul Local de Urbanism (RLU), fie atunci când, din diverse
                                        motive, regulamentul nu se poate aplica ca urmare a faptului că
                                        anumite proprietăţi ale amplasamentului sunt diferite de cele
                                        propuse de RLU.<br><br></span></span>
                                PUD-uri
                                se întocmesc şi în cazul în care investiţia preconizată diferă
                                de prevederile RLU.
                                <br><span>
                                    &nbsp;<br>Conform
                                    legii, PUD-ul este aprobat de Consiliul Local al oraşelor, comunelor
                                    sau sectoarelor în cazul Municipiului Bucureşti. PUD-urile nu pot
                                    fi aprobate fără avizul Comisiei Tehnice a Primăriei sau, atunci
                                    când Primăria nu are o comisie tehnică, de către comisia tehnică
                                    de urbanism a Consiliului Judeţean.<br><br></span>
                                Documentul
                                conţine normele care se aplică în cazul unei construcţii:
                                înălţimea maximă, procentul din teren ocupat de construcţie,
                                coeficientul de ocupare a terenului, retragerile minime admise sau
                                destinaţia obiectivului (locuinţe, birouri, comerţ, industrie).
                                Alte avize sunt cele ale furnizorilor locali de utilităţi, cum ar
                                fi Distrigaz, Electrica sau Romtelecom, iar uneori şi avizele de
                                circulaţie sau de mediu.
                                <br><span><span>&nbsp;<br>Termenul
                                        de valabilitate a unui PUD este de 2 ani.</span></span>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-32">
                            <h3>32. Ce este CUT-ul?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span><span><b>CUT</b>
                                        – Coeficient de Utilizare a Terenului</span></span>
                                <ul>
                                    <li>exprimă
                                        raportul dintre Suprafaţa Construită desfăşurată a tuturor
                                        nivelurilor (SD*) şi suprafaţa terenului (S).</li>
                                </ul><span>
                                    *
                                    SD – Suprafaţa Construită Desfăşurată
                                    a nivelurilor unei construcţii reprezintă suma ariilor secţiunilor
                                    orizontale (planurilor) ale tuturor nivelurilor clădirii, delimitate
                                    de conturul exterior al anvelopei clădirii.</span>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-33">
                            <h3>33. Ce reprezinta POT-ul?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span><span><b>POT</b>
                                        – Procentul de ocupare al terenului<br></span></span>
                                <ul>
                                    <li>exprimă raportul dintre suprafaţa construită la sol (SC) şi
                                        suprafaţa terenului considerat (S), înmulţit cu 100 (de exemplu:
                                        POT = 25%, ceea ce înseamnă că se poate construi pe un sfert din
                                        suprafaţa terenului respectiv).</li>
                                </ul>POT-ul
                                generează astfel suprafaţa construită la sol maxim posibilă
                                raportat la suprafaţa terenului. POT-ul se stabileşte în funcţie
                                de destinaţia zonei în care urmează a fi amplasată construcţia
                                în funcţie de condiţiile de amplasare în teren.
                            </div>
                        </article>
                        <article class="question-article cf" id="question-34">
                            <h3>34. Ce este RI-ul?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span><span><b>RI</b>
                                        – Regim de Înălţime</span></span>
                                <ul>
                                    <li>este
                                        direct proporţional cu distanţa faţă de construcţiile
                                        alăturate.</li>
                                    <li>Detaliile
                                        legate de regimul de înălţime sunt cuprinse în Proiectul de
                                        Autorizare a Construcţiei</li>
                                </ul><span>Distanţa
                                    faţă de imobilele vecine diferă în funcţie de zone. Cu toate
                                    acestea, fiecare zonă are reglementate norme minimale ce trebuie
                                    respectate de orice nouă construcţie.<br><br></span><span>
                                    În
                                    zonele aglomerate, distanţa este necesară pentru a asigura spaţiul
                                    privat al locuitorilor, iar înălţimea acestora nu trebuie să
                                    umbrească construcţiile vecine. Trebuie ştiut că distanţele nu
                                    se calculează faţă de clădirile vecine propriu-zise, ci faţă de
                                    limitele de proprietate.</span>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-35">
                            <h3>35. Ce reprezinta PAC-ul?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span><span><b>PAC</b>
                                        – Proiectul pentru Autorizaţia de Construire</span></span><br><span><br>Proiectul
                                    pentru autorizarea executării lucrărilor de construire (PAC) este
                                    un element cheie al procesului de autorizare, alături de
                                    Certificatul de Urbanism, acordurile şi avizele stabilite de
                                    autoritatea emitentă a Autorizaţiei de Construire.<br><br></span><b>Pentru
                                    obţinerea autorizaţiei de construire trebuie parcurse următoarele
                                    3 etape:
                                </b><br><br><i><b>1. Obţinerea
                                        Certificatului de Urbanism</b><br></i><i><br>Acesta
                                    este eliberat de Primăria din circumscripţia teritorială a
                                    terenului unde urmează să se realizeze construcţia. În
                                    Certificatul de Urbanism sunt precizate toate avizele necesare
                                    eliberării autorizaţiei de construire.</i><i><br></i><br><i><b>2. Obţinerea
                                        avizelor necesare autorizării</b><br></i><br><span><b>Dosarul
                                        pentru obţinerea acestor avize va cuprinde:</b></span>
                                <ul>
                                    <li>cererea
                                        tip<br></li>
                                    <li>Certificatul
                                        de Urbanism<br></li>
                                    <li>schiţa
                                        de amplasament a terenului la scară 1:500<br></li>
                                    <li>schiţa
                                        de amplasament a terenului la scară 1:2000<br></li>
                                    <li>schiţa
                                        de amplasament cu poziţia casei pe teren</li>
                                </ul><i><b>3. Proiectul
                                        de autorizaţie cuprinde 3 secţiuni:</b></i><b>&nbsp;</b><br><i><br></i>

                                a)
                                proiectul de arhitectură
                                <br>b)
                                proiectul de rezistenţă<br>c)
                                proiectul de instalaţii<br><br>După
                                finalizarea proiectului de autorizaţie de construire, acesta se
                                depune la Inspecţia de Stat în construcţii (ISC). <br>Parcurgând
                                aceşti trei paşi se va putea emite autorizaţia de construire.

                                <br><b><br>Pentru
                                    eliberarea autorizaţiei de construire sunt necesare următoarele
                                    documente:</b>
                                <ul>
                                    <li>planul
                                        de amplasare a terenului în zonă</li>
                                    <li>Certificatul
                                        de Urbanism</li>
                                    <li>toate
                                        avizele solicitate prin Certificatul de Urbanism</li>
                                    <li>memoriu
                                        tehnic (cuprinde memoriul de arhitectură, rezistenţă şi
                                        instalaţii)</li>
                                    <li>actele
                                        de proprietate asupra terenului</li>
                                    <li>proiectul
                                        de autorizare compus din: planul de situaţie (cum se amplasează
                                        casa în teren), planul fundaţiei elaborat de inginerul de
                                        rezistenţă, planuri de arhitectură pentru toate nivelurile
                                        construcţiei, planul de învelitoare, secţiune caracteristică,
                                        toate faţadele;</li>
                                    <li>scara
                                        de redactare pentru toate desenele este de 1:10</li>
                                    <li>cererea
                                        de eliberare a autorizaţiei de construire</li>
                                    <li>chitanţa
                                        de achitare a taxei de autorizare</li>
                                </ul>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-36">
                            <h3>36. Ce este suprafata utila?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                <ul>
                                    <li>este
                                        suma suprafeţelor încăperilor, fără a lua în considerare
                                        grosimea pereţilor. Aceasta cuprinde: camera de zi, dormitoarele,
                                        băile, WC, duşul, bucătăria, spaţiile de depozitare şi de
                                        circulaţie din interiorul locuinţei.</li>
                                </ul><br>
                                Nu
                                se includ în suprafaţa utilă: suprafaţa logiilor şi a
                                balcoanelor, pragurile, golurile de uşi ale trecerilor cu deschideri
                                până la 1 m, nişele de radiatoare. În cazul locuinţelor duplex,
                                rampa nu se cuprinde în suprafaţa utilă a locuinţei.
                            </div>
                        </article>
                        <article class="question-article cf" id="question-37">
                            <h3>37. Ce reprezinta suprafata construita desfasurata?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                <ul>
                                    <li>este
                                        suma suprafeţelor utile ale încăperilor, logiilor, balcoanelor,
                                        precum şi a cotei-părţi din suprafeţele părţilor comune ale
                                        clădirilor (spălătorii, uscătorii, casa scării, inclusiv
                                        anexele pentru colectarea, depozitarea şi evacuarea deşeurilor
                                        menajere, casa liftului etc), la care se adaugă suprafaţa
                                        aferentă pereţilor interiori şi exteriori ai locuinţei. În
                                        cazul încălzirii cu combustibil solid, se adaugă suprafaţa
                                        aferentă sobelor şi cazanelor de baie.</li>
                                </ul>Nu
                                sunt cuprinse în suprafaţa construită desfăşurată suprafeţele
                                aferente boxelor de la subsol şi ale garajelor care pot fi prevăzute
                                distinct.
                            </div>
                        </article>
                        <article class="question-article cf" id="question-38">
                            <h3>38. Care este diferenta dintre un imobil decomandat si unul semidecomandat?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">Imobilul decomandat este o
                                locuinţă care are intrări separate pentru fiecare cameră, iar
                                camerele nu comunică între ele, in schimb imobilul semidecomandat
                                este o locuinţă ale cărei camere comunică între ele (de exemplu:
                                de cele mai multe ori, la garsoniere, în bucătărie se poate intra
                                doar trecând prin cameră, iar la apartamente de două camere, în
                                dormitor şi baie se poate intra numai trecând prin
                                living/sufragerie, etc).</div>
                        </article>
                        <article class="question-article cf" id="question-39">
                            <h3>39. Ce sunt Cartea Funciara si extrasul de carte funciara?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span><span>Cartea
                                        funciară este un registru public care cuprinde evidenţa juridică
                                        integrală şi exactă a imobilelor de pe teritoriul României,
                                        proprietatea persoanelor fizice sau juridice.<br><br></span></span><span><span>Cartea
                                        funciară dovedeşte existenţa dreptului real înscris, în folosul
                                        persoanei care a dobândit sau constituit cu bună-credinţă un
                                        drept real imobiliar, cât timp nu se dovedeşte contrariul.
                                        Publicitatea imobiliară are ca obiect înscrierea în cartea
                                        funciară a dreptului de proprietate şi a celorlalte drepturi reale
                                        care se transmit, se constituie, se modifică sau care, după caz, se
                                        sting şi se radiază ca urmare a actelor şi faptelor juridice
                                        referitoare la un bun imobil. În cartea funciară se mai înscriu
                                        sau se radiază şi alte raporturi juridice precum drepturile
                                        personale (de exemplu uzufructul viager), interdicţii (interdicţia
                                        de înstrăinare pe o perioadă de timp sau până la plata unei
                                        anumite sume de bani), incapacităţi şi litigii judiciare în
                                        legătură cu bunul imobil.<br><br></span></span><span><span>Cartea
                                        Funciară este alcătuită din titlu care indică numărul ei şi
                                        numele localităţii în care este situat imobilul, precum şi din
                                        III părţi:<br></span></span>
                                <ul>
                                    <li>Partea
                                        I – referitoare la descrierea imobilelor;</li>
                                    <li>Partea
                                        II – referitoare la înscrierile privind dreptul de proprietate;</li>
                                    <li>Partea
                                        III – referitoare la înscrisurile privind dezmembrămintele
                                        dreptului de proprietate şi sarcini;</li>
                                </ul><span>Extrasul
                                    de Carte Funciară se obţine de la un notar doar în baza dovezii de
                                    întabulare în favoarea cumpărătorului. Acesta conţine toate
                                    datele de identificare şi situaţia juridică actuală a imobilului
                                    după cum urmează:<br></span>
                                <ul>
                                    <li>descrierea
                                        imobilului</li>
                                    <li>numele
                                        şi prenumele proprietarilor</li>
                                    <li>actele
                                        în baza cărora aceştia au dobândit proprietatea</li>
                                    <li>sarcinile
                                        bunului: ipoteci, comandamente, interdicţii de înstrainare,
                                        privilegii.</li>
                                </ul><br><span><span>Extrasul
                                        de carte funciară este de două tipuri de informare şi de
                                        autentificare. Ambele se eliberează de birourile de Carte Funciară
                                        din cadrul Agenţiei Naţionale de Cadastru şi Publicitate
                                        Imobiliară (ANCPI – sau prin Oficiile Locale ale acesteia). Ele se
                                        pot solicita pentru eliberare direct la Oficiile Locale de
                                        Publicitate Imobiliară sau prin intermediul unui birou notarial.<br><br></span></span><span><span>La
                                        dobândirea dreptului de proprietate asupra imobilului, biroul
                                        notarului public unde s-a semnat actul de proprietate va depune la
                                        Cartea Funciară următoarele documente în vederea înscrierii
                                        dreptului de proprietate:<br></span></span>
                                <ul>
                                    <li>cerere</li>
                                    <li>actul
                                        care justifică înscrierea în cartea funciară</li>
                                    <li>taxa
                                        de timbru</li>
                                    <li>înscriere
                                        întabulare</li>
                                </ul><span>În
                                    urma acestei proceduri se eliberează un extras de carte funciară
                                    către delegaţii notariali, la cererea clienţilor.Astfel, este
                                    exclusă vânzarea imobilului de mai multe ori. După depunerea
                                    cererii, mai durează 3 zile până la obţinerea lui.<br><br></span>
                                Extrasul
                                de carte funciară autentic se poate solicita doar de către un birou
                                notarial, iar eliberarea acestuia presupune blocarea cărţii
                                funciare pentru o perioadă de 10 zile lucrătoare.
                                <br><span>
                                    &nbsp;Extrasul
                                    de catre funciară de informare are doar rol consultativ.&nbsp;
                                </span><br>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-40">
                            <h3>40. Ce este creditul ipotecar si care sunt conditiile generale ale acestuia?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                <ul>
                                    <li>este
                                        un tip de credit bancar prin care o persoană fizică sau juridică
                                        este împrumutată de banca creditoare cu o anumită sumă de bani
                                        în vederea achiziţiei unei locuinţe.</li>
                                </ul><span><b>Condiţii
                                        generale:</b></span>
                                <ul>
                                    <li>debitorul
                                        să dispună de un avans 15-30% din valoarea totală a preţului
                                        imobilului, în funcţie de condiţiile băncii creditoare</li>
                                    <li>debitorul
                                        să fie eligibil pentru obţinerea creditului</li>
                                    <li>imobilul
                                        să fie evaluat la preţul negociat de părţi</li>
                                    <li>să
                                        nu existe interdicţii de înstrăinare</li>
                                    <li><span>
                                            să
                                            nu existe motive pentru care ipoteca să nu poată fi înscrisă
                                            etc.</span></li>
                                </ul>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-41">
                            <h3>41. Ce este creditul Prima Casa si care sunt conditiile specifice ale acestuia?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span><span>Este
                                        acel tip de credit, cel mai accesat şi solicitat în ultimii ani.
                                        Acesta este un program guvernamental gândit ca o măsură anticriză
                                        şi al cărui scop declarat a fost de deblocare a creditării
                                        imobiliare, de sprijinire a construcţiilor şi de impulsionare a
                                        pieţei imobiliare. Prin programul Prima Casă statul garantează
                                        împrumuturile acordate de bănci clienţilor, într-o proporţie
                                        care s-a modificat de-a lungul timpului.<br><br></span></span><span><span>Programul
                                        Prima Casă a debutat în anul 2009 prin Ordonanţa de Urgenţă nr.
                                        60/2009 şi a suferit de-a lungul timpului o serie de modificări.<br><br></span></span><span><span>De
                                        programul Prima Casă poate beneficia orice persoană fizică majoră,
                                        care nu deţine sau nu a deţinut, fie individual, fie în comun cu
                                        soţul/soţia, o locuinţă cu o suprafaţă utilă mai mare de 50
                                        mp.<br><br></span></span><span><span>Orice
                                        persoană care deţine o cotă parte dintr-o locuinţă, poate accesa
                                        un credit Prima Casă pentru a achiziţiona şi diferenţa de cote
                                        părţi din acelaşi imobil.<br><br></span></span><span><span>Accesând
                                        un credit Prima Casă, clientul poate achiziţiona maxim o locuinţă
                                        sau poate construi o singură casă singur sau împreună cu alte
                                        persoane.<br><br></span></span><span><b>Sumele
                                        maxime ce pot fi împrumutate în cadrul programului Prima Casă sunt
                                        următoarele:</b></span>
                                <ul>
                                    <li>57000
                                        euro pentru locuinţe vechi şi</li>
                                    <li>66500
                                        euro pentru locuinţe noi&nbsp;</li>
                                </ul><br><span>Avansul
                                    necesar accesării unui credit Prima Casă este de minim 5% din
                                    valoarea totală a preţului bunului achiziţionat/construit. În
                                    cazul în care bunul achiziţionat are o valoare mai mare decât cea
                                    maximă a creditului, imobilul poate fi achiziţionat prin programul
                                    Prima Casă, cu condiţia ca avansul să fie mai mare şi să
                                    acopere astfel diferenţa de preţ.<br><br></span><span><b>Prin
                                        creditul Prima Casă pot fi achiziţionate următoarele tipuri de
                                        locuinţe:<br></b></span>
                                <ul>
                                    <li>construcţii
                                        finalizate (inclusiv cele ANL)</li>
                                    <li>construcţii
                                        nefinalizate, aflate în diverse etape de construcţie (inclusiv
                                        cele ANL)</li>
                                    <li>locuinţe
                                        noi, construite pe baza autorizaţiilor de construire eliberate după
                                        22.02.2010</li>
                                </ul><b></b><b>Prin
                                    creditul Prima Casă pot fi construite următoarele tipuri de
                                    locuinţe:<br></b>
                                <ul>
                                    <li>locuinţe
                                        individuale, cu un singur beneficiar</li>
                                    <li>locuinţe
                                        comune, construite de minim 2 beneficiari, în cadrul unor asociaţii
                                        fără personalitate juridică;</li>
                                </ul><b></b><b>Costurile
                                    şi constrângerile accesării unui credit Prima Casă sunt
                                    următoarele:<br></b>
                                <ul>
                                    <li>avans
                                        de minim 5% din preţul imobilului</li>
                                    <li>dobânda
                                        ROBOR LA 3 luni + 2 %</li>
                                    <li>durata
                                        maximă a creditului este de 30 ani</li>
                                    <li>beneficiarul
                                        creditului nu are dreptul să înstrăineze imobilul cumpărat prin
                                        programul Prima Casă pe o perioadă de 5 ani</li>
                                </ul>
                            </div>
                        </article>
                    </div>




                </div>
                <div class="tab-pane fade" id="v-pills-bank" role="tabpanel" aria-labelledby="v-pills-bank-tab">
                    <div class="ghid-page-content">
                        <h1><span class="guide-bank-icon"></span>Ghidul bancar</h1>
                        <nav class="guide-page-nav">
                            <ul>
                                <li><a href="#question-1">1. Ce este departamentul Financiar Bancar Blitz si care este rolul sau?</a></li>
                                <li><a href="#question-2">2. Cine poate apela la serviciul Financiar Bancar Blitz?</a></li>
                                <li><a href="#question-3">3. Care sunt institutiile bancare colaboratoare cu Blitz?</a></li>
                                <li><a href="#question-4">4. Ce reprezinta Creditul Prima Casa si care sunt conditiile de acordare?</a></li>
                                <li><a href="#question-5">5. Ce reprezinta creditul ipotecar si care sunt conditiile de acordare?</a></li>
                                <li><a href="#question-6">6. Ce este creditul de nevoi personale?</a></li>
                                <li><a href="#question-7">7. Ce este evaluarea imobiliara si cine o intocmeste?</a></li>
                                <li><a href="#question-8">8. Sunt eligibil sa accesez un credit ipotecar sau Prima Casa?</a></li>
                                <li><a href="#question-9">9. Ce acte sunt necesare in cazul procesului de creditare?</a></li>
                                <li><a href="#question-10">10. Ce acte sunt necesare pentru instrainarea unui imobil achizitionat prin credit ipotecar?</a></li>
                                <li><a href="#question-11">11. Ce acte sunt necesare pentru instrainarea unui imobil achizitionat prin credit Prima Casa?</a></li>
                            </ul>
                        </nav>
                        <article class="question-article cf" id="question-1">
                            <h3>1. Ce este departamentul Financiar Bancar Blitz si care este rolul sau?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Departamentul
                                Financiar Bancar Blitz este unul dintre departamentele cu o
                                importanta crescuta in cadrul organizatiei noastre. Acesta este
                                infiintat pentru a veni in sprijinul clientilor care doresc sa
                                cumpere un imobil prin credit bancar, dar si in sprijinul clientilor
                                care doresc sa vanda o proprietate achizitionata cu un credit bancar
                                si este necesara stingerea creditului si realizarea tuturor
                                operatiunilor prealabile instrainarii unui astfel de imobil.
                                Departamentul Financiar-Bancar se afla in stransa legatura cu
                                clientii specifici in vedere identificarii celei mai potrivite
                                optiuni bancare.
                                <br><span>&nbsp;<br>Activitatea
                                    departamentului&nbsp;</span>Financiar-Bancar<span>&nbsp;Blitz consta in consilierea si
                                    suportul oferit clientilor care fac o tranzactie imobiliara prin
                                    accesarea unui credit bancar. <br></span><span>&nbsp;<br>Departamentul
                                    are rolul de a indruma clientii si de a le oferi suport pe tot
                                    parcursul procesului de creditare, inca din faza in care acestia sunt
                                    in cautare de imobil, fara a fi identificat unul in vederea
                                    achizitiei. Astfel consilierii departamentului Financiar-Bancar se
                                    ocupa de contactarea tuturor clientilor Blitz care sunt interesati de
                                    cumpararea unui imobil prin accesarea unui credit bancar.</span>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-2">
                            <h3>2. Cine poate apela la serviciul Financiar Bancar Blitz?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Pentru
                                toti clientii care au semnat un contract de intermediere cumparare,
                                s<span>erviciul
                                    financiar bancar este gratuit. Pentru orice alta persoana fizica sau
                                    juridica, chiar daca nu a semnat un contract de intermediere,
                                    serviciul se poate presta contra cost.<br><br></span>
                                Consilierii
                                financiari-bancari ofera servicii specializate clientilor care doresc
                                sa cumpere un imobil cu credit bancar, persoanelor-fizice sau
                                juridice care nu sunt clienti Blitz, dar contra cost apeleaza la
                                consilierii&nbsp;Financiar-Bancar, vanzatorii care au imobile ipotecate
                                ca urmare a achizitiei imobiliare prin credit, orice client care
                                doreste sprijin in negocierea unui curs valutar cu o institutie
                                bancara sau care doresc informatii despre transferuri financiare. </div>
                        </article>
                        <article class="question-article cf" id="question-3">
                            <h3>3. Care sunt institutiile bancare colaboratoare cu Blitz?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span>Departamentul
                                    Financiar-Bancar a incheiat parteneriate cu cele mai importante institutii
                                    bancare din Romania, parteneriatele continuand sa se inmulteasca.
                                    Departamentul urmareste multiplicarea colaborarilor cu institutiile
                                    bancare, astfel incat sa poata oferi clientilor servicii vaste si
                                    diverse in functie de necesitate personala a fiecaruia.<br><br></span>In
                                prezent, departamentul&nbsp;Financiar-Bancar<span>&nbsp;este in colaborare cu:<br><br></span>
                                <ul>
                                    <li>BT</li>
                                    <li>BCR</li>
                                    <li>BRD</li>
                                    <li>ING Bank</li>
                                    <li>Alpha Bank</li>
                                    <li>UniCredit Bank</li>
                                    <li>OTP Advisors<br></li>
                                    <li><span>Libra Bank<br></span></li>
                                    <li><span>Patria Bank<br></span></li>
                                </ul>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-4">
                            <h3>4. Ce reprezinta Creditul Prima Casa si care sunt conditiile de acordare?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Prima
                                Casa este un tip de credit ipotecar creat de catre statul roman care
                                ofera clientilor, ce nu au in proprietate un imobil cu o suprafata
                                mai mare de 50 mp, posibilitatea de a achizitiona un imobil cu un
                                avans de 5% din valoarea pretului de cumparare. Este un produs la
                                care bancile se inscriu voluntar pentru a-l oferi clientilor, de
                                aceea sunt si institutii bancare care nu au produsul Prima Casa.
                                Creditul Prima Casa se poate acorda doar pentru o perioada de 30
                                ani, spre deosebire de celelalte tipuri de credite care permit
                                acordarea pe perioade mai mici sau mai mari de timp.<br><br><span>Ipoteca
                                    pentru acest tip de credit se constituie astfel: 50% din ipoteca se
                                    constituie in favoarea bancii si 50% din ipoteca se constituie in
                                    favoarea statului roman, reprezentat prin Fondul de Garantare si
                                    Ministerul Finantelor. Odata cu inscrierea ipotecii, se instituie si
                                    interdictia de instrainare a imobilului pentru primii 5 ani. Se pot
                                    achizitiona prin acest tip de credit imobile care au fost construite
                                    pe baza unei autorizatii de constructie obtinute inainte de anul
                                    2010, cumparatorii obtinand pentru cumparare un credit de maxim
                                    57.000 Euro (echivalentul in lei) si imobile care au fost construite
                                    pe baza unei autorizatii de constructie obtinuta dupa anul 2010,
                                    cumparatorii obtinand un credit de maxim 66.500 Euro (echivalentul in
                                    lei). Exista si un produs Prima Casa pentru construirea unei
                                    locuinte. Pentru acest tip de credit este necesar sa se faca dovada
                                    detinerii in proprietate a unui teren. Cumparatorii pot obtine un
                                    credit de maxim 71.250 Euro (echivalentul in lei).<br><br></span><span>Creditul
                                    Prima Casa se acorda doar in moneda nationala, respectiv in ron.<br><br></span><span>Pragurile
                                    de finantare precizate anterior nu limiteaza o anumita valoare a
                                    imobilului, clientul avand posibilitatea sa suplimenteze pragul de
                                    finantare cu venituri provenind din surse proprii, fara limita in
                                    acest sens.<br></span><br><span>Achizitia
                                    prin credit Prima Casa impune rigiditate in privinta situatiei
                                    juridice a imobilului ce urmeaza a fi achizitionat. Astfel, daca in
                                    extrasul de Carte Funciara imobilul apare ca fiind birou sau demisol,
                                    ori are modificari nerectificate pe schita, fara a ne limita la
                                    aceste situatii, in principiu nu poate fi finanta achizitia unui
                                    imobil aflat intr-una din aceste situatii.<br><br></span><span>O
                                    alta conditie de acordare a creditului Prima Casa este legata de
                                    disponibilitatea fondurilor. Fondurile sunt acordate la inceputul
                                    anului, insa se pot suplimenta pe parcursul anului, sau se pot
                                    epuiza, aceasta din urma situatie reprezentand unul din neajunsurile
                                    acestui tip de credit.<br><br></span><span>Pentru
                                    aceste situatii in care clientii doresc sa preintampine epuizarea
                                    fondurilor, exista posibilitatea de a rezerva fondurile de Prima Casa
                                    pe o perioada de maxim 18 luni, pentru imobilele noi care nu au inca
                                    CF individual. Astfel, pe baza autorizatiei de constructie si a
                                    extrasului de Carte Funciara pe teren se pot rezerva fonduri la o
                                    singura banca, pentru un singur imobil si doar in baza pretului
                                    precizat in antecontract. Acest serviciu impune plata unui comision
                                    de 0.18% din valoarea imobilului, comision ce va fi achitat de catre
                                    cumparator.<br><br></span><span>Creditul
                                    Prima Casa impune ca si conditie incheierea unui antecontract si
                                    plata unui avans de 5% din pretul imobilului. Antecontractul trebuie
                                    semnat inainte de a se trimite dosarul pentru analiza la Fondul de
                                    garantare.<br><br></span><span>Analiza
                                    si aprobarea dosarului de credit prin acest program dureaza mai mult
                                    ca aceea a unui alt tip de credit si se desfasoara astfel: depunerea
                                    documentelor la banca (documente de venit, documentele imobilului si
                                    antecontractul), evaluarea imobilului, analiza juridica, transmiterea
                                    dosarului catre fondul de garantare, analiza dosarului de catre
                                    fondul de garantare, retrimiterea fizica a dosarului in banca,
                                    verificarea corectitudinii documentelor si semnare finala a
                                    contractului autentic de vanzare-cumparare.<br><br></span><span>Costurile
                                    ce vor fi suportate de catre clientii care acceseaza un credit Prima
                                    Casa sunt:<br><br></span>
                                <ul>
                                    <li>2% dobanda bancii (indiferent la ce banca se incaseaza
                                        venitul salarial) + IRCC</li>
                                    <li>suportarea costurilor pentru evaluarea imobilului</li>
                                    <li>plata unui depozit colateral format din 3 rate de
                                        dobanda (care se restituie dupa plata ultimei rate)</li>
                                    <li>comisionul catre fondul de garantare, de 0.2% din
                                        valoarea creditului, care se plateste la inceputul fiecarui an,
                                        alaturi de rata de pe luna respectiva, pana in utimul an al
                                        creditului.</li>
                                    <li>cheltuielile notariale</li>
                                    <li>asigurarile specifice (de imobil si de viata)</li>
                                </ul>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-5">
                            <h3>5. Ce reprezinta creditul ipotecar si care sunt conditiile de acordare?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span>Creditul
                                    ipotecar/imobiliar este acel produs al institutiilor bancare dedicat
                                    clientilor care doresc sa cumpere bunuri imobile si nu dispun de
                                    intregul pret din surse proprii. In urma accesarii creditului se
                                    constituie ipoteca in favoarea bancii creditoare. Nu exista
                                    conditionare in ceea ce priveste suma imprumutata, aceasta depinzand
                                    de veniturile solicitantului si alte coplatitorilor (daca este
                                    cazul). Acest tip de credit poate fi acordat pe o perioada de maxim
                                    35 ani.<br><br></span><span>Creditul
                                    ipotecar/imobiliar se adreseaza atat achizitiei de constructie cu
                                    teren, cat si de constructie. Ipoteca poate fi pusa si pe un alt
                                    imobil, nefiind necesar sa fie inscrisa asupra imobilului ce urmeaza
                                    a fi achizitionat.<br><br>&nbsp;</span><span>Avansul
                                    care trebuie achitat de cumparator cu venituri provenite din surse
                                    proprii este de minim 15% din pretul imobilului, insa difera la
                                    fiecare institutie creditoare, putand ajunge pana la la 35%. Avansul
                                    depinde si de moneda de creditare, localizarea imobilului, tipul
                                    imobilului sau situatia financiara a clientului. Toate aceste aspecte
                                    se iau in considerare la stabilirea cuantumului avansului ce trebuie
                                    achitat de catre cumparator.<br><br></span><span>Totusi
                                    spre deosebire de creditul Prima Casa, cel ipotecar prezinta o
                                    flexibilitate a conditiilor de creditare si le permite bancilor sa
                                    modifice anumiti parametri cum ar fi dobanda sau avansul pentru
                                    oferirea unei solutii cat mai bune de creditare axata pe
                                    particularitatile clientului. Se pot achizitiona si imobilele cu
                                    situatii juridice mai deosebite, imobile ale caror achizitie nu poate
                                    fi efectuata prin Credit Prima Casa.<br><br></span><span>Preaprobarea
                                    financiara se face in cazul creditelor ipotecare, garantand
                                    conditiile stabilite la prima discutie cu banca si are o valabilitate
                                    care difera de la 45 zile la 90 zile, timp in care clientul se
                                    bazeaza pe buget si poate cauta un imobil, fiind sigur ca din punct
                                    de vedere financiar este eligibil.&nbsp;<br><br></span><span>Analiza
                                    si aprobarea dosarului de credit prin acest program dureaza mai putin
                                    ca in situatia creditului Prima Casa, respectiv aproximativ 1 luna.
                                    Procedura de acordare a creditului este urmatoarea: depunerea
                                    documentelor la banca (documente de venit, documentele imobilului si
                                    antecontract), evaluarea imobilului, analiza juridica, verificarea
                                    corectitudinii documentelor si semnarea finala a contractului
                                    autentic de vanzare-cumparare.<br><br></span>Acest
                                tip de credit poate fi contractat in lei sau in Euro.
                                <span><span>Costurile
                                        suportate de client in cazul Creditului Ipotecar:<br><br></span></span>
                                <ul>
                                    <li>dobanda bancii (valoarea depinzand de situatia in care
                                        cumparatorul incaseaza veniturile salariale prin banca de la care se
                                        contracteaza creditul sau nu) + Robor3M, Robor6M sau Euribor in
                                        functie de banca aleasa si de moneda de creditare</li>
                                    <li>evaluarea imobilului</li>
                                    <li>comision de analiza a dosarului (care difera in functie
                                        de banca)</li>
                                    <li>comision de gestiune a creditului (care difera in
                                        functie de banca)</li>
                                    <li>cheltuielile notariale</li>
                                    <li>asigurarile specifice (de imobil, de viata si somaj)</li>
                                </ul>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-6">
                            <h3>6. Ce este creditul de nevoi personale?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Creditul
                                de nevoi personale este de doua tipuri:
                                <br>
                                <ol>
                                    <li>Credit de nevoi personale fara ipoteca</li>
                                    <li>Credit de nevoi personale cu ipoteca</li>
                                </ol>Perioada
                                de creditare la ambele produse de finantare este de 5 ani.
                                <br>Suma
                                maxima ce poate fi imprumutata prin credit de nevoi personale fara
                                ipoteca este de 20.000 euro, echivalentul in lei, iar in cazul
                                creditului de nevoi personale garantat cu ipoteca se poate obtine o
                                suma mai mare, dar trebuie sustinuta cu venituri mai mari.
                            </div>
                        </article>
                        <article class="question-article cf" id="question-7">
                            <h3>7. Ce este evaluarea imobiliara si cine o intocmeste?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span>Pentru
                                    ca un imobil sa poata fi luat in garantie, trebuie evaluat conform
                                    unor standarde care sa reflecte situatia bunului ce urmeaza sa fie
                                    achizitionat. Informatiile evaluatorului vor oferi detalii importante
                                    despre investitia ce urmeaza a fi facuta, reflectand situatia
                                    materiala a imobilului, dar si situatia financiara de pe piata a
                                    acestuia (pretul imobilului este corect sau nu referitor la
                                    standardele pietei).<br><br></span>Banca
                                va finanta un anumit procent din valoarea bunului tranzactionat sau
                                din valoarea evaluata, raportandu-se tot timpul la valoarea cea mai
                                mica.
                                <br><span>&nbsp;<br>Evaluarea
                                    va fi efectuata de catre evaluatori acreditati si agreati de catre
                                    institutia bancara creditoare.</span>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-8">
                            <h3>8. Sunt eligibil sa accesez un credit ipotecar sau Prima Casa?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted"><span>Creditele
                                    destinate achizitiei imobiliare sau constructiei au ca si
                                    particularitate limita de varsta. Astfel, solicitantul si/sau
                                    coplatitorul vor plati ultima rata la implinirea varstei de 63 de ani
                                    pentru femei si 65 de ani pentru barbati - conform varstei de
                                    pensionare din tara noastra.<br><br></span><span>&nbsp;Pe
                                    langa solicitant mai pot fi implicati maxim 3
                                    coplatitori/coimprumutati care sa garanteze cu veniturile proprii la
                                    contractarea creditului apartinand titularului.<br><br></span><span>Veniturile
                                    acceptate de banca creditoare sunt veniturile obtinute din salariu,
                                    din activitatea de Persoana Fizica Autorizata, pensie definitiva-
                                    nerevizuibila, chirii, indemnizatie de crestere a copilului sau alte
                                    venituri permanente care pot fi dovedite. Se accepta un grad de
                                    indatorare a clientilor care uneori merge pana la 70-80% din
                                    venituri, in functie de profilul fiecarui client.<br><br></span><span>Prin
                                    client eligibil mai intelegem si faptul ca acesta are un minim de
                                    activitate de 3 luni la ultimul angajator, este incadrat pe perioada
                                    nedeterminata de timp la locul de munca sau a trecut de o prima sau o
                                    a doua prelungire in cazul in care este angajat pe perioada
                                    determinata de timp.<br><br></span><span>In
                                    acelasi timp, clientul trebuie sa aiba o vechime de cel putin un an
                                    in campul muncii, pentru veniturile din Romania. In cazul veniturilor
                                    din Persoana Fizica Autorizata, este necesara o vechime de un an.<br><br>&nbsp;</span>In
                                cazul pensiilor si a indemnizatiilor de crestere a copilului trebuie
                                sa se prezinte bancii creditoare deciziile prin care survin aceste
                                venituri.
                                Pentru
                                a fi eligibil, un client nu trebuie sa fie inscris in Biroul de
                                Credit ca rau-platnic. </div>
                        </article>
                        <article class="question-article cf" id="question-9">
                            <h3>9. Ce acte sunt necesare in cazul procesului de creditare?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                <ul>
                                    <li><b>Acte necesare referitoare la veniturile clientilor:</b></li>
                                </ul>
                                Pentru
                                clientii cu venituri din Romania, institutiile bancare se solicita
                                urmatoarele documente: adeverinta de venit, (tipizat specific
                                fiecarei banci), fluturasi de salariu, copie contract de munca, act
                                aditional de modificare a salariului, decizie de pensionare, cupon
                                pensie.<br><span><br>Pentru
                                    clientii cu venituri din strainatate institutiile bancare solicita
                                    urmatoarele documente: adeverinta
                                    de venit/document emis de angajator privind veniturile realizate.
                                    Acest
                                    document trebuie sa ateste veniturile realizate pe o perioada de trei
                                    luni calendaristice consecutive recente si sa fie emis cu cel mult 60
                                    de zile calendaristice inaintea datei analizei. Este necesar si un
                                    raport
                                    privind activitatea desfasurata, emis de angajator (daca este cazul),
                                    contractul
                                    individual de munca inregistrat la organul competent al
                                    administratiei din statul unde solicitantul de credit este angajat,
                                    acte aditionale (daca este cazul), fluturasi de salariu, extras de
                                    cont eliberat de banca pentru ultimele 6 luni (semat si stampilat de
                                    banca), document
                                    prevazut de legislatia statului respectiv care sa evidentieze plata
                                    impozitelor la zi de catre cumparator.<br><br></span>
                                <ul>
                                    <li><b>Acte necesare referitoare la situatia juridica a
                                            imobilul achizitionat:</b></li>
                                </ul>
                                In cazul apartamentelor si caselor:


                                <br><b>Apartamente si case cu CF-uri
                                    individuale:</b>&nbsp;<br><br>
                                <ul>
                                    <ul>
                                        <li>extras CF/ copie CF cu vechime
                                            maxima 30 zile aferente imobilului care se aduce in garantie: CF
                                            individual, colectiv si teren.</li>
                                        <li>incheiere CF de intabulare
                                            (pentru imobilele care se cumpara direct de la constructor)</li>
                                        <li>act de dobandire (ex: titlu de
                                            proprietate, contract vanzare-cumparare, contract de schimb
                                            imobiliar, hotărare judecătorească definitivă, contract de
                                            donaţie etc)&nbsp;;</li>
                                        <li>actul de declarare a calităţii
                                            de proprietar, dacă este cazul (tranzacţie de partaj, certificat de
                                            moştenitor etc), alte acte susceptibile de a transfera sau declara
                                            proprietatea.

                                            In cazul tranzactiilor de partaj
                                            si a certificatelor de mostenitor trebuie prezentat si actul de
                                            dobandire incheiat anterior tranzactiei de partaj sau a
                                            certificatului de mostenitor.</li>
                                        <li>acte de
                                            comasare/dezmembrare/apartamentare succesive actului de
                                            dobandire/declarativ de proprietate, ulterioare dobandirii, dacă
                                            este cazul.</li>
                                        <li>contractul de concesiune al
                                            terenului aferent locuinţei pe perioada existenţei construcţiei/
                                            convenţia sau declaraţia de constituire a superficiei, dacă este
                                            cazul, şi dovada achitării la zi a taxei de concesiune.</li>
                                        <li>acte doveditoare privind plata
                                            restului de preţ, dacă actul de dobandire a proprietăţii nu
                                            menţionează achitarea integrală.</li>
                                        <li>documentatia cadastrala vizata de catre OCPI: Plan de amplasament si delimitare a imobilului – teren si constructie (intocmit DUPA edificarea constructiei, trebuie sa includa si constructia).<br></li>
                                        <li><span>certificatul privind performanta energetica a constructiei si a apartamentului, intocmit in vederea efectuarii receptiei (daca receptia s-a efectuat dupa data de 19.07.2013).<br></span></li>
                                        <li><span>act de apartamentare/dezmembrare in urma caruia a rezultat apartamentul care face obiectul analizei.<br></span></li>
                                        <li><span>autorizatie de construire<br></span></li>
                                        <li><span>certificatul de urbanism aferent emiterii autorizatiei de construire.<br></span></li>
                                        <li><span>proces verbal de receptie la terminarea lucrarilor.<br></span></li>
                                        <li><span>certificat de atestare a edificarii constructiei.<br></span></li>
                                    </ul>
                                </ul><span><b>Pentru
                                        imobile in curs de constructie sau la rosu:</b><br><br></span>
                                <ul>
                                    <ul>
                                        <li>actele menţionate mai sus
                                            privind terenul pe care se construieşte.</li>
                                        <li>autorizaţie de construire
                                            valabilă conform dispoziţiilor legale.</li>
                                        <li>declaraţie de începere a lucrărilor pentru autorizatiile de
                                            construire/ conform Legii nr.50/1991,
                                            cu dovada comunicării către Primărie.</li>
                                        <li>la finalizare, certificat de
                                            atestare a edificarii/extinderii locuintei şi toate actele care
                                            atestă întabularea si proces verbal de receptie finala.</li>
                                    </ul>
                                </ul><b>In
                                    cazul terenurilor se cer urmatoarele documente:<br><br></b>
                                <ul>
                                    <li>acte
                                        din care rezulta dreptul de proprietate</li>
                                    <li>acte
                                        de modificare parcelara</li>
                                    <li>acte
                                        emise de cartea funciara</li>
                                </ul>
                            </div>
                        </article>
                        <article class="question-article cf" id="question-10">
                            <h3>10. Ce acte sunt necesare pentru instrainarea unui imobil achizitionat prin credit ipotecar?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                <ul>
                                    <li>Acord de
                                        instrainare imobil din partea bancii creditoare a clientului vanzator&nbsp;</li>
                                    <li>Acord
                                        de instituire ipoteca rang 2 in favoarea bancii creditoare a
                                        clientului cumparator</li>
                                    <li>Acord
                                        radiere ipoteca dupa stingerea soldului a clientului vanzator

                                        Soldul
                                        de credit ramas pentru creditul vanzatorului</li>
                                    <li><span>Codul
                                            IBAN (daca clientul vanzator vrea sa primeasca si in alt cont decat
                                            cel in care are creditul , atunci trebuie 2 coduri IBAN)&nbsp;
                                        </span></li>
                                </ul>Antecontractul
                                intre cele 2 parti se semneaza doar dupa ce avem aceste acorduri, sau
                                daca prin antecontractul de vanzare-cumparare se promite obtinerea
                                acestora pana la data semnarii contractului autentic de
                                vanzare-cumparare.
                            </div>
                        </article>
                        <article class="question-article cf" id="question-11">
                            <h3>11. Ce acte sunt necesare pentru instrainarea unui imobil achizitionat prin credit Prima Casa?</h3>
                            <div class="clearfix"></div>
                            <div class="content-formatted">
                                Acordul Fondului de Garantare, chiar si
                                in primii 5 ani de la data accesarii creditului, in acest caz, cu
                                conditia rambursarii integrale a creditului.
                                <br><span>&nbsp;<br>Dupa ce s-au implinit
                                    cei 5 ani de interdictie de instrainare, trebuie
                                    solicitat acordul de vanzare din partea Ministerului Finantelor si
                                    acordul din partea Bancii creditoare.</span>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-faq" role="tabpanel" aria-labelledby="v-pills-faq-tab">

                </div>

            </div>
        </div>

    </div>
</div>
</div>
<a id="page_scroller" href="#top" style="position: fixed; z-index: 2147483647;"><i class="fa fa-chevron-up"></i></a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

@endsection