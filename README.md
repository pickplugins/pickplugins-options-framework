# PickPlugins Options Framework

Basic class for generate form input fields dynamically, easy to to use anywhere to build any type forms and input fields. This class is created for using WordPress options page and meta box.

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
* Create Post Status
* 48+ Input Fields.






## Input fields

1. Text
2. Text multi
3. Select
4. Select multi
5. Select2
6. Checkbox
7. Radio
8. Textarea
9. Number
10. Hidden
11. Range
12. Range with input
13. Color picker
14. Datepicker
15. Media
16. Media Gallery
17. Switch
18. Switch multi
19. Switch image
20. Dimensions (width, height, custom)
21. WP Editor
22. Code Editor
23. Link Color
24. Repeatable
25. Icon
26. Icon multi
27. Date format 
28. Time format 
29. FAQ
30. Grid
31. Custom_html
32. Color palette
33. Color Palette Multi
34. User Select
35. HTML5 Color
36. Email
37. URL
38. Tel
39. Search
40. Month
41. Week
42. Date
43. Time
44. Color Picker Multi
45. Google reCaptcha
46. Nonce
47. Submit


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
```



















