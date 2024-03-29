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

mix.js('resources/js/app.js', 'public/js')
mix.js('resources/js/index.js', 'public/js')
mix.js('resources/js/map.js', 'public/js')
mix.js('resources/js/showLocationDoctor.js', 'public/js')
mix.js('resources/js/check_user.js', 'public/js')
mix.js('resources/js/userComment.js', 'public/js')
mix.js('resources/js/datepicker/datepicker.all.js', 'public/js/datepicker')
mix.js('resources/js/datepicker/datepicker.en.js', 'public/js/datepicker')
mix.js('resources/js/datepicker/persianDatepicker.js', 'public/js/datepicker')

mix.sass('resources/sass/app.scss', 'public/css')
mix.sass('resources/sass/article-list.scss', 'public/css/article')
mix.sass('resources/sass/doctorList.scss', 'public/css/doctor')
mix.sass('resources/sass/doctorProfile.scss', 'public/css/doctor')
mix.sass('resources/sass/footer.scss', 'public/css/footer')
mix.sass('resources/sass/index.scss', 'public/css')
mix.sass('resources/sass/user_profile_doctor.scss', 'public/css/profile')
mix.sass('resources/sass/user_profile.scss', 'public/css/profile')

.sourceMaps();