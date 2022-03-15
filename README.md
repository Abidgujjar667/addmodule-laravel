Add these lines in Laravel root folder composer

"autoload": {
        "psr-4": {
            "MyVendor\\Contactform\\": "packages/MyVendor/contactform/src"
        }
    },
    
    
    "autoload-dev": {
        "psr-4": {
            "MyVendor\\Contactform\\": "packages/MyVendor/contactform/src"
        }
    },
