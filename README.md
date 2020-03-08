# Dionysos Textarea Field
> This component is a part of the **Olympus Dionysos fields** for **WordPress**.  
> It uses the default WordPress RTE field and adds a counter JS component on textarea default mode.

[![Olympus Component][olympus-image]][olympus-url]
[![CodeFactor Grade][codefactor-image]][codefactor-url]
[![Packagist Version][packagist-image]][packagist-url]

```sh
composer require getolympus/olympus-dionysos-field-textarea
```

<p align="center">
    <img src="https://github.com/GetOlympus/olympus-dionysos-field-textarea/blob/master/assets/field-textarea-64.png" />
</p>

## Field initialization

Use the following lines to add a `textarea field` in your **WordPress** admin pages or custom post type meta fields:

```php
return \GetOlympus\Dionysos\Field\Textarea::build('my_textarea_field_id', [
    'title'       => 'How do Penguins drink their cola?',
    'default'     => 'On the rocks.',
    'description' => 'A simple question to know if you will be able to survive to the Penguin domination.',
    'mode'        => 'default',
    'placeholder' => 'Tell us how?',
    'rows'        => 8,

    /**
     * RTE settings
     * @see https://codex.wordpress.org/Function_Reference/wp_editor
     */
    'settings' => [
        'teeny'         => false,
        'textarea_rows' => 8,
    ]
]);
```

## Variables definitions

| Variable      | Type    | Default value if not set | Accepted values |
| ------------- | ------- | ------------------------ | --------------- |
| `title`       | String  | `'Textarea'` | *empty* |
| `default`     | String  | *empty* | *empty* |
| `description` | String  | *empty* | *empty* |
| `mode`        | String  | `default` | see [Accepted mode](#accepted-mode) |
| `placeholder` | String  | *empty* | *empty* |
| `rows`        | Integer | `8` | `> 1` |
| `settings`    | Array   | see [Field initialization](#field-initialization) | see [WordPress reference](https://codex.wordpress.org/Function_Reference/wp_editor) |

## Accepted mode

* `default` to display a simple textarea field with a counter widget
* `rte` to display a full WordPress Editor component depending on `settings`

## Retrive data

Retrieve your value from Database with a simple `get_option('my_textarea_field_id', '')` (see [WordPress reference][getoption-url]):

```php
// Get textarea from Database
$textarea = get_option('my_textarea_field_id', '');

// Display textarea in HTML tag
echo '<pre>'.htmlspecialchars($textarea).'</pre>';
```

## Release History

0.0.13
- New Olympus components compatibility
- Change repository to be a part of Dionysos fields

0.0.12
- FIX: remove twig dependency from composer

0.0.11
- FIX: remove zeus-core dependency from composer

## Authors and Copyright

Achraf Chouk  
[![@crewstyle][twitter-image]][twitter-url]

Please, read [LICENSE][license-blob] for more information.  
[![MIT][license-image]][license-url]

<https://github.com/crewstyle>  
<https://fr.linkedin.com/in/achrafchouk>

## Contributing

1. Fork it (<https://github.com/GetOlympus/olympus-dionysos-field-textarea/fork>)
2. Create your feature branch (`git checkout -b feature/fooBar`)
3. Commit your changes (`git commit -am 'Add some fooBar'`)
4. Push to the branch (`git push origin feature/fooBar`)
5. Create a new Pull Request

---

**Built with ♥ by [Achraf Chouk](https://github.com/crewstyle "Achraf Chouk") ~ (c) since a long time.**

<!-- links & imgs dfn's -->
[olympus-image]: https://img.shields.io/badge/for-Olympus-44cc11.svg?style=flat-square
[olympus-url]: https://github.com/GetOlympus
[codefactor-image]: https://www.codefactor.io/repository/github/GetOlympus/olympus-dionysos-field-textarea/badge?style=flat-square
[codefactor-url]: https://www.codefactor.io/repository/github/getolympus/olympus-dionysos-field-textarea
[getoption-url]: https://developer.wordpress.org/reference/functions/get_option/
[license-blob]: https://github.com/GetOlympus/olympus-dionysos-field-textarea/blob/master/LICENSE
[license-image]: https://img.shields.io/badge/license-MIT_License-blue.svg?style=flat-square
[license-url]: http://opensource.org/licenses/MIT
[packagist-image]: https://img.shields.io/packagist/v/getolympus/olympus-dionysos-field-textarea.svg?style=flat-square
[packagist-url]: https://packagist.org/packages/getolympus/olympus-dionysos-field-textarea
[twitter-image]: https://img.shields.io/badge/crewstyle-blue.svg?style=social&logo=twitter
[twitter-url]: https://twitter.com/crewstyle