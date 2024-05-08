<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
        <style>
            @import url("https://rsms.me/inter/inter.css");
            html {
              font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
                "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
                "Noto Color Emoji";
            }
      
            .gradient {
              background-image: linear-gradient(-225deg, #cbbacc 0%, #2580b3 100%);
            }
      
            button,
            .gradient2 {
              background-color: #f39f86;
              background-image: linear-gradient(315deg, #f39f86 0%, #f9d976 74%);
            }
      
            /* Browser mockup code
       * Contribute: https://gist.github.com/jarthod/8719db9fef8deb937f4f
       * Live example: https://updown.io
       */
      
            .browser-mockup {
              border-top: 2em solid rgba(230, 230, 230, 0.7);
              position: relative;
              height: 60vh;
            }
      
            .browser-mockup:before {
              display: block;
              position: absolute;
              content: "";
              top: -1.25em;
              left: 1em;
              width: 0.5em;
              height: 0.5em;
              border-radius: 50%;
              background-color: #f44;
              box-shadow: 0 0 0 2px #f44, 1.5em 0 0 2px #9b3, 3em 0 0 2px #fb5;
            }
      
            .browser-mockup > * {
              display: block;
            }
      
            /* Custom code for the demo */
          </style>

        <!-- Styles -->
        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    </head>
    <body>
        <div class="font-sans antialiased text-gray-900">
            <?php echo e($slot); ?>

        </div>

        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

    </body>
</html>
<?php /**PATH C:\Users\adral\Desktop\UniversityRatingTogo\resources\views/layouts/guest.blade.php ENDPATH**/ ?>