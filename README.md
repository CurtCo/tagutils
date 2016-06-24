# Tagutils

Generate tags for inclusion in Drupal's `#attached`.

## Usage

```php
use Curtco\Tagutils\Metatag;

// in your CustomEntityViewController for example...
$build['#attached']['html_head_link'][] = Metatag::build('description', 'my cool website');
```
