<!DOCTYPE html>
<html>
<head>
    <title>Floating Navigation</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @keyframes slide-nav-down {
            100% {
                transform: translateY(0);
            }
        }

        nav.is-floating {
            position: sticky;
            top: 0;
            transform: translateY(-100%);
            animation: slide-nav-down .3s ease;
            animation-fill-mode: forwards;
        }
    </style>
</head>

<body>
    <nav class="px-10 bg-gray-300 mb-10 flex justify-between py-4">
        <div>
            <h1 class="font-bold text-lg uppercase">Laracasts</h1>
       </div>

       <div>
           <a href="#" class="px-2">Home</a>
           <a href="#" class="px-2">About</a>
           <a href="#" class="px-2">Blog</a>
           <a href="#" class="px-2">Contact</a>
       </div>
    </nav>

    <section class="px-10">
        <div class="flex -mx-4 mb-6">
            <div class="w-1/3 h-32 bg-gray-500 mx-4"></div>
            <div class="w-1/3 h-32 bg-gray-500 mx-4"></div>
            <div class="w-1/3 h-32 bg-gray-500 mx-4"></div>
        </div>

        <div class="flex -mx-4 mb-6">
            <div class="w-1/3 h-32 bg-gray-500 mx-4"></div>
            <div class="w-1/3 h-32 bg-gray-500 mx-4"></div>
            <div class="w-1/3 h-32 bg-gray-500 mx-4"></div>
        </div>

        <div class="flex -mx-4 mb-6">
            <div class="w-1/3 h-32 bg-gray-500 mx-4"></div>
            <div class="w-1/3 h-32 bg-gray-500 mx-4"></div>
            <div class="w-1/3 h-32 bg-gray-500 mx-4"></div>
        </div>

        <div class="flex -mx-4 mb-6">
            <div class="w-1/3 h-32 bg-gray-500 mx-4"></div>
            <div class="w-1/3 h-32 bg-gray-500 mx-4"></div>
            <div class="w-1/3 h-32 bg-gray-500 mx-4"></div>
        </div>

        <div class="flex -mx-4 mb-6">
            <div class="w-1/3 h-32 bg-gray-500 mx-4"></div>
            <div class="w-1/3 h-32 bg-gray-500 mx-4"></div>
            <div class="w-1/3 h-32 bg-gray-500 mx-4"></div>
        </div>

        <div class="flex -mx-4 mb-6">
            <div class="w-1/3 h-32 bg-gray-500 mx-4"></div>
            <div class="w-1/3 h-32 bg-gray-500 mx-4"></div>
            <div class="w-1/3 h-32 bg-gray-500 mx-4"></div>
        </div>
    </section>

    <section id="featured" class="px-10">
        <h1 class="font-bold text-lg mt-8 mb-2">More</h1>

        <div class="flex -mx-4 mb-6">
            <div class="w-1/3 h-32 bg-green-500 mx-4"></div>
            <div class="w-1/3 h-32 bg-green-500 mx-4"></div>
            <div class="w-1/3 h-32 bg-green-500 mx-4"></div>
        </div>

        <div class="flex -mx-4 mb-6">
            <div class="w-1/3 h-32 bg-green-500 mx-4"></div>
            <div class="w-1/3 h-32 bg-green-500 mx-4"></div>
            <div class="w-1/3 h-32 bg-green-500 mx-4"></div>
        </div>

        <div class="flex -mx-4 mb-6">
            <div class="w-1/3 h-32 bg-green-500 mx-4"></div>
            <div class="w-1/3 h-32 bg-green-500 mx-4"></div>
            <div class="w-1/3 h-32 bg-green-500 mx-4"></div>
        </div>

        <div class="flex -mx-4 mb-6">
            <div class="w-1/3 h-32 bg-green-500 mx-4"></div>
            <div class="w-1/3 h-32 bg-green-500 mx-4"></div>
            <div class="w-1/3 h-32 bg-green-500 mx-4"></div>
        </div>

        <div class="flex -mx-4 mb-6">
            <div class="w-1/3 h-32 bg-green-500 mx-4"></div>
            <div class="w-1/3 h-32 bg-green-500 mx-4"></div>
            <div class="w-1/3 h-32 bg-green-500 mx-4"></div>
        </div>

        <div class="flex -mx-4 mb-6">
            <div class="w-1/3 h-32 bg-green-500 mx-4"></div>
            <div class="w-1/3 h-32 bg-green-500 mx-4"></div>
            <div class="w-1/3 h-32 bg-green-500 mx-4"></div>
        </div>
    </section>


    <script>
        (function (nav) {
            let observer = new IntersectionObserver(entries => {
                if (entries[0].isIntersecting) {
                    nav.classList.add('is-floating');
                } else {
                    nav.classList.remove('is-floating');
                }
            }, {
                threshold: .25
            });

            observer.observe(document.querySelector('#featured'));
        })(document.querySelector('nav'));
    </script>
</body>
</html>
