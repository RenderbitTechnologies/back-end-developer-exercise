# Back-end developer exercise

I am Joy Dey.

## Use
I did use

1. PHP 
2. Apache server
3. MySQL Database
4. VS CODE


### Extra

- social login feature which allows users to login and sign up via their Google+/Facebook/Twitter/Github accounts.
- Allow photos to be inserted into blog posts.
- Allow ckeditor editing of blog posts with rich formatting support.


### Link

- Home page link:  ```<sitename>```
- About page link: ```<sitename>/<about>```
- Admin page link:     ```<sitename>/<admin>```
- One User All Post Link: ```<sitename>/<profile>/<username>```
- One Single Post Link: ```<sitename>/<profile>/<username>/<Post_id>```
And I use Link verification.
  
  
  
  
### Configuration for social login

For social login feature, we must configure .env
[Socialite](https://laravel.com/docs/6.x/socialite)


```
facebook_CLIENT_ID = 
facebook_CLIENT_SECRET = 

google_CLIENT_ID = 
google_CLIENT_SECRET = 


twitter_CLIENT_ID = 
twitter_CLIENT_SECRET = 

```


### Configuration for CKeditor [CKeditor](https://github.com/UniSharp/laravel-ckeditor)

```
composer require unisharp/laravel-ckeditor
```


### Configuration for Storage

I use Storage link command for Storage sortcut

```
php artisan storage:link

```


### Configuration for Database

```
php artisan migrate

```
