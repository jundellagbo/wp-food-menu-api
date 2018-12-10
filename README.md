# WP Food Menu API Plugin
- WordPress Plugin
- Getting TLP Food Menu plugin API https://wordpress.org/plugins/tlp-food-menu/

Retrieve food menu through API.


[![Build Status](http://img.shields.io/travis/badges/badgerbadgerbadger.svg?style=flat-square)](https://travis-ci.org/badges/badgerbadgerbadger) [![Coverage Status](http://img.shields.io/coveralls/badges/badgerbadgerbadger.svg?style=flat-square)](https://coveralls.io/r/badges/badgerbadgerbadger)

GET Request Parameters

<table>
  <thead>
    <tr>
      <td>Parameter</td>
      <td>Description</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>post_type</code></td>
        <td>Determine which type of post you want to retrieve to api <code>https://yoursite/wp-json/wp-restful/v1/api?post_type=food-menu</code></td>
        </tr>
      <tr>
        <td><code>perpage</code></td>
        <td>Paginate number of data per page <code>https://yoursite/wp-json/wp-restful/v1/api?post_type=food-menu&perpage=5</code></td>
        </tr>
      <tr>
        <td><code>page</code></td>
        <td>Display data on specific page <code>https://yoursite/wp-json/wp-restful/v1/api?post_type=food-menu&perpage=5&page=1</code></td>
        </tr>
    </tbody>
 </table>
 
 <h4>Response</h4>
 <p>
 <code>data</code> - getting your food menu data.
 </p>
 <table>
<thead>
  <tr>
    <td>meta</td>
    <td>description</td>
  </tr>
  </thead>
  <tbody>
    <tr>
      <td><code>page</code></td>
      <td>display data on specific page.<td>
    </tr>
    <tr>
      <td><code>per_page</code></td>
      <td>number of display data per page.<td>
    </tr>
    <tr>
      <td><code>paginate</code></td>
      <td>total number of page, perform a loop to display your pagination.<td>
    </tr>
    <tr>
      <td><code>total</code></td>
      <td>count all data.<td>
    </tr>
    </tbody>
</table>


Test your API using POSTMAN https://www.getpostman.com/
