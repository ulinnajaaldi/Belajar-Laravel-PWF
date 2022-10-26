<!doctype html>
<html data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aldilla Ulinnaja</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style type="text/tailwindcss">
    @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
    @layer utilities {
      body{
        font-family: 'Inter', sans-serif;
      }
    }
  </style>
</head>
<body>
    <nav class="flex items-center justify-between mx-11 my-7">
        <h3 class="font-bold text-2xl">Laravel</h3>
        <div class="text-md font-semibold ">
            <ul class="flex gap-5">
                <li><a href="{{url('/')}}">< Back</a></li>
            </ul>
        </div>
    </nav>
    <div class="p-20">
        <div class="bg-white text-white p-6 rounded-lg shadow-lg text-center">
          <h2 class="text-2xl font-bold mb-2 text-gray-800">Aldilla Ulinnaja</h2>
          <p class="text-gray-700">NIM - L200200090</p>
          <p class="text-gray-700">Email - l200200090@student.ums.ac.id</p>
          <p class="text-gray-700">Tanggal Lahir - 5 Agustus 2001</p>
          <p class="text-gray-700">Alamat - Kota Salatiga, Jawa Tengah</p>
        </div>
    </div>
</body>
</html>