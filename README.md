# Display Posts Meta Compare

Add a meta_compare argument to the Display Posts shortcode.

```
[display-posts meta_key="my_custom_field" meta_compare="" meta_value=""]
```

Possible values for `meta_compare` are the ones available in a `WP_Query`: '=', '!=', '>', '>=', '<', '<=', 'LIKE', 'NOT LIKE', 'IN', 'NOT IN', 'BETWEEN', 'NOT BETWEEN', 'EXISTS', 'NOT EXISTS', 'REGEXP', 'NOT REGEXP', and 'RLIKE'.

I haven't tested many different types of comparison, however, and it's likely that some won't work. Feel free to submit a PR or create an issue if you run into problems.

## Installation

There are three options for installing this plugin:

1. With composer from [Packagist](https://packagist.org/packages/mmirus/display-posts-meta-compare): `composer require mmirus/display-posts-meta-compare`
2. With [GitHub Updater](https://github.com/afragen/github-updater)
3. By downloading the latest release ZIP from this repository and installing it like any normal WordPress plugin

## Contributing

To work on this project (for yourself or to contribute a PR):

1. Clone this repo
2. Run `composer install`

And you should be good to go.

Pre-commit linting is enforced (PSR-2 for PHP).
