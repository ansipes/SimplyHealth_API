<p align="center">SimplyHealth API</p>

## About SimplyHealth API

SimplyHealth API is a tool to help a user track Exercises, Foods, and Hydrations. Users can utilize the data to assist them on their path to better health.

## Dependencies

In order to use the SimplyHealth API you need to have the following:

- [Laravel](https://laravel.com/docs)

## Installation

First, clone this repository to your directory of choice.

Next, you need to set up your database. Look in the .env file for specifics, or if you want to change the settings.

To start mysql shell, execute the following commands:

`mysql -uroot -p`

At the prompt, leave the password empty and press return. The mysql shell should be activated.

Now you can set up the database by typing:

`create database simplyhealth`

`use simplyhealth`

`exit`

Finally, run the following command:

`php artisan migrate`

Now all of the tables for the API should be created.

To make your project live, use whichever webserver application you are comfortable with and point it to the project's home directory. By default, the database is running on port 3306. Consider running Apache/Nginx on 8080.

### Congratulations!

The project should be live now. Visit [SimplyHealth API](http://localhost:8080/) and you should see the project landing page.
