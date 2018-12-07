# Wp-RESTful-API

Retrieve your posts data using API Key.

[![Build Status](http://img.shields.io/travis/badges/badgerbadgerbadger.svg?style=flat-square)](https://travis-ci.org/badges/badgerbadgerbadger) [![Dependency Status](http://img.shields.io/gemnasium/badges/badgerbadgerbadger.svg?style=flat-square)](https://gemnasium.com/badges/badgerbadgerbadger) [![Coverage Status](http://img.shields.io/coveralls/badges/badgerbadgerbadger.svg?style=flat-square)](https://coveralls.io/r/badges/badgerbadgerbadger) [![Code Climate](http://img.shields.io/codeclimate/github/badges/badgerbadgerbadger.svg?style=flat-square)](https://codeclimate.com/github/badges/badgerbadgerbadger) [![Github Issues](http://githubbadges.herokuapp.com/badges/badgerbadgerbadger/issues.svg?style=flat-square)](https://github.com/badges/badgerbadgerbadger/issues) [![Pending Pull-Requests](http://githubbadges.herokuapp.com/badges/badgerbadgerbadger/pulls.svg?style=flat-square)](https://github.com/badges/badgerbadgerbadger/pulls) [![Gem Version](http://img.shields.io/gem/v/badgerbadgerbadger.svg?style=flat-square)](https://rubygems.org/gems/badgerbadgerbadger) [![License](http://img.shields.io/:license-mit-blue.svg?style=flat-square)](http://badges.mit-license.org) [![Badges](http://img.shields.io/:badges-9/9-ff6799.svg?style=flat-square)](https://github.com/badges/badgerbadgerbadger)

<h4>Request GET parameters.</h4>
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
/* Hello World */
</pre>

<h4 style="color: yellow">Vue JS</h4>
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
            this.wp-restful = response.data.data;
        })
        .catch((error) => {
            console.log("HTTP Request Error : " + error);
        })
    }
}
</script>
</pre>

<h4 style="color: yellow">jQuery</h4>
<pre>
/* Hello World */
</pre>

<h4 style="color: yellow">React JS</h4>
<pre>
/* Hello World */
</pre>
