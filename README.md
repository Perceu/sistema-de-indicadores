# Sistema De Indicadores Dinamicos

Desafio proposto:

Precisamos retornar um array listando os indicadores com 3 campos variáveis:
- Instituição ou Nome da capacitação
- Latitude
- Longitude

No dump temos algumas tabelas:

- **indicadores**: lista de indicadores, esses indicadores tem campos variáveis

- **indicadores_secoes_itens**: lista dos campos variáveis dos indicadores

- **indicadores_respostas**: valores cadastrados referentes aos campos variados dos indicadores

- **cidades**: Lista de cidades com coordenadas geográficas

Resultado deve ser um array como abaixo:

```
    array (
        ['Capacitação TESTE',	'4.60314',	'-60.1815'],
        ['Instituição TESTE',	'-27.5861254',	'-48.5209025']
    );
```

**Observação**: *Hoje a tabela "indicadores" tem 40.000 registros e "indicadores_respostas" 650.000 registros*


## Para instalar:

```
    docker-compose up -d 
    sh ./scripts/load_db.sh
    sh ./scripts/composer_install.sh
```

### Endereço: [localhost:8000](http://localhost:8000)



