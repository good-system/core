# 3. Authentication

Laravel built-in authentication should be set up in a project that utilizes this package.  For example, see [`good-system/organization`](https://github.com/good-system/organization/tree/0.0.3).

## Use Existing Office 365 Account to Authenticate

In addition, this package uses Laravel package has [`good-system/laravel-o365auth`](https://github.com/good-system/laravel-o365auth) as a dependency in `composer.json`.  

The only requirement for using `good-system/laravel-o365auth` is to make a model class `\User` available.  This could be the alias of Laravel built-in `User` model, or the alias of any other Laravel model that has fields `email` and `password` and is authenticatable.

To better communicate authentication errors with users, create a set of generic views by error code.  Usually, if authentication does't pass at Microsoft, the user should not expect to be redirected back to the application.  Therefore, it should be very rare that those OAuth errors are ever seen by a user.
