# Craft Tag Filter

## By [STAPLEGUN](http://staplegun.us)

This plugin will filter out certain HTML tags from a block of text and return
their values in a twig array:

```
{% for paragraph in entry.body | getTag('p') %}
  {{ p }}
{% endfor %}
```

Currently ignores any tag meta data such as classes or IDs, and will return only
the value inside the tags.
