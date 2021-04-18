<?php require_once( $_SERVER['DOCUMENT_ROOT'] ."/inc/check.php");?>
                <div class="CMSGDPR popupgdpr" onclick="popupgdprfunc()"><p class="popupgdprclick">GDPR DATA COLLECTION AND COOKIES</p>
                    <div class="popuptext" id="gdprPopup">
<?php if ($gdprsettingtype == '2') { 
?>
                    <form action="<?php echo "//". $host ."/inc/handlers/gdprprocessor.php";?>" method="post" id="gdprprocessorphp" enctype="multipart/form-data">
<? ;
}?>

                    	<h2>Data Collection</h2>
                    	<p>Some bullshit about data collection</p>
                        <p>En utilisant les formulaires, vos données transitent de la même manière que lorsque vous envoyez un mail sur un client sécurisé sans collection.</p>
                        <p></p>
                        <h2>Javascript</h2>
                        <p>Some bullshit about javascript scripts on the website</p>
                        <h2>Cookies</h2>
                        <p>Some bullshit about cookies on the website</p>
<?php
if ($googleanalytics == '1') { 
?>
                        <p>Bullshit about googleanalytics that is displayed only when googleanalytics module is toggled</p>
                        <p>on the website and the modules correctly loaded(value processed in an internal file)</p>
<!--                    In the following switches, the $gdpr_something values are set from if the said module is active website,
                        then checking if the user already have preferences, and defines the value accordingly, else goes to default -->
                        <p>
<?
    switch ($gdprsettingtype) {
        case '1':
            ?>
                            <label class="switch">    
                                <input class="gdprswitch" type="checkbox" id="gganalyticswitch"<?php if($gdpr_gganalytics == '1') { echo " checked";}?>>
                                <span class="slider"></span>
                            </label>
                            <span>Google Analytics</span>
                        </p><? ;
            break;
        case '2':
            ?>
                            <label class="switch" for="gganalyticswitch">    
                                <input class="gdprswitch" type="checkbox" name="gganalyticswitch" id="gganalyticswitch"<?php if($gdpr_gganalytics == '1') { ?> value"yes" checked<?;} else {?> value"no"<?;}?>>
                                <span class="slider"></span>
                            </label>
                            <span>Google Analytics</span>
                        </p><? ;
            break;
    }; 
if ($gtm == '1') {
    switch ($gdprsettingtype) {
        case '1':
            ?>
                        <p>
                            <label class="switch">    
                                <input class="gdprswitch" type="checkbox" id="gtmswitch"<?php if($gdpr_gtm == '1') { echo " checked";}?>>
                                <span class="slider"></span>
                            </label>
                            <span>Google Tagmanager</span>
                        </p><? ;
            break;
        case '2':
            ?>
                        <p>
                            <label class="switch" for="gtmswitch">    
                                <input class="gdprswitch" type="checkbox" name="gtmswitch" id="gtmswitch"<?php if($gdpr_gtm == '1') { ?> value"yes" checked<?;} else {?> value"no"<?;}?>>
                                <span class="slider"></span>
                            </label>
                            <span>Google Tagmanager</span>
                        </p><? ;
            break;
    }; 
                    };
}?>
<?php
if ($googleanalytics != '1') { 
?>
                        <p>We don't use external cookies</p>
<!--                    Because if all google modules are disabled website-wide, we don't.-->
<? ;
}?>

                        <h2>Session</h2>
                        <p>La gestion de session se fait en interne coté serveur via php8.0, sans données sortantes.</p>
<?php
switch ($gdprsettingtype) {
    case '1':
        ?>
                        <p>
                            <label class="switch"> 
                                <input class="gdprswitch" type="checkbox" id="sesslogswitch"<?php if($gdpr_sesslog == '1') { echo " checked";}?>>
                                <span class="slider"></span>
                            </label>
                            <span>Session logs</span>
                        </p><? ;
        break;
    case '2':
        ?>
                        <p>
                            <label class="switch" for="sesslogswitch"> 
                                <input class="gdprswitch" type="checkbox" name="sesslogswitch" id="sesslogswitch"<?php if($gdpr_sesslog == '1') { ?> value"yes" checked<?;} else {?> value"no"<?;}?>>
                                <span class="slider"></span>
                            </label>
                            <span>Session logs</span>
                        </p><? ;
        break;
};
if ($gdprsettingtype == '2') { 
?>
                        <p class="gdprbtn">
                        <input type ="hidden" name="backurl" value="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ."#gdprPopup";?>">
                        <input type ="submit" name="submit" value="Apply" class="btn btn-primary">
                        </p>
                    </form>
<? ;
}?>

                    </div>
                </div>
