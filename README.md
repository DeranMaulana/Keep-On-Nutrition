# Keep On Nutrition

Keep On Nutrition adalah aplikasi web yang dirancang untuk membantu pengguna memantau asupan nutrisi mereka. Aplikasi ini memungkinkan pengguna untuk mencari informasi tentang makanan, menghitung kandungan kalori, dan melacak kemajuan mereka dalam mencapai tujuan kesehatan. Aplikasi ini mengintegrasikan beberapa API untuk memperoleh data makanan dan informasi gizi secara real-time.

---

## Fitur Utama

- **Pencarian Makanan dan Kandungan Gizi**  
  Pengguna dapat mencari berbagai jenis makanan dan mendapatkan informasi terkait kandungan kalori, protein, lemak, dan karbohidrat.

- **Pelacakan Asupan Gizi**  
  Pengguna dapat mencatat makanan yang mereka konsumsi dan memantau asupan gizi mereka sepanjang hari.

- **Pencapaian Tujuan Kesehatan**  
  Tentukan tujuan kesehatan, seperti pengurangan berat badan atau peningkatan massa otot, dan lacak kemajuan Anda.

- **Rekomendasi Makanan Sehat**  
  Berdasarkan data asupan gizi, aplikasi dapat memberikan rekomendasi makanan yang sesuai dengan tujuan kesehatan pengguna.

---

## Teknologi dan Tools

Aplikasi ini menggunakan berbagai teknologi web untuk membangun frontend dan backend yang fungsional, responsif, dan mudah digunakan.

### 1. **Frontend (Client-side)**

- **HTML5 & CSS3**  
  Digunakan untuk struktur halaman dan styling aplikasi. HTML5 digunakan untuk memastikan kompatibilitas di berbagai platform dan perangkat, sementara CSS3 digunakan untuk desain responsif dan estetika tampilan.

- **Bootstrap**  
  Framework CSS untuk membuat aplikasi responsif. Bootstrap digunakan untuk komponen antarmuka yang siap pakai seperti tombol, kolom, dan grid layout yang memastikan aplikasi berfungsi dengan baik di berbagai perangkat (desktop, tablet, mobile).


### 2. **Backend (Server-side)**

- **Node.js**  
  Backend aplikasi ini menggunakan **Node.js**, platform JavaScript yang berbasis pada mesin **V8** untuk menjalankan JavaScript di sisi server. Node.js memungkinkan pengelolaan permintaan API secara efisien dan skalabel.

- **Express.js**  
  **Express.js** adalah framework web minimalis yang digunakan untuk menangani routing dan mengelola endpoint API di sisi server. Express memudahkan pembuatan RESTful API dan mengelola permintaan HTTP.


### 3. **API yang Digunakan**

Aplikasi ini mengintegrasikan beberapa API eksternal untuk memberikan informasi gizi yang akurat dan terbaru:

- **Edamam API**  
  API utama yang digunakan untuk mendapatkan informasi gizi makanan seperti kalori, protein, karbohidrat, lemak, dan mikronutrien lainnya. Aplikasi ini mengirimkan permintaan API ke Edamam untuk mencari informasi berdasarkan nama makanan atau ID produk.

  **Dokumentasi Edamam API**: [Edamam API Documentation](https://developer.edamam.com/)

- **Spoonacular API**  
  API untuk mendapatkan resep makanan sehat beserta informasi nutrisi lengkap. Spoonacular juga memberikan informasi tentang bahan makanan yang dapat digunakan untuk membuat resep sehat.

  **Dokumentasi Spoonacular API**: [Spoonacular API Documentation](https://spoonacular.com/food-api)

---

## Penggunaan API

Aplikasi ini mengandalkan API eksternal untuk mengambil data gizi dan resep makanan. Berikut adalah cara aplikasi menggunakan API untuk mendapatkan data:

### 1. **Edamam API**
- Pengguna dapat mencari makanan, dan aplikasi mengirimkan permintaan API ke Edamam untuk mendapatkan informasi tentang kandungan kalori, lemak, protein, karbohidrat, dan mikronutrien lainnya.
- API ini menyediakan data yang sangat lengkap untuk lebih dari 1 juta makanan dan resep.

**Dokumentasi Edamam API**: [Edamam API Documentation](https://developer.edamam.com/)

### 2. **Spoonacular API**
- Aplikasi mengirimkan permintaan ke **Spoonacular** untuk mendapatkan resep makanan sehat berdasarkan bahan-bahan yang dimiliki pengguna.
- API ini juga menyediakan informasi tentang kandungan gizi setiap resep yang ditemukan.

**Dokumentasi Spoonacular API**: [Spoonacular API Documentation](https://spoonacular.com/food-api)

---
