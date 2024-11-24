<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  @vite('resources/css/app.css')
  @vite('resources/css/login.css')
</head>

<body class="bg-[url('../../public/images/bgMainLogin.svg')] bgMain">
  <div class="container-form mt-20">
    <!-- Form Login -->
    <div class="max-w-fit p-6 bg-white border border-gray-200 rounded-xl shadow sm:p-6 md:p-8 max-h-70">
      <form class="space-y-2" action="#">
        <div class="title text-center mb-3 flex justify-center">
          <div class="image size-20 mb-3">
            <img src="{{url('/images/LogoApps.svg')}}" alt="Logo">
          </div>
        </div>
        <div class="title text-center">
          <div class="image mb-10">
            <img src="{{url('/images/titleLogo.svg')}}" alt="title">
          </div>
        </div>
        <div class="input-form">
          <div class="pb-5">
            <input type="email" name="email" id="email" class="bg-white border border-gray-100 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 shadow-md" placeholder="Masukkan Email anda" required />
          </div>
          <div>
            <input type="password" name="password" id="password" placeholder="Masukkan Password anda" class="bg-white border border-gray-100 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 shadow-md" required />
          </div>
        </div>
        <div class="flex items-start">
          <a href="#" for="remember" class="ms-2 text-sm text-gray-400 drop-shadow-sm my-2">Tidak bisa masuk?</a>
        </div>
        <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center shadow-lg">MASUK</button>
        <div class="footer pt-16">
          <img src="{{url('/images/footerLogo.svg')}}" alt="footerLogo">
        </div>
    </div>
    </form>
  </div>
  </div>
  <!--  -->

</body>

</html>