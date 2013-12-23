CS15 Project 4.

Small production-ready (if change the domain to a short one) site, which 
shortens your URL up to 7 characters and redirects you from a shorten url to 
the mapped webpage when requested with get method.

Built using Laravel framework, deployed to fortrabbit.

Goals (accomplished):
1. explore third-party framework (decided to use Laravel 4, since it's on the
   rise right now)
2. explore 'convention over configuration' approach, in particular migrations
   to interact with the database, Eloquent to build SQL quiries, RESTful
   principles, Composer package, Blade templating system
3. get comfortable with PAAS deployment (first tried Heroku and PagodaBox, but
   php setup in both of them is pretty complicated or unstable)
4. javascript is minimal, since such app doesn't really require js. Validation
   is done on the server side using Laravel Validator class. Jquery plugin is
   used to copy the result url into clipboard
5. sql dump is stored in assets folder, it contains queries for two tables:
   laravel's migrations and the actual table with data (urls).

The actual files are inside the app folder and public files are in
public/assets
