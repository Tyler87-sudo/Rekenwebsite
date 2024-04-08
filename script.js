function displaytafel()
{
    let tafelvan = document.getElementById("inputTafelVan").value
    let tafellengte = document.getElementById("inputTafelLengte").value
    let tafeltekst = "" //een lege string, wordt uiteindelijk de tekst die op het scherm komt
//let teller = 1 //een teller die bij gaat houden 1 x7, 2 x7 3 x7 etc.
    let uitkomst = 0 //de uitkomst van onze berekeningen
    //while (teller <= tafellengte)
    for (let teller = 1; teller <= tafellengte; teller++)
    {
        uitkomst = teller * tafelvan
        tafeltekst += teller + " x " + tafelvan + " = " + uitkomst + "<br>"
        //hier moet iets komen als: als de teller 10, 20, 30 etc. is, dan moet er een extra <br> geplaatst worden
        //je gaat een if-statement maken die checkt op deelbaarheid van 10
        //in alle programmeertalen is daar een operator voor:
        if(teller % 10 == 0)
            tafeltekst += "<br>"
        //teller++ //de teller wordt 1 groter aan het einde van de lus
    }
    document.getElementById("tafel").innerHTML = tafeltekst
    document.getElementById("tafelheader").innerHTML = "Tafel van " + tafelvan
}