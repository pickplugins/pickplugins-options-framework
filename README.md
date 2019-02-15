# PickPlugins Options Framework

Not just to build a option page, but your development task easier and fast with create post types, create taxonomy, 
edit user fields, edit taxonomy fields, create sidebar and nav menus. you can also generate form input fields 
dynamically.

![WordPress Options Framework](https://i.imgur.com/w4AnbAy.png)

* **PickPlugins Options Framework** by  [PickPlugins](https://www.pickplugins.com)
*  [Documentation](https://www.pickplugins.com/documentation/pickplugins-options-framework/)
* [Fields](https://www.pickplugins.com/documentation/pickplugins-options-framework/fields/)
* [How to create Custom Setting Page?](https://www.pickplugins.com/documentation/pickplugins-options-framework/faq/how-to-create-custom-setting-page/)
* [How to create Theme Setting Page?](https://www.pickplugins.com/documentation/pickplugins-options-framework/faq/how-to-create-theme-setting-page/)
* [How to Create Post Meta Box?](https://www.pickplugins.com/documentation/pickplugins-options-framework/faq/how-to-create-post-meta-box/)
* [How add Custom Input Field to User Profile?](https://www.pickplugins.com/documentation/pickplugins-options-framework/faq/how-to-create-post-meta-box-2/)
* [How add Customizer Section & Fields?](https://www.pickplugins.com/documentation/pickplugins-options-framework/faq/how-add-customizer-section-fields/)

Ready to be Role

* Theme Settings Page.
* Custom Settings Page.
* Post Meta Box/ Custom Field Box.
* Taxonomy Edit Fields.
* User Profile Fields.
* Customizer Fields.
* Create Post Types.
* Create Custom Taxonomy.
* Create User with User Meta Fields.
* Upload File/Media from URL.
* Add Sidebars/Widget Area.
* Create Post Status.
* Register Nav Menus.
* Insert Post.
* Create Dashboard Widgets
* 53+ Input Fields.






## Basic Input fields

*  Text
*  Select
*  Checkbox
*  Checkbox Multi
*  Radio
*  Textarea
*  Number
*  Hidden
*  Range
*  Color
*  Email
*  URL
*  Tel
*  Search
*  Month
*  Week
*  Date
*  Time
*  Submit

## Custom Input Fields

*  Text multi
*  Select multi
*  Select2
*  Range with input
*  Color picker
*  Datepicker
*  Media
*  Media Gallery
*  Switcher
*  Switch
*  Switch multi
*  Switch image
*  Dimensions (width, height, custom)
*  WP Editor
*  Code Editor
*  Link Color
*  Repeatable
*  Icon
*  Icon multi
*  Date format 
*  Time format 
*  FAQ
*  Grid
*  Custom_html
*  Color palette
*  Color palette multi
*  User select
*  Color picker multi
*  Google reCaptcha
*  Nonce
*  Border
*  Margin
*  Padding
*  Google Map
* Post Objects




#### Special Fields(Arguments)

* Page list Field (select, select2, radio, checkbox)
* Terms(category) list Field (select, select2, radio, checkbox)
* Thumbnail size list Field (select, select2, radio, checkbox)
* Posts (select, select2, radio, checkbox)
* Post-Types list field (select, select2, radio, checkbox)
* User Role (select, select2, radio, checkbox)
* Choose Menu (select, select2, radio, checkbox)
* Sidebars selection (select, select2, radio, checkbox)

#### Upcoming

* Color Gradient
* Divide
* Info
* Comments Select


### How to use

#### Adding class-wp-theme-settings.php class file
```php
include "class-form-fields-generator.php";
```

```php
$FormFieldsGenerator = new FormFieldsGenerator();

$args = array(
    'id'		    => 'text_multi_field',
    'title'		    => __('Text Field','text-domain'),
    'details'	    => __('Description of text field','text-domain'),
    'value'		    => 'Hello text value',
    'default'		=> __('Default Text Value','text-domain'),
    'placeholder'   => __('Text value','text-domain'),
);

echo $FormFieldsGenerator->field_text($args);
```

#### Available methods

```php
1. field_text();
2. field_text_multi();
3. field_textarea();
4. field_checkbox();
5. field_radio();
6. field_select();
7. field_select_multi();
8. field_range();
9. field_range_input();
10. field_password();
11. field_hidden();
12. field_switch();
13. field_switch_multi();
14. field_switch_img();
15. field_time_format();
16. field_date_format();
17. field_datepicker();
18. field_colorpicker();
19. field_colorpicker_multi();
20. field_link_color();
21. field_icon();
22. field_icon_multi();
23. field_dimensions();
24. field_wp_editor();
25. field_code();
26. field_select2()
27. field_faq();
28. field_grid();
29. field_color_palette();
30. field_color_palette_multi();
31. field_media();
32. field_media_multi();
33. field_repeatable();
34. field_google_recaptcha();
35. field_img_select();
36. field_submit();
37. field_nonce();
38. field_number();
39. field_color();
40. field_email();
41. field_search();
42. field_month();
43. field_date();
44. field_url();
45. field_time();
46. field_tel();
47. field_user();
48. field_custom_html(); 
49. field_switcher();
50. field_google_map();
51. field_border();
52. field_padding();
53. field_margin();
54. field_color_sets();
```






#### Credit

*  [CodeMirror](https://codemirror.net/)
*  [Form Field Dependency](http://emranahmed.github.io/Form-Field-Dependency/)
*  [Select2](https://select2.org/)
*  [Font Awesome](https://fontawesome.com/)
*  [jQuery UI](https://jqueryui.com/)












