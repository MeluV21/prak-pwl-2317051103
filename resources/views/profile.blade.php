<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile Page</title>
  <style>
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
      background: #ebc4f2e0;
    }
    .top-bar {
      position: fixed;
      top: 0; left: 0;
      width: 100%;
      height: 123px;
      background: #d28cc9;
      box-shadow: 2px 2px 6px #0001;
      z-index: 10;
    }
    .profile-content {
      padding-top: 180px;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 40px;
    }
    .profile-title {
      font-size: 64px;
      font-weight: 700;
      margin: 0;
    }
    .profile-image {
      width: 325px; height: 325px;
      border-radius: 50%;
      background: url('https://i.pinimg.com/736x/76/2b/2c/762b2c30e0e7f4c9ce4919c35e1e6739.jpg') center/cover no-repeat;
    }
    .profile-form {
      display: flex;
      flex-direction: column;
      gap: 30px;
    }
    .profile-input {
      width: 450px; height: 72px;
      padding: 20px;
      border: 2px solid #000;
      border-radius: 50px;
      background: #b032ca80;
      font-size: 28px;
      font-weight: 700;
      text-align: center;
    }
  </style>
</head>
<body>
  <header class="top-bar"></header>

  <section class="profile-content">
    <h1 class="profile-title">Profile</h1>
    <div class="profile-image" aria-label="Foto Profil"></div>
    <form class="profile-form">
      <input type="text" class="profile-input" placeholder="Nama" value="{{ $nama }}">
      <input type="text" class="profile-input" placeholder="Kelas" value="{{ $kelas }}">
      <input type="text" class="profile-input" placeholder="NPM" value="{{ $npm }}">
    </form>
  </section>
</body>
</html>
