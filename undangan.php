<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Undangan Pernikahan 2025</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap');

  * {
    box-sizing: border-box;
  }
  body, html {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    color: #fff;
    height: 100vh;
    overflow: hidden;
  }

  .background {
    position: fixed;
    top:0; left:0; right:0; bottom:0;
    background-image: url('https://images.pexels.com/photos/414171/pexels-photo-414171.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=1080&w=1920');
    background-size: cover;
    background-position: center center;
    filter: brightness(0.45);
    z-index: -1;
  }

  .container {
    position: relative;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
    text-align: center;
  }

  h1, h2, h3, p {
    margin: 10px 0;
  }

  h1 {
    font-weight: 600;
    font-size: 3.5rem;
    letter-spacing: 5px;
  }

  h2 {
    font-weight: 300;
    font-size: 1.75rem;
    letter-spacing: 3px;
    margin-bottom: 30px;
  }

  .btn-nav {
    background: rgba(255,255,255,0.2);
    border: none;
    color: #fff;
    font-weight: 600;
    font-size: 1.2rem;
    padding: 12px 28px;
    margin: 10px 5px;
    cursor: pointer;
    border-radius: 30px;
    transition: background 0.3s ease;
  }
  .btn-nav:hover {
    background: rgba(255,255,255,0.45);
  }

  .page {
    display: none;
    max-width: 700px;
    width: 90vw;
    margin: auto;
  }
  .page.active {
    display: block;
  }

  /* Groom & Bride photos section */
  .couple-photos {
    display: flex;
    justify-content: center;
    gap: 40px;
    margin-bottom: 30px;
  }
  .photo-box {
    width: 45%;
  }
  .photo-box img {
    width: 100%;
    border-radius: 20px;
    box-shadow: 0 8px 15px rgba(0,0,0,0.8);
  }
  .photo-caption {
    margin-top: 8px;
    font-weight: 600;
    font-size: 1.2rem;
    color: #f0e6e6;
  }

  /* Date section */
  .date-box {
    background: rgba(0,0,0,0.35);
    padding: 25px 35px;
    border-radius: 20px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.7);
    margin-bottom: 20px;
  }
  .date-box h2 {
    font-size: 2rem;
    margin-bottom: 8px;
  }
  .date-box p {
    font-size: 1.25rem;
  }

  /* Album gallery */
  .album {
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(150px,1fr));
    gap: 15px;
  }
  .album img {
    width: 100%;
    border-radius: 12px;
    box-shadow: 0 6px 12px rgba(0,0,0,0.6);
    cursor: pointer;
    transition: transform 0.3s ease;
  }
  .album img:hover {
    transform: scale(1.1);
    z-index: 10;
  }

  /* Invitation with name input */
  .invite-text {
    background: rgba(0,0,0,0.35);
    padding: 25px 30px;
    border-radius: 18px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.7);
    max-width: 600px;
    margin: auto;
  }
  .invite-text p {
    font-size: 1.4rem;
    line-height: 1.5;
    margin-bottom: 20px;
  }
  .input-name {
    padding: 12px 18px;
    font-size: 1.1rem;
    border-radius: 30px;
    border: none;
    outline: none;
    width: 80%;
    max-width: 350px;
    margin-bottom: 20px;
    text-align: center;
  }
  .btn-submit {
    background: #ff7f50;
    border: none;
    color: #fff;
    font-weight: 600;
    padding: 12px 30px;
    border-radius: 30px;
    cursor: pointer;
    transition: background 0.3s ease;
  }
  .btn-submit:hover {
    background: #ff5733;
  }
  .invitee-name {
    font-weight: 700;
    font-size: 1.5rem;
    color: #ffd700;
    margin-top: 12px;
  }

  /* Responsive */
  @media (max-width:600px) {
    .couple-photos {
      flex-direction: column;
      gap: 20px;
    }
    .photo-box {
      width: 100%;
    }
  }

