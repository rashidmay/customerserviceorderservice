# Customer Service Order Service (Docker)

Dokumentasi singkat untuk menjalankan service ini menggunakan Docker.

## Prasyarat

- Docker Desktop (Windows/macOS) atau Docker Engine (Linux)
- Docker Compose (umumnya sudah termasuk di Docker Desktop)

## Struktur penting

- `Dockerfile` menggunakan `php:8.1-apache` dan mengatur `DocumentRoot` ke folder `public/`
- `docker-compose.yml` melakukan build image dari source dan expose port `8050` (host) ke `80` (container)

## Menjalankan dengan Docker Compose

1) Pastikan kamu berada di root project (folder ini)

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

- Lokal (umum): http://localhost:8050
- Dari device lain di jaringan: `http://<IP-PC-kamu>:8050`

## Stop / Restart

```bash
docker compose down

# restart
docker compose up -d
```
