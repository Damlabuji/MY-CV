<?php
$theme = "light";
if (isset($_COOKIE['theme'])) {
  $theme = $_COOKIE['theme'] === "dark" ? "dark" : "light";
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Yiğit Başoğlu | CV</title>
  <link rel="stylesheet" href="style.css" />
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="<?php echo $theme; ?>-theme">
  <div class="container">
    <form action="theme.php" method="post" style="float: right;">
      <button type="submit" name="toggle_theme">🌗 Tema Değiştir</button>
    </form>
    <div class="card">
      <div class="left">
        <img src="a.png" alt="Yiğit Başoğlu" class="profile-pic"/>
        <h1>Yiğit Başoğlu</h1>
        <p><i class="fas fa-map-marker-alt"></i> Karabük 78200</p>
        <p><i class="fas fa-phone-alt"></i> +90 553 045 78 00</p>
        <p><i class="fas fa-envelope"></i> <a href="mailto:7878yigit7878@gmail.com">7878yigit7878@gmail.com</a></p>
        <p><i class="fab fa-github"></i> <a href="https://github.com/Damlabuji" target="_blank">Damlabuji</a></p>
      </div>
      <div class="right">
        <section>
          <h2>Eğitim</h2>
          <p><strong>Karabük Üniversitesi</strong> – Bilgisayar Mühendisliği (%30 İngilizce, 2. Sınıf)<br/>GPA: 3.17 / 4.00</p>
        </section>

        <section>
          <h2>İlgi Alanları</h2>
          <ul>
            <li>Veri Mühendisliği ve Veri Analitiği</li>
            <li>Programlama ve Algoritma Geliştirme</li>
          </ul>
        </section>

        <section>
          <h2>Sertifikalar</h2>
          <ul>
            <li>Python - 100 Günlük Yazılım Kampı (Udemy)</li>
            <li>Java ile Nesne Merkezli ve Fonksiyonel Programlama (Udemy)</li>
          </ul>
        </section>

        <section>
          <h2>Teknik Beceriler</h2>
          <p><strong>Diller:</strong> Python, C, Java, PHP, HTML, CSS</p>
          <p><strong>Alanlar:</strong> Web Tasarımı, Veri Mühendisliği</p>
          <p><strong>Yabancı Dil:</strong> İngilizce (İleri)</p>
        </section>

        <section>
          <h2>Kişisel Yetkinlikler</h2>
          <ul>
            <li>Takım çalışmasına yatkınlık</li>
            <li>Analitik düşünme</li>
            <li>Hızlı öğrenme</li>
          </ul>
        </section>
      </div>
    </div>
  </div>
</body>
</html>
