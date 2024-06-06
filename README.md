
## API - K42 assessment

- API je napsané ve frameworku Laravel a ve formátu JSON vrací buď všechny záznamy z DB, nebo jenom jeden - pokud v URL specifikujeme ID characteru.

- V adresáři [/app/Models](app/Models) jsou modely, odpovídající tabulkám z použité DB. Tyto modely byly automaticky vygenerovány frameworkem.

- Controller [/app/Http/Controllers/RestController.php](app/Http/Controllers/RestController.php) zpracovává data z modelů a vrací finální JSON response.

- oba REST endpointy jsou pak zadány tady -> [/routes/web.php](routes/web.php)

- takhle vypadá finální ->  [JSON response](characters.json)
