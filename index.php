<?php
$current_theme = "light";

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

    
</head>
<body class="<?php echo $current_theme; ?>-theme">
    <div class="container">
       
        <form action="theme.php" method="post" style="text-align: right;">
            <button type="submit" name="toggle_theme">Tema Değiştir</button>
        </form>

        <div class="card">
            <div class="left">
                <img src="a.png" alt="Profil Fotoğrafı" class="profile-pic">
                <h1>Yiğit Başoğlu</h1>
                <p> Karabük, Türkiye</p>
                <p> +90 553 045 78 00</p>
                <p> <a href="mailto:7878yigit7878@gmail.com">7878yigit7878@gmail.com</a></p>
                <p> <a href="https://github.com/Damlabuji" target="_blank">GitHub: Damlabuji</a></p>
            </div>

            <div class="right">
                <section>
                    <h2>Eğitim</h2>
                    <p><strong>Karabük Üniversitesi</strong> – Bilgisayar Mühendisliği (%30 İngilizce)<br>2. Sınıf, Not Ortalaması: 3.17 / 4.00</p>
                </section>

                <section>
                    <h2>İlgi Alanlarım</h2>
                    <ul>
                        <li>Veri Mühendisliği ve Veri analizi</li>
                        <li>Verimli kod yazmak</li>
                        <li>Algoritma geliştirme</li>
                    </ul>
                </section>

                <section>
                    <h2>Sertifikalarım</h2>
                    <ul>
                        <li>Python–100 Günlük Yazılım Kampı (Udemy)</li> <!-- Burda belirtmedim ancak Atıl samancıoğlu'nun kursu-->
                        <li>Java ile Nesne Tabanlı Programlama (Udemy)</li> <!-- Furkan Baysan-->
                    </ul>
                </section>

                <section>
                    <h2>Teknik Yetenekler</h2>
                    <p><strong>Diller:</strong> Python, C, Java, PHP, HTML/CSS</p>
                    <p><strong>Alanlar:</strong> Web geliştirme, veri analizi, temel yazılım mimarisi</p>
                    <p><strong>Yabancı Dil:</strong> İngilizce (İleri düzey)</p>
                </section>

                <section>
                    <h2>Kişisel Beceriler</h2>
                    <ul>
                        <li>Ekip içinde etkin iletişim kurabilme</li>
                        <li>Problem çözme odaklı düşünme</li>
                        <li>Yeni teknolojileri uygulamalı öğrenme isteği</li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</body>
</html>
