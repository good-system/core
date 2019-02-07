# 3. Authentication

## Use Existing Office 365 Account to Authenticate

Office 365 online is provided to 501(c)(3) organizations for free, usually with more than enough licenses to use.  In the case Office 365 is in use, it makes sense to integrate.  For the very least, it provides a convenient and consistent way of doing authentication across different applications.   

This package depends on [`good-system/laravel-o365auth`](https://github.com/good-system/laravel-o365auth) to do such authentication.   

In order for this to work, Laravel built-in authentication needs to be set up at application level.  For example, see [`good-system/organization`](https://github.com/good-system/organization/tree/0.0.3).   

The only other requirement for this to work is to make a model class `\O365User` available.  For that purpose, model `GoodSystem\Models\O365User` is created, and its alias `\O365User` is created at booting time.

To better communicate authentication errors with users, create a set of generic views by error code.  Usually, if authentication does't pass at Microsoft, the user should not expect to be redirected back to the application.  Therefore, it should be very rare that those OAuth errors are ever seen by a user.
