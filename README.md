# code_grepper


## Récupérer le grepper
https://emgithub.com/

## Bugs trouvés

### le css présentait une bordure blanche. Il faut la retirer en ajoutant dans le css :
 ```css :not(.contain-code) {
    border: 0px!important;
}
``` 
Il faut modifier la class par la class qui encapsule le bloc importé