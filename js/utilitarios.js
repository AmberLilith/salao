const replaceAll = (stringPrincipal, subStringAntiga, subStringNova) =>{
    let novaString = "";
    for(let letra of stringPrincipal){
        if(letra == subStringAntiga){
            novaString += subStringNova;
        }else{
            novaString += letra;
        }
    }
   return novaString;
}

const replaceLast = (stringAntiga, subStringNova) =>{
    novaString = "";
    for(let indice = 0; indice < stringAntiga.length;indice++){
        if(indice == stringAntiga.length -1){
            novaString += subStringNova;
        }else{
            novaString += stringAntiga[indice];
        }    
    }
    return novaString;
}

const capitalize = (stringAntiga) =>{
    let stringAntigaDivididaPorEspaco = stringAntiga.split(" ");
    let novaStringCapitalizada = ""; 
    for (let index = 0; index < stringAntigaDivididaPorEspaco.length; index++) {
        for (let letra = 0; letra < stringAntigaDivididaPorEspaco[index].length; letra++) {
            if(letra == 0){
                novaStringCapitalizada += stringAntigaDivididaPorEspaco[index][letra].toUpperCase();
            }else{
                novaStringCapitalizada += stringAntigaDivididaPorEspaco[index][letra];
            }           
        }    
        novaStringCapitalizada += " ";

    }
    //alert(novaStringCapitalizada.slice(0,novaStringCapitalizada.length - 1))
    return novaStringCapitalizada.slice(0,novaStringCapitalizada.length - 1);
}