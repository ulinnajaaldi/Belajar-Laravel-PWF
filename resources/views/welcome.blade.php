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
                <li><a href="{{url('/nim')}}">Tugas Route</a></li>
                <li><a href="https://github.com/UlinnajaAldi" target="_blank">Github</a></li>
            </ul>
        </div>
    </nav>
    <section class="flex flex-col items-center justify-center m-11 gap-5">
        <h1 class="font-extrabold text-6xl ">Belajar Laravel PWF 2022</h1>
        <p class="text-center text-base">
            Landing page ini dibuat hanya <br/>untuk merubah tampilan welcome
        </p>
        <button class="w-64 h-10 bg-black text-white text-xs font-bold ">Hello World</button>

        <img src="{{URL::asset('/image/hero.png')}}" alt="hero" class="absolute -z-50 top-44">
        <img src="{{URL::asset('/image/row_kiri.svg')}}" alt="row" class="absolute top-[230px] left-[140px]">
        <div class="absolute top-[300px] left-[80px] text-center">
            <p class="text-xs font-bold">Nama</p>
            <h4 class="font-bold bg-[#5A58FF] text-white rounded p-1">Aldilla Ulinnaja</h4>
        </div>
        <img src="{{URL::asset('/image/row_kanan.svg')}}" alt="row" class="absolute top-[240px] right-[140px]">
        <div class="absolute top-[440px] right-[100px] text-center">
            <p class="text-xs font-bold">Nim</p>
            <h4 class="font-bold bg-[#1FCC79] rounded p-1">L200200090</h4>
        </div>
    </section>
</body>
</html>