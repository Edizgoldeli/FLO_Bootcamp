<p align="center">Canlı: https://ediz.goldeli.com/bloodBank  kullanıcıAdı/Şifre: admin</p>
<p align="center">Video: https://youtu.be/SGbaah-TdmI </p>

<h1>Proje Hakkında:</h1>
<H3> Ziyaretçi:</h3>
<p> * Kan tipi seçip sistemde arama yapabilir</p>
<p> * Gösterilen sonuçlar anonimdir</p>
<p> * Aratılan kan tipinden ne kadar bağışlandığı bilgisi gösterilir</p>
<p> * Aratılan kan tipinden hiç bulunmuyorsa uyarı mesajı gösterilir</p>
<p> * Boş sorgu gönderilirse kullanıcı Kan tipi seçim ekranına geri yollanır</p>
<p> * Menüden Kan tipi sorgu ve Admin hesabına giriş ekranına erişebilir</p>
<br>
<h2 align="center"> Ziyaretçi </h2>
<p align="center">
<img src="https://user-images.githubusercontent.com/38820143/205407676-32916e52-4469-405a-8ab3-5bbe1dd50c2c.png" width="1372" height="500" />
</p>
<br>
<H3> Admin:</h3>
<p> * Giriş yap ekranından girilir</p>
<p> * Şifre/kullanıcı adı yanlış girilmişse giriş yap ekranına geri yollanır ve erişim izni verilmez</p>
<p> * Giriş yapınca kayıtlar ekranına aktarılır</p>
<p> * Kayıtlar ekranında tüm kullanıcıları birlikte, kan tiplerine , sıra numaralarına veya telefon numaralarına göre listelenebilir</p>
<p> * Ekranda listelenen sonuçların toplam kan miktarı belirtilir</p>
<p> * Aratılan kayıtlar bulunmuyorsa uyarı mesajı gösterilir</p>
<p> * Aratılan sonuçlar indirilmek istenirse CSV indir butonu ile ekranda bulunan sonuçlar indirilebilir</p>
<p> * Menüden ziyaretçi kayıt sorgu, donör ekleme, admin kayıt sorgu ve çıkış yapma sayfalarına erişebilir</p>
<br>
<h2 align="center"> Admin </h2>
<p align="center">
<img src="https://user-images.githubusercontent.com/38820143/205407691-b6b5c0e9-4bdc-4c6a-96af-142b29c81e89.png" width="1372" height="360" />
</p>
<br>
<H3> SQL:</h3>
<H4>  Donor</H4>
<p> * ID <b>(primary)</b></p>
<p> * name</p>
<p> * surname</p>
<p> * birthDate</p>
<p> * gender</p>
<p> * email <b>(unique)</b></p>
<p> * password</p>
<p> * phone <b>(unique)</b></p>
<p> * bType</p>
<p> * given</p>
<p> * taken</p>
<p> * registerDate</p>
-------------------------------------------------- 
<H4> Admin </H4>
<p> * ID <b>(primary)</b></p>
<p> * username <b>(unique)</b></p>
<p> * password</p>
--------------------------------------------------
<p> * Donörlerin hangi tarihte kayıt olduğu bilgisi tutulur</p>
<p> * oluşturulan şifreler hash fonksiyonu ile korunur</p>

<h2 align="center"> SQL </h2>
<p align="center">
<img src="https://user-images.githubusercontent.com/38820143/205410357-98c2b38c-51ea-4513-a51e-69104658ab3b.png" width="400" height="400" />
</p>
<br>
<H3>Tasarım: </H3>
<p> * Tasarım kısmında çizim için Figma kullanıldı</p>
<p> * Mobil ve Masaüstü cihazlar için responsive kodlandı </p>
<p> * Kan bankası olduğu için kırmızı tonları tercih edildi</p>
<p> * Ekran boyutu değişimlerinde daha yumuşak bir geçiş için css'in transition özelliği kullanıldı </p>
<p> * Meta tagleri ile destekleyen tarayıcılarda tema rengi ayarlanıp sayfa bütünlüğü arttırıldı </p>

<h2 align="center"> Tasarım </h2>
<p align="center">
<img width="705" alt="Ekran Resmi 2022-12-03 ÖÖ 10 22 51" src="https://user-images.githubusercontent.com/38820143/205429908-98a48f5e-05b1-47d4-bcc3-d463615bed50.png">
</p>

