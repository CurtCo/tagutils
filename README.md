# Tagutils

[![Build Status](https://travis-ci.org/CurtCo/tagutils.svg?branch=master)](https://travis-ci.org/CurtCo/tagutils)

Generate tags for inclusion in Drupal's `#attached`.

## Usage

```php
use CurtCo\Tagutils\Metatag;

// in your CustomEntityViewController for example...
$build['#attached']['html_head_link'][] = Metatag::build('description', 'my cool website');
```
