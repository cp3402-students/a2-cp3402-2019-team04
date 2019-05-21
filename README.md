# CP3402 Assignment 2 - Team 4
[![Build Status](https://travis-ci.org/cp3402-students/a2-cp3402-2019-team04.svg?branch=master)](https://travis-ci.org/cp3402-students/a2-cp3402-2019-team04)
## Team
- Harmon Singh
- Tariq Tarbuck
- Danny Connolly
- Joshua Gray

## Getting Started
It is quite simple to get started with this project. With a well crafted server workflow, the only thing you need to worry about is getting your local server just the way you want it.
### Prerequisites
The following tools are suggested for creating a local development environment:
- [Vagrant](https://www.vagrantup.com/)
  - We personally prefer [Scotch Box](https://box.scotch.io/) but any vagrant box that work well with WordPress should work
  - Local Install of WordPress
- [Sass](https://sass-lang.com/)
- [Gulp.js](https://gulpjs.com/)
  - For automation of site builds. *Example File* is a good start on creating a gulpfile for your local environment

### Local Environment
For the creation of your local development environment, here are some basic guidelines for setting up your local environment.

1. **Vagrant up -** The biggest step of creating your local environment is setting up your webserver solution. We prefer vagrant with [Scotch Box](https://box.scotch.io/) which simplifies this process. Provided you have vagrant installed, execute the following commands in your flavor of terminal to install and launch scotchbox on your system
    - `git clone https://github.com/scotch-io/scotch-box cc-dev`
    - `cd cc-dev`
    - `vagrant up`

2. **Setup your WordPress database -** In order to set up your WordPress database for this project, execute the following commands
    - `vagrant ssh` to ssh into your vagrant box.
    - `mysql -uroot -proot` to enter the MySQL command line.
    - `CREATE DATABASE coffee-can;` to create the database on your system
    - `quit` to exit out of the MySQL interface.



3. **Install WordPress -** Now that you have the virtual machine running, you can install WordPress on your new local webserver. Execute the following to create the WordPress installation directory on your system
    - `vagrant ssh` to ssh into your running virtual environment.
    - `cd /var/www/public/` to change your working directory to the root directory of the apache webserver.
    - `wget https://wordpress.org/latest.tar.gz` downloads the latest version of WordPress
    - `tar -xzvf latest.tar.gz` extracts the file into the ./wordpress/ directory  
    - `mv wordpress coffee-can` rename the directory to the project name (Not compulsory)
    - Navigate to [http://192.168.33.10/coffee-can/](http://192.168.33.10/coffee-can/). Follow the install procedure for wordpress. When prompted for the database information, given that you have followed the method thus far, enter the following:
        - Database Name: `coffee-can`
        - Username: `root`
        - Password: `root`
        - Database Host: `localhost`
        - Table Prefix: `cc_`

4. **Download the latest version of the site/theme -** If you're here, you have access to the git repository for this project. Installing this into your WordPress installation is quite simplifies
    - `rm -rf wp-content/` removes the existing wp-content folder to be replaced with the git repo.
    - `git clone git@github.com:cp3402-students/a2-cp3402-2019-team04.git wp-content` This assumes you use the ssh setup for github. Replace the link with the https version if required
    - Now check out [http://192.168.33.10/coffee-can/wp-admin/](http://192.168.33.10/coffee-can/wp-admin/) and ensure that you can set your current theme to our coffee-can theme.


### Repository Structure
![](https://joshuag.sgedu.site/Images/workflow.PNG)

Provided you have used git before (if not, check out [this guide](https://guides.github.com/activities/hello-world/)), we have a defined branch structure for development on this theme. Our staging and production branches are a direct link to our staging and production codebase. It is therefore important to make sure what branches you are pushing your commits to and make sure you are following the repository workflow to seamlessly integrate merge requests and continuous integration.

To get started, change your current branch to the development directory using `git checkout --track origin/Development`. We have found you may first need to also execute `git fetch origin`. Once you are tracking the Development repository, you can now create or checkout the feature branch for your current task. The id for your feature branch can be obtained through the [trello](https://trello.com/b/J7tXOscO/cp3402-assignment-two) board. With this you can then execute `git checkout Feature/feature_id` and `git push -u origin/Feature/feature_id` and begin your development. Once you have completed the feature, make sure your travis ci build is successful and then create a pull request from the feature branch into development. An administrator will then handle merge conflicts and travis build errors and integrate your feature branch into the working Development environment.

## Features
### Unit Testing With Travis-CI

The Coffee Can theme is completely ready to be deployed to and tested by Travis-CI for WordPress Coding Standards and best practices. All you need to do to activate the test is sign up and follow the instructions to point Travis-CI towards your repo. Just don't forget to update the status badge to point to your repositories unit test.
[Travis-CI](https://travis-ci.org/)

## Multi-Lingual


## Page Templates


## Theme Options Panel





## Contributing
#### Here are ways to get involved:

1. [Star](https://github.com/cp3402-students/a2-cp3402-2019-team04) the project!
2. Report a bug that you find
3. Share a theme you've built on top of Coffee Can

#### Pull Requests

Pull requests are highly appreciated. Please follow these guidelines:

1. Solve a problem. Features are great, but even better is cleaning-up and fixing issues in the code that you discover
2. Make sure that your code is bug-free and does not introduce new bugs
3. Create a [pull request](https://help.github.com/articles/creating-a-pull-request)
4. Verify that all the Travis-CI build checks have passed


## TODO
 - README
 -git-deploy test
