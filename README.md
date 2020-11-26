## Applicazioni "Modulitiche"

Progetto di esempio per il talk del laravelday 2020

### Installazione

- Clonazione del repository
```git clone git@github.com:robertogallea/applicazioni-modulitiche.git```

- Spostarsi nella directory di progetto
```cd applicazioni-modulitiche```

- Copia del file .env
```cp .env.example .env```

- Installazione delle dipendenze
```composer install```

__Nota__: l'applicazione contiene già al suo interno un db sqlite popolato con dati di esempio.


### Configurazione packages

All'interno del file composer.json fra le dipendenze sono presenti i seguenti:

```
    "require": {
        ...
        "talk/domain": "dev-master",
        "talk/core": "dev-master",
        "talk/dbaccess": "dev-master",
        "talk/ui": "dev-master"
    },
```

è possibile sostituire:
 - `talk/dbaccess` con `talk/apiaccess`
 - `talk/ui` con `talk/ui-alt`
 
Le slide del talk sono disponibili su: [Google Slides](https://docs.google.com/presentation/d/1pm2uaq6wLV4onWq6zuKAC71EOjA0mO4dxFuxpEwOlps/edit?usp=sharing) 
