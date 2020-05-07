# Áttekintés
Egy file feltöltő oldalt szeretnénk létrehozni, ahova egy filet tudunk feltölteni egyszerre (.txt .pdf .ppt .xls .doc .md .jpg .png .zip). Ezekhez a fileokhoz megadhatjuk, hogy mi legyen az elérési útja például 'asd'. Szóval amikor elszeretnénk érni amjd ezt a file a következőt kell beírni az URL-be: link.com/asd. Így szóban is elmondhatjuk, hogy hogyan tudják elérni az álltalunk feltöltött filet.

Akokr is használhatjuk az oldalt, ha egy hosszú URL helyett egy rövidebbet szeretnénk az adott oldal eléréséhez. Ez színtén akkor hasznos ha szóban szeretnénk egy linket elmondani valakinek. Pl.: Google Drive-, Google kérdőív- linkek

# Jelenlegi helyzet
https://pastebin.com/ weboldalon lehet egy txt file-t lehet feltöltetni és nem meghatározható a hozzá tartozó URL. Ezen szeretnénk javítani. Hogy több file típussal és választható URL-ekkle működjön.

https://tinyurl.com/ weboldalon lehet rövidebb url-t választani egy hosszabb rövidítésére, ezt a funkciót mi is megvalósítjuk.

# Vágyálom rendszer
Tökéletes, letsztult megjelenés telefonon és számítógépen is. Egyszerű kezelhetőség.

# Funkcionális követelmények
Bejelentkezés nélkül is használható az oldal, ilyenkor a adatok gyors megadása után létrehozhatjuk a saját linkünket. Amit így hoztunk létre többé nem módosítható és amikor elévül autómatikusan törlődik.

Bejelentkezés esetén, több opciónk van szerkeszteni ezeket a linkeket, akár módosíthatjuk is a tartalmakat vagy örök életűvé tehetjük a linket.

# Rendszerre vonatkozó követelmények, szabályok
## Front end
- HTML
- CSS, SCSS
- JS, jQuery
- Bootstrap
- Fontawesome
- Google fonts, google ads

## Back end
- PHP - MVC
- SQL - MariaDB

# Üzleti folyamatok modelje
![use case diagram](https://github.com/BozoTamas/AFP2/blob/master/docs/usecase.png)

# Követelménylista
|Modul|Név|Kifejtés|
|---|---|---|
|Felület|nyitó oldal|2 formot tartalmaz. Letisztult, barátságos, responsive megjelenés|
|Felület|File feltöltő form|Egy textareat, file input, alias, expiration|
|Modifikáció|File feltöltő form mentése|Az update mappában az alias nevével megegyező mappát hoz létre és oda menti a fájlokat, a textareába beírt szöveget egy text.txt-be menti szintén ebbe a mappába|
|Felület|Drag and drop|Amikor a textarea területére drag and droppal bedobok egy fájlt, megjelenik a feltölteni kívánt fájlok listájában|
|Felület|Fájlok listája|Minden fájl melett megjelenik egy "x" amivel kitörölhetjük a listából|
|Felület|url form|2 inputot tartalmaz, hozzú url és az alias megadására|
|Modifikáció|üres alias|Ha üresen hagyják feltöltéskor ezt a mező, a rendszer egy 6 karakterből álló véletlen kódot generál|
|Felület|mappa oldal|Akkor jelenik meg, amikor egy feltöltött mappa linkére kattintunk, tartalma egy táblázat a feltöltött fájlok listájával, minden file melett letöltő link, illetve le lehet tölteni az egészet is egy zip-ben|
|Felület|mappa oldal|Bal kattintással a táblázatban kiválaszthatok egy file, aminek a tartalma megjelenik, akár szöveg, kép, pdf, doc|
|Felület|bejelentkezés után|A felhasználó által feltöltött linkek és mappák jelennek meg 1-1 táblázatban, van hozzájuk törlő link|
|Modifikáció|url kezelése|url ellenőrzése, hogy meglévő aliasra hivatkozik-e, ha igen megfelelő oldal, file betöltése. Ha nincs ilyen akkor a főoldal nyílik meg|
|Adatbázisba mentés|url form|új url mentése az adatbázisba, validáció az alias, ha az alias mező már foglalt visszajelzés. Ha az alias mező üres akkor random 6 karakteres sorozatot generál aliasnak|
|Adatbázisba mentés|file form|fájlok mentése a szerveren, elérési út mentése az adatbázisba, alias kezelése mint elöbb|
|Modifikáció|Több file feltöltése|zip formátumba csomagolás, és úgy mentés|
|Modifikáció|Login|Login form validáció, ha sikeres, bejelentkezés|
|Modifikáció|Regisztráció|validáció, sikeres regisztrálás esetén bejelentkezés|
|Modifikáció|bejelentkezés felület|A felületett az user_id alapján adatokkal kiszolgálni|
|Modifikáció|bejelentkezés utáni alias törlés|A megfelelő táblából töröljön id alapján|
|Email|Email küldés|Sikeres regisztráció esetén email küldés, a felhasználó adataival|
|Modifikáció|Lejárt aliaszok|Régi lejárt aliaszok törlése|
|Felület|Reklámok|A weboldal oldalán reklámbanner megjelenítése|

# Fogalomtár
- URL: Az oldalneve és megfelelő aloldal eléréshez szükséges cím
- Alias: Az a kifejezés, amit megadunk hogy elérjük az oldalunkat vagy filejainkat. Ezt kell majd beírni az URL-be egy / jel után. pl.: link.com/alias Azaz ez az elérési út.

# Adatbázis terv
![adatbázis terv](https://github.com/BozoTamas/AFP2/blob/master/docs/adatb%C3%A1zis.png)
