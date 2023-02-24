
<img src="/public/horoscopes.png" alt="horoscopes" style="width:200px;"/>

## Horoscopes | CSV import

A demo project with Laravel 8 and Laravel Excel package, to import CSV file. 
You can import horoscopes data through a csv file (format: number | horoscope | date_of_birth | sign). You can enter the date of birth and  get the list of all the daily horoscopes of the corresponding zodiac sign, paginated and sorted by date (from the most recent to the oldest).

![alt-gif](/public/horoscopes.gif)

### How to use

Clone this project.

```ps
git clone https://github.com/andreaadinolfi/horoscopes.git
```

Navigate to the project folder.

```ps
cd horoscopes
```

Run the sh build script OR follow the next steps manually.
 ```ps
sh ./build.sh
```

---
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

Run docker containers

```ps
docker-compose up -d
```


optimize and clear cache

```ps
 php artisan config:cache   
```

```ps
 php artisan optimize:clear
```

Run migrations and seeders

```ps
./vendor/bin/sail artisan migrate:fresh --seed
```
---
