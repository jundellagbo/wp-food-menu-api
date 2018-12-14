# WP Food Menu API Plugin
- Getting API of your products and categories.
- Getting TLP Food Menu plugin API https://wordpress.org/plugins/tlp-food-menu/

<h3>Integrate Food Menu into your Mobile App for just API :)</h3>


[![Build Status](http://img.shields.io/travis/badges/badgerbadgerbadger.svg?style=flat-square)](https://travis-ci.org/badges/badgerbadgerbadger) [![Coverage Status](http://img.shields.io/coveralls/badges/badgerbadgerbadger.svg?style=flat-square)](https://coveralls.io/r/badges/badgerbadgerbadger)

<p>
    <i>Get All your products.</i>
</p>
<p>
    <i>api:</i> <code>https://yoursite/wp-json/wp-food-menu/v1/products/api</code><br>
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


Test your API using POSTMAN https://www.getpostman.com/
