Isolasi Layanan Menggunakan Docker

Dockerfile

Docker digunakan untuk mengisolasi microservice agar berjalan independen dari sistem host. Dockerfile digunakan untuk membangun image aplikasi.

Contoh Dockerfile:

FROM php:8.1-apache

RUN apt-get update && apt-get install -y \
    libicu-dev \
    zip \
    unzip \
    && docker-php-ext-install intl pdo pdo_mysql

WORKDIR /var/www/html

COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html/writable

EXPOSE 80




Docker Compose
Docker Compose digunakan untuk menjalankan container dengan port mapping agar dapat diakses publik.

Contoh docker-compose.yml:

version: '3.8'

services:
  customer_service:
    image: customer_service
    container_name: customer_service
    ports:
      - "8050:80"
    restart: always



Build Docker Image
Masuk ke direktori project di STB: cd customerservice
Build image Docker: docker build -t customer_service .


Menjalankan Container
Jalankan container menggunakan Docker Compose: docker-compose up -d


Verifikasi Deployment
Cek container yang sedang berjalan: docker ps
Output: customer_service   0.0.0.0:8050->80/tcp



Akses Layanan Secara Publik
Microservice dapat diakses melalui browser atau tool API client menggunakan alamat: http://192.168.0.154:8050
