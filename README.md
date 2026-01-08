# Customer Service Order Service (Docker)

Dokumentasi singkat untuk menjalankan service ini menggunakan Docker.

## Prasyarat

- Docker Desktop (Windows/macOS) atau Docker Engine (Linux)
- Docker Compose (umumnya sudah termasuk di Docker Desktop)

## Struktur penting

- `Dockerfile` menggunakan `php:8.1-apache` dan mengatur `DocumentRoot` ke folder `public/`
- `docker-compose.yml` melakukan build image dari source dan expose port `8050` (host) ke `80` (container)

## Menjalankan dengan Docker Compose

1) Pastikan direktori saat ini berada di root project

2) Build & start container

```bash
# Compose v2 (disarankan)
docker compose up -d --build

# atau Compose v1
docker-compose up -d --build
```

3) Verifikasi container berjalan

```bash
docker ps
```

4) Akses service

- http://192.168.0.154:8050

## Stop / Restart

```bash
docker compose down

# restart
docker compose up -d
```
