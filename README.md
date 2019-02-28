# strakez/calormyn
A collection of Laravel-related tools and augments.

##Installation
This project is not yet registered with packagist, so the standard `composer require strakez/calormyn` won't work.

To install, perform the following:
- Add a `repositories` array to your `composer.json` file, if it doesn't already exist.
- Add the following new object in the `repositories` array:
```json
{
   "type": "vcs",
   "url": "https://github.com/strakers/laravel-calormyn"
}
```
- Add `strakez/calormyn` to the `require` array. For version, use `"*"`.
- run `composer update`.