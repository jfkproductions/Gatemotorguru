<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function newGuru($name, $area, $thumb, $page)
{
    $guru = array (
        "name" => $name,
        "area" => $area,
        "thumb"=> $thumb,
        "page" => $page
    );
    return $guru;
}


$Gurus = array(
    "Andries" => newGuru("Andries Malan","Pretoria-Jhb","andries-small.jpg","guru-andries.php"),
    "Kevin" => newGuru("Kevin","Pretoria-Midrand","kevin-small.jpg","guru-kevin-ckgate.php"),
    "Allen" => newGuru("Allen Chenik","Kempton Park-Benoni","allen-small.jpg","guru-allen-chenik.php"),
    "Ken" => newGuru("Ken","Johannesburg","ken-small.jpg","guru-ken-jhb.php"),
    "Warren" => newGuru("Warren 'Mr Dependable'","Durban","warren-durban-small.png","guru-warren.php"),
    "CIA"    => newGuru("Vernon","Centurion","cia-small.png","guru-cia.php"),
    
    "Justin" => newGuru("Justin Alberts","Pretoria,Centurion,Midrand","justin-small.jpg","guru-justin-alberts.php"),
    "FixFit" => newGuru("Wimpie Pretorius","Randburg","fixfit-small.png","guru-fix-fit.php"),
    "JohanDist" => newGuru("Johan","Roodepoort-Randburg","johan-dss-small.jpg","guru-johan-dist.php"),

    "Mike" => newGuru("Mike","West Rand-Krugersdorp","mike-small.jpg","guru-mike.php"),
    "Nico" => newGuru("Nico","Kempton-Germiston","nico-small.jpg","guru-nico.php"),
    "Juan" => newGuru("Juan","Pretoria,Jhb,Alberton","juan-small.jpg","guru-juan.php")
    

    
);


function firstName($name)
{
    $names = split(' ',$name);
    $firstName = $names[0];
    
    return $firstName;
}

function showGuru($guru)
{
    global $Gurus;
    $guru = $Gurus[$guru];
    if ($guru == NULL) return;

    $guruName = $guru["name"];
    $guruArea = $guru["area"];
    $guruThumb= $guru["thumb"];
    $guruPage = $guru["page"];

    /*
     *
     <div class="GuruThumb">

        <img class="ThumbImage1" src="<?="images/".$guruThumb;?>" alt="<?=$guruName;?>" />
        <div class="GuruNameLabel" style="text-align: center;font-size: 20px"><?=firstName($guruName);?></div>
        <div class="GuruPopup">
            <img src="<?="images/".$guruThumb;?>" alt="<?=$guruName;?>" />
            <br/>
            <?=$guruName;?><br/>
            Area: <?=$guruArea;?><br/>
            <br/>
            <a href="<?=$guruPage;?>">Contact</a>
        </div>
    </div>

     */
    ?>
<div style="float:left">

    <div class="GuruThumb">
        <img  src="<?="images/".$guruThumb;?>" alt="<?=$guruName;?>" />
        <br/>
        <div  style="text-align: center;font-size: 20px"><?=firstName($guruName);?></div>
        <span>
            <img src="<?="images/".$guruThumb;?>" alt="<?=$guruName;?>" style="width:80%" />
            <br/>
            <?=$guruName;?><br/>
            Area: <?=$guruArea;?><br/>
            <br/>
            <a href="/<?=$guruPage;?>">Contact</a>
        </span>
    </div>
</div>

    <?php
}//END-showGuru

function guruSpacer()
{
    ?>
    <div style="float:left;width:10px;height:1px;border-width: 0px;border-style:none;">
    </div>
    <?php
}//END-guruSpacer

function showSeeYourCompanyHERE()
{
    ?>

    <a href="partner-signup.php" class="ImageLinkBoxLess">
        <img src="images/see-your-company-here.jpg" alt="Advertise your Gate Automation Business"/>
    </a>
    <?php
}

function showSeeYourCompanyHERE2()
{
    ?>

    <a href="partner-signup.php" class="ImageLinkBoxLess">
        <img src="images/see-your-company-here2.jpg" alt="Advertise your Gate Automation Business"/>
    </a>
    <?php
}



function showHomePageGurus()
{
    showGuru("Kevin");
    guruSpacer();
    showGuru("Justin");
    guruSpacer();
    showGuru("JohanDist");
    guruSpacer();
    showGuru("Ken");
    guruSpacer();
    showGuru("Juan");
    guruSpacer();
    showGuru("Mike");
    guruSpacer();
    showSeeYourCompanyHERE();
}

function showIntercomGurusGauteng()
{
    showGuru("Kevin");
    guruSpacer();
    showGuru("Justin");
    guruSpacer();
    showGuru("JohanDist");
    guruSpacer();
    showGuru("Ken");
    guruSpacer();
    showGuru("Juan");
    guruSpacer();
    showGuru("Mike");
    guruSpacer();
    showGuru("Nico");
    guruSpacer();


}

function showProductPageGurus()
{
    showGuru("Kevin");
    guruSpacer();
    showGuru("Justin");
    guruSpacer();
    showGuru("JohanDist");
    guruSpacer();
    showGuru("Ken");
    guruSpacer();
    showGuru("Juan");
    guruSpacer();
}


