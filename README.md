# WP Food Menu API Plugin
- Getting API of your products and categories.
- Getting TLP Food Menu plugin API https://wordpress.org/plugins/tlp-food-menu/
- Test your API using <a href="https://www.getpostman.com/" target="_blank">POSTMAN</a>

### Integrate Food Menu into your Mobile App for just API :)


[![Build Status](http://img.shields.io/travis/badges/badgerbadgerbadger.svg?style=flat-square)](https://wordpress.org) [![Coverage Status](http://img.shields.io/coveralls/badges/badgerbadgerbadger.svg?style=flat-square)](https://coveralls.io/r/badges/badgerbadgerbadger) [![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.me/jundellagbo)

### Products
Get All your products.

API ``` https://yoursite/wp-json/wp-food-menu/v1/products/api```

Request ```GET```

| Params        | Description                | Default Value           |          |
| ------------- |:---------------------------|:------------------------| --------:|
| ```page```    | display product by page.   | 1                       | optional |
| ```perpage``` | paginate list of products. | total number of product | optional |

---
Get Individual Product.

API ```https://yoursite/wp-json/wp-food-menu/v1/product/api```

Request ```GET```

| Params        | Description                                                                                        |          |
| ------------- |:---------------------------------------------------------------------------------------------------|----------|
| ```id```      | get the selected product by id, get all your products first then determine which id should be use. | required |

---

### Category

Retrieve all product categories.

API ```https://yoursite/wp-json/wp-food-menu/v1/categories/api```

Request ```GET```

---

Retrieve Individual Category including Products related to the selected category.

API ```https://yoursite/wp-json/wp-food-menu/v1/product/category/api```

Request ```GET```

| Params        | Description                                                                    | Default Value           |          |
| ------------- |:-------------------------------------------------------------------------------|:------------------------| --------:|
| ```cat_id```  | category id, select all category first then choose which id to be use.         | no default value        | required |
| ```page```    | use to display products by page under this category.                           | 1                       | optional |
| ```perpage``` | paginate products under this category.                                         | total number of product | optional |

---

### Donations

If you are willing to help me to continue to create a free plugins., you can give me a cup of coffee :) 

[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.me/jundellagbo)

---

### Send Feedback, Suggesstions or Questions

- Share your ideas so we can build it.
- Want to customize your themes or plugin?
- I am willing to help for a cup of coffee :)

[![messenger](https://img.shields.io/badge/Send%20to-Messenger-blue.svg)](https://m.me/jundell.ictned.ph)
