# Docker Setup Guide

## Prerequisites
- Docker Desktop installed
- Docker Compose installed

## Setup Instructions

### 1. Build and Start Containers
```bash
docker-compose up -d --build
```

### 2. Install Dependencies (if needed)
```bash
docker-compose exec app composer install
```

### 3. Generate Application Key
```bash
docker-compose exec app php artisan key:generate
```

### 4. Run Migrations
```bash
docker-compose exec app php artisan migrate
```

### 5. Seed Database
```bash
docker-compose exec app php artisan db:seed
```

### 6. Clear Cache
```bash
docker-compose exec app php artisan optimize:clear
```

## Access Application
- **Application**: http://localhost:8000
- **Database**: localhost:3307 (from host machine)

## Useful Commands

### View Logs
```bash
docker-compose logs -f app
```

### Stop Containers
```bash
docker-compose down
```

### Restart Containers
```bash
docker-compose restart
```

### Access Container Shell
```bash
docker-compose exec app bash
```

### Run Artisan Commands
```bash
docker-compose exec app php artisan [command]
```

## Database Configuration
The `.env` file is configured to use Docker's database service:
- DB_HOST=db (Docker service name)
- DB_PORT=3306 (internal port)
- DB_DATABASE=euro
- DB_USERNAME=root
- DB_PASSWORD=root

## Troubleshooting

### Permission Issues
```bash
docker-compose exec app chown -R www-data:www-data /var/www/storage
docker-compose exec app chmod -R 755 /var/www/storage
```

### Database Connection Issues
Make sure the database container is running:
```bash
docker-compose ps
```

### Clear All and Rebuild
```bash
docker-compose down -v
docker-compose up -d --build
docker-compose exec app php artisan migrate:fresh --seed
```
