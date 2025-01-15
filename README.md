# Samostatná práce - Symfony controllery

Vytvořte symfony controller a šablonu, která bude zobrazovat tabulku, jejíž data dodá služba `App\TableGenerator\TableGenerator`.

Služba `TableGenerator` má jednu metodu

```
public function getTableData(string $tableIdentifier): ?array
```

kde `$tableIdentifier` je identifikátor tabulky, která se má zobrazit a návratová hodnota je asocitivní pole obsahující všechny údaje
k tabulce (deskriptor tabulky). V případě, že tabulka daného identifikátoru neexistuje, metoda vrací `null`.

Deskriptor tabulky jakožto asociativní pole obsahuje tyto klíče:
  - `caption` (string) - nadpis tabulky
  - `header` (pole stringů) - nadpisy všech sloupců v pořadí, v jakém mají být zobrazeny (měly by být v `<th>` elementech)
  - `data` (pole polí stringů) - vlastní data tabulky - jedná se o pole jednotlivých řádků, přičemž každý řádek je pole správně seřazených buněk
    (pořadí buněk přesně odpovídá pořadí, v jakém jsou sloupce uvedeny v klíči `header`)

Vytvořte symfony controller, který:
  - vezme identifikátor tabulky předaný jako parametr (lze použít buď get parametr stylem `$request->query->get('id')` nebo jako route parametr)
    a zobrazí tabulku ukrytou pod daným identifikátorem jako html stránku.
  - stránka musí být ošetřena proti tomu, aby správně vyhodnotila, že tabulka daného identifikátoru neexistuje. V takovém případě by html stránka
    měla obsahovat jednoduchou chybovou hlášku informující uživatele, že stránka neexistuje.
  - Všechna data tabulky musejí být zobrazena na html stránce:
    - `caption` ideálně jako `h1` element
    - `header` jako řádek tabulky s `th` elementy
    - `data` jako vícero řádků s `td` elementy
  - stránka by měla zároveň obsahovat aspoň jednoduchý css styl (grafický design css stylu nebude hodnocen, ale mělo by být patrné, že styl se používá
    a styl by měl být proveden technicky správně).
  - pokud identifikátor tabulky není předán, stránka by měla jako default využít identifikátor `default`.

Až práci dokončíte, příkazem `bin/pack` celý balíček zabalte a výsledek pošlete do aplikace teams.

Celá symfony aplikace stojí na prostředí [spsostrov-php-runtime](https://github.com/marek-sterzik/spsostrov-php-runtime). Je povoleno z tohoto repozitáře
kopírovat různé části. Jiné části kódu se kopírovat nesmí.
