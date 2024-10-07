## About Notes Api

It is a small api for view deleting and posting notes which as it ui at [notes app](https://github.com/edcheyjr/notes-app.git)

## How to use it

-   Ensure you have install composer **[composer download](https://getcomposer.org/download/)** Then write _composer install_ on your terminal after navigating to the directory with the pulled repository
-   clone and run git **pull** for any cahnges
-   Pull the repo from github **[notes-api](https://github.com/edcheyjr/notes-api.git)**
-   Copy the contents in `env.example` to env
-   The `.env` looks something like this
-   Make sure set your `FRONTEND_URL` key to exact Url of the frontend application e.g "http://localhost:5173/"

    ```
        APP_NAME=Laravel
        APP_ENV=local
        APP_KEY=
        APP_DEBUG=true
        APP_URL=http://localhost
        FRONTEND_URL=http://localhost:5173

        LOG_CHANNEL=stack
        LOG_DEPRECATIONS_CHANNEL=null
        LOG_LEVEL=debug

        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=laravel
        DB_USERNAME=root
        DB_PASSWORD=

        BROADCAST_DRIVER=log
        CACHE_DRIVER=file
        FILESYSTEM_DISK=local
        QUEUE_CONNECTION=sync
        SESSION_DRIVER=file
        SESSION_LIFETIME=120

        MEMCACHED_HOST=127.0.0.1

        REDIS_HOST=127.0.0.1
        REDIS_PASSWORD=null
        REDIS_PORT=6379

        MAIL_MAILER=smtp
        MAIL_HOST=mailpit
        MAIL_PORT=1025
        MAIL_USERNAME=null
        MAIL_PASSWORD=null
        MAIL_ENCRYPTION=null
        MAIL_FROM_ADDRESS="hello@example.com"
        MAIL_FROM_NAME="${APP_NAME}"

        AWS_ACCESS_KEY_ID=
        AWS_SECRET_ACCESS_KEY=
        AWS_DEFAULT_REGION=us-east-1
        AWS_BUCKET=
        AWS_USE_PATH_STYLE_ENDPOINT=false

        PUSHER_APP_ID=
        PUSHER_APP_KEY=
        PUSHER_APP_SECRET=
        PUSHER_HOST=
        PUSHER_PORT=443
        PUSHER_SCHEME=https
        PUSHER_APP_CLUSTER=mt1

        VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
        VITE_PUSHER_HOST="${PUSHER_HOST}"
        VITE_PUSHER_PORT="${PUSHER_PORT}"
        VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
        VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"


    ```

-   Generate your **APP_KEY** by typing this on your terminal `php artisan key:generate`

-   Once that is done run migrations and start the applicaion
    You can run `php artisan migrate:fresh` if you don't want the application seeded with values or `php artisan migrate:fresh --seed --seeder=NoteSeeder ` to seed with values

```
    php artisan migrate:fresh --seed --seeder=NoteSeeder
    php artisan serve

```

## End Points

there are three endpoint one for storing new notes another for deleting and another for viewing them

-   `/api/notes::GET`
-   `/api/notes::POST`
-   `/api/notes/{id}::DELETE`
