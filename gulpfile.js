var elixir = require("laravel-elixir");
elixir(function(mix) {
    mix.styles([
        'core.css',
    ], 'public/css/core.css');
});
elixir(function(mix) {
    mix.version("css/*");
});