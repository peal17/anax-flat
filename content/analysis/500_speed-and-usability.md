Speed and usability
===============================

*Jag har valt att fortsätta min utvärdering av musei-webbplatserna från föregående analys. Jag tyckte det var spännande att se hur de förhåller sig till varann i detta test. Min utgångspunkt har varit att välja likartade webbplatser för mina analyser.
Jag valde att analysera museernas startsida, en utställningssida, samt informationssidan om museet*

**Metod**  
Jag använde mig av mätverktygen Firefox-devtools network-flik, samt Google Pagespeed. Och dokumenterade i Google Kalkylark.
Jag öppnade ett fönster i firefox för varje webbplats som skulle analyseras och lade de olika sidorna i varsin flik, samt en flik för pagespeed. Jag avvaktade en dag med mina mätningar pga dålig internet-uppkoppling och ville göra samtliga mätningar vid ett tillfälle med stabil uppkoppling. Men dagen efter hade Nationalmuseum förnyat sin gamla torra webbplats som jag var lite förtjust i. Det tyckte jag var lite synd. Nu var den tjusig som alla de andra, och jag fick inte veta hur den lite simplare sidan förhöll sig i jämförelse.

[Insamlingsdata](https://docs.google.com/spreadsheets/d/e/2PACX-1vSaDEW2WCBewbCSnoTCtEJwjWtnOq6S57jO7FeYpYwUbGr9ZbdxLyugLhwO7hOfEOczSgpFY_cIvtNI/pubhtml)  

**Moderna museet**  
[Startsida](https://www.modernamuseet.se/stockholm/sv/)  
[Utställning](https://www.modernamuseet.se/stockholm/sv/utstallningar/manipulera-varlden/)  
[Information](https://www.modernamuseet.se/stockholm/sv/om-museet/)  
<img class="imgAnalysis" src="img/modMus.png">
Många bilder kan formateras om.  
Webbplatsen skulle kunna utnyttja cache-lagring mer.  

**Etnografiska museet**  
[Startsida](http://www.varldskulturmuseerna.se/etnografiskamuseet/)  
[Utställning](http://www.varldskulturmuseerna.se/etnografiskamuseet/aktuella-utstallningar/magasinet-en-etnografisk-skattkammare/)  
[Information](http://www.varldskulturmuseerna.se/etnografiskamuseet/om-museet-2/)  
<img class="imgAnalysis" src="img/etnMus.png">
Javaskript- och CSS-resurser skulle kunna struktureras om så att de inte måste laddas in innan websidan börjar renderas.  
Många filer kan komprimeras och minifieras.

**Nationalmuseum**  
[Startsida](http://www.nationalmuseum.se/)  
[Utställning](http://www.nationalmuseum.se/sv/Utstallningar/Tidigare/Hundra-ar-av-finsk-design/)  
[Information](http://www.nationalmuseum.se/sv/Om-Nationalmuseum/)  
<img class="imgAnalysis" src="img/natmusNy.jpg">
Bilder kan formateras om.
Många resurser skulle kunna komprimeras med gzip eller deflate.  

**Sammanfattning**  
Webbplatserna har mycket bilder, som i många fall verkar ta upp onödigt med utrymme. Många Javascrip och CSS-resuser måste också laddas innan sidorna börjar renderas. Det är också många resurser som skulle kunna komprimeras och minifieras. Chache-lagring verkar inte heller vara utnyttjat ordentilgt.

**Rangordning**  
1. Nationalmuseum  
2. Etnografiska museet  
3. Moderna museet  

Jag valde, trots låga pagespeed-resultat, att rangordna Nationalmuseum överst, då laddningstiden var avsevärt kortare på den webbplatsen. Etnografiska fick en andraplats för att den verkade effektivast i förhållande till mängden data och förfrågningar, även om laddningstiden där var längst. Moderna museet hade långa laddtider och dåligt pagespeed-resultat.

**Gränsvärde**  
Jag valde att sätta ett gränsvärde på 10 sekunder.
Med god internetuppkopling tyckte jag inte någon av webbplatserna kändes för långsam. Jag satt och testade Etnografiska-sidan som tog över 20 sekunder och kom fram till att på 10 sekunder vill jag nog att det mesta ska ha laddats in. Och det hade det också på den sidan, men det dök upp extra förfrågningar mot slutet.

Jag arbetade själv.
