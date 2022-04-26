# PVA4 - Programování a vývoj aplikací
## Lekce 07: Datum, čas, text a funkce

## Obsah

### 0 Přidání souboru do repozitáře
Vytvořte soubor app.php, do obsahu vložte komentář se svým jménem a zahrňte jej do repositáře.

### 1. Aktuální datum
Zadání vypracujte do souboru `date.php`
Zobrazte uživateli:
* Aktuální datum a čas dle české normy. Vzor: 14. 12. 2021 13:02
* Datum a čas dle vzoru: 2021-11-25 14:03:15

### 2. Copyright
V souboru `functions.php` Vytvořte funkci `copyright`, která bude do patičky stránek vracet stylizovaný text vždy s aktuálním rokem `Copyright © 2010 - 2021 Author Name. All Rights Reserved`

### 3. Lokalizované datum
V souboru `functions.php` Deklarujte funkci `dateLocalized`, která bude obsahovat vstupní parametry: kód jazyka a aktuální datum ve formátu název dne, den měsíc. Příklad atributu `Tuesday, 14 December`.
Funkce bude vracet lokalizovaný výstup tedy: _Úterý, 14 Prosince_.

### 4. Email
V souboru `functions.php` deklarujte funkci `splitEmail`. Jako vstupní atribut bude emailová adresa uživatele. Výstupem bude pole s klíči `user` a `domain` tzn. úkolem funkce bude rozdělit vstup uživatele na uživatelské jméno (tj. hodnota před zavináčem) a doménu.


### 5. Faktoriál
V souboru `factorial.php`
Deklarujte funkci pro výpočet faktoriálu rekurzivním způsobem. 
Zobrazte uživateli výsledky funkce faktoriálů 1-20.

### 6. App
V rámci aplikačního souboru `app.php` zobrazte uživateli dle vypracovaných úkolů _lokalizované aktuální datum_, _uživatelské jméno_, _doménu_ a _copyright_. Každý výsledek bude na samostatném řádku.