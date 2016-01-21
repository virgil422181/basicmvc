<?php

$backOnePage = (isset($backOnePage))? "<li>Te poti intoarce la <a href='$backOnePage'>pagina precedenta</a>  sau,</li>" : "";
return
"<section id='page-content' class='container'>
    <div class='col-main row '>
    <div class='std col-xs-12'>
        <div class='page-title'>
            <h1>Ne pare rau dar pagina solicitata nu exista....</h1>
        </div>
        <dl>
            <dt>Este posibil ca pagina solicitata sa nu fie gasita din urmatoarele cauze:</dt>
            <dd>
                <ul class='disc'>
                    <li>Daca ai introdus adresa paginii solicitate direct in browser, te rog sa verifici daca adresa este scrisa corect.</li>
                    <li>Daca ai urmat un link si ai ajuns la aceasta pagina, link-ul (legatura) nu mai este valabil.</li>
                </ul>
            </dd>
        </dl>
        <p></p>
        <dl>
            <dt>Ce pot sa fac?</dt>
            <dd>
                <ul class='disc'>
                    $backOnePage
                    <li>Te poti intoarce <a href='".WEB_ROOT."'>prima pagina </a></li>
                </ul>
            </dd>
        </dl>
    </div>
</div>
<div class='col-right sidebar'></div>
</section>";
            