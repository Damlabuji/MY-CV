<?php
// Tema varsayılan olarak açık renk
$current_theme = "light";

// Cookie kontrolüyle tema tercihini al
if (isset($_COOKIE['theme'])) {
    if ($_COOKIE['theme'] === "dark") {
        $current_theme = "dark";
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yiğit Başoğlu | Özgeçmiş</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- FontAwesome CDN -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="<?php echo $current_theme; ?>-theme">
    <div class="container">
        <!-- Tema değiştirme butonu -->
        <form action="theme.php" method="post" style="text-align: right;">
            <button type="submit" name="toggle_theme">🌙 Tema Değiştir</button>
        </form>

        <div class="card">
            <div class="left">
                <img src="a.png" alt="Profil Fotoğrafı" class="profile-pic">
                <h1>Yiğit Başoğlu</h1>
                <p><i class="fas fa-map-marker-alt"></i> Karabük, 78200</p>
                <p><i class="fas fa-phone-alt"></i> +90 553 045 78 00</p>
                <p><i class="fas fa-envelope"></i> <a href="mailto:7878yigit7878@gmail.com">E-posta Gönder</a></p>
                <p><i class="fab fa-github"></i> <a href="https://github.com/Damlabuji" target="_blank">GitHub Profilim</a></p>
            </div>

            <div class="right">
                <section>
                    <h2>Eğitim</h2>
                    <p><strong>Karabük Üniversitesi</strong> – Bilgisayar Mühendisliği (%30 İngilizce), 2. Sınıf<br>Ortalama: 3.17 / 4.00</p>
                </section>

                <section>
                    <h2>İlgi Alanlarım</h2>
                    <ul>
                        <li>Veri mühendisliği ve analizi</li>
                        <li>Algoritma geliştirme</li>
                    </ul>
                </section>

                <section>
                    <h2>Sertifikalarım</h2>
                    <ul>
                        <li>Python – 100 Günlük Yazılım Kampı (Udemy)</li>
                        <li>Java ile Nesne Tabanlı Programlama (Udemy)</li>
                    </ul>
                </section>

                <section>
                    <h2>Teknik Yetenekler</h2>
                    <p><strong>Diller:</strong> Python, C, Java, PHP, HTML, CSS</p>
                    <p><strong>Alanlar:</strong> Web Tasarımı, Veri Mühendisliği</p>
                    <p><strong>Yabancı Dil:</strong> İngilizce (İleri Düzey)</p>
                </section>

                <section>
                    <h2>Kişisel Beceriler</h2>
                    <ul>
                        <li>Takım çalışmasına yatkınlık</li>
                        <li>Analitik düşünme</li>
                        <li>Yeni teknolojilere hızlı uyum sağlama</li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</body>
</html>
