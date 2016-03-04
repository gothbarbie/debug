Debug
=====
Debug is a static class the simplifies routine debugging procedures, such as rendering pretty looking (and more readable) arrays and variables in HTML.

## Examples ##
### printr() ###
PHP:
```php
<?php
$data = ['username' => 'hanna', 'email' => 'info@hannasoderstrom.com'];
Debug::printr($data);
```
HTML:
```html
array(
    'username' => 'hanna',
    'email' => 'info@hannasoderstrom.com'
    )
```

### vardump() ###
PHP:
```php
<?php
$data = "Hello world!";
Debug::vardump($data);
```
HTML:
```html
(string)"Hello world!"(12)
```
