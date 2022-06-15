
up:
	./vendor/bin/sail up -d
down:
	./vendor/bin/sail down
refresh_db:
	./vendor/bin/sail artisan migrate\:refresh
