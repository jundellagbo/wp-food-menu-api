<div class="wpfm">
<div class="row">
    <div class="col main">
        <h3>Integrate Food Menu into your Mobile App for just API :)</h3>
        <p>Test your API with <a style="background: #ff6c37;" class="btn" href="https://www.getpostman.com/" target="_blank">POSTMAN</a> <i>its free!</i></p>
        <hr>
        <input type="text" style="opacity: 0; padding: 0; height: 0; margin: 0;" id="clipboard_hit">
        <h3>Products</h3>
        <div class="box">
            <p>
                <i>Get All your products.</i>
            </p>
            <p>
                <i>api:</i> <code><?php echo get_home_url(); ?>/wp-json/wp-food-menu/v1/products/api</code> <button api="<?php echo get_home_url(); ?>/wp-json/wp-food-menu/v1/products/api" id="copy_clipboard" class="btn-s">copy</button><br>
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
        </div>

        <div class="box">
            <p>
                <i>Get Individual Product.</i>
            </p>
            <p>
                <i>api:</i> <code><?php echo get_home_url(); ?>/wp-json/wp-food-menu/v1/product/api</code> <button api="<?php echo get_home_url(); ?>/wp-json/wp-food-menu/v1/product/api" id="copy_clipboard" class="btn-s">copy</button><br>
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
        </div>

        <hr>
        <h3>Category</h3>

        <div class="box">
            <p>
                <i>Retrieve all product categories.</i>
            </p>
            <p>
                <i>api:</i> <code><?php echo get_home_url(); ?>/wp-json/wp-food-menu/v1/categories/api</code> <button api="<?php echo get_home_url(); ?>/wp-json/wp-food-menu/v1/categories/api" id="copy_clipboard" class="btn-s">copy</button>
            </p>
        </div>

        <div class="box">
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

        </div>
    </div>
    <div class="col output">
        <div class="box" style="background: #53a6e8; border: 0;">
            <h3 class="text-center text-light" style="margin-bottom: 2px;"><i>Thank you</i></h3>
            <p class="text-center text-light"><i>If you are willing to help me to continue to create a free plugins.</i></p>
            <p class="text-center">
                <a href="https://www.paypal.me/jundellagbo" target="_blank">
                    <img src="https://mightywriters.org/wp-content/uploads/2016/12/button-PayPal-donate.png" alt="" style="width: 150px;">
                </a>
            </p>
        </div>

        <div class="box">
            <h3>Suggest a Plugin</h3>
            <p>Share your ideas so we can build it.</p>
            <p>
                send email to: <i>jundellagbo10dd@gmail.com</i>
            </p>
            <p>
                <a href="https://m.me/jundell.ictned.ph" target="_blank" style="background: #0084ff" class="btn"><img style="width: 20px; margin-bottom: -4px;" src="https://www.fetchfunnel.com/wp-content/uploads/2018/09/messenger-icon-white-300x300.png"> Send a Message</a>
            </p>
        </div>

        <div class="box">
            <h4>Want to customize your themes or plugin?</h4>
            <p>I am willing to help for a cup of coffee :).</p>
            <p>
                send email to: <i>jundellagbo10dd@gmail.com</i>
            </p>
            <p>
                <a href="https://m.me/jundell.ictned.ph" target="_blank" style="background: #0084ff" class="btn"><img style="width: 20px; margin-bottom: -4px;" src="https://www.fetchfunnel.com/wp-content/uploads/2018/09/messenger-icon-white-300x300.png"> Send a Message</a>
            </p>
        </div>

    </div>
</div>
</div>