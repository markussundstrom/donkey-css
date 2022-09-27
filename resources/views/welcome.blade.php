<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/normalize.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div id="page">
    <div id="navbar">
        <img src="images/Logo.svg">
        <nav>
            <a class="label" href="">Våra kläder</a>
            <a class="label" href="">Outlet</a>
            <a class="label" href="">Butiker</a>
            <a class="label" href="">Kundservice</a>
            <a class="label" href="">Om oss</a>
        </nav>
        <button type="button" class="button-y">Get in touch</button>
    </div>
    <div id="hero">
        <h1 class="heading-xl">Så kliv in i Donkeys magiska värld – där barn alltid är barn.</h1>
        <p class="body-l">Donkey har kläder till barn, från nyfödd och baby, till barn i förskole- och skolåldern. Barnkläder och bebiskläder som underlättar vardagen och som fungerar lika bra för fartfyllda utomhusaktiviteter som till fest.</p>
        <button type="button" class="button-y">Våra kläder</button>
    </div>
    <div class="cb cb-left">
        <div class=cb-image>
            <img src="images/IMG.jpg" width=656 height=520>
        </div>
        <div class="cb-content">
            <p class="label skyblue">HÖSTKLÄDER</p>
            <h2 class="heading-l">Härliga höstnyheter</h2>
            <p class="body-l">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at sem arcu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            <button type="button" class="button-y">Shoppa nu</button>
        </div> 
    </div>
    <div class="cb cb-right">
        <div class=cb-image>
            <img src="images/IMG2.jpg" width=656 height=520>
        </div>
        <div class="cb-content">
            <p class="label skyblue">VÅRT SORTIMENT</p>
            <h2 class="heading-l">Hållbara plagg</h2>
            <p class="body-l">Med 100 % hållbarhetsmärkt bomull i hela vår kollektion gör vi kläder till baby och barn, men också kläder till den nyfödda familjemedlemmen.</p>
            <button type="button" class="button-y">Läs mer</button>
        </div>
    </div>
    <div id="contact">
        <p class="label medgray">STÄLL EN FRÅGA</p>
        <h2 class="heading-l black">Har du något du funderer över?</h2>
        <p class="body-l darkgray">Med 100 % hållbarhetsmärkt bomull i hela vår kollektion gör vi kläder till baby och barn, men också kläder till den nyfödda familjemedlemmen.</p>
        <form>
            <p class="label">Namn</p>
            <input type="text" id="name" value="Skriv ditt namn">
            <hr class="form">
            <p class="label">Email</p>
            <input type="text" id="email" value="Fyll i din mailadress"><br>
            <hr class="form">
            <p class="label">Välj underkategori</p>
            <div class="spacer8"></div>
            <div class="buttonrow">
                <div class="radiob">
                    <input type="radio" id="kategori1" name="category" value="kategori1">
                    <label for="kategori1">Kategori 1</label>
                </div>
                <div class="radiob">
                    <input type="radio" id="kategori2" name="category" value="kategori2">
                    <label for="kategori2">Kategori 2</label>
                </div>
            </div>
            <div class="buttonrow">
                <div class="radiob">
                    <input type="radio" id="kategori3" name="category" value="kategori3">
                    <label for="kategori3">Kategori 3</label>
                </div>
                <div class="radiob">
                    <input type="radio" id="kategori4" name="category" value="kategori4">
                    <label for="kategori4">Kategori 4</label>
                </div>
            </div>
            <hr class="form">
            <div class="buttonrow">
                <input type="button" class="button-tr wide-button" value="Rensa alternativ">
                <input type="submit" class="button-y wide-button"value="Skicka"> 
            </div>
        </form>
    </div>
    <div id="footer">
        <div id="footer-upper">
            <h1 class="heading-xl">Förändringen börjar nu!</h1>
            <p class="body-l">Vi kommer alltid att utgå ifrån barnens bästa och vår hållbarhetsvision är att göra barnklädesmarknaden mer hållbar – för jorden går i arv, och det ska våra kläder också göra.</p>
            <button type="button" class="button-w">Vårt hållbarhetslöfte</button>
        </div>
        <div id="footer-lower">
            <div id="f-info">
                <div id="f-logo">
                    <img src="images/Logo(1).svg">
                </div>
                <div id="f-infotext">
                <h3 class="heading-m">Donkey Clothing</h3>
                <p class="body-l">Donkey har kläder till barn, från nyfödd och baby, till barn i förskole- och skolåldern. Barnkläder och bebiskläder som underlättar vardagen och som fungerar lika bra för fartfyllda utomhusaktiviteter som till fest. Med 100 % hållbarhetsmärkt bomull i hela vår kollektion gör vi kläder till baby och barn, men också kläder till den nyfödda familjemedlemmen. Helt enkelt kläder som låter barn vara barn.</p>
                </div>
                <div id="f-address">
                    <p class="body-l">Donkey Clothing<br>194 61 Stockholm<br>Sweden</p><hr class="footer">
                    <p class="body-l">+46 0 000 000 00</p><hr class="footer">
                    <p class="body-l">info@donkey.com</p>
                </div>
            </div>
            <div id="f-links">
                <a href="">Om Donkey</a>
                <a href="">Hitta våra butiker</a>
                <a href="">Jobba hos oss</a>
                <a href="">Press</a>
                <a href="">Privacy Policy</a>
                <a href="">Cookie Policy</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
