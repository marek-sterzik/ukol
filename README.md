# Známkovaná samostatná práce z předmětu PVA pro I3

Úkolem je vytvořit šablony pro detaily panovníků a historicky významných osob.

* Naklonujte si tento repozitář.
* Vytvořte v tomto repozitáři v adresáři `templates/` šablony `notable-person.html.twig` a `monarch.html.twig`.
* Šablona `monarch.html.twig` reprezentuje údaje o panovníkovi, šablona `notable-person.html.twig` reprezentuje údaje o jiné historicky významné osobě.
* Rozdíly mezi oběma šablonami jsou minimální, nicméně jsou. Hlavním rozdílem mezi obojím je, že zatímco panovník obsahuje informaci, ve které zemi vládnul,
  historicky významná osoba obsahuje údaje o tom, kvůli čemu je známá.
* Šablony by měly splňovat tyto náležitosti:
  - Šablony jsou provedené ve velmi podobném designu. **Používá se dědičnost šablon.** Společný předek obsahuje stejné designové části.
  - Všechny údaje, které jsou nyní k dispozici v testovacích datech, šablona v nějaké formě zobrazuje. Šablony umožňují překlik na jiné osoby současníků.
  - HTML design je řešen jedním samostatným css souborem umístěným v adresáři public, který je nalinkován do stránky (pomocí `{{ asset(soubor) }}`).
  - Stránka zobrazuje u každé osoby její fotku, jejíž cesta k souboru je obsažena ve vstupních datech šablony.
* Až budete mít šablony vytvořené, odevzdejte je tímto způsobem:
  - Zavolejte příkaz `bin/pack-result`
  - Příkaz se zeptá na vaše jméno, to vyplňte.
  - Příkaz vytvoří archiv `package-<vaše_jméno>.tar.gz` se všemi soubory nutnými k odezvdání.
  - Ten odevzdejte do aplikace Teams.
* Hodnotí se:
  - Funkčnost celého řešení
  - Správné používání systému twig.
  - Správně implementovaná dědičnost šablon.
  - Provedení html a css designu.
  - Oddělenost html a css. (css soubor je samostatně na správném místě)
  - Včasné odevzdání a odevzdání ve správné struktuře.
