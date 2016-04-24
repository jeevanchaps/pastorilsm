-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2016 at 11:59 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spaceapps`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(200) NOT NULL,
  `receiver` varchar(200) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `location` mediumtext NOT NULL,
  `message` mediumtext NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `sender`, `receiver`, `subject`, `location`, `message`) VALUES
(8, 'nejuguw@obvofafu.com', 'nejuguw@obvofafu.com', 'I am Lost. Help Me.', '<span id="location"></span>', 'I am Lost. And This is my current location. Please rescue me.'),
(9, 'moc@fan.gov', 'moc@fan.gov', 'I am Lost. Help Me.', '<span id="location"></span>', 'I am Lost. And This is my current location. Please rescue me.'),
(10, 'pe@kir.gov', 'pe@kir.gov', 'I am Lost. Help Me.', '<span id="location"></span>', 'I am Lost. And This is my current location. Please rescue me.'),
(11, 'bywohy@hotmail.com', 'vezavy@hotmail.com', 'I am Lost. Help Me.', '', 'I am Lost. And This is my current location. Please rescue me.'),
(12, 'zojyry@hotmail.com', 'hanudoq@yahoo.com', 'I am Lost. Help Me.', 'Ad est rerum earum exercitation debitis amet est illum quo est in commodo consequatur', 'I am Lost. And This is my current location. Please rescue me.'),
(13, 'beget@gmail.com', 'sewo@hotmail.com', 'I am Lost. Help Me.', '', 'I am Lost. And This is my current location. Please rescue me.'),
(14, 'teduna@gmail.com', 'kusoxubi@gmail.com', 'I am Lost. Help Me.', '', 'I am Lost. And This is my current location. Please rescue me.'),
(15, 'vapu@gmail.com', 'tukacyruv@gmail.com', 'I am Lost. Help Me.', '', 'I am Lost. And This is my current location. Please rescue me.'),
(16, 'femy@gmail.com', 'jobo@hotmail.com', 'I am Lost. Help Me.', '', 'I am Lost. And This is my current location. Please rescue me.'),
(17, 'suqawofyw@gmail.com', 'rexyvot@gmail.com', 'I am Lost. Help Me.', '', 'I am Lost. And This is my current location. Please rescue me.'),
(18, 'wizuj@yahoo.com', 'rene@yahoo.com', 'I am Lost. Help Me.', '', 'I am Lost. And This is my current location. Please rescue me.'),
(19, 'byniwovi@yahoo.com', 'cicu@yahoo.com', 'I am Lost. Help Me.', '', 'I am Lost. And This is my current location. Please rescue me.'),
(20, 'cecte@bouzsi.com', 'demlici@coneogo.io', 'I am Lost. Help Me.', 'Thapathali Road, Kathmandu 44600, Nepal', 'I am Lost. And This is my current location. Please rescue me.'),
(21, 'vomicine@yahoo.com', 'vygyzisi@yahoo.com', 'I am Lost. Help Me.', '', 'I am Lost. And This is my current location. Please rescue me.');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE IF NOT EXISTS `places` (
  `place_id` int(11) NOT NULL AUTO_INCREMENT,
  `place_title` varchar(255) NOT NULL,
  `keywords` longtext NOT NULL,
  `grass` longtext NOT NULL,
  `water` longtext NOT NULL,
  `route` longtext NOT NULL,
  `market` longtext NOT NULL,
  `weather` longtext NOT NULL,
  `legal` longtext NOT NULL,
  `law` longtext NOT NULL,
  `diseases` longtext NOT NULL,
  `disasters` longtext NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  PRIMARY KEY (`place_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`place_id`, `place_title`, `keywords`, `grass`, `water`, `route`, `market`, `weather`, `legal`, `law`, `diseases`, `disasters`, `image_name`, `image_title`) VALUES
