Form layout code, based on Bootstrap. This module is more complex than others as each variation has more specific markup requirements than simply changing a class on the parent.

Note the included `_form-base.scss` file used.

## `.form__group`
Each group of inputs need to be wrapped in an element with `.form__group`. Typically an `input`/`label` pair will be wrapped in a `.form__group`.

## Layout options

### `.form`
The most basic form with labels above inputs.

### `.form--horizontal`
A form with the `label` and `input` placed beside each other. With this style, each input or other `label`less item to be aligned in the main column (submit button, radios, etc), need to be inside a `.form__horizontal-input`.

### `.form--inline`
This style is useful for forms with few elements (few enough to fit on one line). No additional markup is required.

## Checkboxes and radios
These elements should be wrapped in a `.form__checkbox` or `.form__radio`.

### Inline
Multiple radio or checkbox inputs can be displayed inline by adding a `.form__checkbox--inline` or `.form__radio--inline` class.
