- lflb data has been cleaned as much as possible
    - keys rekeyed, old keys retained JIC
    - table names, field types/lengths/default values all set (??? will need to check this ???)
    - foreign keys rebuilt to reflect above changes
    - ready for testing against signage app
- app itself:
    - tailwind installed
    - vite configured
    - tailwind/typography plugin installed
    - laravel/jetstream (livewire) installed
    - jetstream components published (https://jetstream.laravel.com/2.x/installation.html)
- development stuff:
    - migration generator installed
    - model generator installed
- dev notes:
    - the collections table name/model/class is confusing with the laravel nomenclature, should change this to "Category/SubCategory"
- prod notes:
    - uninstall that generator shit in production

- signage app notes:
    - model names/references at top of files (Model files, View Files, etc.) have now changed in crud-test and will need to be changed in signage app to reflect these changes
    - this has been done and is working (for now)