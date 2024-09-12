<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Cangkring</title>
    <link rel="stylesheet" href="style_desacangkring2.css">
</head>
<body>
<style> 
{
    background-color:#3B5998;
    color:#fff;
    padding:20px;
}

.book-cover {
    max-width: 100%; /* Memastikan gambar tidak melebihi lebar kontainer */
    height: auto; /* Menjaga rasio aspek gambar */
    max-height: 300px; /* Mengatur tinggi maksimum gambar */
    display: block; /* Menghilangkan spasi bawah gambar */
    margin: 0 auto; /* Memusatkan gambar di dalam kontainer */
}


.footer-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.contact-info {
    text-align: left;
    max-width: 300px;
    font-size: 16px;
    line-height: 1.6;
}

.contact-info p {
    margin: 0 0 10px;
}

.footer-logo {
    width: auto;
    height: 100px;
    object-fit: contain;
}

.footer-note {
    background-color: #2b4a7f;
    padding: 15px;
    color: #fff;
    border-radius: 5px;
    margin-top: 20px;
    text-align: right;
    font-size: 14px;
    box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.2);
}

@media (max-width: 768px) {
    .footer-content {
        flex-direction: column;
        text-align: center;
    }

    .contact-info {
        max-width: 100%;
        margin-bottom: 20px;
    }

    .footer-note {
        text-align: center;
    }
}

.book-container {
    display: flex;
    align-items: center;
    padding: 15px;
    margin: 15px 0;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #f9f9f9;
}

.book-cover {
    width: 120px;
    height: auto;
    border-radius: 5px;
    margin-right: 20px;
}

.book-details {
    flex: 1;
}

.book-title {
    font-size: 20px;
    margin: 0 0 10px;
    color: #333;
}

.author {
    font-size: 16px;
    margin: 0 0 15px;
    color: #777;
}

