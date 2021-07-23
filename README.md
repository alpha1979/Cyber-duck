## <h1>Laravel Basic Mini CRM </h1>
<p>This is Test Project mini CRM developed with Laravel 8, Bootstrap , AdminLTE-3.1.0 with features</p>

<ul>
<li>
Admin Dashboard using hcps://adminlte.io/ as a framework for the application
</li>
<li>
Basic Laravel Auth username admin@admin.com and normal user user@gmail.com password for both "password"
</li>
<li>
CRUD functionality (Create / Read / Update / Delete) for two menu items: Companies and 
Employees
</li>
<li>database migraXons to create those schemas above</li>
<li>Store companies’ logos in storage/app/public folder and make them accessible from public</li>
<li>Use basic Laravel resource controllers with default methods – index, create, store etc.</li>
<li>Use Laravel’s paginaXon for showing Companies/Employees list, 10 entries per page</li>
<li>Carried Out Laravel Feature Test to check if the normal user can login , if normal user can try to login to admin dashboard, if the admin user can login to dashboard</li>
</ul>

## To use this App
<ul>
    <li>
        Clone the product using https://github.com/alpha1979/Cyber-duck.git
    </li>
    <li>
        copy the env.example to .env
    </li>
    <li>
        create the database cyber_duck , user :- root password :- none
    </li>
    <li>
    use cli to install composer dependency 
    - composer install
    </li>
    <li>
    cli command to generate key
    - php artisan key:generate
    </li>
     <li>
    you need to migrate the db
    - php artisan migrate
    </li>
     <li>
    use cli to install composer dependency 
    - composer install
    </li> 
    <li>
    php artisan db:seed
    </li>
    <li>
      Ready to go :- php artisan serve
    </li>
    <li>
    navigation:-
    - Views: 
    - Welcome page http://localhost/
    - click Dashboard for Admin Pannel (need to authenticate using admin credentials)
    - login to Normal user (need to login using user@gmail.com )

    </li>


</ul>
