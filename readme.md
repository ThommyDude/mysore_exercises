
# PHP Mysore Uppgifter 🧘‍♀️🧘‍♂️
Inom astangha yoga är mysore att man gör en serie av övningar i sitt egna tempo. Gör alltså övningarna i den ordningen dom är skrivna, en efter en. När du är klar kan du börja om från 1 och se om du lärt dig något sen förra gången 🙂 

Om inget annat står så skapa en ny fil för varje uppgift, ni kan clona detta repo så har ni en egen readme.md att utgå ifrån.

## 1 :heavy_check_mark:
Skriv en funktion med namnet `make_paragraph` som skriver ut en sträng som HTML-elementet \<p>.
Exempel: "hej" ska skrivas ut som "\<p>hej\</p>".
Funktionen ska ha en parameter, som är strängen som ska skrivas ut, och den ska inte returnera något. 

## 2 :heavy_check_mark:
Funktionen `make_paragraph` är lite begränsad. Tänk om vi vill göra h1-taggar? Eller h2, h3 osv. Skriv en ny funktion med namnet `make_heading`. Funktionen behöver veta strängen som ska skrivas ut och vilken heading det ska vara. Den behöver alltså två argument.

## 3 :heavy_check_mark:
Nu har vi två funktioner som vi kan använda för att skapa HTML-paragrafer och headings. Men det blir väldigt många funktioner om vi ska ha en funktion för varje möjligt HTML-element.

Vi behöver en funktion som kan göra flera sorters element. Skriv en funktion `make_tag` som kan göra alla sorters HTML-element.

## 4 :heavy_check_mark:
Förbättra `make_tag` så att man kan ange inline styles också. (Eller `href` för länkar)
#### Exempel:
```<p style="color: hotpink;">exempeltext\</p>```

## 5 :heavy_check_mark:
Skriv en funktion som gör om alla nyrader i en sträng till \<br>-element. Funktionen ska ta strängen som parameter och returnera en ny sträng. En nyrad i PHP skrivs ut med `\\n`.

## 6 :heavy_check_mark:
Skriv en funktion som returnerar en array med slumptal. Använd `rand` för att göra slumptal. Hur många argument behöver funktionen?

## 7 :heavy_check_mark:
Skriv en funktion som gör om en array till en lista i HTML. Använd funktionen `make_tag`.
#### Exempel: 
```make_list( [1, 2] ) // "<ul> <li>1</li> <li>2</li> </ul>"```

## 8 :heavy_check_mark:
Skriv en funktion som gör om en tvådimensionell array till en HTML-tabell.

## 9 :heavy_check_mark:
Förbättra funktionen så att den lägger till en rad sist i tabellen, med summan av alla siffror i varje kolumn. Du kan anta att arrayen innehåller tal.

## 10 :heavy_check_mark:
Skriv en funktion med namnet capitalize som gör om ett användarnamn till stora bokstäver.

## 11 :heavy_check_mark:
Förbättra funktionen så att den bara gör första bokstaven stor.

## 12 :heavy_check_mark:
Skriv en funktion `round` som avrundar en float till närmaste heltal.
#### Exempel:
```
round(3.9); // 4
round(5.4); // 5.
```

## 13 :heavy_check_mark:
Skriv en funktion som gör om ett decimaltal till en sträng. Strängen ska använda decimalkomma i stället för decimalpunkt.
### Exempel:
``` float_to_string(75.5) // "75,5".```

## 14 :heavy_check_mark:
Skriv en funktion som räknar ut summan av alla tal i en array. Skriv en annan som räknar ut medelvärdet.

## 15 :heavy_check_mark:
Skriv en funktion som tar en sträng som motsvarar en veckodag som parameter och returnerar en siffra. Om strängen är "måndag" ska funktionen returnera 1, "tisdag" ska bli 2 och "söndag" ska bli 7.

Funktionen ska fungera oavsett om veckodagen står med små eller stora bokstäver.

## 16 :heavy_check_mark:
Skriv en funktion `doubleIt` som dubblerar värdet på en variabel som innehåller ett tal **och gör det positivt**.
#### Exempel:
```
doubleIt(5); // 10
doubleIt(-3); // 6
```

## 17 :heavy_check_mark:
Skriv en funktion som räknar ut summan av alla tal i en array. Funktionen ska finnas i två versioner: en iterativ (som innehåller en for/while-loop) och en rekursiv.

## 18 :heavy_check_mark:
Skriv en funktion som räknar ut summan av talen 1 till 100, i en rekursiv och en iterativ version.

## 19 :heavy_check_mark:
Förbättra båda versionerna av funktionen så att det går att ställa in det första och det sista talet som argument.

## 20 :heavy_check_mark:
En av de mest kända talföljderna är uppkallad efter den italienske matimatikern *Leonardo Fibonacci*. I början av 1200-talet studerade han ett problem vars lösning ledde till talföljden:
> 1, 1, 2, 3, 5, 8, 13, 21, 34, 55.

Man får fram talen med hjälp av följande regler:
```
f(1) = 1
f(2) = 1
f(n) = f(n - 1) + f(n - 2)
```
Skriv en rekursiv funktion som räknar ut det n:te Fibonacci-talet.
Testa den genom att räkna ut det tionde.

## 21 :heavy_check_mark:
Skriv en funktion som räknar hur många udda tal det finns i en array.

## 22 :heavy_check_mark:
Skriv en funktion som vänder på en sträng. Funktionen ska finnas i två versioner: en rekursiv och en iterativ.
#### Exempel:
```
reverseIt("baklänges"); // "segnälkab"
```

## 23 :heavy_check_mark:
Vi bygger funktioner att använda i en webshop! Skriv en funktion som tar ett namn på en produkt som argument och returnerar en sträng. Strängen ska vara produktnamnet inuti ett \<strong> element.

Kontrollera i webbläsaren att funktionen gör rätt, genom att hitta på ett produktnamn.

## 24 :heavy_check_mark:
Förbättra funktionen så att den även tar en länk till en bild som argument. Den ska returnera en sträng som är ett \<div> element som innehåller både namnet och bilden. Bilden ska vara i ett \<img> element. Testa att skriva HTML separat innan du skriver funktionen, så blir det lättare.

## 25 :heavy_check_mark:
Förbättra funktionen genom att lägga till en parameter för priset och en knapp. Priset ska vara ett decimaltal och knappen ska vara det som ska stå på knappen.
#### Exempel:
```
generate_product("Skiftnyckel", "/bild.gif", 89.50, "Lägg till i kundvagn");
```
Testa funktionen i webläsaren.

## 26 :heavy_check_mark:
Skriv funktionen `mark_search_word`. Funktionen ska ta två argument: en sträng som kan innehålla vad som helst och en sträng som är ett ord man söker efter. Funktionen ska returnera den första strängen, med några ändringar. Om sökordet finns i strängen så ska det göras kursivt med \<em> elementet.
#### Exempel:
```
mark_search_word("längre text", "tex"); // "längre <em>tex</em>t"
```
