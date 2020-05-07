# Tesztjegyzőkönyv

###### tesztelő: Horváth Dániel
###### módszer: Fekete dobozos tesztelés
###### dátum: 2020.05.07

## Nyitó oldal

A bal felső sarokban nem jelenik meg egy kép, gondolom rossz a hivítkozás. Az oldal túlzottan letisztúl, néhol összecsúsznak az inputok. Nem egyértelmű hogy mi micsoda, melyik formhoz tartozik. Angol és magyar szöveg felváltva. Egyáltalán nem egyértelmű, h mire jó ez az oldal v most mit akarnak tőlem. Telefonos nézetben mégjobban összecsúsztak az oldal elemei. Pont úgy néz ki amit amit nem programoztak le rendesen.

### Menü sáv
|Gomb|Amit várok|Amit csinál|Eredmény|
|---|---|---|---|
|HOME|Betölti a nyitó oldalt|Betölti a nyitó oldalt|Helyes működés|
|CONTACTS|Betölti a contact oldalt|Betölti a contact oldalt, a fejleszők nevei láthetóak|Helyes működés|
|REGISTRATION|Betölti a regisztrációs oldalt|Betölti a regisztrációs oldalt, egy regisztrációs form látható|Helyes működés|
|LOGIN|Betölti a login oldalt|Betölti a login oldalt, egy login form látható|Helyes működés|
|MEGJELENITES|Betölti a megjelenítés oldalt|Betölti a nyitó oldalt|Hibás működés|
|Jump Upper|Felgörget az oldal tetejére|Betölti a nyitó oldalt|Hibás működés|

### Első form
Mindegy, hogy mit írok vagy nem írok az első 2 input mezőbe a submit gomb megnyomása után újratölti az oldalt, lehet h dolgozott valamit a háttérben de semmilyen visszajelzés nem jelent meg.
###### Eredmény: Hibás működés

### Második form
Ugyan az a helyzet, mint az első formmal, nem tudom h mit hova miért írok és semmi visszajelzés
###### Eredmény: Hibás működés

## Contacts oldal
Csak a fejleszők neve és elérhetősége látható, nem tudok sehova kattintani. Én azért egy üzenet küldő formot eltudnék képzelni ezen az oldalon, hogy legyen valami funkciója. Mert ezeket az adatokat igazából beírhatták volna a fotterbe is vagy ki se kellett volna írni, így ennek az oldalnak nincs értelme.
###### Eredmény: Helyes működés, de minek?

## Registration oldal
Bármit írok az input mezőkbe a registration gomb megnyomása után főoldalra dob vissza értelmezhető visszajelzés nélkül.
###### Eredmény: Hibás működés

## Login oldal
Bármit írok az input mezőkbe a login gomb megnyomása után főoldalra dob vissza értelmezhető visszajelzés nélkül.
###### Eredmény: Hibás működés

## Megjelenés oldal
Ez az oldal nem létezik, a link a nyitó oldalra dob
###### Eredmény: Hibás működés
