# Wp-RESTful-API

Retrieve your posts data using API Key.

[![Build Status](http://img.shields.io/travis/badges/badgerbadgerbadger.svg?style=flat-square)](https://travis-ci.org/badges/badgerbadgerbadger) [![Coverage Status](http://img.shields.io/coveralls/badges/badgerbadgerbadger.svg?style=flat-square)](https://coveralls.io/r/badges/badgerbadgerbadger) [![Gem Version](http://img.shields.io/gem/v/badgerbadgerbadger.svg?style=flat-square)](https://rubygems.org/gems/badgerbadgerbadger)

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
        <td>determine which type of post you want to retrieve to api <code>https://yoursite/wp-json/wp-restful/v1/api?post_type=mypost</code></td>
        </tr>
    </tbody>
 </table>


Test your API using POSTMAN https://www.getpostman.com/

Sample code for fetching your data to the front end.

<h4 style="color: yellow">Javascript</h4>
<pre>
Coming Soon.
</pre>
<hr>
<h4>Vue JS</h4>
<pre>
<script>
/* You can use axios for vue js */
import axios from 'axios'
export default {
    data: function() {
        return {
            wp_restful: []
        }
    },
    created: function() {
        axios.get('http://localhost/wordpress/wp-json/wp-restful/v1/api?post_type=food-menu',
        {
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then((response) => {
        // set your data here
            this.wp_restful = response.data.data;
        })
        .catch((error) => {
            console.log("HTTP Request Error : " + error);
        })
    }
}
</script>
</pre>
<hr>
<h4 style="color: yellow">jQuery</h4>
<pre>
Coming Soon.
</pre>
<hr>
<h4 style="color: yellow">React JS</h4>
<pre>
Coming Soon.
</pre>
