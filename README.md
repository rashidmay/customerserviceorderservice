
# Customer Service (CodeIgniter 4)

## Cara Menjalankan

Jalankan development server:

```bash
php spark serve --host 127.0.0.1 --port 8080
```

Buka aplikasi:

- http://127.0.0.1:8080

## Auth API (Token)

Endpoint di bawah `/api/*` membutuhkan token.

Token default: `rashidmay` (bisa diubah lewat `.env` dengan `API_TOKEN`).

Header yang didukung:

- `Authorization: Bearer <token>`
- atau `X-Api-Token: <token>`

### Contoh Request

Tanpa token (harusnya 401):

```bash
curl.exe -i http://127.0.0.1:8080/api/customers
```

Dengan token (harusnya 200):

```bash
curl.exe -i -H "Authorization: Bearer rashidmay" http://127.0.0.1:8080/api/customers
```

Ambil detail customer (contoh id=1):

```bash
curl.exe -i -H "Authorization: Bearer rashidmay" http://127.0.0.1:8080/api/customers/1
```

Catatan Windows PowerShell: perintah `curl` sering merupakan alias `Invoke-WebRequest`, jadi gunakan `curl.exe` seperti contoh di atas.

