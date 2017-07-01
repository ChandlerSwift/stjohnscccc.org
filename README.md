# St. John's Website

### User Management
`php artisan tinker`

```
$user = new \App\User();
$user->name = "First Last";
$user->email = "user@example.com";
$user->password = Hash::make('password');
$user->save();
```

### TODO:
 * Password Changing
 * Update contact form and email
 * HTML5 Refresh?
