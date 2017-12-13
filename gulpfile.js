var elixir = require("laravel-elixir");
elixir(function(mix) {
    mix.sass('navigation.scss');
});

elixir(function(mix) {
    mix.styles([
        'core.css',
        'form.css',
    ], 'public/css/core.css');
});
elixir(function(mix) {
    mix.styles([
        'framevork/materialize.css',
        'core.css',
        'register.css',
    ], 'public/css/register.css');
});

elixir(function(mix) {
    mix.version("css/*");
});