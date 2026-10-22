# 🌐 Web Teknolojileri - Kişisel & Şehir Rehberi Web Sitesi

Bu proje; HTML5, CSS3, JavaScript, Bootstrap ve PHP kullanılarak geliştirilmiş, duyarlı (responsive) tasarıma ve istemci/sunucu taraflı form doğrulamalarına sahip bir web sitesidir.

Sakarya Üniversitesi Bilgisayar Mühendisliği Bölümü **Web Teknolojileri** dersi (2022-2023) kapsamında geliştirilmiştir.

---

## 📸 Ekran Görüntüleri

<!-- Proje ekran görüntüleri eklendiğinde burada görüntülenecektir -->
<p align="center">
  <img src="screenshots/sehrim.png" alt="Şehrim Sayfası & Slider" width="750" onerror="this.style.display='none'" />
</p>
<p align="center">
  <img src="screenshots/iletisim.png" alt="İletişim & Doğrulama Formu" width="750" onerror="this.style.display='none'" />
</p>

---

## ✨ Proje Modülleri ve Özellikleri

- **🏠 Hakkımda & İlgi Alanlarım:** Kişisel tanıtım, hobiler ve sosyal medya bağlantıları.
- **📄 Özgeçmiş (CV):** Eğitim geçmişi, teknik yetenekler ve sertifikaların listelendiği responsive kart tasarımı.
- **🌆 Şehrim (Şehir Rehberi):**
  - Tarihi ve turistik mekanları tanıtan en az 4 resimli dinamik slider (atlıkarınca) yapısı.
  - İlgili mekanlara ve detaylı bilgilere yönlendiren interaktif bağlantılar.
- **🏛️ Mirasımız:** Kültürel ve tarihi mirasa ait eserlerin detaylı incelemesi.
- **📬 İletişim Formu (JavaScript Doğrulaması):**
  - İsim, e-posta, konu ve mesaj alanları.
  - İstemci tarafında (`iletisim.js`) çalışan regex ve boşluk kontrolleri ile form validasyonu.
  - Hatalı veya eksik girişlerde kullanıcıyı uyaran dinamik bildirimler.
- **🔐 Giriş / Login (PHP Kimlik Doğrulama):**
  - Kullanıcı e-posta ve şifre kontrolü (`login.php`).
  - Doğru girişte karşılama mesajı, hatalı girişte 2 saniye sonra otomatik yönlendirme.

---

## 🛠️ Kullanılan Teknolojiler

| Alan | Teknoloji | Açıklama |
|---|---|---|
| **İşaretleme & Yapı** | HTML5 | Semantik web elementleri |
| **Biçimlendirme** | CSS3 & Bootstrap | Responsive (mobil uyumlu) ızgara (grid) sistemi ve özel stiller |
| **İstemci Betikleri** | JavaScript (ES6) | DOM manipülasyonu ve form girdi doğrulamaları |
| **Sunucu Tarafı** | PHP | Form verisi işleme ve oturum kontrolü |

---

## 🚀 Projeyi Çalıştırma

Projeyi bilgisayarınızda iki farklı şekilde görüntüleyebilirsiniz:

### 1. Yöntem: Doğrudan Tarayıcıda Açma (Statik Sayfalar)
`hakkimda.html` veya `sehrim.html` dosyasına çift tıklayarak doğrudan Chrome, Edge veya Firefox üzerinde görüntüleyebilirsiniz.

### 2. Yöntem: PHP Sunucusu ile Çalıştırma (Login ve Form Akışları İçin)
PHP kurulu bir terminalde proje ana dizinindeyken:
```bash
php -S localhost:8000
```
Tarayıcınızdan `http://localhost:8000/hakkimda.html` adresine giderek PHP form akışlarını da tam işlevsel olarak deneyimleyebilirsiniz.

---

## 👩‍💻 Geliştirici

- **Merve Gezginci** - [GitHub Profili](https://github.com/mervegezginci)
