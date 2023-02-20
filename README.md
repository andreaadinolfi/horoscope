## Horoscopes | CSV import

A demo project with Laravel 8 and Laravel Excel package, to import CSV file and choose the DB fields to match the CSV
column.

you can upload to upload a file horoscopes.csv file. The data it contains will be inserted into the relative database
table.

It will be possible to enter your date of birth. Based on this, you will get the list of all the daily horoscopes of the corresponding zodiac sign, paginated and sorted by date (from the most recent to the oldest).

### How to use

Clone this project.

```ps
git clone https://github.com/andreaadinolfi/horoscopes.git
```

Navigate to the project folder.

```ps
cd horoscopes
```

Install required packages.

```ps
composer install
```

create new .env file and edit database credentials there.

```ps
cp .env.example .env
```

Generate new app key.

```ps
php artisan key:generate
```

Run migrations;

```ps
php artisan migrate --seed
```


---