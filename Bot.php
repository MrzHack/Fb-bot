<?php

##############config####################
$bot['like'] = true; //
$bot['ck_k'] = true; //
$bot['ck_u'] = true; //
$bot['time'] = true; //
$bot['aces'] = "EAAAAAYsX7TsBAPycPdQx3EsZB3qQiNU0Ivj9MJu136NGMxQaUlWXdCPGZBZCpPGYaUIvjWy5wXL6ySrkdP0CFoa8nxNXcrYQz47IeP2c3459qwyPfUxeD3afoBy1wGhTVKnL9JZC5aTuTT3KlwWrZCkkys3k21RvUqcZCnZBD3ls81LKGWas8nDnCetUSgKx9GQpl1ksfSjQC63JeqAddzy"; //
########################################com_like($cl,$ck,$cu,$tm,$access_token)

##############By Me####################
#    BOT Facebook v 1.0cr 20/januari/2011
#
#    Created by 256bytes
#    simple bot komment & like
#    thanks to balikita team | copas by kuclux-a.biz
#
#    mohon untuk tidak merubah tulisan ini untuk saling menghargai.
#    tunggu Versi bot berikutnya. :D salam
#######################################

com_like($bot['like'],$bot['ck_k'],$bot['ck_u'],$bot['time'],$bot['aces']);

