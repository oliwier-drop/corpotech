# Corpotech

<img src="https://corpotech.com.pl/assets/images/logo/logo.png">

Strona firmowa i panel administracyjny Corpotech oparty o Laravel 12 oraz Filament 3.

## Stack

- PHP 8.2+
- Laravel 12
- Filament 3.3
- Tailwind CSS 4 + Vite
- MySQL/MariaDB (lub SQLite w środowisku deweloperskim)

## Uruchomienie lokalnie

1. Zainstaluj zaleznosci backendu:

```bash
composer install
```

2. Skopiuj plik konfiguracyjny i wygeneruj klucz:

```bash
cp .env.example .env
php artisan key:generate
```

3. Ustaw dane bazy w `.env`, a nastepnie wykonaj migracje:

```bash
php artisan migrate
```

4. Zainstaluj zaleznosci frontendu:

```bash
npm install
```

5. Uruchom projekt:

```bash
composer run dev
```

Alternatywnie frontend i backend mozna uruchomic osobno:

```bash
php artisan serve
npm run dev
```

## Upload plikow (istotne)

Panel admina (Filament) zapisuje grafiki postow na dysk `public`.
W tym projekcie dysk `public` jest skonfigurowany na katalog:

- `public/storage`

To oznacza, ze nowe obrazy po dodaniu w panelu trafiaja bezposrednio do `public/storage/posts`.
Nie jest wymagany symlink `public/storage -> storage/app/public`.

Po zmianach konfiguracji wykonaj:

```bash
php artisan config:clear
```

## Przydatne komendy

```bash
php artisan test
php artisan optimize:clear
npm run build
```

## Routing (glowne podstrony)

W projekcie sa m.in. trasy:

- `/`
- `/o-nas`
- `/kontakt`
- `/realizacje`
- `/uslugi`
- `/polityka-prywatnosci`
- `/regulamin`

## Uwagi wdrozeniowe

- Ustaw poprawny `APP_URL` w `.env`.
- Ustaw klucze Turnstile:
  - `TURNSTILE_SITE_KEY`
  - `TURNSTILE_SECRET_KEY`
- Upewnij sie, ze serwer WWW ma prawa zapisu do `public/storage`.
