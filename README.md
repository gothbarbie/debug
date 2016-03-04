Debug
=====
Debug is a static class the simplifies routine debugging procedures, such as rendering pretty looking arrays and variables.

## Examples ##
```php
$data = ['username' => 'hanna', 'email' => 'info@hannasoderstrom.com'];
Debug::printr($data);
```
Returns:
```html
array(
    'username' => 'hanna',
    'email' => 'info@hannasoderstrom.com'
    )
```
