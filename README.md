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
