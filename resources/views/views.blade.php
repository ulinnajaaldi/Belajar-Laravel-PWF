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
        <h3 class="font-bold text-2xl"><a href="{{url('/')}}">Laravel</a></h3>
        <div class="text-md font-semibold ">
          <ul class="flex gap-5">
              <li><a href="{{url('/')}}">< Back</a></li>
          </ul>
        </div>
    </nav>
    <div class="p-20">
        <div class="flex flex-col justify-center items-center">
            <h1 class="font-bold text-xl">Tugas Pertemuan 7</h1>
            <div class="p-3 text-center">
              <a href="{{url('views/mahasiswa')}}"><p class="border py-3 px-20 m-2 hover:bg-slate-700 hover:text-white">Data Mahasiswa</p></a>
              <a href="{{url('views/dosen')}}"><p class="border py-3 px-20 m-2 hover:bg-slate-700 hover:text-white">Data Dosen</p></a>
              <a href="{{url('views/galery')}}"><p class="border py-3 px-20 m-2 hover:bg-slate-700 hover:text-white">Gallery</p></a>
            </div>
        </div>
    </div>
</body>
</html>