function showGautengGurus()
{
    showGuru("Kevin");
    guruSpacer();
    showGuru("Juan");
    guruSpacer();
    showGuru("Ken");
    guruSpacer();
    showGuru("JohanDist");
    guruSpacer();
    showGuru("Mike");
    guruSpacer();
}

function showCityGurus($city)
{
    if ($city == "Pretoria") {
        showGuru("Kevin");
        guruSpacer();
        showGuru("Justin");
        guruSpacer();
        showGuru("Juan");
        guruSpacer();
    }
    else
    if ($city == "Centurion") {
        showGuru("Kevin");
        guruSpacer();
        showGuru("Justin");
        guruSpacer();
        showGuru("Juan");
        guruSpacer();
    }
    else
    if ($city == "Midrand") {
        showGuru("Kevin");
        guruSpacer();
        showGuru("Justin");
        guruSpacer();
        showGuru("Juan");
        guruSpacer();
    }
    else
    if ($city == "Randburg" || $city == "Fourways" || $city == "Sandton" ||
            $city == "Bryanston" || $city == "Roodepoort") {
        showGuru("Ken");
        guruSpacer();
        showGuru("JohanDist");
        guruSpacer();
        showGuru("Mike");
        guruSpacer();
    }

    else
    if ($city == "Johannesburg") {
        showGuru("Ken");
        guruSpacer();
        showGuru("JohanDist");
        guruSpacer();
        showGuru("Juan");
        guruSpacer();
        showGuru("Mike");
        guruSpacer();
    }
    else
    if ($city == "Kempton Park" || $city == "Boksburg" || $city=="Benoni") {
        showGuru("Nico");
        showGuru("Juan");

    }
    else
    if ($city == "Durban") {
        showGuru("Warren");
    }

}

function showProvinceGurus($province)
{
    if ($province == "Gauteng") {
        showGautengGurus();
    }
    if ($province == "Durban") {
        showGuru("Warren");
    }

}


function showCitiesInProvince($province)
{
    if ($province == "Gauteng") {
?>
        Select a more specific area, or simply use the form below<br/>
        <br/>
        <div>
            <div style="width:300px;float:left">
                <a href="gate-motors-pretoria.php" title="Gate Motors Pretora" class="SmallAreaLink">Pretoria</a>

                <a href="gate-motors-centurion.php" title="Gate Motors Centurion" class="SmallAreaLink">Centurion</a>
                <a href="gate-motors-midrand.php" title="Gate Motors Midrand" class="SmallAreaLink">Midrand</a> <br/>
                <a href="gate-motors-johannesburg.php" title="Gate Motors Johannesburg" class="SmallAreaLink">Johannesburg</a> <br/>

                <a href="gate-motors-kempton-park.php" title="Gate Motors Kempton park" class="SmallAreaLink">Kempton Park</a>
                <a href="gate-motors-boksburg.php" title="Gate Motors Boksburg" class="SmallAreaLink">Boksburg</a>
                <a href="gate-motors-benoni.php" title="Gate Motors Benoni" class="SmallAreaLink">Benoni</a> <br/>

            </div>
            <div style="width:300px;float:left">

            </div>
            <div style="width:300px;float:left">
                <a href="/" title="Gate Motors in South Africa" class="SmallAreaLink">Gate Motor Guru's in Other Provinces</a>
            </div>
        </div>
<?php
    }//end-if-gauteng

    if ($province == "Cape") {
?>
        Select a more specific area, or simply use the form below<br/>
        <br/>
        <div>
            <div style="width:300px;float:left">
                <h2>Western Cape</h2>
                <a href="gate-motors-cape-town.php" title="Gate Motors Pretora" class="SmallAreaLink">Cape Town</a><br/>

                <a class="SmallAreaLink">Cape Winelands District</a>(Stellenbosch, Somerset West,...)<br/>
                <a class="SmallAreaLink">West Coast District</a>(Cederberg,Saldanha Bay...)<br/>
                <a class="SmallAreaLink">Overberg District</a><br/>
                <a class="SmallAreaLink">Eden District</a>(Mossel Bay, George, Knysna...)<br/>
                <a class="SmallAreaLink">Central Karoo District</a>(Prince Albert, Beaufort West...)<br/>
                
            </div>

            <div style="width:300px;float:left">
                <h2>Eastern Cape<h2>
                <a class="SmallAreaLink">Graaff Reinet</a><br/>
                <a class="SmallAreaLink">Grahamstown</a><br/>
                <a class="SmallAreaLink">Port Elizabeth</a><br/>
                <a class="SmallAreaLink">St Francis Bay</a><br/>
            </div>

            <div style="width:300px;float:left">
                <h2>Northern Cape<h2>
                <a class="SmallAreaLink">Colesberg</a><br/>
                <a class="SmallAreaLink">Kimberley</a><br/>
                <a class="SmallAreaLink">Upington</a><br/>

            </div>

            <div style="clear:both">
            </div>

            <div style="text-align:center">
                <a href="/" title="Gate Motors in South Africa" class="SmallAreaLink">Gate Motor Guru's in <u>Other Provinces</u></a>
            </div>
        </div>
<?php
    }//end-if-cape




}

?>
