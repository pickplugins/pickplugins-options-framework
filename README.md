# PickPlugins Options Framework

Basic class for generate form input fields dynamically, easy to to use anywhere to build any type forms and input fields. This class is created for using WordPress options page and meta box.

* **PickPlugins Options Framework** by  [PickPlugins](https://www.pickplugins.com)
*  [documentation](https://www.pickplugins.com/documentation/pickplugins-options-framework/)



Ready to be Role

* Theme Settings Page
* Custom Settings Page
* Post Meta Box/ Custom Field Box
* Taxonomy Edit Fields
* User Profile Fields
* Customizer Fields.
* 40+ Input fields






## Input fields

* Text
* Text multi
* Select
* Select multi
* Select2
* Checkbox
* Radio
* Textarea
* Number
* Range
* Range with input
* Color picker
* Datepicker
* Media
* Media Gallery
* Switch
* Switch multi
* Switch image
* Dimensions (width, height, custom)
* Editor
* Link Color
* Repeatable
* Icon
* Icon multi
* Date format 
* Time format 
* FAQ
* Grid
* Custom_html
* Color palette
* Color Palette Multi
* User Select

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
$PickPluginsFieldGenerator = new PickPluginsFieldGenerator();

$args = array(
    'id'		    => 'text_multi_field',
    'title'		    => __('Text Field','text-domain'),
    'details'	    => __('Description of text field','text-domain'),
    'value'		    => 'Hello text value',
    'default'		=> __('Default Text Value','text-domain'),
    'placeholder'   => __('Text value','text-domain'),
);

echo $PickPluginsFieldGenerator->field_text($args);
```

#### Available methods

```php
* field_text();
* field_text_multi();
* field_textarea();
* field_checkbox();
* field_radio();
* field_select();
* field_select_multi();
* field_range();
* field_range_input();
* field_switch();
* field_switch_multi();
* field_switch_img();
* field_time_format();
* field_date_format();
* field_datepicker();
* field_colorpicker();
* field_colorpicker_multi();
* field_link_color();
* field_icon();
* field_icon_multi();
* field_dimensions();
* field_number();
* field_wp_editor();
* field_select2()
* field_faq();
* field_grid();
* field_color_palette();
* field_color_palette_multi();
* field_media();
* field_media_multi();
* field_repeatable();
```



















