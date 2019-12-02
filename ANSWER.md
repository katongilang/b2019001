# DONE : 
- Ambil Input dari user per line
- Validasi domain (struktur,extension, ketersediaan)
- Penentuan harga domain .com, .org , dll
- Sorting

# TESTCASE :
info : 
- Untuk melanjutkan ke proses INVOICE harus Type "ok"
- Karena tidak menggunakan PHPUNIT untuk TDD, jadi test nya manual :

TestCase : TC01 Validasi
| INPUT | OUTPUT | KETERANGAN |
| --- | --- | --- |
| `(null)` | "[TIDAK VALID] Silahkan Isi! Tidak boleh kosong" | Tanpa Input |
| `ka` | "[TIDAK VALID] Karakter tidak cukup!" | < 3 character |
| `katongilangbagas.com` | "[TIDAK VALID] Anda mengetik terlalu banyak!" | > 15 character |
| `katongilang` | "[TIDAK VALID] Domain harus memiliki ekstensi!"		|	Tanpa extension tld |
| `katon gilang.net` | "[TIDAK VALID] Domain hanya boleh mengandung karakter alphanumerik, dot, dan dash!" |		Salah format domain |
| `katongilang.xxx` | "[TIDAK VALID] Bukan extension domain yang benar!" | tld tidak sesuai |
| `[namadomain].[tld]` | "[TIDAK VALID] Domain telah terdaftar" | domain random utk avaliablity |


Test Case : TC02 Pricing
Pre-conditions : Proses setelah input domain
| INPUT | OUTPUT | KETERANGAN |
| --- | --- | --- |
| `[namadomain].[tld]` | Muncul Invoice list harga | syarat: harus [VALID] |



# 1. Short Quiz
- What is the different between session and cookie?
```
1. Session = session biasanya saya gunakan untuk login, session akan disimpan di sisi server, session akan hilang
jika terjadi proses unset ataupun destroy (ketika logout dari aplikasi). Session bisa menyimpan banyak variable
seperti username, id, name, dll. Session cenderung lebih aman.
2. Cookie = lain dengan session, sepemahaman saya cookie lebih berpatokan dengan waktu expirednya dan biasanya
disimpan bukan di server tetapi di browser client.
```

- What is the different between cURL in PHP and curl in command line?
```
-cUrl di command line dijalankan di cmd, sedangkan curl di php dijalankan menggunakan script .php dan syntax
yang berbeda dengan curl di CLI.
-Setahu saya cUrl di CLI biasanya digunakan untuk testing sebuah url web
-cUrl di php lebih kompleks dibanding curl di CLI, karena hasil hit cUrl harus diproses untuk ditampilkan pada
sebuah halaman web
-Selain itu cUrl di php bisa juga digunakan untuk Grabbing sebuah web (mengambil isi text dari web lain dan
ditampilkan di web sendiri). Pengalaman saya pernah cUrl untuk get API instagram dan API Youtube, Grabbing with
cUrl KURS klikbca.com
```

- Why we don't use YAML as HTTP response?
```
-Saya kurang paham juga, tapi setelah saya browsing mungkin YAML itu seperti format data kembalian ketika
melakukakan request (selain format JSON dan XML).
-Kurang umum digunakan 
-Sulit untuk pengembangan selanjutnya karena sedikit sekali referensi mengenai YAML
-Terjadi masalah jika data mengandung whitespace
-PHP memiliki fungsi bawaan untuk mendekode JSON, namun tidak dengan YAML. 
sumber ref : https://stackoverflow.com/questions/3951047/xml-vs-yaml-vs-json
```

# 2. Tell us
Have you ever implemented something new in your project? It is either new to you or your company or even this world. Tell us that implementation story, from a bit of background, process, and that new things along with its impact. Please tell us as if we're an IT executive, know some IT but not that specific.
```
Something new in my project :
-Judul project : Implementasi Wireless Sensor Network untuk Budidaya Jamur Tiram Otomatis.

-Latar belakang : Saya harus membuat Membuat perangkat IoT dan web yang dapat menerima inputan suhu dan kelembaban
dari Microkontroller NodeMCU esp8266 namun tidak menggunakan REST API melainkan menggunakan Mosquito server,
kemudian dari web mengirim perintah menuju microkontroller.

-Proses : Banyak hambatan dan banyak faktor yang perlu diperhatikan, karena pada projek ini berkaitan dengan
pertanian, elektro, networking, IoT dan Web. Ketika terjadi hambatan yang saya lakukan pertama kali adalah mencari 
awal masalahnya, kemudian mencari jawaban via internet stackoverflow,forum,dll dan jika masih belum terpecahkan
saya harus menanyakan langsung ke pakarnya.

-Implementasi : Sesuatu yang barunya adalah Arduino membuat saya belajar bahasa baru yang basicnya mirip C/C++
,biasanya saya membuat Web sederhana dengan fungsi CRUD, namun pada projek ini saya mengharuskan menerima dan,
menampilkan data dari Microcontroller dan mengirim perintah menuju Microcontroller yang mana itu adalah sesuatu
yang baru.
```