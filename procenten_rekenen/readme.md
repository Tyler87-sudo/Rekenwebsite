# Procenten-rekentool

Deze tool is bedoeld om het begrip van rekenen met procenten te vergroten in het kader van het vak rekenen op het MBO niveau 4, in het bijzonder
aan de Software Developer opleiding aan het Alfa-college locatie Boumaboulevard.

#### Het rekenmodel 

De benadering van het hele procentenrekenen is geschoeid op het concept met vermenigvuldigingsfactoren. (of groeifactoren, of kortweg factoren):
bij elke procentsom kun je een **factor** bedenken. 
Daarnaast is er altijd sprake van een **oud**-bedrag en een **nieuw**-bedrag
Het verband tussen deze 3 variabelen is te schrijven op 3 manieren:

1. nieuw = factor x oud (denk aan 6 = 2 * 3)
2. oud = nieuw / factor (denk aan 2 = 6 / 3)
3. factor = nieuw / oud (denk aan 3 = 6 / 2)

***Bij de factor kun je op basis van de factor spreken van 3 soorten:*** 

1. je neemt ergens 'zoveel %' van'
2. er is sprake van toename 
3. er is sprake van afname 

***De soort en de factor zijn onlosmakelijk aan elkaar gebonden***

#### Wat de tool kan (functioneel ontwerp)

Als een gebruiker een procentsom op moet lossen, moet de gebruiker uit de som waarden voor  2 van de 3 variabelen vinden. Met deze 2 waarden van de variabelen kan de waarde van de 3e
variabele uitgerekend worden - zie alinea hierboven. 

De gebruiker moet daartoe de 2 gevonden waarden op de juiste plek invoeren in de tool. Als de 2 waarden zijn ingevuld, word de los op knop actief.
Daarbij word automatisch de ontbrekende waarde opgelost. 

Door deze tool te ontwikkelen wordt hopelijk het begrip van procenten vergroot, het hele concept van werken met een factor maakt dat hulpmiddelen 
als verhoudingstabellen tot het verleden behoren.

#### Technisch ontwerp

1. Onze app moet steeds checken of 2 van de 3 variabelen een waarde hebben gekregen. Dus onder elk input-veld moet een onchange listener komen die checkt of er 2 van de waarden ingevuld zijn. 
deze functie heet `checkInput()`
   - checkInput() moet na het invullen (onchange) bij 3 input velden checken of er wat staat: document.getElementById("waardena, waardevoor).value
   - als er 2 van de 3 ingevuld zijn, dan:
   `if()`
2. Als er 2 van de 3 gevuld zijn, moet de attribuut `disabled` van de los op-knop verwijderd worden zodat de knop actief word.
3. Als de gebruiker vervolgens op de los op-knop klikt, moet de waarde van de overgebleven van de variabele gevuld worden met het juiste antwoord. 