# Známkovaná samostatná práce z předmětu PVA pro I4

Úkolem je vytvořit šablony pro detaily osob (fyzických a právnických) v rámci administračního rozhraní hypotetického eshopu.

* Naklonujte si tento repozitář.
* Vytvořte v tomto repozitáři v adresáři `templates/` šablony `person.html.twig` a `legal.html.twig`.
* Šablona `person.html.twig` reprezentuje údaje o fyzické osobě, šablona `legal.html.twig` reprezentuje údaje o právnické osobě.
* Rozdíly mezi oběma šablonami jsou minimální, nicméně jsou. Hlavním rozdílem mezi obojím je, že stránka právnické osoby má obsahovat odkaz na kontaktní fyzickou osobu.
* Šablony by měly splňovat tyto náležitosti:
  - Šablony jsou provedené ve velmi podobném designu. **Používá se dědičnost šablon.** Společný předek obsahuje stejné designové části.
  - Všechny údaje, které jsou nyní k dispozici v testovacích datech, šablona v nějaké formě zobrazuje. Šablona právnické osoby umožňuje proklik na příslušnou fyzickou osobu.
  - HTML design je řešen jedním samostatným css souborem umístěným v adresáři public, který je nalinkován do stránky (pomocí `{{ asset(soubor) }}`).
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
