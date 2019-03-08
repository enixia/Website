const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */




/*
Admin
*/
mix.copy('node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js', 'storage/app/public/admin/js/bootstrap.min.js');
mix.copy('node_modules/admin-lte/plugins/jquery/jquery.min.js', 'storage/app/public/admin/js/jquery.min.js');
mix.copy([
    'node_modules/admin-lte/plugins/morris/morris.min.js',
    'node_modules/admin-lte/plugins/sparkline/jquery.sparkline.min.js',
    'node_modules/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
    'node_modules/admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
    'node_modules/jquery-knob/dist/jquery.knob.min.js',
    'node_modules/admin-lte/plugins/daterangepicker/daterangepicker.js',
    'node_modules/admin-lte/plugins/datepicker/bootstrap-datepicker.js',
    'node_modules/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
    'node_modules/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js',
    'node_modules/admin-lte/plugins/fastclick/fastclick.js',
    'node_modules/admin-lte/dist/js/adminlte.min.js',
    'node_modules/admin-lte/dist/js/pages/dashboard.js',
    'node_modules/admin-lte/dist/js/demo.js',
    'node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js'
], 'storage/app/public/admin/js/');
mix.copy('node_modules/admin-lte/plugins/font-awesome/css/font-awesome.min.css','storage/app/public/admin/css/');
mix.copy('node_modules/admin-lte/dist/css/adminlte.min.css','storage/app/public/admin/css/');
mix.copy('node_modules/admin-lte/plugins/iCheck/flat/blue.css','storage/app/public/admin/css/');
mix.copy('node_modules/admin-lte/plugins/morris/morris.css','storage/app/public/admin/css/');
mix.copy('node_modules/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css','storage/app/public/admin/css/');
mix.copy('node_modules/admin-lte/plugins/datepicker/datepicker3.css','storage/app/public/admin/css/');
mix.copy('node_modules/admin-lte/plugins/daterangepicker/daterangepicker-bs3.css','storage/app/public/admin/css/');
mix.copy('node_modules/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css','storage/app/public/admin/css/');

mix.copyDirectory('node_modules/admin-lte/plugins/font-awesome/fonts/', 'storage/app/public/admin/fonts/')
mix.copyDirectory('node_modules/admin-lte/dist/img', 'storage/app/public/admin/img')
/*
App
*/

mix.js('resources/js/app.js', 'storage/app/public/js')
   .sass('resources/sass/app.scss', 'storage/app/public/css');