.read-button {
    padding: 10px 20px;
    font-size: 16px;
    color: white;
    background-color: #007BFF;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.read-button:hover {
    background-color: #0056b3;
}
</style>

    <main>
        <h1 style="text-align: center;">E-PERPUSTAKAAN</h1>
        <details>
        <summary>Buku Fiksi</summary>
        <div class="book-container">
            <img src="assets/img/buku1/5 Dongeng Anak Dunia (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">5 Dongeng Anak Dunia</h1>
                <p class="author">Dedik Dwi Prihatmoko</p>
                <a href="https://drive.google.com/file/d/1yBt9fHBAZW0MKgcA0LH1b6Sb6F-bdd79/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku1/20 Kumpulan Cerita Untuk Anak Hebat (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">20 Kumpulan Cerita Untuk Anak Hebat</h1>
                <p class="author">Endang Fatmawati</p>
                <a href="https://drive.google.com/file/d/1dPw9Qajq3zeffBU2e2TrPFyS3WQFVQTl/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets\img\buku1\Bahagia Kenapa Tidak (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Bahagia Kenapa Tidak</h1>
                <p class="author">Reza A.A Wattimena</p>
                <a href="https://drive.google.com/file/d/1iegqEsrJtbMbFiFtPN1HDNT1Fcrpcuuw/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets\img\buku1\Berani Mimpi Berani Aksi (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Berani Mimpi Berani Aksi </h1>
                <p class="author">Idham Padmaya Mahatma</p>
                <a href="https://drive.google.com/file/d/1OqjRCPYKa6usGTbC-Jfa-xmn1w3VBtTO/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets\img\buku1\Bumi Manusia (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Bumi Manusia</h1>
                <p class="author">Pramoedya Ananta Toer</p>
                <a href="https://drive.google.com/file/d/12YnBK7JO_Zs22B2XpER55hjhGd9goEL9/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku1/Cahaya Cahaya Kecil (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Cahaya Cahaya Kecil</h1>
                <p class="author">Hasta Indriyana</p>
                <a href="https://drive.google.com/file/d/1Lobo3hqawi2aiaqmczNZWEg9wveRWAVO/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku1/Daun Yang Jatuh Tak Penah Membenci Angin (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Daun Yang Jatuh Tak Pernah Membenci Angin</h1>
                <p class="author">Tere Liye</p>
                <a href="https://drive.google.com/file/d/12cGEHpAlRGDdgvBFJl_2vHUnsCtzmCUx/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku1/Edensor (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Edensor</h1>
                <p class="author">Andrea Hirata</p>
                <a href="https://drive.google.com/file/d/13-kx0eJsD0qE8xIHMFLntgJvyH5IIuUs/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku1/Filosofi Teras (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Filosofi Teras</h1>
                <p class="author">Henry Manampiring</p>
                <a href="https://drive.google.com/file/d/13CgAr15BACjA24B5rZbDtqrH1R4_3JuB/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku1/Hafalan Sholat Delisa (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Hafalan Shalat Delisa</h1>
                <p class="author">Tere Liye</p>
                <a href="https://drive.google.com/file/d/1TrGpfFBgqLz7Cl9RhLs6wGi786Z8JxYi/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku1/Hujan (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Hujan</h1>
                <p class="author">Tere Liye</p>
                <a href="https://drive.google.com/file/d/1aKOYo3JsTSTEW8ag1Dc5SZgcN8CcG-7S/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku1/Kisah Dua Putri dan Si Raja Ular (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Kisah Dua Putri dan Si Raja Ular</h1>
                <p class="author">Dwi Pratiwi</p>
                <a href="https://drive.google.com/file/d/1WU2snaSuljmZtQtqRHkhTH988zSUG--b/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku1/Konspirasi Alam Semesta (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Konspirasi Alam Semesta</h1>
                <p class="author">Fiersa Besari</p>
                <a href="https://drive.google.com/file/d/1sSEEtZk2UH2QVssI1zTHeRArLycLrMFz/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku1/Kumpulan Cerita Dongeng Anak 2 (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Kumpulan Cerita Dongeng Anak 2</h1>
                <p class="author">Aprilin Ardiyanti, S.Pd., Ellyonika Puri, S.Pd., Puriyanti Ningsih, S.Pd.</p>
                <a href="https://drive.google.com/file/d/15s-4a5j6XfkjBrhBVwBUSdglx_SpOw78/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku1/Kumpulan Cerita Dongeng Anak 3 (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Kumpulan Cerita Dongeng Anak 3</h1>
                <p class="author">...</p>
                <a href="https://drive.google.com/file/d/1bk_h1WIN8WLZwozn1n4xj4kPVCtOw1_-/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku1/Kumpulan Cerita Dongeng Anak 4 (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Kumpulan Cerita Dongeng Anak 4</h1>
                <p class="author">Titik Julaeka, S.Pd., Nyamirah, S.Pd., Murniyati, S.Pd.</p>
                <a href="https://drive.google.com/file/d/1enTNdil6HxkIbRRFPfA2kVb1RETYPpTC/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku1/Laskar Pelangi (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Laskar Pelangi</h1>
                <p class="author">Andrea Hirata</p>
                <a href="https://drive.google.com/file/d/1yWPnf-xDHtUxPKk4AtC_1Wt_5nss_wfj/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku1/Laut Bercerita (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Laut Bercerita</h1>
                <p class="author">Leila S. Chudori</p>
                <a href="https://drive.google.com/file/d/1BBAm1JIl9_EPEUN9ZViR86XjsOxwrC1Q/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku1/Matahari (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Matahari</h1>
                <p class="author">Tere Liye</p>
                <a href="https://drive.google.com/file/d/1Zebzm1gueABiWQqvz3pYL8Scudnrk-aQ/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku1/Menjadi Guru Sekolah Minggu Yang Efektif (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Menjadi Guru Sekolah Minggu Yang Efektif</h1>
                <p class="author">AYUB YAHYA</p>
                <a href="https://drive.google.com/file/d/12FGP3qKsZJAfMAKlMFhiUHy-8OLgWx_Z/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku1/Negeri 5 Menara (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Negeri 5 Menara</h1>
                <p class="author">Ahmad Fuadi</p>
                <a href="https://drive.google.com/file/d/1PCXh4T0p2QrlXbUXw4zOposnn_Rgoyn4/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku1/Negeri Para Bedebah (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Negeri Para Bedebah</h1>
                <p class="author">Tere Liye</p>
                <a href="https://drive.google.com/file/d/1YHflt9azlkxULF8aJVokvE4e2Zo26Rff/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku1/Pelarian (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Pelarian</h1>
                <p class="author">...</p>
                <a href="https://drive.google.com/file/d/19bxhNY7Pr3hxLfLUWujLu9OLor_dZr09/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku1/Perahu Kertas (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Perahu Kertas</h1>
                <p class="author">Dee / Dewi Lestari</p>
                <a href="https://drive.google.com/file/d/1mOUyznBrbpa2CgOsD0vORHUCTJBLJYn_/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku1/Saatnya Dunia Berubah (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Saatnya Dunia Berubah</h1>
                <p class="author">Dr. Siti Fadilah Supari, PhD</p>
                <a href="https://drive.google.com/file/d/1bdox9Zt_0U0S6QWEsfQiz3HrdODlvISi/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku1/Sang Pemimpi (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Sang Pemimpi</h1>
                <p class="author">Andrea Hirata</p>
                <a href="https://drive.google.com/file/d/1uw78v1KnixcRVME5VZcEm-ALlD9Lc5WG/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku1/Tenggelamnya Kapal Van Der Wijck (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Tenggelamnya Kapal Van Der Wijck</h1>
                <p class="author">Hamka</p>
                <a href="https://drive.google.com/file/d/1wBxiCOoMzN8CzFMN-8wSYvhaqsD2CW1l/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku1/Tentang Kamu (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Tentang Kamu</h1>
                <p class="author">Tere Liye</p>
                <a href="https://drive.google.com/file/d/19KYriFrhSnssGHM6u_ZnhPD6u--XQAjj/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku1/Yang Fana Adalah Waktu (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Yang Fana Adalah Waktu</h1>
                <p class="author">Sapardi djoko damono</p>
                <a href="https://drive.google.com/file/d/1fN60M8zQ7MLODNlY54WD4_5qoEwTU0m7/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        </details>
        <h1></h1>
        <h1></h1>
        <details>
        <summary>Buku Non-Fiksi</summary>
        <div class="book-container">
            <img src="assets/img/buku2/Berani Tidak Disukai ( SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Berani Tidak Disukai</h1>
                <p class="author">Ichiro Kishimi, Fumitake Koga</p>
                <a href="https://drive.google.com/file/d/1JMLk7lJ7j4TEJiYSt4c2bVnoY-Puygdw/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku2/BIOGAS ( SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Biogas</h1>
                <p class="author">Mahmud Hasan</p>
                <a href="https://drive.google.com/file/d/1aRos3q9A-unEO7eySFd5F-hwxK3JQ54f/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku2/Buku Ki Hajar Dewantara (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Ki Hajar Dewantara</h1>
                <p class="author">Suhartono Wiryopranoto, Prof. Dr. Nina Herlina, M. S, Prof. Dr. Djoko Marihandono, Dr. Yuda B Tangkilisan, Tim Museum Kebangkitan Nasional</p>
                <a href="https://drive.google.com/file/d/1pdpCdy0ZwiPHeohAhf_JroR_CjR9Bktu/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku2/Bung Karno Penyambung Lidah Rakyat Indonesia (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Bung Karno Penyambung Lidah Rakyat Indonesia</h1>
                <p class="author">CINDY ADAMS</p>
                <a href="https://drive.google.com/file/d/1kym0alkoAa0xakKYSzyN2SES95Y50bAL/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku2/Bunga Rampai Pencak Silat (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Bunga Rampai Pencak Silat</h1>
                <p class="author">Ochid Aj</p>
                <a href="https://drive.google.com/file/d/1vE0GKfqGZdhKnPA04vz7pWKdR4bhgx-l/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku2/Encyclopedia Of Astrology (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Encyclopedia of Astrology</h1>
                <p class="author">Nicholas deVore</p>
                <a href="https://drive.google.com/file/d/1QFcCRobu01Zt9o2AXv4rruVAjFzVA999/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku2/Encyclopedia of Biology (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Encyclopedia Of Biology</h1>
                <p class="author">don rittner, Timothy L. McCabe, Ph.D.</p>
                <a href="https://drive.google.com/file/d/1SSJ7FooP4WipuShdKzB0wcm5jswlMOGB/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
            <img src="assets/img/buku2/Encyclopedia Of Computer Science and Technology .jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Encyclopedia Of Computer Science and Technology</h1>
                <p class="author">harry henderson</p>
                <a href="https://drive.google.com/file/d/1XkEsy0_YBvNVjGWBT76J1def38fEVroj/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
        <img src="assets/img/buku2/Encyclopedia of Earthquakes and Volcanoes (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Encyclopedia Of Earthquakes and Volcanoes</h1>
                <p class="author">Alexander E. Gates, Ph.D., David Ritchie</p>
                <a href="https://drive.google.com/file/d/1y3nEk19JnoJTa7oq6n3th1RR2WGt1T47/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
        <img src="assets/img/buku2/Encyclopedia Of Languange (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Encyclopedia Of Language</h1>
                <p class="author">N.E.COLLINGE</p>
                <a href="https://drive.google.com/file/d/1NSVSItot9uiVujVeWFsEPyV2TYxPMle9/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
        <img src="assets/img/buku2/Exploring Indonesia (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Exploring Indonesia</h1>
                <p class="author">Bjorn Schelander</p>
                <a href="https://drive.google.com/file/d/14TL08F6TEaeRsczoTGWT42C-hThmDFiI/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
        <img src="assets/img/buku2/Filsafat , Etika , dan Kearifan Lokal (SS) .jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Filsafat , Etika , dan Kearifan Lokal</h1>
                <p class="author">Siti Syamsiyatun, Nihayatul Wafiroh</p>
                <a href="https://drive.google.com/file/d/1YIHkX3I3nNr62KhkqtmGw3VjeyuvtH9r/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
        <img src="assets/img/buku2/Hidup Sehat Agar Tidak Gemuk (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Hidup Sehat Agar Tidak Gemuk</h1>
                <p class="author">Rusmin</p>
                <a href="https://drive.google.com/file/d/1PNHzhV-6jxaQd0KLw2XfeCSYWFvq11K6/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
        <img src="assets/img/buku2/Human Capital and Economic Growth in India , Indonesia and Japan (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Human Capital and Economic Growth in India , Indonesia and Japan</h1>
                <p class="author">Bas van Leeuwen</p>
                <a href="https://drive.google.com/file/d/185IYcoKJehoh4AaKHGpWhsFZawkbF7ch/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
        <img src="assets/img/buku2/Indonesia People and Histories (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Indonesia People and Histories</h1>
                <p class="author">JEAN GELMAN TAYLOR</p>
                <a href="https://drive.google.com/file/d/1zUBfqUAv3VY68JFzaLyRwHlSb1GBLNLi/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
       <img src="assets/img/buku2/Information Guidebook Tsunami Early Warning For Broadcasting Institutions In Indonesia (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Information Guidebook Tsunami Early Warning For Broadcasting Institutions In Indonesia</h1>
                <p class="author">IRINA RAFLIANA, ARDITO M. KODIJAT</p>
                <a href="https://drive.google.com/file/d/1Yjjf5gMRBOoyK3s9RdB64nW5REz_7Ch9/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
        <img src="assets/img/buku2/Kamus Bahasa Indonesia (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Kamus Bahasa Indonesia</h1>
                <p class="author">PUSAT BAHASA DEPARTEMEN PENDIDIKAN NASIONAL</p>
                <a href="https://drive.google.com/file/d/1U9s4Opq7yE40472YJbUJTze5hCFbdMBq/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
        <img src="assets/img/buku2/Kamus Indonesia Inggris (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Kamus Indonesia Inggris</h1>
                <p class="author">Yohanes Aristianto</p>
                <a href="https://drive.google.com/file/d/1Iox7z6t1oA1_a60zXxx6iNt6UX0aRQPl/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
        <img src="assets/img/buku2/Kumpulan Fakta Unik (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Kumpulan Fakta Unik</h1>
                <p class="author">YULIUS HAFLAN</p>
                <a href="https://drive.google.com/file/d/1M2ughTCr4qKsDE_LRo5NTXDFfg78_xL4/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
       <img src="assets/img/buku2/Media dan Isu Keistimewaan DIY (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Media dan Isu Keistimewaan DIY</h1>
                <p class="author">D.PANDU YOGA BANGSAWAN</p>
                <a href="https://drive.google.com/file/d/1yw6hU5xNvRQxmhpdhfi67ITkJF1yrVOl/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
        <img src="assets/img/buku2/Memberikan Suara dari Luar Negeri (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Memberikan Suara dari Luar Negeri</h1>
                <p class="author">Andrew Ellis, Carlos Navarro, Isabel Morales, Maria Gratschew, Nadja Braun</p>
                <a href="https://drive.google.com/file/d/1uI6xsSrSx84DwworfjCjw6GIAtaID473/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
       <img src="assets/img/buku2/Mengenal Dunia Hewan (Animalia ) (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Mengenal Dunia Hewan (Animalia)</h1>
                <p class="author">....</p>
                <a href="https://drive.google.com/file/d/1OKgTkpeLUGXJeAzqZtrhT2nT_v1rT8Ft/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
        <img src="assets/img/buku2/Mengenal Dunia Tumbuhan (Plantae) (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Mengenal Dunia Tumbuhan (Plantae)</h1>
                <p class="author">....</p>
                <a href="https://drive.google.com/file/d/1hK8RieLIFsZnbWE6jdbYImxJ-PCqZMoF/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
        <img src="assets/img/buku2/Parenting Education In Indonesia (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Parenting Education In Indonesia</h1>
                <p class="author">Heather Biggar Tomlinson, Syifa Andina</p>
                <a href="https://drive.google.com/file/d/1UqmSmFhau1jv3SKoMJtTNRqSguP1MeWO/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
        <img src="assets/img/buku2/Pendidikan Pusaka Indonesia (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Pendidikan Pusaka Indonesia</h1>
                <p class="author">Tim Pendidikan Pusaka Indonesia</p>
                <a href="https://drive.google.com/file/d/1s6wYCikloHIa2YnA982_yH_-k6g_Wz6j/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
        <img src="assets/img/buku2/Sejarah Umat Manusia (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Sejarah Umat Manusia</h1>
                <p class="author">Chris Harman</p>
                <a href="https://drive.google.com/file/d/1dY3dMVDq_Xwh9C5ibO4PUrfQgf64YOa0/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
        <img src="assets/img/buku2/Soe Hok Gie _ Catatan Seorang Demostran (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Soe Hok Gie _ Catatan Seorang Demonstran</h1>
                <p class="author">Soe Hok Gie</p>
                <a href="https://drive.google.com/file/d/1m8UiWMaR513imZ_0cb4Ye8xlJwEEsz-8/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
        <img src="assets/img/buku2/Supervisi Pembelajaran dan Pengembangan Kapasitas Guru (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Supervisi Pembelajaran dan Pengembangan Kapasitas Guru</h1>
                <p class="author">Prof. Dr. H. Abd. Kadim Masaong, M.Pd.</p>
                <a href="https://drive.google.com/file/d/1M0xW_wmYiYRZNlfX71qx9aTPb1AFkpNK/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        <div class="book-container">
       <img src="assets/img/buku2/Teacher Reform In Indonesia (SS).jpeg" alt="Cover Buku" class="book-cover">
            <div class="book-details">
                <h1 class="book-title">Teacher Reform In Indonesia</h1>
                <p class="author">Mae Chu Chang, Sheldon Shaeffer, Samer Al-Samarrai, Andrew B. Ragatz, Joppe de Ree, Ritchie Stevenson</p>
                <a href="https://drive.google.com/file/d/1eyOmX_GNTGgfNk47eDWto8A7WL16-mc5/view"><button class="read-button">Baca Sekarang</button></a>
            </div>
        </div>
        </details>
        <h1></h1>
        <h1></h1>
    </main>
    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        document.getElementsByClassName('tablink')[0].click(); // Open the first tab by default
    </script>
</body>
</html>
