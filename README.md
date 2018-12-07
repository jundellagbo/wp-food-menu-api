# Wp-RESTful-API

Retrieve your posts data using API Key.

<h4>Request GET parameters.</h4>
<table>
  <thead>
    <tr>
      <td>Parameters</td>
      <td>Description</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>post_type</code></td>
        <td>determine which type of post you want to retrieve to api <code>https://yoursite/wp-json/wp-restful/v1/api?post_type=mypost</code></td>
        </tr>
      <tr>
       <td><code>perpage</code></td>
       <td>display data per page (ex: display 15 data per page.) <code>https://yoursite/wp-json/wp-restful/v1/api?post_type=mypost&perpage=15&page=1</code></td>
      </tr>
    <tr>
      <td><code>page</code></td>
      <td>paginate data per page <code>https://yoursite/wp-json/wp-restful/v1/api?post_type=mypost&page=1</code></td>
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
/* You can use axios for vue js */
import axios from 'axios'
export default {
  data: function() {
    return {
      loading: false,
      wp_restful: []
    }
  },
  created: function() {
    axios.get('https://yoursite/wp-json/wp-restful/v1/api?post_type=mypost')
    .then((response) => {
      console.log(response);
    })
    .catch((error) => {
      console.log("HTTP Request Error : " + error);
    })
  }
}
</pre>

<h4 style="color: yellow">jQuery</h4>
<pre>
/* Hello World */
</pre>

<h4 style="color: yellow">React JS</h4>
<pre>
/* Hello World */
</pre>
