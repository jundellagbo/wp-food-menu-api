# WP Food Menu API Plugin
- Getting API of your products and categories.
- Getting TLP Food Menu plugin API https://wordpress.org/plugins/tlp-food-menu/
- Test your API using <a href="https://www.getpostman.com/" target="_blank">POSTMAN</a>

### Integrate Food Menu into your Mobile App for just API :)


[![Build Status](http://img.shields.io/travis/badges/badgerbadgerbadger.svg?style=flat-square)](https://travis-ci.org/badges/badgerbadgerbadger) [![Coverage Status](http://img.shields.io/coveralls/badges/badgerbadgerbadger.svg?style=flat-square)](https://coveralls.io/r/badges/badgerbadgerbadger) [![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.me/jundellagbo)

### Products
Get All your products.
API ``` https://yoursite/wp-json/wp-food-menu/v1/products/api```
Request ```GET```

| Params        | Description                                                   |          |
| ------------- |:-------------------------------------------------------------:| --------:|
| ```page```    | display product by page. default(1)                           | optional |
| ```perpage``` | paginate list of products. default( total number of product ) | optional |


<table>
    <thead>
        <tr>
            <td>params</td>
            <td>description</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>page</code></td>
            <td>display product by page.</td>
            <td>optional</td>
        </tr>
        <tr>
            <td><code>perpage</code></td>
            <td>paginate list of products.</td>
            <td>optional</td>
        </tr>
    </tbody>
</table>

<hr>

<p>
    <i>Get Individual Product.</i>
</p>
<p>
    <i>api:</i> <code>https://yoursite/wp-json/wp-food-menu/v1/product/api</code><br>
    <i>request:</i> <code>GET</code>
</p>
<table>
    <thead>
        <tr>
            <td>params</td>
            <td>description</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>id</code></td>
            <td>get the selected product by id, get all your products first then determine which id should be use.</td>
            <td>required</td>
        </tr>
    </tbody>
</table>

<hr>
<h3>Category</h3>
<p>
    <i>Retrieve all product categories.</i>
</p>
<p>
    <i>api:</i> <code>https://yoursite/wp-json/wp-food-menu/v1/categories/api</code>
</p>
<hr>

<p>
    <i>Retrieve Individual Category including Products related to the selected category.</i>
</p>
<p>
    <i>api: </i> <code><?php echo get_home_url(); ?>/wp-json/wp-food-menu/v1/product/category/api</code> <button api="<?php echo get_home_url(); ?>/wp-json/wp-food-menu/v1/product/category/api" id="copy_clipboard" class="btn-s">copy</button>
</p>
<table>
    <thead>
        <tr>
            <td>params</td>
            <td>description</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>cat_id</code></td>
            <td>category id, select all category first then choose which id to be use.</td>
            <td>required</td>
        </tr>
        <tr>
            <td><code>page</code></td>
            <td>use to display products by page under this category.</td>
            <td>required</td>
        </tr>
        <tr>
            <td><code>perpage</code></td>
            <td>paginate products under this category.</td>
            <td>required</td>
        </tr>
    </tbody>
</table>

### Donations
If this project help you reduce time to develop, you can give me a cup of coffee :) 
[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.me/jundellagbo)
