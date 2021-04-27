# Buto-Plugin-ApiAccount


## Settings
Example of setup.
```
http://localhost/api_v2/account_sign_check?output=yml
http://localhost/api_v2/account_sign_in?output=yml&email=_my_email_or_username_&password=_my password_
http://localhost/api_v2/account_sign_out?output=yml
```

Setup using plugin api/simple_one.
```
plugin_modules:
  api_v2:
    plugin: api/simple_one
    settings:
      methods:
        account_sign_check:
          plugin: api/account
          name: sign_check
        account_sign_in:
          plugin: api/account
          name: sign_in
          params:
            -
              name: user
              description: 'User name or email.'
            -
              name: password
              description: 'Password.'
          settings:
            key: _some_key_
            allow:
              signin: true
              signin_method: username
              registration: false
              change_email: false
              change_password: true
              change_username: true
              remember: true
            mysql: 'yml:/../buto_data/mysql.yml'
            phpmailer: 'yml:/../buto_data/phpmailer.yml'
        account_sign_out:
          plugin: api/account
          name: sign_out
```
