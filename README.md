# Známkovaná samostatná práce z předmětu PVA pro I3

Úkolem je vytvořit šablony pro hypotetický server s vtipy.

* Naklonujte si tento repozitář.
* Vytvořte v tomto repozitáři v adresáři `templates/` šablony `text-joke.html.twig` a `image-joke.html.twig`.
* Šablona `text-joke.html.twig` reprezentuje vtip v textové podobě, šablona `image-joke.html.twig` reprezentuje obrázkový vtip.
* Rozdíly mezi oběma šablonami jsou minimální. Hlavním rozdílem je, že obrázkový vtip obsahuje obrázek, zatímco textový vtip obsahuje text.
* Šablony by měly splňovat tyto náležitosti:
  - Šablony jsou provedené ve velmi podobném designu. **Používá se dědičnost šablon.** Společný předek obsahuje stejné designové části.
  - Všechny údaje, které jsou nyní k dispozici v testovacích datech, šablona v nějaké formě zobrazuje. Fungují prokliky mezi jednotlivými vtipy pomocí odkazů "předchozí vtip" a "další vtip".
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