###############komentar################
function cmn($text,$ck,$cu){
##########umum

$cmn_umum = array("nah, ini dia si <name> , yg ditunggu tunggu pemirsa di seluruh dunia akhirnya update status juga.., hihi..???  ???",
                  "eh...<name> , kamu tau enggak Apa bedanya kalender dengan kamu ??  klo kalender tu aku ganti stahun sekali... tp klo kmu akan selalu aku komen stiap saat bikin status...:D  nyambung gak yah...? wkwkwk",
                  "tMpt mknTUh kaNTin..!! AsaP RokoK tuH NIkotiN...!! HaRi kaSIh sYNg Tuh vaLEnTin..!! YaNG bC nICh Lg NgaPaIN hayooo,,,kok tangannya di masukkan ke celana bagian DePan sambil Matanya MeLek merem..,,,? wkwk..:D ??? ???",
                  "selamat Berak tifitas <name> Smoga kesuksesan slalu menyer taimu.. :D",
                  "Setiap hari Aku selalu berjalan menuju ke suatu tempat yg bisa membuatku nyaman dan bahagia. Kamu tau di mana itu <name> ??? Yaitu Di statusmu...:D",
                  "alhamdulillah <name>, sesuatu banget bisa komen di status kamu,,(robot versi sahrini) ",
                  "SESUATU BANGET NICH, Bisa komen di status kamu <name>.. :D hehe ??????",
                  "eh..<name>, kamu tau ngak Saat aku melihatmu bikin status ??? hatiku seolah kecanduan dan tanganku seolah gatal ingin selalu nulis komen, .. ^__^",
                  "tiap <name> bikin status rasanya pingin komen terus..terus..dan terus..:D ??????",
                  "kata bapak SBY, klo <name> bikin status harus kasih komen..,Kaabbuuurr.. ! :D",
                  "Ngga bisa tidur klo blom komen di status kamu <name>..hehe ??????",
                  "Habis mandi gw belom make baju, blom make celana blom sisiran, blom dandan. Begitu Liat <name> update status langsung aja gw dateng. lariiiiiiiiii....wkwkwk ( -_-)",
                  "Saat hujan datang, lihatlah ke luar jendela..coba hitung titik air yang jatuh dari langit..Sebanyak itulah aku merindukan statusmu <name>,..hhe..",
                  "Kemana..kemana..kemana..enaknya komen di statusnya <name> aja.. \(^o^)/ ,hihii",
                  "Liat <name> bikin status ,gw yg tadinya ngantuk jadi semangat dech  hihii..??? ???",
                  "pagi,siang,sore,malem.. tetep gw hadir. <name> jgan marah ya, wkwk :D ???  ???",
                  "eh...<name>, kamu pasti jual NARKOBA ya  ?? Karena stiap bikin status aku selalu kecanduan Komen. Gileeeee cing....wkwkwk..??? NDOBOL ???",
                  "Yess...akhirnya bisa juga komen di status <name>..stelah melewati samudra hindia , samudra atlantik , gurun sahara , hutan amazon , nyebrang sungai nil pokonya tujuh benua dan 1000 macam halangan...:D xixixixi... \(^o^)/  ???",
                  "Walaupun aku punya banyak temen di FB tp belom komplit rasanya kalo blom bertemen denganmu..<name> !! buktinya aku gak diem kalo kamu bikin status, rasanya kepengen slalu komen..:D ???",
                  "Walahhh..ditinggal ke Wc sbentar aza gw telat komen nich...sorry ,perut aq td mules banget ..gak papa ya <name>, yg penting aku hadir di sini. Gak kecewa kan ??",
                  "Temen-temenku nanya, Kenapa sih km betah banget main FB  ??  Jawabku simple aja !! karena aku punya temen yg asik seperti <name> !!! xixixi ??? NDOBOL ???",
                  "Mau nongkrong n duduk di deket <name> aja ah...boleh kan ??",
                  "TOMINGSE (tolong minggir sedikit), eri mau lewat..Kring..kringg.. :P...??????",
                  "Meskipun komennya gak nyambung, yg penting bisa hadir di statusnya <name>, eri udah bahagia.. :D... wkwkwk  ???",
                  "Nulis status gak perlu mikir yang penting koment hadir. stuju kan <name>..? hehe ??????",
                  "Cieeee...Orangtuamu pengrajin bantal yah <name>..? Karena terasa nyaman jika di dekatmu..:P Gileeee cing...??? ??",
                  "Gak bisa tidur karena ingat pacar itu biasa ...gak enak makan karena ingat pacar itu biasa...tp kalo gak bisa off line karena belom komen di status <name> baru luar biasa..xixixixixi :D",
                  "Mandi udah..Maem udah...minum udah..bobo jg udah trus enaknya ngapain yah ?? Stelah kupikir pikir selama 1 Abad , enaknya ya komen di statusnya <name> aja..:D xixixi...",
                  "Habis mandi gw belom make baju, blom make celana blom sisiran, blom dandan. Begitu Liat <name> update status langsung aja gw dateng. lariiiiiiiiii....wkwkwk ( -_-)??????",
                  "Aku selalu berusaha tak menangis karenamu, karena setiap butir yang jatuh, hanya makin mengingatkan, betapa aku tak bisa melupakanmu <name> xixixi..??? NDOBOL ???",
                  "<name>, Persahabatan bukan mengajarkan kita lemah, tetapi membangkitkan kekuatan. Persahabatan bukan mengajaran kita menjauhkan diri, tetapi mendekatkan hati. Persahabatan bukan melemahkan semangat, tetapi membangkitkan semangat...oleh karena itu q berharap persabatan kita terus berlanjut....:D ???",
                  "eri mau ngegombal dulu ach... <name> kamu seorang penyiar radio yah ? habis km selalu nyiarin status yg kepengen aku komentari terus. hihi ??? NDOBOL ???",
                  "Hari ini Ramalan cuaca daerah JABODETABEK sangat cerah..! Tp suasana hatiku belum ikutan cerah kalo belom menemani..<name>..di FB ! xixixi  ??? NDOBOL ???",
                  "Di tungguin dari tadi,, akhirnya <name> update status juga,, okelah tanpa basa-basi lagi ane kasi jempol dah.. Like This d[*_*]b",
                  "<name>, Saat aku nggak hadir di stats kamu, bukan berarti aku melupakanmu, tapi aku hanya memberi waktu buat MU tuk NGANGENIN AKU !!:p",
                  "Setiap <name> Bikin status gw selalu hadir sbagai bukti kalo eri adalah Teman FB yg setia..!! ??????",
                  "Pokoknya Gw jadi penggemar setia postingan <name>. Jadi slalu setia hadir. :D ??? NDOBOL ???",
                  "Aku CUMA pengen bilang satu kalimat sj. !! SEKARANG dan SELAMANYA Aku akan selalu hadir dan komen di status <name> !! :P",
);
##########kondisi
$comment = array(
array(
      array("sepi",
            "pada kemana",
            "pada kmn",
           ),
      array("aq temenin ya <name>. hehe",
            "aQ datang <name>,hehee..",
            "tMpt mknTUh kaNTin..!! AsaP RokoK tuH NIkotiN...!! HaRi kaSIh sYNg Tuh vaLEnTin..!! YaNG bC nICh Lg NgaPaIN hayooo,,,kok tangannya di masukkan ke celana bagian DePan sambil Matanya MeLek MeRem..,,,? wkwk..:D ??? NDOBOL ???",
            "Km pasti mantan nelayan yah <name> ? soalnya km selalu memancing komenku tuk hadir di statsmu...D xixixi ??????",
            "JEMPOL dan KOMEN eri Akan selalu hadir di status <name>.hhe ??????",
            "He'eh ni penghuni FB pada tidur kali. tapi JEMPOL eri slalu hadir buat status <name> :D",
           )
     ),
array(
      array("semoga",
            "moga",
            "amin",
           ),
      array("Amin <name>.. hihii ",
            "Jamu itu pahit, tapi kalau minum sambil komen di statusmu, Jamu itu terasa manis deh <name> ...:D xixixi ??????",
            "amin <name>.. :-)",
           )
     ),
array(
      array("jancok",
            "asuu",
            "raimu",
            "fuck",
            "bangsat",
           ),
      array("Wah <name> lagi marah kayaknya nih. heehe",
            "<name>, jka kmu marah keluarkan kemarahanmu...jka kmu sedih keluarkan kesedihanmu...and jka kmu benci keluarkan kebencianmu...tapi...jangan skali-kali kmu malu lantas kmu
keluarkan kemaluanmu,bahaya...ahaha :D",
            "sabarr <name>. wkwkwkwk",
            "jadi takut klo liat <name> lagi marah,wkwk ",
            "Wew. <name> lagi marah tetep Q kasi LIKE dah. hhe",
            "ada apa dengan mu <name> kok marah amat..? wkwkwkwk ",
            "Aku kan slalu hadir di statusmu..aku kan slau menemani harimu.. tetap smangat <name>. hihi ??? NDOBOL ???",
            "Meski marah. tetep hadir aja dah n like this. :D",
           )
     ),
array(
      array("lapar",
            "hungry",
            "cipru",
            "laper",
            "kempong",
           ),
      array("Dengan hadirnya diriku disini , smoga bisa membuatmu kembali ceria <name>.? hehe..? ???",
            "makan dulu dong <name>, nanti sakit lho..wkwkwkwk",
           )
     ),
array(
      array("wkwk",
            "ckck",
            "gkgk",
            "haha",
            "xixi",
     "hihi",
           ),
      array("Menjaga kebersihan itu memang wajib, tapi komen di statusmu lebih wajib bagiku karena kamu itu temanku..okay lah kalo begitu like this aja <name>...xixixi :D  ??? NDOBOL ???",
            "Aku merasa SIMPATI padamu, karena km ibarat MENTARI yang sinarnya membuat hatiku sebening XL, dan aku bisa BEBAS komen di statusmu, sepu-AS hatiku, dan kamu pantas di acungi JEMPOL,karena dari segi fisik kamu adalah Sosok yang sangat FLEXI-bel. Oleh sebab itu kamu menjadi FRENS-ku sampai saat ini, oke !! <name> wkwkwk...??????",
           )
     ),
array(
      array("pamit",
            "off dulu",
            "ngantuk",
            "bobok",
            "tidur",
           ),
      array("Burung nuri, burung tekukur. I miss you honey, selamat tidur...Kunantikan kehadiranmu slalu esok hari:D <name>..??  ??????",
            "special bwat <name> !! ?? Aku di sini.. and engkau di sana... Kalau km gag ada, aku meranaaa...??:D ??? NDOBOL ???",
            "OH.. tidakkkkkkkk !!<name>,wkwk",
            "MetroTV, CNN, detikcom, Bang Napi, Liputan 6, Antara, ESPN, WordPress News menurutku semua adalah berita basi...tp klo kabar darimu itulah yang selalu KuNanTi....xixixi ??????",
           )
     ),
array(
      array("pusing",
            "mumet",
            "sakit kepala",
            "puyeng",
            "lieur",
           ),
      array("lagi sakit tah <name>..? hhe..",
            "<name> lagi sakit...?",
            "klo pusing minum obat dong <name>,wkwk",
            "<name> sayang....Ku hampiri tidurmu, ku tatap wajahmu, ku kecup kedua pipimu, kucium keningmu dan ku bisikan di telingamu : !! SEMOGA ENGKAU DI TERIMA DI SI2 NYA !! wkwkwk kaburrrrr....",
           )
     ),
array(
      array("galau",
            "resah",
            "gelisah",
     "Galau",
           ),
      array("tMpt mknTUh kaNTin..!! AsaP RokoK tuH NIkotiN...!! HaRi kaSIh sYNg Tuh vaLEnTin..!! YaNG bC nICh Lg NgaPaIN hayooo,,,kok tangannya di masukkan ke celana bagian DePan sambil Matanya MeLek merem..,,,? wkwk..:D ??? NDOBOL ???",
            "eh...<name> kamu tau gak hobi terbaru saat ini..? Yaitu aku ingin selalu menemanimu di FB..:D  xixixi ??????",
            "semangat dong <name>, \(^o^)/ hehee..",
            "tMpt mknTUh kaNTin..!! AsaP RokoK tuH NIkotiN...!! HaRi kaSIh sYNg Tuh vaLEnTin..!! YaNG bC nICh Lg NgaPaIN hayooo,,,kok tangannya di masukkan ke celana bagian DePan sambil Matanya MeLek merem..,,,? wkwk..:D ??????",
           )
     ),
array(
      array("sahur",
            "sauurr",
            "sahuuurr",
           ),
      array("Yg smangat ya puasanya <name>.? hhe",
            "aQ nggak diajak nih <name>,? hee..",
            "buruan sahurnya <name>,dah mau imsak tuh..wkwk",
           )
     ),
array(
      array("panas",
            "gerah",
            "hareudang",
           ),
      array("nih payung biar adem <name>. hhe..",
            "nih es, mau tah <name>..? .hhe..",
            "berendem aja biar adem <name>..",
     "masuk kulkas aja biar adem <name>.. hehee.."
           )
     ),
array(
      array("Asalamualaikum",
            "alaikum",
            "Wr",
           ),
      array("??? WALAIKUM SALAM <name>. ???",
            "??? WSLM WR WB <name>. :) ???",
            "??? WALAIKUMSALAM WARAHMATULLAHI WABARAKATUH <name>.. ???",
     "??? WSLM WR WB <name>. :) ???"
           )
     ),
);
$komentar = '';
$cr_kondisi=false;
foreach($comment as $cx){
    foreach($cx[0] as $ct){
        if(ereg($ct,$text)){
            $cr_kondisi=true;
            $komentar = $cx[1][rand(0,count($cx[1]) - 1)];
        }
    }
}
if($cr_kondisi==true && $ck==true){
    return $komentar;
}else{
    if($cu==true){ return $cmn_umum[rand(0,count($cmn_umum) - 1)]; }
}
}
#######################################
function com_like($cl,$ck,$cu,$tm,$access_token){
    $beranda = json_decode(httphit("https://graph.facebook.com/me/home?fields=id,from,type,message&limit=100&access_token=".$access_token))->data;
    $saya_cr = json_decode(httphit("https://graph.facebook.com/me?access_token=".$access_token));
    if($beranda){
        foreach($beranda as $cr_post){
            if(!ereg($saya_cr->id,$cr_post->id)){
                $log_cr = simlog($cr_post->id);
                if($log_cr==true){
                    if($ck==true){
                        $url_ck = cmn($cr_post->message,$ck,$cu);
                        $url_ck = str_replace("<name>",$cr_post->from->name,$url_ck);
                        if($tm==true){ $url_ck = $url_ck.wkthit(); }
                        $url_ck = urlencode($url_ck);
                        if($ck==true OR $cu==true){
                            httphit("https://graph.facebook.com/".$cr_post->id."/comments?method=POST&message=".$url_ck."&access_token=".$access_token);
                        }
                        if($cl==true){
                            httphit("https://graph.facebook.com/".$cr_post->id."/likes?method=POST&access_token=".$access_token);
                        }
                    }
                }
            }
        }
    }
}
#######################################
function httphit($url){
    return file_get_contents($url);
}
function wkthit(){
    $ent="
";
    $hari=gmdate("D", time()+60*60*7);
    if((gmdate("D", time()+60*60*7))=="Sun"){ $hari="Minggu"; }
    if((gmdate("D", time()+60*60*7))=="Mon"){ $hari="Senin"; }
    if((gmdate("D", time()+60*60*7))=="Tue"){ $hari="Selasa"; }
    if((gmdate("D", time()+60*60*7))=="Wed"){ $hari="Rabu"; }
    if((gmdate("D", time()+60*60*7))=="Thu"){ $hari="Kamis"; }
    if((gmdate("D", time()+60*60*7))=="Fri"){ $hari="Jum'at"; }
    if((gmdate("D", time()+60*60*7))=="Sat"){ $hari="Sabtu"; }
    $jam="Jam : ".gmdate("g:i a", time()+60*60*7);
    return $ent.$ent." Hari ".$hari." , Tanggal : ".gmdate("j-m-Y", time()+60*60*7)." |  ".$jam.".";
}
function simlog($cr_id) {
    $fname = "cr_log.txt";
    $lihatiplist=fopen ($fname, "rb");
    $text='';
    if($lihatiplist){
        $spasipol = "";
        do {
            $barislistip = fread($lihatiplist, 512);
            if(strlen($barislistip) == 0){ break; }
            $spasipol .= $barislistip;
        } while(true);
        fclose ($lihatiplist);
        for ($i = 1; $i <= 10; $i++) {$spasipol = str_replace(" ","",$spasipol);}
        $text=$text.$spasipol;
    }else{$text="";}
    if(ereg($cr_id,$text)){
        return false;
    }else{
        $text = $text.$cr_id;
        $w_file=@fopen($fname,"w") or bberr();
        if($w_file) {
            @fputs($w_file,$text);
            @fclose($w_file);
        }
        return true;
    }
}
?>
