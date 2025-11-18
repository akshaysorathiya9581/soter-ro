@extends('main.layouts.master')

@section('body')

    <section>

        <div class="hr-title hr-long center"><abbr>Atelierele Soter</abbr></div>
        <div class="hr-title hr-short center"><abbr><strong>Noutăți fiscale 2025</strong> </abbr> </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <p style="text-align:center">
                    <strong>Vă invităm să ne fiți alături la <em>Conferința Noutăți fiscale 2025</em>,
                        un eveniment dedicat analizării principalelor provocări și oportunități în domeniul fiscal-contabil.
                        </br>
                        În centrul discuțiilor se vor afla modificările fiscal-bugetare recente, introduse prin OUG nr.
                        156/2024, cunoscută și sub denumirea <em>Ordonanța Trenuleț</em> – în varianta 2025. </br>
                        La acestea se vor adăuga dezbateri privind alte actualizări importante, precum noutăți din domeniul
                        e-Factura, e-TVA, e-Transport, dar și cazuri relevante din jurisprudența europeană recentă. </br>
                    </strong>
                </p>
                <p>Evenimentul va avea loc în sistem <strong>hibrid </strong> (prezență fizică / online) pe data de
                    <strong>4 Februarie</strong>, în intervalul orar <strong>9.30 – 15.30</strong>, cu pauze de cafea și
                    prânz.
                </p>
                <p>Primirea participanților cu prezență fizică se va face începând cu ora <strong> 9.00 </strong>, la sala
                    Panoramic a Hotelului Marshal Garden (Dorobanți 50B). </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <div class="col-md-3 col-xs-3  p-t-20">
                    <h3>Lector:</br>Mariana Vizoli</h3>
                    <h4> Independent Tax Consultant </h4>
                    <h4>mariana.vizoli@soter.ro</h4>
                    <img src="{{URL::asset('assets/images/team/mariana_vizoli.jpg')}}"
                        class="img-responsive img-circle" width="150px" alt="">
                </div>
                <div class="col-md3 col-xs-3  p-t-20">
                    <h3>Lector:</br>Dan Manolescu</h3>
                    <h4> Tax Partner </h4>
                    <h4>dan.manolescu@soter.ro</h4>
                    <img src="{{URL::asset('assets/images/team/DanManolescu.jpg')}}"
                        class="img-responsive img-circle" width="150px" alt="">
                </div>
                <div class="col-md-3 col-xs-3  p-t-20">
                    <h3>Lector:</br>Luminița Obaciu</h3>
                    <h4> Payroll Partner </h4>
                    <h4>luminita.obaciu@soter.ro</h4>
                    <img src="{{URL::asset('assets/images/team/LuminitaObaciu.jpg')}}"
                        class="img-responsive img-circle" width="150px" alt="">
                </div>
                <div class="col-md-3 col-xs-3  p-t-20">
                    <h3>Lector:</br>Gabriel Gheorghe</h3>
                    <h4> Associate Tax Partner </h4>
                    <h4>gabriel.gheorghe@soter.ro</h4>

                    <img src="{{URL::asset('assets/images/team/GabiGheorghe.jpg')}}"
                        class="img-responsive img-circle" width="150px" alt="">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-12">
                <div class="hr-title center"><abbr>Agenda completă a evenimentului</abbr></div>
                <ul>
                    <strong>
                        <li>I. TAXARE COMPANII</li>
                    </strong>
                    <ul>
                        <ul><strong><em>IMCA</em></strong>
                        </ul>

                        <li> Aspecte de calcul: Precizări noi în norme (ex. reduceri comerciale și credit fiscal). </li>
                        <li> Sponsorizări în context IMCA.</li>
                        <li> Credit fiscal pentru cercetare-dezvoltare în context IMCA.</li>

                        <ul><strong><em>ICAS</em></strong>
                        </ul>
                        <li> Se aplică nu doar celor cu activitate efectivă în sectorul petrol și gaze. Exemple: comercianți
                            de uleiuri minerale (ex. uleiuri auto), cărbune, material lemnos.</li>
                        <li> Extindere sferă 2025:</li>
                        <ul>
                            <li> Eliminare plafon de 50.000.000 euro; aplicabil tuturor companiilor din domeniile definite.
                            </li>
                            <li> Includere prestatori de servicii specializate pentru extracție petrol și gaze (CAEN 0910).
                            </li>
                        </ul>
                    </ul>
                    <ul>
                        <strong><em>Microîntreprinderi</em></strong>
                    </ul>
                    <ul>
                        <li> Reducere plafon: 250.000 euro pentru 2025.</li>
                        <li> Eliminare condiție privind procentul pentru consultanță/management.</li>
                        <li> Precizări noi privind aplicarea condițiilor pentru entitățile legate.</li>
                    </ul>
                    <ul>
                        <strong><em>Alte prevederi privind impozitul pe profit</em></strong>
                    </ul>
                    <ul>
                        <li> Schimbare formulă și perioadă de reportare a pierderilor fiscale.</li>
                        <li> Formulă nouă pentru calculul costurilor excedentare de îndatorare.</li>
                        <li> Formular nou 101.</li>
                    </ul>
                </ul>
                <ul>
                    <strong>
                        <li>II. IMPOZIT PE CONSTRUCȚII</li>
                    </strong>
                    <ul>
                        <li> Introducerea unui impozit nou, în cotă de 1%, aplicat valorii construcțiilor (altele decât cele
                            pentru care se datorează impozit pe clădiri).</li>
                        <li> Cazuri speciale: amenajări spații închiriate, taxare clădiri pentru care se aplică scutiri la
                            taxe locale (caz particular clădiri în parcuri industriale) </li>
                    </ul>
                </ul>
                <ul>
                    <strong>
                        <li>III.IMPOZIT PE DIVIDENDE</li>
                    </strong>
                    <ul>
                        <li> Creșterea cotei la 10% pentru dividende distribuite începând cu 2025. </li>
                    </ul>
                </ul>
                <ul>
                    <strong>
                        <li>IV.SALARII</li>
                    </strong>
                    <ul>
                        <li> Eliminare facilități pentru angajați din sectoarele: IT, construcții, agricultură și industrie
                            alimentară. </li>
                        <li> Modificare Codului Muncii prin Legea 283/2024 </li>
                        <li> Impactul modificării salariului minim. </li>
                        <li> Noutăți privind contribuția la fondul de handicap: </li>
                        <ul>
                            <li> Solicitare de sprijin. </li>
                            <li> Definirea produselor comercializabile. </li>
                        </ul>
                    </ul>
                </ul>
                <ul>
                    <strong>
                        <li>V.TAXA PE VALOAREA ADĂUGATĂ (TVA)</li>
                    </strong>
                    <ul>
                        <li> Modificări privind conținutul facturilor simplificate. </li>
                        <li> Ajustări pentru bunuri de capital. </li>
                        <li> Jurisprudență recentă de la Curtea Europeană de Justiție. </li>
                    </ul>
                </ul>
                <ul>
                    <strong>
                        <li>VI.E-FACTURA ȘI E-TVA</li>
                    </strong>
                    <ul>
                        <li> Noi faze de implementare pentru 2025: introducerea E-Factura în relațiile B2C. </li>
                        <li> Precizări utile în ghidul codurilor E-Factura. </li>
                        <li> Notificări privind diferențele semnificative în E-Decont și implicațiile neconformării. </li>
                    </ul>
                </ul>
                <ul>
                    <strong>
                        <li>VII.E-TRANSPORT</li>
                    </strong>
                    <ul>
                        <li> Obligații noi pentru 2025 (șoferi și transportatori, AEO). </li>
                        <li> Noutăți privind regimul sancționatoriu: </li>
                        <ul>
                            <li>Aplicare graduală a sancțiunii complementare de confiscare a bunurilor. </li>
                            <li>Excepții de la confiscare pentru bunuri înregistrate în contabilitate. </li>
                        </ul>
                        <li> Notificări privind diferențele semnificative în E-Decont și implicațiile neconformării. </li>
                    </ul>
                </ul>
                <ul>
                    <strong>
                        <li>VIII.PROCEDURĂ FISCALĂ</li>
                    </strong>

                    <li>Noi fapte și sancțiuni încadrate în sfera de evaziune fiscală: </li>
                    <ul>
                        <li> Creditarea firmei în anumite condiții.</li>
                        <li> Nereținerea la sursă (riscuri majore în caz de erori de încadrare a tranzacțiilor sau abordări
                            adverse din partea fiscului). </li>
                    </ul>
                </ul>
                </br>
                </ul>
            </div>
            <hr />
            </br>
            <div class="hr-title hr-short center"><abbr>Coordonatele evenimentului</abbr></div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-xs-3 col-xs-offset-1">
                        <div class="icon-box effect medium color">
                            <div class="icon">
                                <i class="fa fa-calendar-check-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-5 col-xs-offset-3">
                        <h3>Data:</h3>
                        <p style="align-content:center">
                            <strong>4 februarie 2025</strong>, de la 09:30 la 15:30, hibrid </br>(prezență fizică /
                            online)</br>
                            <!--(cu pauze de cafea și prânz; primirea participanților începând cu ora 9:00)-->
                        </p>
                    </div>
                </div>
                <!--	<div class="row">
                                        <div class="col-xs-3 col-xs-offset-1">
                                            <div class="icon-box effect medium color">
                                                <div class="icon">
                                                    <i class="fa fa-coffee"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-5 col-xs-offset-3">
                                            <h3>Coffee break & lunch:</h3>
                                            <p style="align-content:center">
                                                Un eveniment în care ne propunem
                                                să discutăm despre cele mai recente
                                                modificări legislative, previziuni și exemple
                                                întâlnite în practică, dar și să socializăm
                                                în pauzele de cafea și prânz

                                            </p>
                                        </div>
                                    </div> -->
                <div class="row">
                    <div class="col-xs-3 col-xs-offset-1">
                        <div class="icon-box effect medium color">
                            <div class="icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-5 col-xs-offset-3">
                        <h3>Locatia:</h3>
                        <p style="align-content:center">
                            Sala Panoramic a Hotelului Marshal Garden (Dorobanți 50B) <strong><a
                                    href="https://www.waze.com/live-map/directions/hotel-marshal-garden-calea-dorobantilor-50b-bucuresti?to=place.w.17105341.171053405.5967513">Waze</a></strong>

                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-3 col-xs-offset-1">
                        <div class="icon-box effect medium color">
                            <div class="icon">
                                <i class="fa fa-comment-o"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-5 col-xs-offset-3">
                        <h3>Termen înscriere:</h3>
                        <p style="align-content:center">Așteptăm confirmarea dumneavoastră de participare până în data de
                            <strong>2 februarie</strong>
                        </p>
                    </div>
                </div>
                <!--<div class="row">
                                        <div class="col-xs-3 col-xs-offset-1">
                                            <div class="icon-box effect medium color">
                                                <div class="icon">
                                                    <i class="fa fa-users"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-5 col-xs-offset-3">
                                            <h3>Număr locuri:</h3>
                                            <p style="align-content:center">
                                                Numărul de participanți este limitat la un maxim de 120 persoane. În măsura în care vor exista solicitări suplimentare, vom avea în vedere organizarea unor întâlniri ulterioare acestui eveniment, ale căror detalii vor fi comunicate ulterior.
                                            </p>
                                        </div>
                                    </div>-->
                <div class="row">
                    <div class="col-xs-3 col-xs-offset-1">
                        <div class="icon-box effect medium color">
                            <div class="icon">
                                <i class="fa fa-pencil"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-5 col-xs-offset-3">
                        <h3>Înscrieri:</h3>
                        <p style="align-content:center">
                            Vă rugăm completați formularul de <strong><a
                                    href="Presentation/Altele/Formular.docx">aici</a></strong> și trimiteți-l la adresa de
                            e-mail : <strong>mihaela.fluturas@soter.ro</strong>

                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-3 col-xs-offset-1">
                        <div class="icon-box effect medium color">
                            <div class="icon">
                                <i class="fa fa-money"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-5 col-xs-offset-3">
                        <h3>Taxa de participare:</h3>
                        <p style="align-content:center">
                        <ul>
                            <h6>Online:</h6>
                            760 RON + TVA pentru non-abonați.</br>
                            530 RON + TVA abonații serviciului de consultanță fiscală.<br />
                        </ul>

                        <ul>
                            <h6>Prezență fizică:</h6>
                            980 RON + TVA pentru non-abonați.</br>
                            750 RON + TVA abonații serviciului de consultanță fiscală.<br />
                        </ul>

                        <strong><em>Discount suplimentar de 10% pentru 2 sau mai multe persoane din cadrul aceleiași
                                companii.</strong></em></p>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection