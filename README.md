# Back-end developer exercise

&copy; 2021 Renderbit Technologies LLP.

## Prerequisites

You should be familiar with PHP 7.4 (or better), Laravel 8, Git and GitHub.

## Getting Started

This tutorial assumes you have a PHP 7.4 (or better) development environment set up on your machine, with the following components at minimum:

1. PHP 7.4 or better
2. Choice of server (Apache/Nginx)
3. Choice of Database (MySQL/MariaDB/PostgreSQL/SQLite)
4. Choice of IDE/Editor

Fork this repository, and clone your fork locally. All submissions have to be made as a pull request against this repository.

## Requirements

You have to design a blogging application.

Any user can sign up and create a blog of their own. When signing up, you have to record the user's full name, unique email address, password (8 characters minimum with 1 special character required) and choice of unique username.

The homepage of the blog can be viewed by anyone without login. The homepage shall show a list of all blog posts by all users, with most recent posts on top. The list of blog posts shall be paginated, with 8 posts per page. On clicking a post, a user can view the entire post content.

Every user shall have his/her blog home page at `<sitename>/<username>`. This page shall show a list of all posts by the particular user, with most recent posts on top. This list of blog posts shall also be paginated, with 8 posts per page. On clicking a post, a user can view the entire post content.

A blog post has the URL `<sitename>/<username>/<post_unique_slug_from_title>`. A blog post has a post title and post content. Anyone can view a blog post without login. However, you need to login to comment on a blog post. Any user can comment on any blog post. However, a user can only delete comments that he has made on other users' blog posts. The author of the blog post can delete any comment on the blog post made by any user. The comments are shown below the blog post content, with most recent comments on top. A form to add a new comment is shown above the comments thread.

Every user can access the admin  panel at `<sitename>/admin`. A user has to login to access the admin panel. The admin panel should show a list of all posts, with an option to edit and delete each post. The admin panel should also have an option to create a new post.

### UI

You are free to use any UI framework or library of your choice. We recommend [Bootstrap](https://getbootstrap.com) or [Tailwind](https://tailwindcss.com) as a good place to get started.

Note that you are not required to build a mobile responsive website, although if you build one, we will be assigning extra credits for that.

You can also use a front-end Javascript framework (such as React or Vue.js) to build your application, if you so prefer.

### Libraries & Frameworks

You are free to use any libraries, frameworks & tools which you think will be useful to build this application. No credits are deducted for use of libraries.

### Extra Credits

- Implement a social login feature which allows users to login and sign up via their Google+/Facebook/Twitter/Github accounts.
- Allow photos to be inserted into blog posts.
- Allow WYSIWYG editing of blog posts with rich formatting support.
- Implement a CAPTCHA for adding comments.
- Implement two-factor authentication for login using SMS for one-time passwords.
- Surprise us. :smiley:
