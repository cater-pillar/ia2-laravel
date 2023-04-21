<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  
</head>
<body style="background-image: url('{{ asset('/rice-paper.jpg') }}'); background-repeat: repeat;">
    <a href="#"><img src="{{ asset('/stamp.png') }}" class="block mx-auto my-5 w-24 md:w-32"></a>
    <nav>
        <div class="flex flex-col md:flex-row justify-center mb-32 bg-white bg-opacity-30 shadow-xl md:bg-transparent md:shadow-none">
            <a href="#" class="w-full text-center p-1 md:w-auto md:py-3 md:px-5 font-bold md:text-xl hover:bg-black hover:text-white md:hover:rounded">Gallery</a>
            <a href="#" class="w-full text-center p-1 md:w-auto md:py-3 md:px-5 font-bold md:text-xl hover:bg-black hover:text-white md:hover:rounded">Biography</a>
            <a href="#" class="w-full text-center p-1 md:w-auto md:py-3 md:px-5 font-bold md:text-xl hover:bg-black hover:text-white md:hover:rounded">Concept</a>
            <a href="#" class="w-full text-center p-1 md:w-auto md:py-3 md:px-5 font-bold md:text-xl hover:bg-black hover:text-white md:hover:rounded">Contact</a>
        </div>
    </nav>
    <div class="container">
        <div class="flex flex-wrap justify-center align-center">
            <a href="#">
                <div class="w-full mt-1 mb-5 mx-auto h-72 md:h-20 md:w-20 md:m-20 md:p-20 bg-white bg-opacity-30 shadow-xl" >
                        <img src="#" class="w-50 project-image">
                        <p class="text-center font-bold mt-5 project-text">Project name #1</p>
                </div>
            </a>
        </div>
    </div>
</body>
</html>