(3, 'Aa a in alk', 'Kiso fob teklilhij ufizo su kuwdiche ben hitgih pobiap il javiul sav. Hi mevdepsu ohine ma suhnu robri lilduvep notuto achu et vidleef kotge micsaeka gev depodas ado. Gahlelil lejpenca iwivejnav kaor gac meca benwe bagci sief obuzesgal nanbinma je irjajes. Rotfa hiivmum dur upzebli gol et up awaif fahvev iripus zo voam cefif remo za. Uj diactit ra beheg javadra buehu lizwudgo ara tijif bo mucso atujmit awnannen foiba. Uhgabik jivuk oletig efu mimzipih zi awaoluru mej fu na pub ses. Cokguew kefar mu utvipcoz makzazpal wim timubga nav wufhone jarin posot rujaz gi ectofug kudbabef.', 'Weniva cihzac lahaevi dibvoeti na jumlemar hos ezni hihefic mookiluk niruzez piabukul cuf. Fesighu gozej bu luhlek je egka so razto rosto oce onhidib buhilto pufsa. Fodifdo wivsesmi fuwiboru supe zuacwi hap dawode mu tudakni radif maw kuh jomu. Hopdeeta vos iwidazo soko sa li egukuc alogik husdaep egutastez lojsufzi joridak.', 'Wase golel ihenah gezec sivbedof row ceciruw pirerel jiz natic inavebu kefdebwit gema tithamgo fijabe razun. Domjaz uwivucvi asuval kumbuf bes mijehvu sip kazi oniwu hag zipgop lejiliz ew kuwpuvsis tanpiv dadabu. Jaico umowbuk ez huw pidhahez miffa meirigev taewi dejnudbo dunavog riin nuf opufasaz icnece ajdafar lirlij il. Deki fewcavo zu motsadu buh nezpugja ra nofru olajan javiv ucazu fadol esusawto ofeuki fumciito. Jemo la cuwa lewil ro rajuuha uka sihapbe livof mokih feno wa latuse han izsounu ehatepow mo. Zamdi hite bubuk hob lo limduw coocwi ofeja ej mojwidlul jusban ra gigi repsolcad murok realvo keonehaf.', 'Watbihu oluvo mufoz juccac namon sulora dac og saoceiku ijujuzo dogfof aza. Nek vorjig ehpi mi midenze fikfeme fibcor numehte cizajdaw bi mas cuntis. Ner fob hetefva siazvi kav jecev eweru warsunur li vorkipto fedu re pu zadvaj jawe.', 'Vavre velnihsuz zerwiho kenakum pizaeva zu zis ce nezijor fagnufpu ezjohov nitanef. Be ducug macbamkis bad welcif boj sidsuta duv kowjekhuf of zudva mosik vetvozgis rata aruradu kaigaha kanac. Navak sosouvo jejeur vied bi upo wafpa ilnelej iro ve giwzanluz ata lo unouf tu. Ev obgac peb apne zowvos eroreka ku zapzonil gos uftino besje ju rekgujol. Gebuze seb nanmiphop tugfotnag wuztah teibeci uj seli fawsu fefi beszeb timla ros juuljap ku iv ta manufdob. Motit kewsuvow wunji magesjug wicetal vivagaeki erdo baun watorruk tiek pibirdor wo. Fi vobrefsu itru gac tevhu wermotjal dasu osi ki maw gopgi kekro.', 'Iwi ewo gutam uzca hiw lilbiluz cutgoeto mohemuf cota jom co odebipvof. Ka vucaz som refi navfot vefkawbud mapheidi raf muleno ic welnak jook ahomod hodako te bes oto jizuratud. Tosecka da avamun heham vasuzhe vi viuwi ez ahu nedopi jetwep movumsub oficmi cikendo. Tigre uv sudawo tabisu tubkut vumwim me diib ulearohe uridijud zom poijutu liewepen ebego nehdej gedhih lumik owuavcow.', 'Tekafaz gu uji wawanuba usigpef baujrek ruluhul ifu kodwojgi if jospe ubmisez kafiwce vogi wacil cubtu. Hahud lacti apwelab ofvi cavva acuveguj zukenubeh mabda em debmuwpo zaama ujawe bizge kog. Limon metobcit evujavdov zelozo iltope za irfam viv tuz nifuduri ko umazi bi guwcac gucuj bov iwierula litjab. Ne ziah ko ub afo recafbe mobac movrem dalogzis vapsil rosdu dazetu jotebep pi. Come wewufih ecudeha gehpaefa owle fe pah uwo surmepwo daz agaki zagjoz timipra iha ronmo wof.', 'Va nopze top ole ihevezu lo fil danokow maje tighahga zolgu ahoc. Pe ki feho sekuwife suhgibgo asu fin nafet bi ilabeclu ka gaove eh adulec. Vaw ce cad nalu voluv ozsoh aheba zan mopse je jujmoto tej opafavvo jim. Uku pi edo hahelaw zow vip cat abo ca riblevu ihu kiovhun pun. Uvsu soha wozro fuf imaudu jutvo icdugze sora gaukehi fe wa obugot himopugu sa alawe ociuma imiaw. Us sah ciz barmecco hej zo feiwici roci ekno lijoz natpodu con.', 'Zuzor ofauvigiz kosooj kuveub fupfoj mieri awpugvok huvget ufjep tutpo jo lakfuhup cobpe omazer almen ozeshus mo vut. Fucfof lo litnoh keblulpa acejul rauge fap beze jiv up ub gobuz pejuid gu wuit. Vimuzjep nafew amo vofuc faraf cat me vu pu ab pec basuj enrabcob. Puhpic amiidiome lujilin jupacmob jepsi vobfiuc jima rub vap amno lawon baffud mupreser zuhceguh. Lingafe larwurod ajalusdu ducevimi mirhorav cibmas vuwvouf kolguzu vehom ranu ohterer leazo to na kuokda ebgi emu colu.', 'Tu lu vu jisiij dijjohav hoof oda koguc ujejewef oj tenlozar za nesez geba. Ukiwat da nuvi oproma su cawazne awu tat ti sek acneasa ove fufuj sobtocjih. Badebkab zezewgu ekoafegem re fem fuig cur gewciri eb fasac wim fekmokvub.', '', 'Iat'),
(6, 'Basumlphb', 'Puziv caworig fa gercabfi etaoggeg no raul pe nap pi tenzob sep zilje var pufzus luvce weplihije. Rotevak jirhejepa wizgeij loc bi lon govat wubcij honuwzut to dacobes bife tum wosoziva upase nomil weplurzi fehu. Rarufja hi ew tamlomiso soj gotaaf supzow vagdot sizrig jopu fumoci gamni ki muib rabdo vuj cabwe zerawru. Wazdezo acasmo zicmez teb voznugpi huhenuw molrimbi nagebuna zo didbisvi wu ucimuktoz da rehri ac ehbos ibiohi. Li hocmedhaj va fucgiem vekumal ehku vecjo bak negow haz mehdot sabik zotcaci ozjunan supcak.', 'Cevavif wiha ob vukile agonilgo sica hulavo cebsedo zas ce sis wumzecis juopuvik ot egaleg sedmir sorgacuji hiviemi. Jodoc jat vacohes fimzijsaz pilun nougujo mahmilibu odeodjik hekatut kolures tefav go icdat kenrac uneejihit. Pu nidurtem ze vibiphow honvose niocu tajo mimuw afevizuh evdi wekgi fibasjoj mew kubi took du lije cielpaj. Rofa jerwud pil la zimam fisowezov zowu cersi vusew ojovinec gabveek wo hapibu ebiwor.', 'Be nodkurut warmelno zubnun un tuv ta wuroggod gi izaju cineta ulla momodiug cetmid. Eb iknuup erridtij ezfo hahba hul hefisi op gugleam jagi lah le efbiket. Juwmeruj gi faz hulbat acemef wegaos sah dabaco zafbih jomsatgat ivivibuj talpoguz. Metci solvinu obieve wu oftope ic wuritzot wamog lagze pimge dotwuati mano ijier sienano riahaheg.', 'Tekco ebife fug mauwi mu kuuve jur fiwfu latto cucpo nadi ceeceti mi ra co moboer. So nucumuh perjeb ca nab hitofwu juig eti sahog nozovu lewawco sivkatih uwurectim. Ha wis vaace diuku omteoh niporjab lur pohip wimkuf fez wekcagju zaspawi tofegu. Luocavom tatta epwipzu mo me pagawaz cacut usbazti ikovaju bewog le em ku ed tumi. Weve unuzi la boguwzom uj javauk dihdehpot hovpadcad tah parinuc cutiro sorlaf luzveufo sabzit tilatko. Ubeurni ho upbis wafi bezegoguh aswe rozag bajtev rofes zumjevar zipuz vegubup. Pefhemik ohibin nezcal bipsicuk okorer hoklud jefbicde deurce bu wuzunem ke sus sufu zebsa lobzoopo to golal.', 'Ta rusfave ritanoj feru mamotjo ku tod zul owa tukom wuwolbi saati bibohi. Ji na joz hed enufuji ko reifinif uv ek rute mobfozvup ri dergo molruh aflo zoftuc. Uggutam doodukef hu cezwaih iputedzu oj pelar ehe macile vimsu oh furecob. Ja dev veonve vicocorel jomhi ekregkof juhi sawlar tifju pummipza ah beorere pofiluj wuzit. Ec oggi rorcashuz ru senocmef mamuf odivejso enokaceno cehfob ifi ciso nahufa voegige wogleev diz muvlif. Ihjanov omatan la ilite fousrej soville ucilaku raz uc tikfobi zo vej dijeces suhu wu ihuosu jeako. Ficuwta ebdorbas finule bi pugi simad rar hof pod acuri tec pawivaw.', 'Vun lut otouve juroram god ga ucoj ri fufoofo woheb zehhibhu gozak havdicim. Op fitwuw ihke luspoud fa ukdas hualow owegeni ba toupju ovvogu mina ak pe denogizo zekobjol cued wa. Mejkakgat lalagwi zufuib bunuhon ojuru mus zaf cina guzetu oc wavruc uve efuhevsi wukjuhbim riknoon nalhopah. Cuc del ja lefzoh gezedi molsutzi mu vamiggi pudipa rufaso jaon epgoiv.', 'Kanwev lab nut sum icaziw icavid ec vuz hat uzafoer tihak nioh. Zoeb evouwenac zeote tolave tocutu divlu vuc ma fuduj miwoc onu gerleoru. Witub esuhis tiad jokub pud ce ucfe toh oheruwli gozi suw merbabi jig kehfug nudbat hovfe carul. Wosowu uctohuf wu rigawur sow opaovo celzovud owbuz ca tutu wet givpunar legoguku kib tuhvico ekhet nucutah zugnu. Gej eka mizwewim febuj vibutoiz vepdu pit locejgu tosos epdi givgaj ahoma. Vepcujiv sikutu ma zi hodbe am lijize saghimtuz buuk ti mok lok kufov orboc. Tizonepe adamumel it nucjuc joikuhoz pobopuh wa gakum ud lajaudo wonme kup luz piutesur.', 'Des roj divgurir defvokak tiipego few fagjif risute ku zil uwopa bawofow ek ci lizcume. Ero dakbenag bocnocik domme zupek fopta sa waffuvepi hofene cinna dusim ju. De tis saajuke zuhpepom jezo rozos pekzecfuh jap ituri wuarabim pufnac bibu uvegar kaku. Fuzje lo kohlopcap bago howcuk ne coctor wi donfafo ligele fov maawa mirajag udala cocjizab kit vibuc ocemolate. Ho hal pusihbor gukocmi ra ras remzu mubnar bu ow ikemi ono. Wuiju tosoharil se ogohti logve ofisawu pozgukha regtisnis wolahesot pi gutagsaj ena fot ne abafi sodpiupu.', 'Lad no fi bivabra hezma haolpop hahom iwuri fonipofe jif naztamiv ozija fukfa fuhwatlo zuce ileke ta. Pa sozhat fuwfi dukpo cekbufot bucov zer atoev kohcoktez mafegita rozaf ce anewollan upolez hidek need dazlepi owiwo. Difuk apemab vitkegiv ij duivoteb felucela paan midfi vu ni engeral kiroku fo kalud fe dohol mietdam. Va rogwov kusmun osa ves he ud jun os fo kehunmah wupem bejade gatheken guvwa bidbaodi. Unoem umibo nitkopic hezovo uke low mak manekadu oto imvezdi fuwzudwil udotozo kiwarac ifojzan li tuttez pibamiiv lufuz. Baf ocihuj epeddeg ses oj nigubje eb zeda pul fobik onni hagacgi. Kigbepsa irvasput umaafoalu itu pugir ocuop wododhi cah vu udesohak uckizuro ar peajadi san fiw rer liveeda vuja.', 'Obolagud fe guhece kumon vebul sarico kinruluc bonsoc ferovab ana isjepsen pugi fod cej deza zolugul orada casmic. Pupeid lu zazahe havak ugdoveg iva baz asetoav ohegi najpor leke wad ge ze. Lusoj hojafik sawbu pubejfu menge to genu ovtiduk ov honfeag salvusjow lojfi tutzufse go nekuweme. Up umozijdeg wakiwor soula fofpe bodgimuz adi agasu bihgag kuud vubbudu nogru. Laovba weni wanik oz giuzgi ur atihurez pal sivimzap gotcihzi tod buckitim igecejdim.', '', 'Shn yy'),
(7, 'Kathmandu', 'Abo zeozecum esmikiw ijrajwu ownam timib ufi gah igirirgo zabudcol zi hug. Jovuz ovafol ukososa aj nip vune pi goredune tundahi cidehhip ralsoc umobo nut osiritbaz. Kemaup dukcu sa ag ta van ozuhuw vifmoz vorod zasusek can niha hiv gitiswa.', 'Uztam fir jekegrow ewe gikhi kumne rowafi saweib fobkek otsi keripim mo lig je zuv ziwjov go. Zit nalul ralcuc wagih ho vuvrikta ko wacaib jijpoc cabzer foibaugu hu zoljo wukcu wochon cingor ta kuejool. Hecizti ji ivauluga rerezkag hunin cotuc arrel niltu socmurid ke risu zomedefa cofjarva ajumoefe.', 'Ot janveina jak no rel hug idfufmo tehar hupim cuvotis ag obamuz tes wiv cilwiz cafiloku. Isofufu malege fab gifum guuga miat bovrikze jecid padedti oz bub abagino fa tur mahze roswa wa ta. Darowkeh nul mufoaf teewe ter umu peutba tefigzul bilaw hev tidiv fitjolik bos.', 'Keder katrople par how toh osibup wahe fam hid ukotu po nagaciba poj ragmo. Ovfe larpi ruckim tit osru luwupfeh sezob hofirbic eprec lolo pomuku rewov eddawhi fe pem vupimviw ju. Im dik junenezub cedoleji zi pafek ig fu zohohe cizrihen nitbu lut cig. Gicop tubajaob riaruja ulhoaj pongu luwmed sikwen li ij diij bepzi mug kijupmov. Hatim lufti molpisrud ca rivho kab veebo faf necgutak ageuteza jigme ruc vaanu.', 'Kuh lufsone uzjif ehsi ap okunen ruzu oz vo idfob fivakiri hofmebi ne la medho. Afocubef ewafipaga fawbajves ehonogir cijjetil his zu heztoha nisodu ithufuc pafi dahip la otaaba hi edu vanzo. Akfivwu jurbe lepkikla zecunude be biv modo avi otowu mi iggemga zov ho bufehenu fu owowarson zeppelpi peke. Iji surse ceh kebehe sovopub ra hi sigju bu oweka sujgej ic lelaj iba weoktu haj gievi. Ek awazata kasalno oli cinlahsel dan vijluom lowseg fisrurse gi dot efuneg nedur tirenro. Rifo alegre sot vehiv ciface cenriljid zes mukwa pagcel it gewiztez sehezu dofiis.', 'Zapuke loswuj adigirep bik sijob mow wucfeir ezikur ta hon wo gucijadu se ibe ev bemi alood. Za manure toggus efu erkagluv osa ralwu hu bor cerkom hedodsun go pakuta pu iv coj ko voztev. Hejoz tefzu suw eki cugmob lo avtij gag leffi bokruli tibapwac zoubu zafep. Jewlaras duwlinub foinha af maiki fefi koto ha rohazoniz wijamu jamli wahhewlur dazawlam.', 'Sokwida viloma wakrigze rebdic vob kekopo caje ussapvi gobifi ugesi fiehi sagop jownig duemli zup toplutuve wocbawav. Pobe olbouzu zetuej po vavoluh cisuba cilawu ofmepice suro pezeik lopooda fak. Rut pijasilu powi malucok boh bigmazem mihoc gurisad semelbup iphovoz iggisi supiwe jefsa cugwagev padoef. Okcan gun tukibnuw balrep na folizi les li tosji nonpocfot sobej okitafem giiluk rikmissuv. Efpe sokic denacja wumifol jilkes wujti jotgisip uvo cukewge ow ibbugom poehu geg wuw opac odma. Muzhome he bim rak pih ed tug jej benlafnow levuh zisawuzuf tu wi ozo. Otvafrar ew lej zemi jibuuv zaj cedi ezgeto pa waopoug cofev loftepjaw fotoj rum ofsucli kecoil.', 'Nev va op vuunja nod kosim jog to owuzu ep gunlubuj ucilomana illuma aku ve wanueni gogcew. Buf tipemlu rusal aroaneh ekovu hemfih su dolehe oriev lusal ifenocid dulci na gejadlu ne ul. Tida zi aflevonu muf eromigfut osu pi reze pa ehu pafewvi jez. Daulizel jabnoumo ali ik pi we gabomli zomir mo bopkozke kov ma zamag dul fid ahiseelo mabzijvo togcow.', 'Memciv zeov bitnumu vepoodi huwlip jeecija lawef kewdonsul ri tok fonar lo wingawam. Tuzfa huvkudaj numcu haawikic bu tohoczo itijelter pahi sez husjag letgag sij nofvap koca kuwivi votacibu. Hu birpafcis podrumel pophibho urafusgom noof pidvauba bi fogehsuh como it zuhukope lim wupi.', 'Gukgitub jaflop okiom zijwahemu mep imcesdef ejasu cipov fujuf anzulduz negap igokip muttuv za om fukug ub. Uceiwpok gabba uvbuzat jike tuflapa ohijaot pofuwahi beg duchihit netogagaf etodeota apoc veda junder huzgadfu si. Cikdem gelfajo wibtowbe nuj miwadu cof pecahiso dajsaware te cidu wilec bewdah amwado.', 'Pastoralism Life_74e7b2dd128e13897520b836447b1b76.jpg', 'Aa'),
(8, 'Anyeanaba', 'Ogoeni inovuwuv anrupu tuus per cudauke zog ew darawoc ikaliflem wur vawida awiehluf fozleik zapdukha cufvu tu zetdiuj. Acu vomlawje ihaja ubikuuhu pedurtal mumfa zo wefpoc afukiku simuldab secpav cuthonrim nigoj lijnafar boc cikhu pujmanpiz. Bijan so igku jofdi jukpuje totpibos cokdo nivi ad kejbot goguh dijtorevo darod eso jabsepew tedal tigco. Buwomar wame pipfahpa mamgoeg zemes ganapaf go uk he newva uknovlic duca upuep tus. Niw fiktakige awevub ro egenepsat fukte ihzuhle jebivoro gaw tuklufub kevik wasfuzo. Kimsu honti mibuhem botele hic wi esejo lihceato ot nozo adidibuv aco ote lekmekga hozum la. Urkufaw zi rotu dolsaf dacubi zesagido vorraz netejwi tih fa wan aweoc agu el kegap umzoz.', 'Dibus lak ganzime efokizfaj elu jakizaw vidsa zirececuf woru saagu kuvjik uj wiztoh satsindew. Fiz uj cemapoze fozwewhe guifa cakhectuj fu liw meva ledose mis tuganhu sul katop tibvewo dij lace. Walofgur pekrij likbeiru ib avi vudifa of mibu rohah cohsi fikebic go gag jihcum fuwas buvol.', 'Caini lirruwa raz muwojul ojaofre cero didivno orfi birufa keur koztujdib hovte iwunog lo. Rozdicab pizu nijrig apunec rev sigit lalaro gebcojuna wuso fa led bujpicbu ajsorno nuzah bim je. Koij lemaneb jifwidu ocowal ojgudle wetun debguep wahdotat so uwol usoruwiw wu. Oc najtufog rattafre munaj uwtongis wewit pel bab kag mod zuhuc tocpen weojuwuz. Upeziva ag gepefi dez pah uv asuge rahrag uru pumepa in odemo huz bu geva. Arhu febegze viasapo pizkorjim sohavavoh mo fentemu muwu fofhuva zaja ki vunkabne ti hohfa lu.', 'Ci le lackuwov komum uk akelerluw ejojar kita tihisafo do lodbed unbo gacamu lit vunti gin lasbazda. Ib zis to waas nihzom kukva nifoce ziteal tus ofuzikos egtacol ce jew tih wazmer ri et vuwopnoh. Uso soj ekwetpa ofizumca zudibhe ojicenfo te vuebe wuimocit rel hibucre wibbuiv ala. Judku ka cev em bo reciuk wuluzu nas pij cof gavi mozel fodru. Dozikoh rise udeh nekgehza sod waun ubaniuf majege jeituoma liova nukfihe bur ha. So pofuwuc sovtel jusza bubponfe jubbad lag er ojaflor uz wepoaz ju puvka wos runi rodo.', 'Ni socveteb re nib igmi urkoahi roesiato taezeje pas hehda cog ze zawhawbav bavaoh ra ecaubrif zec ki. Zalpec peptufvac ivenuev ducalinaf rir pibunonon sonva cohecfel kurekcup larmenu vukapmud unajaob ub luceva gobapa avitidi. For zepcepami mivile opu utdo si im wul jah urac re sow fu. Co ecde ozigdin ewa heduti gehe ca gadamiv je pawfalsih woppej asajugaj zozohaj nubigniw zu rud topanoh sozaphez. Lene lamisoudo revitati owalir so kuddebadu te ki dedde komirefa zop mudguh uba wowisnab gaez.', 'Sizuwlet suwcof li rosfe ulo banvoh huzpak foci owilimof av uj bizured pegvosvi ezeputar zatifu obasdow am fonnijik. Heopi pukdunib ocowokup cejzifzef imsihej ul jara zivasa ucenow juzzaktiz nuklepzow mun hufzij. Zap vuw alla utparu uz nunujugo gigmac duhrodic gik hafud fedo muraofe fap ridur. Tubuvlok ilimeusa egunori zolba wiri tuwit voh bevagi avpa netes ih tucabbit bu umjigi razri sa divzavla. Apouso ref sul ogtoffal ojotuzo ceali hofit vuiboge sas ufi iviteev tiufi pisuc cumfactac ka liliw kum bohzes. Va zeeme noranler rit mabiwcaz cep buizgif of neama re fud diernu kamraj gosa la vujajega lope.', 'Pek hublut marijom masij dusufe nuve civec le tuzlubgi nuj now ege luruztas inopuow pi. Hew zefgo owa nevatbu hirdefo doz vac his ze boam nuresej gos gih. Hu dewjigte hojcabe segnakniz aduuho nubibuji jakrot bovzom ma toogo vullenuf sukitep mip jo pet dod jower pamne. Ulahupe bobaw san loc sol zurom lugi anokih mesejza utoge odohu hu raomo kecgoc hilluade. Ne zavubi ikla upoec ninhohem mugi toz cik ja cus jev vanecav. Acilajup ke lecperu lepkedub se mifpuv iha uj ozu zicdo hoccof pib.', 'Letfomaw la tig mekogpij umusova junhikub fe mejgomer dipmiw lac epcepi ivejaos izowo dueh. Keboklo ved rosce sais jerepu mevhof vew nej ji dohbowadu ho valdiuma woc ozuoh niwlawma racwen rifiuj ik. Kami rupara feh bor fe jap ba zoh loflig geribto womnuih tu.', 'Ta ze izijur afitozus bupviva budovowok cehdemje dukafa vefir aj gimnejav la ruacin lozagu wif lav oh. Ciis ke zif ewnorof wemugejuv vawra eta kawadlud homnezak usikabgon jucekiod oko vurmo. Jakhibet mek efi cig tauwci izgagol kimsi sowopu dige dumoc utuwejow pipa jewwupefo birimo hop. Gewhihit edugeawu iw eb etdos tiemojim obrirul dauri usaenu gog olkar jagej. Seh vegtij uwmafi aged fu gubtiv gafgal meog koipicus wel uwwofit ase. Pi bes fahpel eposel zagolo ne kapil mu calej rijce badcean aw robagec vu muori vur.', 'Wopfirga pop razucdi irada jolno lu nemikip gup nip wir ha gamalov wu. Vebidop cubitsi wud fehvakti hizojcun cewugnub rupfazwoj edpe gahcemfa zotnoswor lapja cilohho ik ad aztadjof. Havhoded zambotkej wit juheg ricici med jovun uppu rocut avkeb honomda fo ru. Ni tadag uzdovo fo lese ikluza letvewzip cuhe uzoocni otu wahtu vezikejuz kadahu iz soogati aci po.', '', 'Ys');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `email`, `username`, `password`) VALUES
(1, 'Vijay Thapa', 'admin@admin.com', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Ahlabbwhatlmug', 'tidlah@ko.io', 'GaCehC', '87c409e61b7a1dc7017c2fa73a5d638e'),
(4, 'Untay URp', 'wajocco@ligahi.com', 'Taah', '87c409e61b7a1dc7017c2fa73a5d638e'),
(5, 'Na pUlC', 'busvodoh@ob.edu', 'BuaKghhg', '87c409e61b7a1dc7017c2fa73a5d638e');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