</style>
</head>
<body>
  <div class="background"></div>

  <div class="container">
    <!-- Pages -->
    <div id="page1" class="page active">
      <h1>Undangan Pernikahan</h1>
      <h2>Rizky & Aulia</h2>
      <p>2025</p>
      <p style="font-size:1rem; margin-top: 40px;">“We joyfully invite you to celebrate our wedding day.”</p>
    </div>

    <div id="page2" class="page">
      <h2>The Couple</h2>
      <div class="couple-photos">
        <div class="photo-box">
          <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=400" alt="Groom" />
          <p class="photo-caption">Rizky</p>
        </div>
        <div class="photo-box">
          <img src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=400" alt="Bride" />
          <p class="photo-caption">Aulia</p>
        </div>
      </div>
      <p>Two hearts becoming one. Join us as we share our special moment.</p>
    </div>

    <div id="page3" class="page">
      <h2>Detail Acara Resepsi</h2>
      <div class="date-box">
        <h2>Sabtu, 15 Februari 2025</h2>
        <p>Mulai pukul 11.00 WIB</p>
        <p>Gedung Serbaguna Merdeka, Jakarta</p>
      </div>
      <p>Mohon kehadiran Anda untuk memeriahkan hari bahagia kami.</p>
    </div>

    <div id="page4" class="page">
      <h2>Album Foto</h2>
      <div class="album">
        <img src="https://images.pexels.com/photos/3770581/pexels-photo-3770581.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=300" alt="Album Photo 1" />
        <img src="https://images.pexels.com/photos/3222079/pexels-photo-3222079.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=300" alt="Album Photo 2" />
        <img src="https://images.pexels.com/photos/3529508/pexels-photo-3529508.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=300" alt="Album Photo 3" />
        <img src="https://images.pexels.com/photos/6457535/pexels-photo-6457535.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=300" alt="Album Photo 4" />
        <img src="https://images.pexels.com/photos/45201/pexels-photo-45201.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=300" alt="Album Photo 5" />
      </div>
    </div>

    <div id="page5" class="page">
      <h2>Untuk Anda</h2>
      <div class="invite-text">
        <p>Dear <span id="invitee-placeholder" style="font-weight:700; color:#ffd700;">Tamu Undangan</span>,</p>
        <p>Kami mengundang Anda untuk hadir dan berbagi kebahagiaan di hari pernikahan kami. Kehadiran Anda sangat berarti bagi kami.</p>
        <input type="text" id="invitee-name-input" class="input-name" placeholder="Tulis nama Anda disini" />
        <br />
        <button class="btn-submit" onclick="submitInviteName()">Konfirmasi Nama</button>
        <p class="invitee-name" id="display-invitee-name"></p>
      </div>
    </div>

    <!-- Navigation -->
    <div style="position: fixed; bottom: 20px; width: 100%; text-align: center;">
      <button class="btn-nav" onclick="prevPage()">&#8592; Sebelumnya</button>
      <button class="btn-nav" onclick="nextPage()">Berikutnya &#8594;</button>
    </div>
  </div>

<script>
  const pages = Array.from(document.querySelectorAll('.page'));
  let currentPage = 0;

  function showPage(index) {
    pages.forEach((page, i) => {
      page.classList.toggle('active', i === index);
    });
    currentPage = index;
  }

  function nextPage() {
    let next = currentPage + 1;
    if (next >= pages.length) next = 0;
    showPage(next);
  }

  function prevPage() {
    let prev = currentPage - 1;
    if (prev < 0) prev = pages.length - 1;
    showPage(prev);
  }

  function submitInviteName() {
    const input = document.getElementById('invitee-name-input');
    const display = document.getElementById('display-invitee-name');
    const placeholder = document.getElementById('invitee-placeholder');
    const name = input.value.trim();
    if(name) {
      placeholder.textContent = name;
      display.textContent = `Terima kasih, ${name}, atas konfirmasi Anda! Kami nantikan kehadiran Anda.`;
      input.value = '';
    } else {
      alert('Mohon masukkan nama Anda terlebih dahulu.');
    }
  }
</script>
</body>
</html>

```

